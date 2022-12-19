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
                            <h2>Permissions</h2>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">

                        <a class="btn btn-success mt-2 mt-xl-0" href="{{ route('permissions.create') }}">Add permission</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table style="border:1px solid rgba(211, 211, 211, 0.5);" class="table">
                                <tr>
                                    <td>
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th scope="col" width="15%">Name</th>
                                                <th scope="col">Guard</th>
                                                <th scope="col" colspan="3" width="1%"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($permissions as $permission)
                                                    <tr>
                                                        <td>{{ $permission->name }}</td>
                                                        <td>{{ $permission->guard_name }}</td>
                                                        <td><a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                                                        <td>
                                                            {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                            {!! Form::close() !!}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                </tr>
                                </td>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    {{-- <div class="bg-light p-4 rounded">
        <h2>Permissions</h2>
        <div class="lead">
            Manage your permissions here. <br><br>
            <a href="{{ route('permissions.create') }}" class="btn btn-primary btn-sm float-right">Add permissions</a>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" width="15%">Name</th>
                <th scope="col">Guard</th>
                <th scope="col" colspan="3" width="1%"></th>
            </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td><a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div> --}}
@endsection
