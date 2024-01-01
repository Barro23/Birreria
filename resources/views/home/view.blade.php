@extends('templates.template')
@section('content')

<!--Home-->
<!--Banner-->
<section class="hero" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 m-auto">
                <div class="hero-text text-light">
                    <h1 class="text-reset" >Birreria</h1>
                    
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

<!--Highlight-->
<section class="highlight">
    <div class="container">
        <div class="row justify-content-md-center">
            <!--Primeira coluna-->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="highlight-thumb">
                    <img src="{{asset('images/hackathon.png')}}" class="highlight-image img-fluid" alt="">
                    <!--Ícone quando o mouse está em cima da imagem-->
                    <div class="highlight-info">
                        <h6 class="highlight-title">HACKATHON, 2023</h6>
                        <a href="https://hackathonsecitecifg.netlify.app" class="bi-plus-circle highlight-icon" target="_blank"></a>
                    </div>
                </div>
            </div>
            <!--Segunda coluna-->
            <div class="col-lg-4 col-md-6 col-12">
                <div class="highlight-thumb">
                    <img src="{{asset('images/ifg_secitec_2023.png')}}" class="highlight-image img-fluid" alt="">
                    <!--Ícone quando o mouse está em cima da imagem-->
                    <div class="highlight-info">
                        <h6 class="highlight-title">SECITEC, 2023</h6>
                        <a href="https://www.ifg.edu.br/component/content/article/290-ifg/campus/formosa/eventos-campus-formosa/proximos-eventos-campus-formosa/36095-xiv-secitec-23-a-26-10" class="bi-plus-circle highlight-icon" target="_blank"></a>
                    </div>
                </div>
            </div>
            <!--Terceira coluna-->
            <div class="col-lg-4 col-md-6 col-12 self-align-center">
                <div class="highlight-thumb">
                    <img src="{{asset('images/ifg_instagram.png')}}" class="highlight-image img-fluid" alt="">
                    <!--Ícone quando o mouse está em cima da imagem-->
                    <div class="highlight-info">
                        <h6 class="highlight-title">INSTAGRAM IFG-FORMOSA</h6>
                        <a href="https://www.instagram.com/ifgformosa/" class="bi-plus-circle highlight-icon" target="_blank"></a>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</section> 
<style>
    #botao_cadastrar{
        background: #0693e3 !important;
    }
</style>
@endsection