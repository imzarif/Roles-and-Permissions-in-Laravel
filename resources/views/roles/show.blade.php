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

                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">

                        <a class="btn btn-success mt-2 mt-xl-0" href="{{ route('roles.create') }}">Add new roles</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">{{ ucfirst($role->name) }} Role</p>
                        <div class="table-responsive">

                                <div class="container mt-4">

                                    <h3>Assigned permissions</h3>

                                    <table class="table table-striped">
                                        <thead>
                                            <th scope="col" width="20%">Name</th>
                                            <th scope="col" width="1%">Guard</th>
                                        </thead>

                                        @foreach($rolePermissions as $permission)
                                            <tr>
                                                <td>{{ $permission->name }}</td>
                                                <td>{{ $permission->guard_name }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>

                            </div>
                            <div class="mt-4">
                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    {{-- <div class="bg-light p-4 rounded">
        <h1>{{ ucfirst($role->name) }} Role</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">

            <h3>Assigned permissions</h3>

            <table class="table table-striped">
                <thead>
                    <th scope="col" width="20%">Name</th>
                    <th scope="col" width="1%">Guard</th>
                </thead>

                @foreach($rolePermissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
    </div> --}}
@endsection
