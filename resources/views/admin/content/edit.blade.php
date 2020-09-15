@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
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
    </div>
    <div class="card" style="width: 50%; display: block; margin-left: auto; margin-right: auto;">
        <div class="card-header">
            <h2>Modification d'une actualité :</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('content.update', $content->id) }}" method="POST">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="editFormGroup">
                    <label for="contentTitle">Titre du contenu :</label>
                    <input type="text" id="contentTitle" name="contentTitle" value="{{ $content->contentTitle }}" required/>
                </div>
                <div class="editFormGroup">
                    <label for="contentBody">Description de l'actualité :</label>
                    <textarea type="text" id="contentBody" name="contentBody" rows="4" cols="50" placeholder="Nous organisons une soirée ..." required>{{ $content->contentContent }}</textarea>
                </div>
                <button type="submit" class="btn btn-success btn-block" style="width: 120px; margin-left: auto; margin-right: auto;">Mettre à jour !</button>
            </form>
        </div>
    </div>
</div>
@endsection