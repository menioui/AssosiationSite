@extends('layouts.app')

@section('stylesheets')
    @parent
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" type="text/css">
@endsection

@section('content')
<div id="mainFrame">
    <div id="contentFrame">
        <h2>Tableau de bord</h2>
        <div>
            <a class="controlPanelLinks btn btn-primary" href="{{ route('welcome') }}">Gérer l'accueil</a>
            <a class="controlPanelLinks btn btn-primary" href="{{ route('actus.index') }}">Gérer les actualités</a>
            <a class="controlPanelLinks btn btn-primary" href="{{ route('content.index') }}">Gérer la page d'info</a>
        </div>
    </div>
</div>
@endsection