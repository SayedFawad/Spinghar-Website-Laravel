
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

<center>

  <div class="container-fluid" style="font-size: 20px !important; ">
  <div class="row">
      <div class="col-xs-10 col-md-10">
          <form method="post" name="contact_form" id="contact_form" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="formbox" >

  <div id="success" class="alert alert-success" role="alert" >
             You have registered successfully
       </div>

      @if(Session::has('success'))
         <div  class="alert alert-success" role="alert" >
             {{Session::get('success')}}
       </div>
      @endif
     


      <div id="fail" class="alert alert-danger" role="alert" >
       
       </div>
    
      <h3 class=""> New User Registration</h3>

      


      <hr>

      <div class="form-group">
        <p >Full Name</p>
        <input type="text" name="name" id="name" tabindex="1" style="width:45%;height: 40px;"   class="form-control" placeholder="" />
       
    </div>

    <div class="form-group">
        <p >Position</p>
        <input type="text" name="position" id="position" tabindex="1" style="width:45%;height: 40px;"   class="form-control" placeholder="" />
       
    </div>

    <div class="form-group">
        <p >Department</p>
        <input type="text" name="department" id="department" tabindex="1" style="width:45%;height: 40px;"   class="form-control" placeholder="" />
       
    </div>



  
      <div class="form-group">
        <p >Username</p>
        <input type="text" name="username" id="username" tabindex="1" style="width:45%;height: 40px;"   class="form-control" placeholder="" />
       
		</div>
 
    
 

<div class="form-group">
  <p >Email</p>
  <input type="text" name="email" id="email" tabindex="2" style="width:45%;height: 40px;"  class="form-control" placeholder=""/>

</div>



<div class="form-group">
  <p >Password</p>
  <input type="password" name="password" id="password" tabindex="3"  style="width:45%;height: 40px;" class="form-control" placeholder="" />

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


  
    


  
      <button class="w-100 btn btn-lg btn-primary" tabindex="4" type="submit" id="s" >Register</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2023</p>


      </div>
    </form>
      </div>
  </div>
  </div>

</center>

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

         var username = $("#username").val();
         var password = $("#password").val();

          var name = $("#name").val();
          var position = $("#position").val();
          var department = $("#department").val();
         
        
         var Email = $("#email").val();
       
    

 if (username != "" && password != "" && name != "" && position != "" && department != "" && Email != "" && IsEmail(Email)!=false ) 
 {

 



  $("#loadingBox").modal("show");

 

        var form_data = new FormData(this);
       

        $.ajax({
                url         : '/saveuser',
                dataType    : 'text',           // what to expect back from the PHP script, if anything
                cache       : false,
                contentType : false,
                processData : false,
                data        : form_data,                         
                type        : 'post',
                success     : function(output){
                   // window.location.href = "http://localhost:8000/registeruser";             // display response from the PHP script, if any

                     $('#success').show();
                     $("#loadingBox").modal("hide");

                   $("#contact_form").trigger("reset");

                }
         });
         
        
  


}else{


  $("#ErrorsBox").modal("show");
$("#username").addClass("errorBackground");
$("#password").addClass("errorBackground");

$("#email").addClass("errorBackground");
$("#name").addClass("errorBackground");
$("#position").addClass("errorBackground");
$("#department").addClass("errorBackground");









if(username != "")
{
  $("#username").removeClass("errorBackground");
}



if(password != "")
{
  $("#password").removeClass("errorBackground");
}





if(Email != "")
{
  $("#email").removeClass("errorBackground");
}


if(name != "")
{
  $("#name").removeClass("errorBackground");
}


if(position != "")
{
  $("#position").removeClass("errorBackground");
}

if(department != "")
{
  $("#department").removeClass("errorBackground");
}






                  $('#fail').show();
                  $('#fail').text("Unable to send your message. Please fill all then try again.");


                   setTimeout(function () {
                        $("#fail").hide();
                    }, 5000);

}



    })

</script>




  