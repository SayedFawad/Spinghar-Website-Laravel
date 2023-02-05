

@extends('home.layout')



@section('content')



      <link rel="stylesheet" href="About-Us.css" media="screen">
  
 <style type="text/css">
   .u-image-circle.u-image {
    border-radius: 30% !important;
}
 </style>




@foreach($footer as $heading)
    <section class="u-clearfix u-section-3" id="sec-bb88">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-23 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <div alt="" class="u-image u-image-circle u-image-1" style="background-image: url('{{$heading->full_picture}}');" src="" data-image-width="500" data-image-height="322"></div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-37 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-text u-text-1">
                    
                  </h2>
                  <p class="u-text u-text-2">
                   {!!$heading->message!!}
                  </p>
                  Date Posted: <strong>{{$heading->created_time}}</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
@endforeach

   
    
@endsection