@extends('adminlte::page')

@section('content_header')
    <h1>User Profile</h1>
@stop

@section('content')
    @php
        $user = auth()->user();
    @endphp

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Profile Information</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Name:</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Role:</th>
                        <td>{{ $user->role }}</td>
                    </tr>
                    <tr>
                        <th>Age:</th>
                        <td>{{ $user->Umur }}</td>
                    </tr>
                    <tr>
                        <th>Place of Birth:</th>
                        <td>{{ $user->Tempat_Lahir }}</td>
                    </tr>
                    <tr>
                        <th>Place of Residence:</th>
                        <td>{{ $user->Tempat_Tinggal }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
