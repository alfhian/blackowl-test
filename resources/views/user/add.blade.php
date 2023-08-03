@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="py-3 px-3">
            <h3 class="mb-3">Add User</h3>
            <div class="row mb-2">
                <div class="col-3">Name</div>
                <div class="col-3">
                    <input type="text" class="form-control form-control-sm" name="name" id="name">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">Email</div>
                <div class="col-3">
                    <input type="email" class="form-control form-control-sm" name="email" id="email">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">Password</div>
                <div class="col-3">
                    <input type="password" class="form-control form-control-sm" name="password" id="password">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <input type="submit" class="btn btn-sm btn-primary" name="submit" id="submit">
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/user.js')
@endsection
