<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteModel;
use Validator;


class ContatoController extends Controller
{   
    public function contato(Request $request) {
        return view('site.contato', ['titulo' => "Fale conosco!"]);
    }

    public function contatos(string $id, SiteModel $model) {
        if(!$model->find($id)) {
            return redirect('/');
        }
        return SiteModel::find($id);
    }

    public function salvar(Request $request, SiteModel $model){

        $validator = $request->validate([
            'nome' => 'required|min:3|max:40|unique:site_models',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);
        
        $model->create($validator); // ou passar o $request->all() para pegar os dados de solicitação, dentro do create()
        return redirect('/');
    }   
}
