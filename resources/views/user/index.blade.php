@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <button class="btn btn-sm btn-primary my-3" id="add">Add</button>

        <table id="data">
            <thead>
                <th>Email</th>
                <th>Code</th>
            </thead>
        </table>
    </div>

    @vite('resources/js/user.js')
@endsection
