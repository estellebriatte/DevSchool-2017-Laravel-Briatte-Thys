@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des évènements </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <a href="{{ route('event.create') }}">+ Créer un évènement</a> </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">

                        @foreach($events as $event)
                            <a href="{{ route('show.event', $event->id) }}">
                                <h2>{{ $event->title }}</h2>
                                <h4> Date : Du {{$event->start}} au {{$event->end}} à {{$event->place}}</h4>
                                <h4>Prix:{{$event->price}}€</h4>
                            </a>

                            <p> {{ $event->content}}</p>

                            <hr>
                            <style>.hr{color: #2b542c}</style>

                        @endforeach

                        {!! $events->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection