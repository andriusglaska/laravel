@extends ("layout")
@section ("content")
<h1>{{ $title }}</h1>

@foreach ($testimonials as $testimonial)
<div class="block">
    <div class="name">
      @if ($testimonial->name == "Tomas")
      <strong>LABAS</strong>
      @endif
      {{ $testimonial->name }}</div>
    <div class="time">{{ $testimonial->time }}</div>
    <div class="text">{{ $testimonial->content }}</div>
  </div>

@endforeach
Vardas:</br>
<input type="text" name = "Vardas">
</br>
<textarea rows = "4" cols = "22"></textarea>
</br>
<button type = "button">Siųsti</button>
@endsection
