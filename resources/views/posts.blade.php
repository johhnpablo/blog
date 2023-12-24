@extends('master')
@section('headerIntro')
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Veja todos os nossos posts.🎈</h1>
            <p class="lead mb-0">Contribua para o nosso blog e toda comunidade dev compartilhando seu conhecimento.
                🧑🏽‍💻</p>
            <p class="lead mb-0">Posts - {{$posts->total()}}</p>
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
                <h2>Nenhum post encontrado.😕/h2>
            @endforelse
        </div>


        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..."
                               aria-label="Enter search term..." aria-describedby="button-search"/>
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Web Design</a></li>
                                <li><a href="#!">HTML</a></li>
                                <li><a href="#!">Freebies</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">JavaScript</a></li>
                                <li><a href="#!">CSS</a></li>
                                <li><a href="#!">Tutorials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use,
                    and feature the Bootstrap 5 card component!
                </div>
            </div>

        </div>
        <!-- Pagination-->
        {{$posts->links()}}
    </div>
@endsection

