@extends('home.layout')



@section('content')
	  
	  
	  
	  
	  <link rel="stylesheet" href="About-Us.css" media="screen">
	  
	  
	  
    <section class="u-align-center u-clearfix u-section-1" id="sec-8292">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-left u-container-style u-effect-hover-zoom u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1" src="" data-image-width="500" data-image-height="333">
                <div class="u-background-effect u-expanded">
                  


                  @foreach($pic1 as $heading)
                  <div class="u-background-effect-image u-expanded u-image u-image-1" style="background-image: url('images/{{$heading->MainImage}}')" data-image-width="500" data-image-height="333">
                  </div>

                  @endforeach

                </div>
                <div class="u-container-layout u-valign-middle u-container-layout-1" src=""></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-palette-1-base u-right-cell u-size-30 u-size-xs-60 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-text u-text-1">
               @foreach($pic1 as $heading)
                  {{$heading->Title}}
               @endforeach
                </h2>
                  <p class="u-text u-text-2">
                  @foreach($pic1 as $heading)
                  
                     {!!$heading->Description!!}
                  @endforeach
                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



  
    
    
@endsection
