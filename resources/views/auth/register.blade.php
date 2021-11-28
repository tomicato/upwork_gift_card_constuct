@extends('templates.main')

@section('content')
    <h1 class="mt-5 w-50 mx-auto ">Register</h1>
    <form class="mt-5 w-50 mx-auto" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" aria-describedby="name">
            @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" aria-describedby="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
            @error('password')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="repeatPass" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="repeatPass">
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Register Now</button>
    </form>
@endsection
