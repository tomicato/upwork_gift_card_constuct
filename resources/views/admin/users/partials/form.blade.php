@csrf
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
           value="{{ old('name') }} @isset($user){{ $user->name }} @endisset" id="name" aria-describedby="name">
    @error('name')
    <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
           value="{{ old('email') }} @isset($user){{ $user->email }} @endisset" id="email" aria-describedby="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    @error('email')
    <span class="invalid-feedback" role="alert">{{ $message }}</span>
    @enderror
</div>
@isset($create)
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
               id="password">
        @error('password')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Password Confirm</label>
        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
               id="password_confirmation">
        @error('password_confirmation')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    </div>
@endisset
<div class="mb-3">
    @foreach($roles as $role)
        <div class="form-check">
            <input class="form-check-input" name="roles[]"
                   type="checkbox" value="{{ $role->id }}"
                   @isset($user)
                   @if(in_array($role->id, $user->roles->pluck('id')->toArray()))
                   checked
                   @endif
                   @endisset
                   id="{{ $role->name }}">
            <label for="{{ $role->name }}" class="form-check-label">{{ $role->name }}</label>
        </div>
    @endforeach
</div>



