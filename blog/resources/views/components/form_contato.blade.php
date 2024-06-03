<?php
    $motivos_contato = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
            '4' => 'Sugestão'
    ];
?>

<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    @if ($errors)
        <p>{{$errors->first()}}</p>
    @endif

    <input id="title" class="{{$style}}" name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome">
    <br>
    <input class="{{$style}}" name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone">
    <br>
    <input class="{{$style}}" name="email" value="{{ old('email') }}" type="text" placeholder="E-mail">
    <br>
    <select class="{{$style}}" name="motivo_contato">

        @foreach ($motivos_contato as $key => $motivo )
            <option value="{{$key}}">{{$motivo}}</option>
        @endforeach
        
    </select>
    <br>
    <label for="mensagem">Fale o que quiser</label>
    <textarea class="{{$style}}" name="mensagem"></textarea>
    <br>
    <br>
    <button type="submit">ENVIAR</button>
</form>
