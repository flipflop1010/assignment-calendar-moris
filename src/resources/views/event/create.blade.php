@extends('layouts.base')


@section('content')


<div class="container">
    <div class="row">
        <div class=" offset-lg-3 col-lg-6">
            @livewire('event.event-create-comp')
        </div>
    </div>
</div>
    
@endsection