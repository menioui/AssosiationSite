@extends('layouts.app')

@section('stylesheets')
    @parent
    <link rel="stylesheet" href="{{ asset('css/content/index.css') }}" type="text/css">
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
    <div id="indexShowCard">
        @foreach($contents as $content)
            <div class="contentShower">
                <h2>{{ $content->contentTitle }}</h2>
                <p>{{ $content->contentContent }}</p>
                <form action="{{ route('content.edit', $content->id) }}" method="PATCH">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-warning"><i class='fas fa-edit'></i></button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
