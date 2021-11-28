@extends('templates.main')

@section('content')
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h1>Posts List</h1>
            @can('create', \App\Models\Post::class)
                <a class="btn btn-sm btn-success float-end" href="{{ route('posts.create') }}"
                   role="button">Create</a>
            @endcan
        </div>

        <form action="">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </form>

        @foreach($posts as $k => $post)

            <div class="col-4 my-2">
                <div class="card h-100">
                    <div class="card-header">
                        Featured {{ $post->user_id }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->anons }}</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <a href="#" class="btn btn-outline-success">Read more</a>
                        <div class="d-flex justify-content-between align-items-center w-50">
                            @can('update', $post)
                                <a href="#" class="btn btn-outline-primary mx-2">Edit</a>
                            @endcan
                            @can('delete', $post)
                                <a href="#" class="btn btn-outline-danger mx-2">Delete</a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="my-5 float-end">
        {{ $posts->links() }}
    </div>
@endsection
