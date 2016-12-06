@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des articles que j'ai publiés</div>

                <div class="panel-body">
                    @foreach($posts as $post)
                        <h2>
                            <a href="{{ route('post.show', $post->id) }}">
                                {{ $post->title }}
                            </a>
                        </h2>

                        <p> {{ $post->content}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des évènements que j'ai créés</div>

                <div class="panel-body">
                    @foreach($events as $event)
                        <h2>
                            <a href="{{ route('event.show', $event->id) }}">
                                {{ $event->title }}
                            </a>
                        </h2>

                        <p> {{ $event->content}}</p>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
