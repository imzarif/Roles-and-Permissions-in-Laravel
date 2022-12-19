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
                            <h2>Edit Permissions</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                                @method('patch')
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input value="{{ $permission->name }}"
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        placeholder="Name" required>

                                    @if ($errors->has('name'))
                                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Save permission</button>
                                <a href="{{ route('permissions.index') }}" class="btn btn-default">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{-- <div class="bg-light p-4 rounded">
        <h2>Edit permission</h2>
        <div class="lead">
            Editing permission.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ $permission->name }}"
                        type="text"
                        class="form-control"
                        name="name"
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save permission</button>
                <a href="{{ route('permissions.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div> --}}
@endsection
