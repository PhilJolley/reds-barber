@php
  $header = get_field('header');
  $sub_header = get_field('sub_header');
  $paragraph = get_field('paragraph');

  $text_align = get_field('text_align');
  $text_color = get_field('text_color');
  $bkg_color = get_field('section_background_color');
@endphp

@section('content')
  <div class="full-width" style="@if($bkg_color) background-color: {{$bkg_color}}; @endif">
    <div class="uk-container">
      <div class="uk-grid">
        <div class="uk-width-1-1 uk-container-center"
             style="
                @if($text_align) text-align: {{$text_align}}; @endif
                @if($text_color) color: {{$text_color}}; @endif
               ">
          <h1>{{$header}}</h1>
          <h3>{{$sub_header}}</h3>
          <p>{{$paragraph}}</p>
        </div>
      </div>
    </div>
  </div>
@endsection
