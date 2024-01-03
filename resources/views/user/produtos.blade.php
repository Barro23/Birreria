//aqui será a lista de produtos para o usuarios ver@extends('templates.template')
@section('content')

<!--Home-->
<!--Banner-->
<section class="hero" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 m-auto">
                <div class="hero-text text-light">
                    <h1 class="text-reset" >Produtos</h1>
                    
                    <div class="nav-item d-flex align-items-center justify-content-center">
                        <h6><a class="nav-link btn text-light pt-2 pb-2 ps-4 pe-4 mt-1 rounded-pill" href="{{ url('/cadastrar') }}" id="botao_cadastrar">Cadastre-se</a></h6>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--Imagem do banner aqui-->
    <div class="video-wrap">
        <!--<video autoplay="" loop="" muted="" class="custom-video" poster=""></video>-->
        <img src="{{asset('images/banner_ideia.gif')}}" alt="" class="custom-video">
    </div>
</section>
 
<style>
    #botao_cadastrar{
        background: #0693e3 !important;
    }
</style>
@endsection