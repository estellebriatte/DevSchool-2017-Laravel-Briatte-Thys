@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Publier des événements</div>
                    <div class="panel-body">

                        {!! Form::open(array(
                            'route' => 'event.store',
                            'method' => 'POST')) !!}

                        {!! Form::label('title', 'Titre') !!}

                        {!! Form::text('title', null,
                       ['class' => 'form-control',
                       'placeholder' => 'Titre']) !!}

                        {!! Form::label('start', 'Date de début') !!}

                        {!! Form::text('start', null,
                        ['class' => 'form-control',
                        'placeholder' => 'YYYY-mm-dd']) !!}

                        {!! Form::label('end', 'Date de fin') !!}

                        {!! Form::text('end', null,
                        ['class' => 'form-control',
                        'placeholder' => 'YYYY-mm-dd']) !!}

                        {!! Form::label('place', 'Lieu') !!}

                        {!! Form::text('place', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Lieu']) !!}

                        {!! Form::label('price', 'Prix') !!}

                        {!! Form::text('price', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Prix']) !!}

                        {!! Form::label('content', 'Description') !!}

                        {!! Form::text('content', null,
                        ['class' => 'form-control',
                        'placeholder' => 'Description']) !!}

                        {!! Form::submit('Publier',
                        ['class' => 'btn btn-success']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-8 col-md-3">
                <a href="{{ route('event.index') }}">Retour à la liste des évènements</a>
            </div>
        </div>
    </div>
@endsection