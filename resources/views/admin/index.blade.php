@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Administration </div>

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
                        </tbody>
                        @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection