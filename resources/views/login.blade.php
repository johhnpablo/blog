@extends('master')

@section('headerIntro')

@endsection

@section('main')
    @if(session()->has('error_login'))
        {{session()->get('error_login')}}
    @endif
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <div id="login" class="container">
        <div class="row-fluid">
            <div class="span12">
                <div class="login well well-small">
                    <div class="center">
                        <img src="https://i.pinimg.com/originals/a9/1d/2d/a91d2de2883fefc1c8b8bde5fe93defd.jpg"
                             alt="logo">
                    </div>
                    <form action="{{route('login')}}" style="" class="login-form" id="UserLoginForm" method="post" accept-charset="utf-8">
                        @csrf

                        <div class="control-group m-auto">
                            <div class="input-prepend">
                                <input name="email" required="required" placeholder="E-mail"
                                       maxlength="255" type="text" id="email" class="p-3">
                            </div>
                        </div>


                        <div class="control-group">
                            <div class="input-prepend">
                                <input name="passowrd" required="required" placeholder="Senha"
                                       type="password" id="password" class="p-3">
                            </div>
                        </div>

                        <div class="control-group">
                            <input class="btn btn-primary btn-large btn-block" type="submit" value="Entrar">
                        </div>
                    </form>
                </div><!--/.login-->
            </div><!--/.span12-->
        </div><!--/.row-fluid-->
    </div><!--/.container-->
@endsection

