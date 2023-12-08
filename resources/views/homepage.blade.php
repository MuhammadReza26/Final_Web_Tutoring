@extends('adminlte::page')

@section('content_header')
@stop

@section('content')
<div class="row">
    <div class="col-md-6 ml-auto">
        <form action="{{ route('homepage') }}" method="GET" class="form-inline">
            <div class="form-group mr-4">
                <label for="search" class="mr-4">Search Course:</label>
                <input type="text" class="form-control" id="search" name="search" value="{{ request('search') }}">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
</div>

<div class="row mt-3">
    @if($courses->isEmpty())
        <div class="col-md-12">
            <a href="{{ url()->previous() }}" class="btn btn-warning">back to homepage</a>
        </div>
    @else
        @foreach($courses as $course)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <a href="/coursecatalog" style="color : black"><h5 class="card-title">{{ $course->course_name }}</h5></a>
                        <!-- Add other card details as needed -->
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
@stop
