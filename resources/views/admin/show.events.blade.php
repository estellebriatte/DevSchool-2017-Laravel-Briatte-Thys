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
                        Du {{$event->start}} au {{$event->end}} à {{$event->place}}

                        <br>
                        <br>
                        Prix: {{$event->price}}€


                        <br>
                        <br>
                        <strong>Organisateur:</strong>{{ $event->user->name }}
                        <br>
                        <hr>

                            <a href="{{ route('event.edit', $event->id) }}" class="btn btn-group-justified btn-info">Modifier</a>

                            <br>

                            {!! Form::model(
                           $event,
                           array(
                           'route' => array('event.destroy', $event->id),
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
    </div>
@endsection