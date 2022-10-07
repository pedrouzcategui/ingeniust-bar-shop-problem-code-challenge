@extends('home')

@section('content')
    <h3 class="text-center bold">Login</h3>
 <form action="/login" method="POST">
    @csrf
    <div class="grid-container">
      <div class="grid-padding-x">
        <div class="medium-6 cell">
          <label>Email
            <input type="text" name="email" placeholder="email" required>
            @error('email')
              <p class="alert">{{$message}}</p>
            @enderror
          </label>
        </div>
        <div class="medium-6 cell">
          <label>Password
            <input type="password" name="password" placeholder="Password" required>
            @error('password')
              <p class="alert">{{$message}}</p>
            @enderror
          </label>
        </div>
        <div class="medium-6 cell">
            <button class="button success">
                Log In
            </button>
        </div>
        <div>
            <p>Don't have an account yet? <a href="/register">Create an account!</a></p>
        </div>
      </div>
    </div>
  </form>
@endsection