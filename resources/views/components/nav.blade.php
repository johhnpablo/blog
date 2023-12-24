<div class="container text-white">
    <a class="navbar-brand" href="{{route('home')}}">🌵 Nordeste.Tech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto  mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link " href="{{route('home')}}">Início</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route ('posts')}}">Posts</a></li>
            <li class="nav-item"><a class="nav-link " href="#!">Contato</a></li>
            @if(auth()->guest())
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('login')}}">Entrar</a></li>
            @else

            @endif

        </ul>
    </div>
    Bem vindo(a)
    @if(auth()->guest())
        ➡️ Visitante
    @else
        ➡️ {{ auth()->user()->fullName . " | " . " "}} <a href="{{ route('logout') }}" class="text-white-50"> Logout</a>
    @endif
</div>


