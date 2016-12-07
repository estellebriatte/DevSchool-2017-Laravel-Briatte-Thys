@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des articles</div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <a href="{{ route('post.create') }}">+ Publier un article</a> </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">

                        @foreach($posts as $post)
                            <h2>
                                <a href="{{ route('show.post', $post->id) }}">
                                    {{ $post->title }}
                                </a>
                            </h2>

                            <p> {{ $post->content}}</p>

                            <hr>
                            <style>.hr{color: #2b542c}</style>

                        @endforeach

                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection