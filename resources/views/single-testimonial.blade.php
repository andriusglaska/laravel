@extends ("layout")
@section ("content")


<div class="block">
    <div class="name">
      @if ($testimonial->name == "Tomas")
      <strong>LABAS</strong>
      @endif
      {{ $testimonial->name }}</div>
    <div class="time">{{ $testimonial->time }}</div>
    <div class="text">{{ $testimonial->content }}</div>
  </div>



@endsection
