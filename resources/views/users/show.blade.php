@extends('layouts.app')

@section('content')

<style>
    th {
        font-weight: bold;
        text-align: center;
    }

    td {
        text-align: center;
    }
</style>

<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Show User</h2>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">

                        <a class="btn btn-success mt-2 mt-xl-0" href="{{ route('users.create') }}">Add new user</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="container mt-4">
            <div>
                Name: {{ $user->name }}
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
            <div>
                Username: {{ $user->username }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




{{-- <div class="bg-light p-4 rounded">
        <h1>Show user</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                Name: {{ $user->name }}
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
            <div>
                Username: {{ $user->username }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
    </div> --}}
@endsection
