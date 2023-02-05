@extends('home.layout')

@section('content')

<style type="text/css">
  .u-section-3 .u-layout-wrap-1 {
    margin: 60px auto -90px 0 !important;
  }

  .u-image-circle.u-image {
  border-radius: 30% !important;
}
</style>
	  
	  
	  <link rel="stylesheet" href="News.css" media="screen">

      <link rel="stylesheet" href="About-Us.css" media="screen">
	  
	   <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
	  
     <section style="position:relative;top: -290px;z-index: -1 !important;" class="u-align-center u-clearfix u-gradient u-section-1"  id="sec-a3ce">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-1">
          
           @foreach($pic2 as $heading)
             {{$heading->Title}} 
          @endforeach

        </h1>
      </div>
    </section>
   


    @foreach($pic1 as $heading)
    <section style="position:relative;top: -400px;" class="u-clearfix u-section-3" id="sec-bb88">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row" >
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-23 u-layout-cell-1">
                <div  class="u-container-layout u-valign-middle u-container-layout-1">
                  <div alt="" class="u-image u-image-circle u-image-1" style="background-image: url('images/{{$heading->Photo}}');" src="" data-image-width="500" data-image-height="322"></div>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-37 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-text u-text-1">
                     {{$heading->Title}}
                  </h2>
                  <p class="u-text u-text-2">
                    {!!$heading->Description!!}
                  </p>
                 Date Posted: <strong>{{$heading->date}}</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
<hr>
    </section>

@endforeach
    

    <br>
    <br>
    <br>
    
	
@endsection


