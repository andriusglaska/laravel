<?php

namespace App\Http\Controllers;

use App\Testimonial;

class TestimonialsController {

  public function getAll()
{
  $title = 'Atsiliepimai';

  // Testimonial::create([
  //   'name' =>'kazkas kazkas',
  //   'time' =>date('Y-m-d H:i:s'),
  //   'content' =>'lorem ipsum'
  // ]);

  $testimonials = Testimonial::get();

  return view('testimonials', [
    'title' => $title,
    'testimonials' => $testimonials
  ]);
}

public function getSingle($id)
{
  $testimonial = Testimonial::find($id);
  return view('single-testimonial', [
    'testimonial' => $testimonial

  ]);
}
                                                               // DB::select('select *from testimonials');
  // dd($testimonials);

  // $testimonials = [
  //   [
  //     "name" => "Tomas",
  //     "time" => "2017-08-21 12:13:00",
  //     "text" => "tekstas, tekstas"
  //   ],
  //   [
  //     "name" => "Darius",
  //     "time" => "2017-08-21 12:13:00",
  //     "text" => "tekstas, tekstas"
  //   ],
  //   [
  //     "name" => "Ignas",
  //     "time" => "2017-08-21 12:13:00",
  //     "text" => "tekstas, tekstas"
  //   ]
  //
  // ];



}


 ?>
