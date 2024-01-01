@extends ('master')

@section('header-intro')
    <h2>Login</h2>
    <p>Entre agora!</p>
@endsection

@section('main')
    <div class="container">
        @if(session()->has('error_login'))
            {{session()->get('error_login')}}
        @endif

        @if(auth()->guest())
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="text-center text-dark mt-5">Login</h2>
                    <div class="text-center mb-5 text-dark">Faça seu login abaixo. 🚀</div>
                    <div class="card my-5">

                        <form class="card-body cardbody-color p-lg-5">
                            @csrf
                            <div class="text-center">
                                <img src="{{URL::asset('images/avatar.png')}}"
                                     class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                                     width="350px" alt="profile">
                            </div>

                            <div class="mb-3">
                                {{ $errors->first('email') }}
                                <input type="text" class="form-control"  aria-describedby="emailHelp"
                                       placeholder="Email">
                            </div>
                            <div class="mb-3">
                                {{ $errors->first('password') }}
                                <input type="password" class="form-control"  placeholder="Senha">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-5 mb-5 w-100 fw-semibold ">Entrar</button>
                            </div>
                            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Ainda não é um membro? <a href="#" class="text-dark fw-bold"> Crie sua conta agora</a>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        @else
            <h2>Você já está logada, {{auth()->user()->fullName}}! 😁</h2>
        @endif
    </div>

@endsection
