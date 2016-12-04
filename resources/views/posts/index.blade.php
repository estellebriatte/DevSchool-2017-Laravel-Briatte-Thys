@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des évènements</div>
                    <div class="panel-body">
                        Afficher la liste

                        @foreach($list as $post)
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
        </div>
    </div>
@endsection