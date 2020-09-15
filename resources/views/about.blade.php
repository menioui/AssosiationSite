@extends('layouts.app')

@section('stylesheets')
    @parent
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" type="text/css">
@endsection

@section('content')
<div id="mainFrame">
    <div class="contentFrame">
        <div>
            <h2>{{ $contents[0]->contentTitle }}</h2>
            <p>{{ $contents[0]->contentContent }}</p>
        </div>
    </div>

    <div class="contentFrame cfL">
        <img src="{{ asset('/imgs/a_propos.jpg') }}" alt="Logo AssoPourTous">
        <div>
            <h2>{{ $contents[1]->contentTitle }}</h2>
            <p>{{ $contents[1]->contentContent }}</p>
        </div>
    </div>

    <div class="contentFrame cfR">
        <img src="{{ asset('/imgs/a_propos.jpg') }}" alt="Logo AssoPourTous">
        <div>
            <h2>{{ $contents[2]->contentTitle }}</h2>
            <p>{{ $contents[2]->contentContent }}</p>
        </div>
    </div>

</div>
@endsection