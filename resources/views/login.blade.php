@extends ('master')

@section('header-intro')
    <h2>Login</h2>
    <p>Entre agora!</p>
@endsection

@section('main')

    <div class="text-center ">
        @if(session()->has('error_login'))
            {{session()->get('error_login')}}
        @endif

        @if(auth()->guest())
            <form action="{{ route('login') }}" method="post">
                @csrf
                {{ $errors->first('email') }}
                <input type="text" name="email" placeholder="Email" value="jewel37@example.com">
                {{ $errors->first('password') }}
                <input type="text" name="password" placeholder="Senha">
                <button type="submit">Entrar</button>
            </form>
        @else
            <h2>Você já está logada, {{auth()->user()->fullName}}! 😁</h2>
        @endif

    </div>
@endsection
