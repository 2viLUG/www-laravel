@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($articles as $article)
                    <article class="panel panel-default">
                        <div class="entry-title panel-heading">
                            <h3>
                                <a href="{{ $article->uri }}">
                                    {{$article->title}}
                                </a>
                            </h3>
                        </div>
                        <div class="entry-content panel-body">{!! $article->body !!}</div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@endsection