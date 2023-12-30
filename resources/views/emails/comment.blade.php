@component('mail::message')
    Olá, <b>{{ $post->user->fullName }}</b> o usuário <b> {{  $user->fullName }}</b> comentou em seu post
    <b>{{$post->title}} </b>.


    @component('mail::button', ['url' =>$url])
        Visitar post:
    @endcomponent

@endcomponent
