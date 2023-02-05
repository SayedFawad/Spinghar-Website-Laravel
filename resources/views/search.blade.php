
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" > -->

<!-- <link rel="stylesheet" href="bootstrap.min.css" > -->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



  <style>
select {
  margin: 50px;
  width: 200px;
  padding: 5px 35px 5px 5px;
  font-size: 18px !important;
  border: 1px solid #CCC;
  border-radius:2px;
  height: 34px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  
}


/* CAUTION: Internet Explorer hackery ahead */


select::-ms-expand {
    display: none; /* Remove default arrow in Internet Explorer 10 and 11 */
}

/* Target Internet Explorer 9 to undo the custom arrow */
@media screen and (min-width:0\0) {
    select {
        background: none\9;
        padding: 5px\9;
		 width: 100px;
    }
}

</style>

  <!-- <script src="jquery-1.10.2.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> -->
  

  <nav   id="nav" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="color: black !important;background-color:rgb(148, 221, 3) !important">
    <div class="container-fluid" >

      <img src="8877.png" style="width:60px; height:auto">

      <a class="navbar-brand" href="#" style="color: black !important;">&nbsp;&nbsp; Spinghar University (Kabul Campus) &nbsp; &nbsp; MIS - Online Registration Form</a>
      <button class="navbar-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div style="float: right !important;" class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0" >
          <li class="nav-item">
           
          </li>
         
      
        </ul>


        <ul class="navbar-nav me-auto mb-2 mb-md-0" >
          <li class="nav-item">
           
          </li>
       
      
        </ul>
       
      </div>
    </div>
  </nav>

  <br >
  <br>
  <br >
  <br>
  

  <style type="text/css">
 .errorBackground
        {
            background-color:#fecece !important;
            color:#000000 !important;
        }
  </style>


  <div class="container-fluid" style="font-size: 20px !important; float:right !important">
  <div class="row">
      <div class="col-xs-9 col-md-9">
         
         
            <div class="formbox" dir="rtl">

     


      <div id="fail" class="alert alert-danger" role="alert" >
       
       </div>
    
      <h3 class=""> Search Student</h3>

     


      <hr>
      
      
  
      <div class="form-group">
        
        
         <form  method="post" action="/search">
       {{ csrf_field() }}
           <input type="text" name="searchID" id="searchID" />
           <input type="submit" value="Search" class="btn-default" />
      </form>
       
		</div>
    
<br>




   <div class="modal fade" id="ErrorsBox">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="close" data-dismiss="modal">&times;</a>
                    <h4>Please Fill the required Fields</h4>
                </div>
                <div class="modal-body">
                    <h6 style="color:#fb0606;font-size:20px;font-weight:bold;">Fill all Red Fields </h6>
                
                    
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary" data-dismiss="modal">OK</a>
                   
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="loadingBox">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                  <center>
                    <h4>Please Wait</h4>
                 </center>
                </div>
                <div class="modal-body">
                <center>
                <img src="submitLogo1.gif" style="width:160px; height:auto"> <br>
                </center>
                </div>
               
            </div>
        </div>
    </div>


 
    


  
     


      </div>

      </div>
  </div>
  </div>
  

<script src="Scripts/jquery-1.10.2.min.js"></script>
 <script src="Scripts/bootstrap.min.js"></script>
    <link href="Scripts/bootstrap.min.css" rel="stylesheet" />


  
<script type="text/javascript">


// 


// $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });

$('#success').hide();
$('#fail').hide();



 function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}

  
$('#contact_form').on('submit', function(event){
  event.preventDefault();

         var searchID = $("#searchID").val();
         
    

 if (searchID != "" ) 
 {




  $("#loadingBox").modal("show");

 
   

        var form_data = new FormData(this);
        
      
      

        $.ajax({
                url         : '/registers/search',
                dataType    : 'text',           // what to expect back from the PHP script, if anything
                cache       : false,
                contentType : false,
                processData : false,
                data        : form_data,                         
                type        : 'post',
                success     : function(output){
                  window.location.href = "http://127.0.0.1:8000/succeed";             // display response from the PHP script, if any
                }
         });
  


}else{


  $("#ErrorsBox").modal("show");
$("#studentName").addClass("errorBackground");
$("#studentNameLetter1").addClass("errorBackground");
$("#studentFatherName").addClass("errorBackground");
$("#studentFatherNameLetter1").addClass("errorBackground");
$("#studentLastName").addClass("errorBackground");
$("#studentLastNameLetter1").addClass("errorBackground");
$("#studentGrandFatherName").addClass("errorBackground");
$("#studentGrandFatherNameLetter1").addClass("errorBackground");
$("#DoB").addClass("errorBackground");
$("#studentGender").addClass("errorBackground");
$("#examLang").addClass("errorBackground");
$("#examType").addClass("errorBackground");
$("#faculty").addClass("errorBackground");
$("#relativeName").addClass("errorBackground");
$("#relativePhone").addClass("errorBackground");
$("#studentProvince").addClass("errorBackground");
$("#studentDistrict").addClass("errorBackground");
$("#studentVillage").addClass("errorBackground");
$("#studentTazkiraNo").addClass("errorBackground");
$("#studentPhone").addClass("errorBackground");
$("#email").addClass("errorBackground");
$("#certificate").addClass("errorBackground");









                  $('#fail').show();
                  $('#fail').text("Unable to send your message. Please fill all then try again.");


                   setTimeout(function () {
                        $("#fail").hide();
                    }, 5000);

}



    })

</script>




  