@extends('master')
@section('headerIntro')
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Seja bem-vindo ao meu blog. 🙋🏽‍♂️</h1>
            <p class="lead mb-0">Meu nome é John. Aqui você terá dicas, tutoriais e notícias do mundo Tech. </p>
        </div>
    </div>
@endsection
@section('main')
    <div class="row">
        <div class="col-lg-8">
            @forelse($posts as $post)
                <a href="#!">
                    <img class="card-img-top" src="{{$post->thumb}}" alt="..."/>
                </a>
                <div class="card-body mb-5">
                    <div class="small text-muted">{{$post->created_at}}</div>
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{Str::limit($post->content, 100, '...')}}</p>
                    <p>Author: <strong>{{$post->user->FullName}}</strong></p>
                    <p>💬 Comentários - <b>{{$post->comments->count()}}</b></p>
                    <a class="btn btn-primary" href="{{route('post', $post->slug)}}">Ler mais →</a>
                    <hr>
                </div>
            @empty
                <h2>Nenhum post encontrado.😕</h2>
            @endforelse
        </div>


        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Pesquisar</div>
                <div class="card-body">
                    <form class="input-group" action="{{ route('home') }}" method="get">
                        <input class="form-control" type="text" placeholder="Busque aqui o seu artigo..."
                               value="{{ request()->input('s') ?? '' }}" name="s"/>
                        <button class="btn btn-primary" type="submit">Buscar 🔎</button>
                    </form>
                </div>
            </div>

            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Novidade da semana! ⭐</div>
                <div class="card-body">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>

        </div>
        @if(request()->input('s'))
            {{ $posts->appends(['s' => request()->input('s')])->links() }}
        @endif
    </div>
@endsection

