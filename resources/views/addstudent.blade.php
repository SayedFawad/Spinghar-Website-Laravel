
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
          <form method="post" action="{{ route('student.save') }}" name="main_form" id="main_form" enctype="multipart/form-data">
          @csrf
            <div class="formbox" dir="rtl">
       
         <p id="myText"></p>
     
        <div id="success" class="alert alert-success" role="alert" >
             You have registered successfully
       </div>

       @if(Session::has('duplicate'))
         <div  class="alert alert-danger" role="alert" >
             {{Session::get('duplicate')}}
       </div>
      @endif

      <div id="fail" class="alert alert-danger" role="alert" >
       
       </div>
    
      <h3 class=""> Registration of new student / ثبت داوطلبان جدید</h3>

      <h3 dir="rtl" class=" mb-3 fw-normal">Profile of the student / مشخصات داوطلب</h3>


      <hr>
  
      <div class="form-group">
        <p dir="rtl">نوم /  Name</p>
        <input type="text" name="name" id="name" tabindex="1" dir="rtl"  class="form-control" placeholder="" />

        <span class="text-danger error-text name_error"></span>
       
		</div>
    <p dir="rtl">نوم حروف / Letters Of Name</p>
    <table>
      <tr>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter1" id="studentNameLetter1"  tabindex="2"   style="width:40px" class="form-control" placeholder="" />
              
                 <span class="text-danger error-text name_error"></span>

            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter2"  tabindex="3"  style="width:40px" class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter3"  tabindex="4"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter4"  tabindex="5"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter5"  tabindex="6"  style="width:40px"  class="form-control" placeholder="" />
               
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter6"  tabindex="7"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter7"  tabindex="8"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter8"  tabindex="9"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter9"  tabindex="10"  style="width:40px"  class="form-control" placeholder="" />
               
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter10"  tabindex="11"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter11"  tabindex="12"  style="width:40px"  class="form-control" placeholder="" />
             
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter12"  tabindex="13"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter13"  tabindex="14"  style="width:40px"  class="form-control" placeholder="" />
               
            </div>
      </td>
        <td>
            <div class="form-group" dir="rtl">
             
                  <input type="text" name="studentNameLetter14"  tabindex="15" style="width:40px"  class="form-control" placeholder="" />
               
              </div>
        </td>
        <td>
          <div class="form-group" dir="rtl">
            
            <input type="text" name="studentNameLetter15"  tabindex="16"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
        </td>
      </tr>
    </table>
    
    <br>


    <div class="form-group">
      <p dir="rtl">پلارنوم / Father Name</p>
      <input type="text" name="studentFatherName" id="studentFatherName" tabindex="17" dir="rtl"  class="form-control" placeholder="" />
    
  </div>

  <p dir="rtl">پلارنوم حروف / Letters of Father Name</p>
  <table>
    <tr>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter1" id="studentFatherNameLetter1"  tabindex="18"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter2"  tabindex="19"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter3"  tabindex="20"  style="width:40px" class="form-control" placeholder="" />
           
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter4"  tabindex="21"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter5"  tabindex="22"  style="width:40px"  class="form-control" placeholder="" />
           
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter6"  tabindex="23"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter7"  tabindex="24"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter8"  tabindex="25"  style="width:40px"  class="form-control" placeholder="" />
          
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter9"  tabindex="26"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter10"  tabindex="27"  style="width:40px"  class="form-control" placeholder="" />
          
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter11"  tabindex="28"  style="width:40px"  class="form-control" placeholder="" />
           
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter12"  tabindex="29"  style="width:40px" class="form-control" placeholder="" />
             
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter13"  tabindex="30"  style="width:40px" class="form-control" placeholder="" />
             
          </div>
    </td>
      <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentFatherNameLetter14"  tabindex="31" style="width:40px"  class="form-control" placeholder="" />
                
            </div>
      </td>
      <td>
        <div class="form-group" dir="rtl">
          
          <input type="text" name="studentFatherNameLetter15"  tabindex="32"  style="width:40px" class="form-control" placeholder="" />
       
      </div>
      </td>
    </tr>
  </table>

<br>


<div class="form-group">
  <p dir="rtl">تخلص / Last Name</p>
  <input type="text" name="studentLastName" id="studentLastName" tabindex="33" dir="rtl"  class="form-control" placeholder="" />

</div>
   
<p dir="rtl">تخلص حروف / Letters of Last Name</p>
<table>
  <tr>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter1" id="studentLastNameLetter1" tabindex="34"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter2"  tabindex="35"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter3"  tabindex="36"  style="width:40px"  class="form-control" placeholder="" />
      
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter4"  tabindex="37"  style="width:40px" class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter5"  tabindex="38"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter6"  tabindex="39"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter7"  tabindex="40"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter8"  tabindex="41"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter9"  tabindex="42"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter10"  tabindex="43"  style="width:40px"  class="form-control" placeholder="" />
        
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter11"  tabindex="44"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter12"  tabindex="45"  style="width:40px"  class="form-control" placeholder="" />
     
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter13"  tabindex="46"  style="width:40px"  class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentLastNameLetter14"  tabindex="47" style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
    <td>
      <div class="form-group" dir="rtl">
        
        <input type="text" name="studentLastNameLetter15"  tabindex="48"  style="width:40px"  class="form-control" placeholder="" />
       
    </div>
    </td>
  </tr>
</table>

<br>


<div class="form-group">
  <p dir="rtl">دنیکه نوم / Grand Father Name</p>
  <input type="text" name="studentGrandFatherName" id="studentGrandFatherName" tabindex="49" dir="rtl"  class="form-control" placeholder="" />
 
</div>

<p dir="rtl">دنیکه نوم حروف / Letters of Grand Father Name</p>
<table>
  <tr>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter1"  id="studentGrandFatherNameLetter1" tabindex="50"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter2"  tabindex="51"  style="width:40px"  class="form-control" placeholder="" />
        
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter3"  tabindex="52"  style="width:40px"  class="form-control" placeholder="" />

        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter4"  tabindex="53"  style="width:40px"  class="form-control" placeholder="" />
        
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter5"  tabindex="54"  style="width:40px"  class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter6"  tabindex="55"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter7"  tabindex="56"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter8"  tabindex="57"  style="width:40px" class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter9"  tabindex="58"  style="width:40px"  class="form-control" placeholder="" />
        
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter10"  tabindex="59"  style="width:40px"  class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter11"  tabindex="60"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter12"  tabindex="61"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter13"  tabindex="62"  style="width:40px"  class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentGrandFatherNameLetter14"  tabindex="63" style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
    <td>
      <div class="form-group" dir="rtl">
        
        <input type="text" name="studentGrandFatherNameLetter15"  tabindex="64"  style="width:40px" class="form-control" placeholder="" />
     
    </div>
    </td>
  </tr>
</table>


<br>


<div class="form-group">
  <p dir="rtl">د زیږیدو کال / Date of Birth</p>
  <input type="text" name="DoB" id="DoB" tabindex="65" dir="rtl"  class="form-control" placeholder="dd/mm/yyyy" />

</div>

<br>

<table style="max-width: 600px !important; min-width: 300px !important;">
  <tr>
    <td>
<div class="form-group">
  <p dir="rtl" style="font-size: 20px !important; ">جنس / Gender</p>

  <select dir="rtl" class="form-select" tabindex="66" name="studentGender" id="studentGender" class="form-control" placeholder="" >
    <option value=""> انتخاب / Choose</option>
    <option value="ذکور">ذکور / Male</option>
    <option value="اناث">اناث / Female</option>
  </select>

  
</div>
    </td>
    <td>
<div class="form-group">
  <p dir="rtl" style="font-size: 20px !important; ">د ازموینې ژبه / Exam Language</p>

  <select dir="rtl" class="form-select"  tabindex="67" name="examLang" id="examLang" class="form-control" placeholder="" >
    <option value="">انتخاب / Choose</option>
          <option value="دری">دری / Dari</option>
          <option value="پشتو">پشتو / Pashto</option>
        </select>


</div>
    </td>
  </tr>
</table>




<br>








<div class="form-group">
  <p dir="rtl" style="font-size: 20px !important; ">د ازموینې ډول / Exam Type</p>

  <select dir="rtl" class="form-select"  tabindex="68" name="examType" id="examType" class="form-control" placeholder="" >
    <option value="">انتخاب / Choose</option>
    <option value="بهاری">بهاری / Spring</option>
    <option value="خزانی">خزانی / Fall</option>
  </select>

 
</div>

<br>


<div class="form-group">
  <p dir="rtl" style="font-size: 20px !important; ">پوهنځې / Faculty</p>

  <select dir="rtl" class="form-select"  tabindex="69" name="faculty" id="faculty" class="form-control" placeholder="" >
    <option value="">انتخاب</option>
          <option value="طب معالجوی">طب معالجوی / Curative Medicine</option>
          <option value="ستوماتولوژی">ستوماتولوژی / Stomatology</option>
          <option value="تکنالوژی طبی">تکنالوژی طبی / Medical Laboratory Science</option>
        </select>


</div>
    
<br>

<br >

      <h3 dir="rtl" class=" mb-3 fw-normal"> د ګډون کوونکي خپلوان / Relative of Student</h3>
     <hr>
      <br >


<div class="form-group">
  <p dir="rtl">اقارب نوم / Relative Name</p>
  <input type="text" name="relativeName" id="relativeName" tabindex="70" dir="rtl" class="form-control" placeholder="" />
 
</div>

<br>

<br>


<div class="form-group">
  <p dir="rtl">دخپلوۍ ډول / Relative Type</p>
  <input type="text" name="relativeType" id="relativeType" tabindex="71" dir="rtl" class="form-control" placeholder="" />
 
</div>

<br>




<div class="form-group">
  <p dir="rtl">اقارب دنده / Relative Job</p>
  <input type="text" name="relativeJob" tabindex="72" dir="rtl"  class="form-control" placeholder="" />

</div>

<br>


<div class="form-group">
  <p dir="rtl">د اقارب اړیکې شمیره / Relative Phone No</p>
  <input type="text" name="relativePhone" id="relativePhone" tabindex="73" dir="rtl"  class="form-control" placeholder="" />
 
</div>






<br>

<br >

<h3 dir="rtl" class=" mb-3 fw-normal">د ګډون کوونکي اوسني استوګنځې  / Student Current Resident</h3>
<hr>

<br >



<div class="form-group">
  <p dir="rtl">ولایت / Province</p>
  <input type="text" name="studentCurrentProvince"  id="studentCurrentProvince" tabindex="74" dir="rtl"  class="form-control" placeholder="" />

</div>

<br>


<div class="form-group">
  <p dir="rtl">ناحیه - ولسوالی / District</p>
  <input type="text" name="studentCurrentDistrict" id="studentCurrentDistrict" tabindex="75" dir="rtl" class="form-control" placeholder=""/>
 
</div>

<br>


<div class="form-group">
  <p dir="rtl">قریه / Village</p>
  <input type="text" name="studentCurrentVillage" id="studentCurrentVillage" tabindex="76" dir="rtl" class="form-control" placeholder="" />

</div>



<br>

<br >




<h3 dir="rtl" class=" mb-3 fw-normal">د ګډون کوونکي اصلی استوګنځې / Student Permanent Resident</h3>
<hr>

<br >



<div class="form-group">
  <p dir="rtl">ولایت / Province</p>
  <input type="text" name="studentProvince"  id="studentProvince" tabindex="74" dir="rtl"  class="form-control" placeholder="" />

</div>

<br>


<div class="form-group">
  <p dir="rtl">ناحیه - ولسوالی / District</p>
  <input type="text" name="studentDistrict" id="studentDistrict" tabindex="75" dir="rtl" class="form-control" placeholder=""/>
 
</div>

<br>


<div class="form-group">
  <p dir="rtl">قریه / Village</p>
  <input type="text" name="studentVillage" id="studentVillage" tabindex="76" dir="rtl" class="form-control" placeholder="" />

</div>

<br>

<br >

      <h3 dir="rtl" class=" mb-3 fw-normal">د داوطلب شخصی معلومات / Student's Contact Details</h3>
     <hr>
      <br >


<div class="form-group">
 <p dir="rtl">د تذکري عمومي شمیره / National ID No</p>
  <input type="text" name="studentTazkiraNo" id="studentTazkiraNo" tabindex="77" dir="rtl"  class="form-control" placeholder="" />
 
</div>

<br>


<div class="form-group">
  <p dir="rtl">د پاسپورت شمیره / Passport No</p>
  <input type="text" name="studentPassport" tabindex="78" dir="rtl" class="form-control" placeholder=""/>

</div>

<br>



<div class="form-group">
  <p dir="rtl">لیسه / School Name</p>
  <input type="text" name="studentSchool" tabindex="79" dir="rtl" class="form-control" placeholder="" />

</div>

<br>

<div class="form-group">
  <p dir="rtl">دفراغت کال / Year of Graduation</p>
  <input type="text" name="schoolGraduateYear" tabindex="80" dir="rtl"  class="form-control" placeholder="" />

</div>

<br>



<div class="form-group">
  <p dir="rtl">د اړیکې شمیره / Student Phone No</p>
  <input type="text" name="studentPhone" id="studentPhone" tabindex="81" dir="rtl"  class="form-control" placeholder="" />

</div>

<br>


<div class="form-group">
  <p dir="rtl">بریښنالیک پته / Student Email</p>
  <input type="text" name="studentEmail" id="email" tabindex="82" dir="rtl"  class="form-control" placeholder=""/>

</div>

<br>



<div class="form-group">
  <p dir="rtl">آپلود عکس / Student Photo Upload</p>
  <input type="file" name="certificate"  id="certificate" accept="image/x-png,image/gif,image/jpeg" tabindex="83" dir="rtl"  class="form-control" placeholder=""/>
  
 
 
</div>

<br>

<div class="form-group">
<p dir="rtl">آپلود تذکره / National ID Upload</p>
  <input type="file" name="certificate1" id="certificate1" tabindex="84" dir="rtl"  class="form-control" placeholder="" />
 
</div>

<br>


<div class="form-group">
    <p dir="rtl">آپلود شهادت نامه / D.M.C/Certificate Upload</p>
  <input type="file" name="certificate2" id="certificate2" tabindex="85" dir="rtl"  class="form-control" placeholder="" />

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


  
    


  
      <button class="w-100 btn btn-lg btn-primary" tabindex="86" type="submit" id="s" >Register</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>


      </div>
    </form>
      </div>
  </div>
  </div>
  

<script src="Scripts/jquery-1.10.2.min.js"></script>
 <script src="Scripts/bootstrap.min.js"></script>
    <link href="Scripts/bootstrap.min.css" rel="stylesheet" />

<script src="{{ asset('main.js') }}"></script>
  
<script type="text/javascript">


// 


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});



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

         var stName = $("#studentName").val();
         var stName1 = $("#studentNameLetter1").val();
         var stFatherName = $("#studentFatherName").val();
         var stFatherName1 = $("#studentFatherNameLetter1").val();
         var stLastname = $("#studentLastName").val();
         var stLastname1 = $("#studentLastNameLetter1").val();
         var stGrandFatherName = $("#studentGrandFatherName").val();
         var stGrandFatherName1 = $("#studentGrandFatherNameLetter1").val();
         var DoB = $("#DoB").val();
         var gender = $("#studentGender").val();
         var examLang = $("#examLang").val();
         var examType = $("#examType").val();
         var faculty = $("#faculty").val();
         var relativeName = $("#relativeName").val();
         var relativePhone = $("#relativePhone").val();
         var studentProvince = $("#studentProvince").val();
         var studentDistrict = $("#studentDistrict").val();
         var studentVillage = $("#studentVillage").val();
         var stTazkiraNo = $("#studentTazkiraNo").val();
         var stPhone = $("#studentPhone").val();
        
         var Email = $("#email").val();
         var certificate = $("#certificate").val();
         var certificate1 = $("#certificate1").val();
         var certificate2 = $("#certificate2").val();
    

 if (stName != "" ) 
 {

  var fileName = document.getElementById("certificate").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
            //TO DO
      

   var fileName1 = document.getElementById("certificate1").value;
        var idxDot1 = fileName1.lastIndexOf(".") + 1;
        var extFile1 = fileName1.substr(idxDot1, fileName1.length).toLowerCase();
        if (certificate1 == "" || extFile1=="jpg" || extFile1=="jpeg" || extFile1=="png")
        
        {
            
            
            
     var fileName2 = document.getElementById("certificate2").value;
        var idxDot2 = fileName2.lastIndexOf(".") + 1;
        var extFile2 = fileName2.substr(idxDot2, fileName2.length).toLowerCase();
        if (certificate2 == "" || extFile2=="jpg" || extFile2=="jpeg" || extFile2=="png")
       {



  $("#loadingBox").modal("show");

 
        var file_data = $('#certificate').prop('files')[0];
        var file_data1 = $('#certificate1').prop('files')[0];
        var file_data2 = $('#certificate2').prop('files')[0];

        var form_data = new FormData(this);
        form_data.append('file', file_data);
        form_data.append('file', file_data1);
        form_data.append('file', file_data2);

             $.ajax({
                      url:'/record',
                      dataType : 'text',           // what to expect back from the PHP script, if anything
                      cache : false,
                      contentType : false,
                      processData : false,
                      data : form_data,                         
                      type : 'post',
                     
                    }).done(function (data) {
                      console.log(data);

                      if (!data.success) {
                     
                               alert('Some Error');
                    
                      } else {
                        
                          alert(data.message);
                        
                      }

                    });

   
 
         
         }else{
            alert("Only jpg/jpeg and png files are allowed!");
        } 
         
         }else{
            alert("Only jpg/jpeg and png files are allowed!");
        }   
         
         
        }else{
            alert("Only jpg/jpeg and png files are allowed!");
        }   
  


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


$('#studentName').on('change', function() {
  $("#studentName").removeClass("errorBackground");
});

$('#studentNameLetter1').on('change', function() {
  if($("#studentNameLetter1").val().length == 1) {
     $("#studentNameLetter1").removeClass("errorBackground");
  }
 
});

$('#studentFatherName').on('change', function() {
  $("#studentFatherName").removeClass("errorBackground");
});

$('#studentFatherNameLetter1').on('change', function() {
  $("#studentFatherNameLetter1").removeClass("errorBackground");
});

$('#studentLastName').on('change', function() {
  $("#studentLastName").removeClass("errorBackground");
});

$('#studentLastNameLetter1').on('change', function() {
  $("#studentLastNameLetter1").removeClass("errorBackground");
});

$('#studentGrandFatherName').on('change', function() {
  $("#studentGrandFatherName").removeClass("errorBackground");
});

$('#studentGrandFatherNameLetter1').on('change', function() {
  $("#studentGrandFatherNameLetter1").removeClass("errorBackground");
});

$('#DoB').on('change', function() {
  $("#DoB").removeClass("errorBackground");
});

$('#studentGender').on('change', function() {
  $("#studentGender").removeClass("errorBackground");
});

$('#examLang').on('change', function() {
  $("#examLang").removeClass("errorBackground");
});

$('#examType').on('change', function() {
  $("#examType").removeClass("errorBackground");
});

$('#faculty').on('change', function() {
  $("#faculty").removeClass("errorBackground");
});

$('#relativeName').on('change', function() {
  $("#relativeName").removeClass("errorBackground");
});

$('#relativePhone').on('change', function() {
  $("#relativePhone").removeClass("errorBackground");
});

$('#studentProvince').on('change', function() {
  $("#studentProvince").removeClass("errorBackground");
});

$('#studentDistrict').on('change', function() {
  $("#studentDistrict").removeClass("errorBackground");
});

$('#studentVillage').on('change', function() {
  $("#studentVillage").removeClass("errorBackground");
});

$('#studentTazkiraNo').on('change', function() {
  $("#studentTazkiraNo").removeClass("errorBackground");
});

$('#studentPhone').on('change', function() {
  $("#studentPhone").removeClass("errorBackground");
});

$('#email').on('change', function() {

     $("#email").removeClass("errorBackground");
  
 
});

$('#certificate').on('change', function() {
  $("#certificate").removeClass("errorBackground");
});



if(stName != "")
{
  $("#studentName").removeClass("errorBackground");
}

if(stName1 != "" && $("#studentNameLetter1").val().length == 1)
{
  $("#studentNameLetter1").removeClass("errorBackground");
}

if(stFatherName != "")
{
  $("#studentFatherName").removeClass("errorBackground");
}

if(stFatherName1 != "" && $("#studentFatherNameLetter1").val().length == 1)
{
  $("#studentFatherNameLetter1").removeClass("errorBackground");
}

if(stLastname != "")
{
  $("#studentLastName").removeClass("errorBackground");
}

if(stLastname1 != "" && $("#studentLastNameLetter1").val().length == 1)
{
  $("#studentLastNameLetter1").removeClass("errorBackground");
}

if(stGrandFatherName != "")
{
  $("#studentGrandFatherName").removeClass("errorBackground");
}

if(stGrandFatherName1 != "" && $("#studentGrandFatherNameLetter1").val().length == 1)
{
  $("#studentGrandFatherNameLetter1").removeClass("errorBackground");
}

if(DoB != "")
{
  $("#DoB").removeClass("errorBackground");
}


if(gender != "")
{
  $("#studentGender").removeClass("errorBackground");
}


if(examLang != "")
{
  $("#examLang").removeClass("errorBackground");
}

if(examType != "")
{
  $("#examType").removeClass("errorBackground");
}


if(faculty != "")
{
  $("#faculty").removeClass("errorBackground");
}

if(relativeName != "")
{
  $("#relativeName").removeClass("errorBackground");
}

if(relativePhone != "")
{
  $("#relativePhone").removeClass("errorBackground");
}

if(studentProvince != "")
{
  $("#studentProvince").removeClass("errorBackground");
}

if(studentDistrict != "")
{
  $("#studentDistrict").removeClass("errorBackground");
}

if(studentVillage != "")
{
  $("#studentVillage").removeClass("errorBackground");
}

if(stTazkiraNo != "")
{
  $("#studentTazkiraNo").removeClass("errorBackground");
}

if(stPhone != "")
{
  $("#studentPhone").removeClass("errorBackground");
}

if(Email != "")
{
  $("#email").removeClass("errorBackground");
}

if(certificate != "")
{
  $("#certificate").removeClass("errorBackground");
}







                  $('#fail').show();
                  $('#fail').text("Unable to send your message. Please fill all then try again.");


                   setTimeout(function () {
                        $("#fail").hide();
                    }, 5000);

}



    })

</script>




  