@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center mb-3">
            <h1 class="mt-5 w-50 mx-auto ">Create new user</h1>
        </div>
    </div>
    <div class="card w-50 mx-auto">
        <form class="mt-5 w-100 mx-auto" method="post" action="{{ route('admin.users.store') }}">
            @include('admin.users.partials.form', ['create' => true])
            <button type="submit" class="btn btn-primary">Create User</button>
        </form>
    </div>
@endsection
