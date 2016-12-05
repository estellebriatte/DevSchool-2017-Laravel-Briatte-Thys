@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Publier des articles</div>

                    <div class="panel-body">

                        {!! Form::open(array(
                            'route' => 'post.store',
                            'method' => 'POST')) !!}

                        {!! Form::label('title', 'Titre') !!}

                        {!! Form::text('title', null,
                       ['class' => 'form-control',
                       'placeholder' => 'Titre']) !!}

                        {!! Form::label('content', 'Contenu') !!}

                        {!! Form::textarea('content', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Contenu']) !!}

                        {!! Form::submit('Publier',
                        ['class' => 'btn btn-success']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection