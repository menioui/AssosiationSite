@extends('layouts.app')

@section('stylesheets')
    @parent
    <link rel="stylesheet" href="{{ asset('css/events.css') }}" type="text/css">
@endsection

@section('scripts')
    @parent
    
@endsection

@section('content')
<div id="mainFrame">
    <div class="main">
    
    <?php

    if ( sizeof($events) > 0 ) {
        foreach ($events as $event) {
            ?>
            <div>
                <h2>{{ $event->eventName }}</h2>
                @if($event->eventShowDate)
                    <h4>Le {{ date("d-m-Y", strtotime($event->eventDate)) }}</h4>
                @endif
                <p>{{ $event->eventDesc }}</p>
            </div>
            <?php
            print(`<hr style="width: 16%; border: 2px solid #000000;">`);
        }
    } else { ?>
        <div>
            <h2>Il n'y a pas d'actualités</h2>
        </div>
    <?php
    }
    ?>
    </div>
</div>
@endsection

@section('lateScripts')
<script src="{{ asset('js/calendar.js') }}" type="text/javascript"></script>
@stop