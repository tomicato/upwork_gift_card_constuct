@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center mb-3">
            <h1 class="mt-5 w-50 mx-auto ">Edit user <em class="text-success">{{ $user->name }}</em></h1>
        </div>
    </div>
    <div class="card w-50 mx-auto">
        <form class="mt-5 w-100 mx-auto" method="post" action="{{ route('admin.users.update', $user->id) }}">
           @method('PATCH')
            @include('admin.users.partials.form')
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
@endsection
