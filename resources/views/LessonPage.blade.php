
@extends('adminlte::page')

@section('content_header')
    <h1>Lesson Pages</h1>
@stop

@section('content')
    <div class="row">
        @foreach($contents as $content)
            <div class="col-md-4 mb-3">
                <div class="info-box" style="width: 19rem; height: 9rem; overflow: hidden;">
                    <span class="info-box-icon bg-info"><i class="far fa-copy"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">{{ $content->title }}</span>
                        <span class="info-box-number">{{ $content->content }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
{{-- <div class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
    <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
    <div class="info-box-content">
    <span class="info-box-text">{{ $content->title }}</span>
    <span class="info-box-number">{{ $content->content }}</span>
    </div>
    
    </div>
    
    </div> --}}