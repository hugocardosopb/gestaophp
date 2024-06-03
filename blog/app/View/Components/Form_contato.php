<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form_contato extends Component
{
    /**
     * Create a new component instance.
     */
     public $style;
     public $nome;
     public $telefone;
     public $email;
     public $motivos_contato;
     public $mensagem;

    public function __construct($style, $nome, $telefone, $email, $motivos_contato, $mensagem)
    {   $this->style = $style;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->motivos_contato = $motivos_contato;
        $this->mensagem = $mensagem;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form_contato');
    }
}
