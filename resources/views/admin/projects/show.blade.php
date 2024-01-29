@extends('layouts.admin')

@section('content')
    <div class="container m-3">
        <h2 class="my-3">{{$project->title}}</h2>
        <h5>Tipo: {{$project->type ? $project->type->name : 'Nessun Tipo'}}</h5>
        <p>{{$project->slug}}</p>
        <p>{{$project->description}}</p>
    </div>
@endsection