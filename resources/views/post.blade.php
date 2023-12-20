@extends('master')

@section('headerIntro')

@endsection

@section('main')

    <div class=" col-lg-6 text-center" style="margin: 0 auto" >
        <h2>{{ $post->title }}</h2>
        <a href="#!">
            <img class="card-img-top" src="{{$post->thumb}}" alt="..."/>
        </a>
        <div class="card-body mb-5">
            <div class="small text-muted">{{$post->created_at}}</div>

            <p class="card-text">{{$post->content}}</p>

            <hr>
        </div>
    </div>

@endsection

