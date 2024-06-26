@extends('site.layouts.basico')
<?php
    $motivos_contato = [
        '1' => 'Dúvida',
        '2' => 'Elogio',
        '3' => 'Reclamação'
    ];
 ?>
@section('titulo', $titulo)
@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>
    <div class="informacao-pagina">
        <div class="contato-principal">
            <x-form_contato style="borda-preta" nome="nome" telefone="telefone" email="email" :motivos_contato="$motivos_contato" mensagem="mensagem"/>
            
        </div>
    </div>
</div>
<div class="rodape">
    <div class="redes-sociais">
        <h2>Redes sociais</h2>
        <img src="{{ asset('img/facebook.png') }}">
        <img src="{{ asset('img/linkedin.png') }}">
        <img src="{{ asset('img/youtube.png') }}">
    </div>
    <div class="area-contato">
        <h2>Contato</h2>
        <span>(11) 3333-4444</span>
        <br>
        <span>supergestao@dominio.com.br</span>
    </div>
    <div class="localizacao">
        <h2>Localização</h2>
        <img src="{{ asset('img/mapa.png') }}">
    </div>
</div>
@endsection