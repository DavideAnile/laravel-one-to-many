@extends('layouts/admin')

@section('content')

<h2 class="p-4"> Modifica il progetto : {{$project->project_name}}!</h2>

<form action="{{route('admin.projects.update', $project->slug)}}" method="POST">

    @csrf

    @method('PUT')

        <div class="mb-3">
            <label for="project_name"></label>
            <input class="form-control" type="text" name="project_name" id="project_name" placeholder="Inserisci il nome del progetto" value="{{old('project_name') ?? $project->project_name}}">
        </div>

        <div class="mb-3">
            <label for="project_description"></label>
            <textarea class="form-control" name="project_description" id="project_description" cols="30" rows="10" placeholder="inserisci la descrizione del progetto">{{old('project_description') ?? $project->project_description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="github_Link"></label>
            <input class="form-control" type="text" name="github_Link" id="github_Link" placeholder="Inserisci il link Github del progetto" value="{{old('github_Link') ?? $project->github_link}}">
        </div>

        <div class="mb-3">
            <label for="created_by"></label>
            <input class="form-control" type="text" name="created_by" id="created_by" placeholder="Creato da :" value="{{old('created_by') ?? $project->created_by}}">
        </div>

        <div class="text-center p-4"><button class="btn btn-primary" type="submit">Salva Progetto</button></div>

</form>
    
@endsection