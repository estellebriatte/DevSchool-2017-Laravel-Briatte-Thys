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

                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info">Modifier</a>

                        <br>

                        {!! Form::model(
                       $post,
                       array(
                       'route' => array('post.destroy', $post->id),
                       'method' => 'DELETE'))
                       !!}

                        {!! Form::submit('Supprimer',
                        ['class' => 'btn btn-danger']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection