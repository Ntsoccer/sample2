@extends('app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">register</div>
    <div class="card-body">
      <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="form-group">
          @error('name')
          <div>
            {{$message}}
          </div>
          @enderror
          <label for="name">Name</label>
          <input type="text" name="name" value="{{old('name')}}">
        </div>
        <div class="form-group">
          @error('email')
          <div>
            {{$message}}
          </div>
          @enderror
          <label for="email">Email Address</label>
          <input type="email" name="email" value="{{old('email')}}">
        </div>
        <div class="form-group">
          @error('password')
          <div>
            {{$message}}
          </div>
          @enderror
          <label for="password">Password</label>
          <input type="password" name="password">
        </div>
        <div class="form-group">
          @error('password-confirm')
          <div>
            {{$message}}
          </div>
          @enderror
          <label for="password-confirm">Confirm Password</label>
          <input type="password" name="password-confirm">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection