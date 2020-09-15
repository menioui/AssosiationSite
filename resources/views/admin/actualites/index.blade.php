@extends('layouts.app')

@section('stylesheets')
    @parent
    <link rel="stylesheet" href="{{ asset('css/actualites/index.css') }}" type="text/css">
@endsection

@section('content')
<div id="mainFrame">
    <div id="anouncementBar">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif
    @if(session()->get('alert'))
        <div class="alert alert-warning">
            {{ session()->get('alert') }}
        </div><br />
    @endif
    @if(session()->get('error'))
        <div class="alert alert-error">
            {{ session()->get('error') }}
        </div><br />
    @endif
    </div>
    <div id="indexShowCard" class="card">
        <div class="card-header">
            <h2 class="float-left">Liste des Actualités :</h2>
            <a class="leftHeaderLink btn btn-light" href="{{ route('actus.create') }}"><i class="fas fa-plus"></i></a>
        </div>
        <div class="card-body" style="padding-top: 0px;">
            <table class="table table-striped" style="display:table;">
                <thead>
                    <tr>
                        <td style="width:10%;"></td>
                        <td style="width:2%;">ID</td>
                        <td style="width:19%;">Nom</td>
                        <td style="width:16%;">Date</td>
                        <td style="width:40%;">Corps</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($actus as $actu)
                    <tr>
                        <td style="width:10%;">
                            <form action="{{ route('actus.edit', $actu->id) }}" method="PATCH">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-warning btn-block"><i class='fas fa-edit'></i></button>
                            </form>
                            <form action="{{ route('actus.destroy', $actu->id) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-block" onclick="return confirm('Êtes-vous sûr(e) ?')"><i class='fas fa-trash'></i></button>
                            </form>
                        </td>
                        <td style="width:2%;">{{ $actu->id }}</td>
                        <td style="width:15%;">{{ $actu->eventName }}</td>
                        <td style="width:20%;">{{ $actu->eventDate }}</td>
                        <td style="width:40%;">{{ $actu->eventDesc }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection