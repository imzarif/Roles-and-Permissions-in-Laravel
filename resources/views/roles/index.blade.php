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
                                <h2>Manage Roles</h2>
                            </div>

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
                            <p class="card-title">Roles</p>
                            <div class="table-responsive">
                                <table style="border:1px solid rgba(211, 211, 211, 0.5);" class="table">
                                    <tr>
                                        <td>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($roles as $key => $role)
                                                        <tr>
                                                            <td>{{ $role->id }}</td>
                                                            <td>{{ $role->name }}</td>

                                                            <td><a
                                                                    style="display:inline"
                                                                    type="button"
                                                                    href="{{ route('roles.show', $role->id) }}"
                                                                    class="btn btn-secondary">Show
                                                            </a>
                                                                <a
                                                                    style="width:80px; height:39px; font-size:15px; "
                                                                    type="button"
                                                                    href="{{ route('roles.edit', $role->id) }}"
                                                                    class="btn btn-primary">Edit
                                                            </a>
                                                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
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



            {{-- <div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">

    <div class="bg-light p-4 rounded">
        <h1>Roles</h1>
        <div class="lead">
            Manage your roles here.
            <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right">Add role</a>
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($roles as $key => $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('roles.show', $role->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $roles->links() !!}
        </div>

    </div>
    </div>
</div>
              </div>
            </div>
        </div>
    </div>
</div> --}}
        @endsection
