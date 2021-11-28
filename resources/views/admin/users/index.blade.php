@extends('templates.main')

@section('content')

    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center mb-3">
            <h1>Users List</h1>
            <a class="btn btn-sm btn-success float-end" href="{{ route('admin.users.create') }}"
               role="button">Create</a>
        </div>
    </div>
    <div class="card">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary" role="button">Edit</a>

                        <button type="button" class="btn btn-sm btn-danger"
                                onclick="event.preventDefault();document.getElementById('delete-user-form-{{ $user->id }}').submit()">
                            Delete
                        </button>
                        <form id="delete-user-form-{{ $user->id }}" style="display: none;"
                              action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{ $users->links() }}
    </div>

@endsection
