@extends('layouts.app')

@section('content')
<div class="container">
<x-sidebar/>
    <?php
    //include 'inc/menu-esq.inc.php';
    ?>
    <div class="main">
        <img src="../../img/banner1.png" alt="banner de promoções">
        <div class="promocoes">
            @foreach ($produtos as $produto)
            <div>
                <img src="../../imagens-produtos/{{ $produto->imagem }}" alt="Imagem do meu produto">
                <p>{{ $produto->nome }}</p>
                <h3>Oferta</h3>
                <a href="../../produto/{{ $produto->id }}" class="val">{{ $produto->preco }}</a>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
