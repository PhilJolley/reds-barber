@php
  $left_image = get_field('left_image');
  $left_header = get_field('left_header');
  $left_sub_header = get_field('left_sub_header');

  $right_image = get_field('right_image');
  $right_header = get_field('right_header');
  $right_sub_header = get_field('right_sub_header');
@endphp

@section('content')
  <div class="hero-fifty">
    <div class="uk-grid">
      <div class="uk-width-1-2 right">
        <img src="{{$left_image}}" alt="Redmonds Barbershop">
      </div>
      <div class="uk-width-1-2 left">
        <img src="{{$right_image}}" alt="Redmonds Barbershop">
      </div>
    </div>
  </div>

@endsection
