
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
                                <td> <a href="{{ url('/admin/event') }}"> {{ $event->title }}</a> </td>
                                <td>{{ $event->content }}</td>
                                <td>{{ $event->place }}</td>
                                <td>{{ $event->user->name }}</td>

                            </tr>
                            <td>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ route('event.edit', $event->id) }}" class="btn btn-info">Modifier</a>
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::model(
                                           $event, array(
                                           'route' => array('event.destroy', $event->id),
                                           'method' => 'DELETE'))
                                           !!}

                                        {!! Form::submit('Supprimer',
                                        ['class' => 'btn btn-danger']) !!}

                                        {!! Form::close() !!}
                                    </div>
                                </div>

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
                                <td> <a href="{{ route('admin.index') }}"> {{ $post->title }}</a> </td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->user->name }}</td>

                            </tr>
                            <td>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info">Modifier</a>
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::model(
                                           $post, array(
                                           'route' => array('post.destroy', $post->id),
                                           'method' => 'DELETE'))
                                           !!}

                                        {!! Form::submit('Supprimer',
                                        ['class' => 'btn btn-danger']) !!}

                                        {!! Form::close() !!}
                                    </div>
                                </div>


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