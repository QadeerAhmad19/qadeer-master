@extends('app')

@section('content')
    <div class="content">
        @include('workfinderviews.partials.super-admin.left-nav')
    </div>
    <div class="dashboard-content">
        <div class="messages-div">
            <ul id="messages" class="list-group">
            </ul>
        </div>
    </div>

@endsection
