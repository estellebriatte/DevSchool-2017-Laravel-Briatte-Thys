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
                                    <--ai-je bien utilisé le $post->all ?-->
                                    <a href="{{ route('post.show', $post->all) }}">
                                        {{ $post->title }}
                                    </a>
                                </h2>

                                <p> {{ $post->content}}</p>
                            @endforeach

                            {!! $posts->links() !!}
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection