@extends('master')

@section('headerIntro')
    <div class="text-center my-5">
        <h1 class="fw-bolder mb-5">{{$post->title}}</h1>
        <p class="lead mb-0 text-black-50">Author: <strong>{{$post->user->FullName}}</strong></p>


    </div>
@endsection

@section('main')
    <img class="card-img-top rounded" src="{{$post->thumb}}" alt="..."/>
    <div class="card-body mb-5">
        <div class="small text-muted">{{$post->created_at}}</div>
        <h2 class="card-title">{{$post->title}}</h2>
        <p class="card-text">{{$post->content}}</p>
        <p>Author: <strong>{{$post->user->FullName}}</strong></p>
        <hr>
    </div>
    <hr>



    <ul class="border border-1 p-2 rounded">
        <h3>💬 Comentários </h3>
        <form name="" method="post">
            @csrf
            <textarea name="comment"  cols="145" rows="5" class="rounded"></textarea><br>
            <button type="submit" class="btn-primary rounded">Comentar</button>
        </form>
        @forelse ($post->comments as $comment)
            <li class="list-unstyled mt-3">➡️ {{ $comment->comment }}</li>
            <hr>
        @empty
            <li>Nenhum comentário.</li>
        @endforelse
    </ul>
@endsection

