@if(Auth::check() && Auth::user()->isAdmin)

    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">Les évènements </div>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Nom de l'événement</th>
                                <th>Description</th>
                                <th>Lieu</th>
                                <th>Auteur</th>
                            </tr>
                            </thead>

                            @foreach($events as $event)
                            <tbody>
                            <tr>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->content }}</td>
                                <td>{{ $event->place }}</td>
                                <td>{{ $event->user->name }}</td>

                            </tr>
                            <td>
                                <a href="{{ route('event.edit', $event->id) }}">Modif</a>
                            </td>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

    <br>
    <hr>
    <br>

            <div class="row">
                 <div class="col-md-offset-2 col-md-8">
                     <div class="panel panel-default">
                        <div class="panel-heading">Les articles </div>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Auteur</th>
                            </tr>
                            </thead>

                            @foreach($posts as $post)
                                <tbody>
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->content }}</td>
                                    <td>{{ $post->user->name }}</td>

                                </tr>
                                <td>
                                    <a href="{{ route('post.edit', $post->id) }}">Modif</a>
                                </td>
                                </tbody>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    @endsection

@endif