@extends('adminlte::page')

@section('content_header')
@stop

@section('content')
    <div class="row">
        @foreach($courses as $course)
            <div class="col-md-4 mt-3">
                <div class="card h-100">
                    <div class="card-header text-muted">
                        {{ $course->course_name }}
                    </div>
                    <div class="card-body">
                        <p class="text-muted text-sm"><b>About : </b>{{ $course->description }}</p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="far fa-calendar-alt"></i></span>Start Date :
                                {{ $course->start_date }}</li>
                            <li class="small"><span class="fa-li"><i class="far fa-calendar-alt"></i></span>End Date :
                                {{ $course->end_date }}</li>
                            <li class="small"><span class="fa-li"><i class="fas fa-fw fa-user"></i></span>Instructor : {{ $course->instructor }}</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="https://wa.me/+62{{ $course->instructor_number }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-user"></i> Contact Teacher
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop

    {{-- @section('content')
    <div class="row">
        @foreach($courses as $course)
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 22rem; height: 15rem;">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{{ $course->course_name }}</h5>
                        <p class="card-text">{{ $course->description }}</p>
                        <p class="card-text">Start Date: {{ $course->start_date }}</p>
                        <p class="card-text">End Date: {{ $course->end_date }}</p>
                        <p class="card-text">Instructor: <a href="https:/wa.me/+62{{ $course->instructor_number }}" class="btn btn-info">{{ $course->instructor }}</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop --}}
