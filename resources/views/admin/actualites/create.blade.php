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
            <h2>Création d'une actualité :</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('actus.store') }}" method="POST">
                {{ method_field('POST') }}
                {{ csrf_field() }}
                <div class="createFormGroup">
                    <label for="actuName">Nom de l'actualité :</label>
                    <input type="text" id="actuName" name="actuName" placeholder="Sortie kayak, soirée, ..." required/>
                </div>
                <div class="createFormGroup">
                    <label for="actuDesc">Description de l'actualité :</label>
                    <textarea type="text" id="actuDesc" name="actuDesc" rows="4" cols="50" placeholder="Nous organisons une soirée ..." required></textarea>
                </div>
                <div class="createFormGroup">
                    <label for="actuShowDate">Montrer la date ?</label>
                    <select name="actuShowDate" required>
                        <option value=0>Yes</option>
                        <option value=1>No</option>
                    </select>
                </div>
                <div class="createFormGroup">
                    <label for="actuDate">Jour de l'actualité :</label>
                    <input type="date" id="actuDate" name="actuDate" value="<?php echo(date("Y-m-d"));?>" min="<?php echo(date("Y-m-d", strtotime("-1 days")));?>" max="2020-12-31">
                </div>
                <div class="createFormGroup">
                    <label for="actuHour">Heure de l'actualité :</label>
                    <input type="text" id="actuHour" name="actuHour" placeholder="HH:mm" required/>
                </div>
                <button type="submit" class="btn btn-success btn-block" style="width: 100px; margin-left: auto; margin-right: auto;">Valider</button>
            </form>
        </div>
    </div>
</div>
@endsection