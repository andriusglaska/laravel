@extends('layout')

@section('content')

@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

    <form method="post" action="{{ route('friends.store') }}">
      {{ csrf_field() }}
        Vardas<input name="name" type="text"><br>
        Gimimo data<input name="birthday" type="text"><br>
        Tel.nr.<input name="phone" type="text"><br>
        Photo<input name="photo" type="text"><br>

        <input  type="submit" value="Išsaugoti">
    </form>
@endsection
