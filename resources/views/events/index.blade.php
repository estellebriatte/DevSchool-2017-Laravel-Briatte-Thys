@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des articles (et évènements) </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <a href="{{ route('event.create') }}">+ Publier un article</a> </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">

                        @foreach($events as $event)
                                <a href="{{ route('event.show', $event->id) }}">
                                   <h2>{{ $event->title }}</h2>
                                   <h4> Date :{{$event->start}} to {{$event->end}} at {{$event->place}}</h4>
                                    <h4>Price:{{$event->price}}€</h4>
                                </a>

                            <p> {{ $event->content}}</p>
                        @endforeach

                        {!! $event->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection