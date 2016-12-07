@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editer des articles</div>

                    <div class="panel-body">

                        {!! Form::model(
                        $post,
                        array(
                        'route' => array('post.update', $post->id),
                        'method' => 'PUT'))
                        !!}

                        {!! Form::label('title', 'Titre') !!}

                        {!! Form::text('title', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Titre']) !!}

                        {!! Form::label('content', 'Contenu') !!}

                        {!! Form::textarea('content', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Contenu']) !!}

                        {!! Form::submit('Publier',
                        ['class' => 'btn btn-info']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-8 col-md-3">
                <a href="{{ route('post.index') }}">Retour</a>
            </div>
        </div>
    </div>
@endsection