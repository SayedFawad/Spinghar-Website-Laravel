@extends('home.layout')



@section('content')
	  
	  
	 




<link rel="stylesheet" href="Our-Services.css" media="screen">	 
	  
	  <style>
 


    a.details:hover, a.details:active {color: #4d60eb !important; text-decoration: underline !important;}



</style>
	  
	  
      @foreach($pic1 as $heading) 
    <section class="u-align-left u-clearfix u-image u-shading u-section-1" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('images/{{$heading->MainImage}}');" src="" data-image-width="1202" data-image-height="800" id="sec-ab92">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-title u-text-1">
        
         {{$heading->Title}}
        @endforeach
      </h1>
        <p class="u-large-text u-text u-text-default u-text-variant u-text-2">
            @foreach($pic1 as $heading)
                  
              {!!$heading->Description!!}
            @endforeach
        </p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-1-base u-section-2" id="carousel_cdab">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-repeater u-list-1">
         
 @foreach($pic2 as $heading)

          <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
              <span class="u-icon u-icon-circle u-palette-1-base u-spacing-18 u-icon-1">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 128 128" style="">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f832">
                  </use>
                </svg>


 
     <img src="images/{{$heading->Photo}}" style="width: 50px;height: 50px;position: relative;top:-45px;right:4px;">
  
              </span>
              <h3 class="u-text u-text-palette-1-base u-text-2">
                
                    <a href="#" class="details" >
                   {{$heading->Title}}   
                 </a>
               
             </h3>
              <p class="u-text u-text-grey-50 u-text-2 show-read-more1">
            
                  
              {!!$heading->Description!!}
            
              </p>
            </div>
          </div>

 @endforeach



         



   


        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-10 u-section-3" id="carousel_e133">
     
     @foreach($pic3 as $heading)

      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">
           {{$heading->Title}}
        </h2>
        <p class="u-text u-text-2">
           {!!$heading->Description!!}
        </p>
        
      </div>


      @endforeach

    </section>
    <section class="u-align-left u-clearfix u-image u-shading u-section-4" id="carousel_6dac" data-image-width="2250" data-image-height="1500">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-body-color u-text-default u-text-1">
        @foreach($pic4 as $heading)
             {{$heading->Title}}
        </h1>
        <p class="u-text u-text-body-color u-text-2">
           {!!$heading->Description!!}
        </p>

        @endforeach

        <div class="u-list u-repeater u-list-1">
         
     
      @foreach($pic5 as $heading)

          <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="626" data-image-height="417" src="images/{{$heading->Photo}}">
              <h4 class="u-custom-font u-heading-font u-text u-text-palette-3-base u-text-3">
                 <a href="#" style="color: #f1c50e !important;" class="details" >
                   {{$heading->Title}}   
                 </a>
              </h4>
              <p class="u-text u-text-grey-50 u-text-4 show-read-more1">
                  {!!$heading->Description!!}
              </p>
            </div>
          </div>

      @endforeach
      
       
        </div>
       
      </div>
    </section>
    <section class="u-clearfix u-valign-middle-xs u-valign-top-lg u-valign-top-xl u-white u-section-5" id="carousel_2a14">
      <div class="u-container-style u-grey-10 u-group u-group-1">
        <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1"></div>
      </div>
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        

  @foreach($pic6 as $heading)
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-size-40 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-container-style u-group u-palette-1-base u-group-2">
                  <div class="u-container-layout u-container-layout-3"></div>
                </div>
                <img class="u-expand-resize u-image u-image-1" src="images/{{$heading->Photo}}" data-image-width="500" data-image-height="322">
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-4">
                <h1 class="u-custom-font u-font-pt-sans u-text u-text-default u-text-1">
                  {{$heading->Title}}
                </h1>
                <p class="u-text u-text-default u-text-2">
                   {!!$heading->Description!!}
                </p>
                
               
              </div>
            </div>
          </div>
        </div>
  @endforeach


      </div>
    </section>
    
    
	
	
	
	
@endsection
