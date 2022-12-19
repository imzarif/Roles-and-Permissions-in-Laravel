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
                                <h2>Update Role</h2>
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
                            <p class="card-title">Update Role</p>
                            <div class="table-responsive">
                                <form method="POST" action="{{ route('roles.update', $role->id) }}">
                                    @method('patch')
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input value="{{ $role->name }}"
                                            type="text"
                                            class="form-control"
                                            name="name"
                                            placeholder="Name" required>
                                    </div>

                                    <label for="permissions" class="form-label">Assign Permissions</label>

                                    <table class="table table-striped">
                                        <thead>
                                            <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                                            <th scope="col" width="20%">Name</th>
                                            <th scope="col" width="1%">Guard</th>
                                        </thead>

                                        @foreach ($permissions as $permission)
                                            <tr>
                                                <td>
                                                    <input type="checkbox"
                                                    name="permission[{{ $permission->name }}]"
                                                    value="{{ $permission->name }}"
                                                    class='permission'
                                                    {{ in_array($permission->name, $rolePermissions)
                                                        ? 'checked'
                                                        : '' }}>
                                                </td>
                                                <td>{{ $permission->name }}</td>
                                                <td>{{ $permission->guard_name }}</td>
                                            </tr>
                                        @endforeach
                                    </table>

                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="bg-light p-4 rounded">
        <h1>Update role</h1>
        <div class="lead">
            Edit role and manage permissions.
        </div>

        <div class="container mt-4">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('roles.update', $role->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ $role->name }}"
                        type="text"
                        class="form-control"
                        name="name"
                        placeholder="Name" required>
                </div>

                <label for="permissions" class="form-label">Assign Permissions</label>

                <table class="table table-striped">
                    <thead>
                        <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                        <th scope="col" width="20%">Name</th>
                        <th scope="col" width="1%">Guard</th>
                    </thead>

                    @foreach ($permissions as $permission)
                        <tr>
                            <td>
                                <input type="checkbox"
                                name="permission[{{ $permission->name }}]"
                                value="{{ $permission->name }}"
                                class='permission'
                                {{ in_array($permission->name, $rolePermissions)
                                    ? 'checked'
                                    : '' }}>
                            </td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->guard_name }}</td>
                        </tr>
                    @endforeach
                </table>

                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('roles.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div> --}}
        @endsection

        @section('scripts')
            <script type="text/javascript">
                $(document).ready(function() {
                    $('[name="all_permission"]').on('click', function() {

                        if ($(this).is(':checked')) {
                            $.each($('.permission'), function() {
                                $(this).prop('checked', true);
                            });
                        } else {
                            $.each($('.permission'), function() {
                                $(this).prop('checked', false);
                            });
                        }

                    });
                });
            </script>
        @endsection
