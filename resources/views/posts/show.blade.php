@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title }}</div>
                    <div class="panel-body">
                        {{$post->content}}

                        <br>
                        <br>
                        <strong>Auteur : </strong>{{ $post->user->name }}
                        <br>
                        <hr>

                        @if(Auth::check() && Auth::user()->isAdmin || Auth::check() && Auth::user()->id == $post['user_id'] )
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-group-justified btn-info">Modifier</a>

                            <br>

                            {!! Form::model(
                           $post,
                           array(
                           'route' => array('post.destroy', $post->id),
                           'method' => 'DELETE'))
                           !!}

                            {!! Form::submit('Supprimer',
                            ['class' => 'btn btn-group-justified btn-danger']) !!}

                            {!! Form::close() !!}
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-8 col-md-3">
                <a href="{{ route('post.index') }}">Retour à la liste des articles</a>
            </div>
        </div>
    </div>
@endsection