<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-bg text-light" >
    <div class="container ">
        <!--Logo e Nome -->
        <a href="{{ url('/') }}" class="onavbar-brand mx-auto mx-lg-0 d-flex align-items-center">
            <img src="{{asset('')}}" class="logo" alt="">
            <span class="text-light">IMg Birreria</span>
        </a>
        <!--Ícone toggle, quando a ospções estiverem escondidas -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Opções e configuração do offcanvas-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ">
                <ul class="navbar-nav d-flex justify-content-end flex-grow-1 pe-5">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll"  href="{{ url('/sobre') }}">Sobre</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link click-scroll"  href="{{ url('/local') }}">Local</a>
                </li>

                <!--Configurando qual opção de botão vai estar sendo mostrada-->
                @if(isset($_COOKIE['usuario']) && isset($_COOKIE['nome_usuario']))
                    <li class="nav-item">
                        <a class="nav-link click-scroll"  href="{{ url('/eventos') }}">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll"  href="{{ url('/meus-eventos') }}">Meus Eventos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll"  href="{{ url('/meu-perfil') }}">Meu perfil</a>
                    </li>

                    <!--BOTAO TELA MAIOR-->
                    <li class="nav-item d-none d-lg-flex align-items-center justify-content-center">
                        <a class="nav-link custom-btn btn btn-danger" href="{{ url('/usuarios/sair') }}">Sair</a>
                    </li>
                    <!--BOTAO TELA MENOR-->
                    <li class="nav-item d-lg-none">
                        <a class="btn btn-danger" href="{{ url('/usuarios/sair') }}" id="botao_tela_pequena">Sair</a>
                    </li>

                @else
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{ url('/programacao') }}">Eventos</a>
                    </li>
                    <!--BOTAO TELA MAIOR-->
                    <li class="nav-item d-none d-lg-flex align-items-center justify-content-center">
                        <a class="nav-link custom-btn btn btn-danger" href="{{ url('/login') }}">Entrar</a>
                    </li>
                    <!--BOTAO TELA MENOR-->
                    <li class="nav-item d-lg-none">
                        <a class="btn btn-primary" href="{{ url('/login') }}" id="botao_tela_pequena">Entrar</a>
                    </li>
                @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
<style>
    #botao_tela_pequena{
        width: max-content;
        display:flex;
        padding: 5px 6px;
        border-radius: 5px;
        transform: translate(-5px, 20px);
        font-weight: bold;
    }
</style>