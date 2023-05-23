@extends('layouts/admin')

@section('content')

<h2 class="pt-3"> Inserisci un nuovo progetto !</h2>

<form action="{{route('admin.projects.store')}}" method="POST">

    @csrf

        <div class="mb-3">
            <label for="project_name"></label>
            <input class="form-control" type="text" name="project_name" id="project_name" placeholder="Inserisci il nome del progetto">
        </div>

        <div class="mb-3">
            <label for="project_description"></label>
            <textarea class="form-control" name="project_description" id="project_description" cols="30" rows="10" placeholder="inserisci la descrizione del progetto"></textarea>
        </div>

        <div class="mb-3">
            <label for="github_Link"></label>
            <input class="form-control" type="text" name="github_Link" id="github_Link" placeholder="Inserisci il link Github del progetto">
        </div>

        <div class="mb-3">
            <label for="created_by"></label>
            <input class="form-control" type="text" name="created_by" id="created_by" placeholder="Creato da :">
        </div>

        <div class="text-center p-4"><button class="btn btn-primary" type="submit">Salva Progetto</button></div>

</form>
    
@endsection