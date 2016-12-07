@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des articles que j'ai publiés</div>

                    <div class="panel-body">


                            @foreach($posts as $post)
                                @if(Auth::user()->id == $post['user_id'])
                                    <h2>
                                        <a href="{{ route('post.show', $post->id) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h2>
                                    <p> {{ $post->content }}</p>
                                @endif
                            @endforeach



                    <div class="text-center">{{ $posts->links() }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des évènements que j'ai créés</div>

                <div class="panel-body">
                    @foreach($events as $event)
                        @if(Auth::user()->id == $event['user_id'])
                            <h2>
                                <a href="{{ route('event.show', $event->id) }}">
                                    {{ $event->title }}
                            </h2>
                            <h4> Date : Du {{$event->start}} au {{$event->end}} à {{$event->place}}</h4>
                            <h4>Prix:{{$event->price}}€</h4>
                                </a>

                                <p> {{ $event->content}}</p>

                                <hr>
                                <style>.hr{color: #2b542c}</style>
                        @endif
                    @endforeach

                    <div class="text-center">{{ $events->links() }}</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
