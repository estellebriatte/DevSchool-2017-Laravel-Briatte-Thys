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

                        <a href="#">+ Publier un article</a> </div>
                </div>
            </div>
        </div>

        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            @foreach($list as $post)
                                <h2>
                                    <a href="{{ route('post.show', $post->id) }}">
                                        {{ $post->title }}
                                    </a>
                                </h2>

                                <p> {{ $post->content}}</p>
                            @endforeach

                            {!! $list->links() !!}
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection