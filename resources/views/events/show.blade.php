@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $event->title }}</div>
                    <div class="panel-body">
                        {{$event->content}}

                        <br>
                        <br>
                        <strong>Organisateur:</strong>{{ $event->user->name }}
                        <br>

                        <a href="{{ route('event.edit', $event->id) }}" class="btn btn-info">Modifier</a>

                        <br>

                        {!! Form::model(
                       $event,
                       array(
                       'route' => array('event.destroy', $event->id),
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