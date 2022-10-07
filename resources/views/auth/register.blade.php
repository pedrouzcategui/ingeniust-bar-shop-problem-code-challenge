@extends('home')

@section('content')
    <h3 class="text-center bold">Register</h3>
    <form action="/user/create" method="POST">
        @csrf
        <div class="grid-container">
            <div class="grid-padding-x">
                <div class="medium-6 cell">
                    <label for="name">Full Name
                        <input type="text" name="name" placeholder="Ex: John Doe" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="email">Email
                        <input type="text" name="email" placeholder="Ex: johndoe23@gmail.com" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label>Password
                        <input type="password" name="password" placeholder="8 Characters minimum" required>
                        @error('password')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div class="medium-6 cell">
                    <label for="password_confirmation">Confirm Password
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                        @error('password')
                            <p class="alert">{{$message}}</p>
                        @enderror
                    </label>
                </div>
                <div class="medium-6 cell">
                    <button class="button success">
                        Register
                    </button>
                </div>
                <div>
                    <p>Already have an account? <a href="/login">Login</a></p>
                </div>
            </div>
        </div>
    </form>
@endsection
