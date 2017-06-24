@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <article class="panel panel-default">
                    <h1 class="entry-title panel-heading">{{$article->title}}</h1>
                    <div class="entry-content panel-body">{!! $article->body !!}</div>
                </article>
            </div>
        </div>
    </div>
@endsection