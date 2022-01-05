@extends('layout.base')

@section('content')
<div class="container">
    <h1>Lista de Repositórios do Github</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">URL</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($repositorios as $repositorio)
        <tr>
            <th scope="row">{{$repositorio['id']}}</th>
            <td>{{$repositorio['name']}}</td>
            <td>{{$repositorio['url']}}</td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
@endsection
