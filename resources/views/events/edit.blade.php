@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editer des événements</div>

                    <div class="panel-body">

                        {!! Form::model(
                        $event,
                        array(
                        'route' => array('event.update', $event->id),
                        'method' => 'PUT'))
                        !!}

                        {!! Form::label('title', 'Titre') !!}

                        {!! Form::text('title', null,
                       ['class' => 'form-control',
                       'placeholder' => 'Titre']) !!}

                        {!! Form::label('start', 'Date de début') !!}

                        {!! Form::text('start', null,
                        ['class' => 'form-control',
                        'placeholder' => 'dd-mm-YYYY']) !!}

                        {!! Form::label('end', 'Date de fin') !!}

                        {!! Form::text('end', null,
                        ['class' => 'form-control',
                        'placeholder' => 'dd-mm-YYYY']) !!}

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
                        ['class' => 'btn btn-group-justified btn-success']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection