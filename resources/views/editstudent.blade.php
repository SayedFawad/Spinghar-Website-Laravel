
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
          <form method="post" action="/registers/updateRegister" name="contact_form" id="contact_form"  enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="formbox" dir="rtl">

     


      <div id="fail" class="alert alert-danger" role="alert" >
       
       </div>
    
      <h3 class=""> Edit student / ثبت داوطلبان جدید</h3>

      <h3 dir="rtl" class=" mb-3 fw-normal">Profile of the student / مشخصات داوطلب</h3>


      <hr>
  
      <div class="form-group">

         @foreach($title as $var)

         <input type="hidden" name="id" value="{{$var->id}}">

        <p dir="rtl">نوم /  Name</p>
        <input type="text" name="studentName" id="studentName" value=" {{$var->studentName}}" tabindex="1" dir="rtl"  class="form-control" placeholder="" />
       
       
		</div>
    <p dir="rtl">نوم حروف / Letters Of Name</p>
    <table>
      <tr>
        <td>
          <div class="form-group" dir="rtl">
          
                <input type="text" name="studentNameLetter1" id="studentNameLetter1" value="{{$var->studentNameLetter1}}"  tabindex="2"   style="width:40px" class="form-control" value=" " />
               
             
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter2" value="{{$var->studentNameLetter2}}"  tabindex="3"  style="width:40px" class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter3" value="{{$var->studentNameLetter3}}" tabindex="4"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter4" value="{{$var->studentNameLetter4}}"  tabindex="5"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter5" value="{{$var->studentNameLetter5}}" tabindex="6"  style="width:40px"  class="form-control" placeholder="" />
               
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter6" value="{{$var->studentNameLetter6}}" tabindex="7"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter7" value="{{$var->studentNameLetter7}}" tabindex="8"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter8" value="{{$var->studentNameLetter8}}" tabindex="9"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter9" value="{{$var->studentNameLetter9}}" tabindex="10"  style="width:40px"  class="form-control" placeholder="" />
               
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter10" value="{{$var->studentNameLetter10}}" tabindex="11"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter11" value="{{$var->studentNameLetter11}}" tabindex="12"  style="width:40px"  class="form-control" placeholder="" />
             
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter12" value="{{$var->studentNameLetter12}}" tabindex="13"  style="width:40px"  class="form-control" placeholder="" />
              
            </div>
      </td>
        <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentNameLetter13" value="{{$var->studentNameLetter13}}" tabindex="14"  style="width:40px"  class="form-control" placeholder="" />
               
            </div>
      </td>
        <td>
            <div class="form-group" dir="rtl">
             
                  <input type="text" name="studentNameLetter14" value="{{$var->studentNameLetter14}}" tabindex="15" style="width:40px"  class="form-control" placeholder="" />
               
              </div>
        </td>
        <td>
          <div class="form-group" dir="rtl">
            
            <input type="text" name="studentNameLetter15" value="{{$var->studentNameLetter15}}" tabindex="16"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
        </td>
      </tr>
    </table>
    
    <br>


    <div class="form-group">
      <p dir="rtl">پلارنوم / Father Name</p>
      <input type="text" name="studentFatherName" id="studentFatherName" value="{{$var->studentFatherName}}" tabindex="17" dir="rtl"  class="form-control" placeholder="" />
    
  </div>

  <p dir="rtl">پلارنوم حروف / Letters of Father Name</p>
  <table>
    <tr>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter1" id="studentFatherNameLetter1" value="{{$var->studentFatherNameLetter1}}"  tabindex="18"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter2" value="{{$var->studentFatherNameLetter2}}"  tabindex="19"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter3" value="{{$var->studentFatherNameLetter3}}" tabindex="20"  style="width:40px" class="form-control" placeholder="" />
           
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter4" value="{{$var->studentFatherNameLetter4}}" tabindex="21"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter5" value="{{$var->studentFatherNameLetter5}}" tabindex="22"  style="width:40px"  class="form-control" placeholder="" />
           
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter6" value="{{$var->studentFatherNameLetter6}}" tabindex="23"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter7" value="{{$var->studentFatherNameLetter7}}" tabindex="24"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter8" value="{{$var->studentFatherNameLetter8}}" tabindex="25"  style="width:40px"  class="form-control" placeholder="" />
          
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter9" value="{{$var->studentFatherNameLetter9}}" tabindex="26"  style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter10" value="{{$var->studentFatherNameLetter10}}" tabindex="27"  style="width:40px"  class="form-control" placeholder="" />
          
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter11" value="{{$var->studentFatherNameLetter11}}" tabindex="28"  style="width:40px"  class="form-control" placeholder="" />
           
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter12" value="{{$var->studentFatherNameLetter12}}" tabindex="29"  style="width:40px" class="form-control" placeholder="" />
             
          </div>
    </td>
      <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentFatherNameLetter13" value="{{$var->studentFatherNameLetter13}}" tabindex="30"  style="width:40px" class="form-control" placeholder="" />
             
          </div>
    </td>
      <td>
          <div class="form-group" dir="rtl">
           
                <input type="text" name="studentFatherNameLetter14" value="{{$var->studentFatherNameLetter14}}" tabindex="31" style="width:40px"  class="form-control" placeholder="" />
                
            </div>
      </td>
      <td>
        <div class="form-group" dir="rtl">
          
          <input type="text" name="studentFatherNameLetter15" value="{{$var->studentFatherNameLetter15}}" tabindex="32"  style="width:40px" class="form-control" placeholder="" />
       
      </div>
      </td>
    </tr>
  </table>

<br>


<div class="form-group">
  <p dir="rtl">تخلص / Last Name</p>
  <input type="text" name="studentLastName" id="studentLastName" value="{{$var->studentLastName}}" tabindex="33" dir="rtl"  class="form-control" placeholder="" />

</div>
   
<p dir="rtl">تخلص حروف / Letters of Last Name</p>
<table>
  <tr>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter1" id="studentLastNameLetter1" value="{{$var->studentLastNameLetter1}}" tabindex="34"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter2" value="{{$var->studentLastNameLetter2}}" tabindex="35"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter3" value="{{$var->studentLastNameLetter3}}"  tabindex="36"  style="width:40px"  class="form-control" placeholder="" />
      
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter4" value="{{$var->studentLastNameLetter4}}" tabindex="37"  style="width:40px" class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter5" value="{{$var->studentLastNameLetter5}}" tabindex="38"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter6" value="{{$var->studentLastNameLetter6}}" tabindex="39"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter7" value="{{$var->studentLastNameLetter7}}" tabindex="40"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter8" value="{{$var->studentLastNameLetter8}}" tabindex="41"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter9" value="{{$var->studentLastNameLetter9}}" tabindex="42"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter10" value="{{$var->studentLastNameLetter10}}" tabindex="43"  style="width:40px"  class="form-control" placeholder="" />
        
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter11" value="{{$var->studentLastNameLetter11}}" tabindex="44"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter12" value="{{$var->studentLastNameLetter12}}" tabindex="45"  style="width:40px"  class="form-control" placeholder="" />
     
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentLastNameLetter13" value="{{$var->studentLastNameLetter13}}" tabindex="46"  style="width:40px"  class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentLastNameLetter14" value="{{$var->studentLastNameLetter14}}" tabindex="47" style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
    <td>
      <div class="form-group" dir="rtl">
        
        <input type="text" name="studentLastNameLetter15" value="{{$var->studentLastNameLetter15}}" tabindex="48"  style="width:40px"  class="form-control" placeholder="" />
       
    </div>
    </td>
  </tr>
</table>

<br>


<div class="form-group">
  <p dir="rtl">دنیکه نوم / Grand Father Name</p>
  <input type="text" name="studentGrandFatherName" id="studentGrandFatherName" value="{{$var->studentGrandFatherName}}" tabindex="49" dir="rtl"  class="form-control" placeholder="" />
 
</div>

<p dir="rtl">دنیکه نوم حروف / Letters of Grand Father Name</p>
<table>
  <tr>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter1"  id="studentGrandFatherNameLetter1" value="{{$var->studentGrandFatherNameLetter1}}" tabindex="50"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter2" value="{{$var->studentGrandFatherNameLetter2}}" tabindex="51"  style="width:40px"  class="form-control" placeholder="" />
        
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter3" value="{{$var->studentGrandFatherNameLetter3}}" tabindex="52"  style="width:40px"  class="form-control" placeholder="" />

        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter4" value="{{$var->studentGrandFatherNameLetter4}}" tabindex="53"  style="width:40px"  class="form-control" placeholder="" />
        
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter5" value="{{$var->studentGrandFatherNameLetter5}}" tabindex="54"  style="width:40px"  class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter6" value="{{$var->studentGrandFatherNameLetter6}}" tabindex="55"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter7" value="{{$var->studentGrandFatherNameLetter7}}" tabindex="56"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter8" value="{{$var->studentGrandFatherNameLetter8}}" tabindex="57"  style="width:40px" class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter9" value="{{$var->studentGrandFatherNameLetter9}}" tabindex="58"  style="width:40px"  class="form-control" placeholder="" />
        
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter10" value="{{$var->studentGrandFatherNameLetter10}}" tabindex="59"  style="width:40px"  class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter11" value="{{$var->studentGrandFatherNameLetter11}}" tabindex="60"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter12" value="{{$var->studentGrandFatherNameLetter12}}" tabindex="61"  style="width:40px"  class="form-control" placeholder="" />
         
        </div>
  </td>
    <td>
      <div class="form-group" dir="rtl">
       
            <input type="text" name="studentGrandFatherNameLetter13" value="{{$var->studentGrandFatherNameLetter13}}" tabindex="62"  style="width:40px"  class="form-control" placeholder="" />
          
        </div>
  </td>
    <td>
        <div class="form-group" dir="rtl">
         
              <input type="text" name="studentGrandFatherNameLetter14" value="{{$var->studentGrandFatherNameLetter14}}" tabindex="63" style="width:40px"  class="form-control" placeholder="" />
            
          </div>
    </td>
    <td>
      <div class="form-group" dir="rtl">
        
        <input type="text" name="studentGrandFatherNameLetter15" value="{{$var->studentGrandFatherNameLetter15}}" tabindex="64"  style="width:40px" class="form-control" placeholder="" />
     
    </div>
    </td>
  </tr>
</table>


<br>


<div class="form-group">
  <p dir="rtl">د زیږیدو کال / Date of Birth</p>
  <input type="text" name="DoB" id="DoB" value="{{$var->DoB}}" tabindex="65" dir="rtl"  class="form-control" placeholder="dd/mm/yyyy" />

</div>

<br>

<table style="max-width: 600px !important; min-width: 300px !important;">
  <tr>
    <td>
<div class="form-group">
  <p dir="rtl" style="font-size: 20px !important; ">جنس / Gender</p>

  <select dir="rtl" class="form-select" tabindex="66" name="studentGender" id="studentGender" class="form-control" placeholder="" >
    <option value="{{$var->studentGender}}">{{$var->studentGender}}</option>
    <option value="ذکور">ذکور / Male</option>
    <option value="اناث">اناث / Female</option>
  </select>

  
</div>
    </td>
    <td>
<div class="form-group">
  <p dir="rtl" style="font-size: 20px !important; ">د ازموینې ژبه / Exam Language</p>

  <select dir="rtl" class="form-select"  tabindex="67" name="examLang" id="examLang" class="form-control" placeholder="" >
    <option value="{{$var->examLang}}">{{$var->examLang}}</option>
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
    <option value="{{$var->examType}}">{{$var->examType}}</option>
    <option value="بهاری">بهاری / Spring</option>
    <option value="خزانی">خزانی / Fall</option>
  </select>

 
</div>

<br>


<div class="form-group">
  <p dir="rtl" style="font-size: 20px !important; ">پوهنځې / Faculty</p>

  <select dir="rtl" class="form-select"  tabindex="69" name="faculty" id="faculty" class="form-control" placeholder="" >
    <option value="{{$var->faculty}}"> {{$var->faculty}}</option>
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
  <input type="text" name="relativeName" id="relativeName"  value="{{$var->relativeName}}" tabindex="70" dir="rtl" class="form-control" placeholder="" />
 
</div>

<br>

<br>


<div class="form-group">
  <p dir="rtl">دخپلوۍ ډول / Relative Type</p>
  <input type="text" name="relativeType" id="relativeType" value="{{$var->relativeType}}" tabindex="71" dir="rtl" class="form-control" placeholder="" />
 
</div>

<br>




<div class="form-group">
  <p dir="rtl">اقارب دنده / Relative Job</p>
  <input type="text" name="relativeJob" value="{{$var->relativeJob}}" tabindex="72" dir="rtl"  class="form-control" placeholder="" />

</div>

<br>


<div class="form-group">
  <p dir="rtl">د اقارب اړیکې شمیره / Relative Phone No</p>
  <input type="text" name="relativePhone" id="relativePhone" value="{{$var->relativePhone}}" tabindex="73" dir="rtl"  class="form-control" placeholder="" />
 
</div>



<br>

<br >

<h3 dir="rtl" class=" mb-3 fw-normal">د ګډون کوونکي اوسنی استوګنځې / Student Current Resident</h3>
<hr>

<br >



<div class="form-group">
  <p dir="rtl">ولایت / Province</p>
  <input type="text" name="studentProvince"  id="studentProvince" value="{{$var->studentProvince}}" tabindex="74" dir="rtl"  class="form-control" placeholder="" />

</div>

<br>


<div class="form-group">
  <p dir="rtl">ناحیه - ولسوالی / District</p>
  <input type="text" name="studentDistrict" id="studentDistrict" value="{{$var->studentDistrict}}" tabindex="75" dir="rtl" class="form-control" placeholder=""/>
 
</div>

<br>


<div class="form-group">
  <p dir="rtl">قریه / Village</p>
  <input type="text" name="studentVillage" id="studentVillage" value="{{$var->studentVillage}}" tabindex="76" dir="rtl" class="form-control" placeholder="" />

</div>

<br>




<br>

<br >

<h3 dir="rtl" class=" mb-3 fw-normal">د ګډون کوونکي اصلی استوګنځې / Student Permanent Resident</h3>
<hr>

<br >



<div class="form-group">
  <p dir="rtl">ولایت / Province</p>
  <input type="text" name="studentMainResidence_province"  id="studentMainResidence_province" value="{{$var->studentMainResidence_province}}" tabindex="74" dir="rtl"  class="form-control" placeholder="" />

</div>

<br>


<div class="form-group">
  <p dir="rtl">ناحیه - ولسوالی / District</p>
  <input type="text" name="studentMainResidence_district" id="studentMainResidence_district" value="{{$var->studentMainResidence_district}}" tabindex="75" dir="rtl" class="form-control" placeholder=""/>
 
</div>

<br>


<div class="form-group">
  <p dir="rtl">قریه / Village</p>
  <input type="text" name="studentMainResidence_village" id="studentMainResidence_village" value="{{$var->studentMainResidence_village}}" tabindex="76" dir="rtl" class="form-control" placeholder="" />

</div>

<br>

<br >

      <h3 dir="rtl" class=" mb-3 fw-normal">د داوطلب شخصی معلومات / Student's Contact Details</h3>
     <hr>
      <br >


<div class="form-group">
  <p dir="rtl">د تذکري عمومي شمیره / National ID No</p>
  <input type="text" name="studentTazkiraNo" id="studentTazkiraNo" value="{{$var->studentTazkiraNo}}" tabindex="77" dir="rtl"  class="form-control" placeholder="" />
 
</div>

<br>


<div class="form-group">
  <p dir="rtl">د پاسپورت شمیره / Passport No</p>
  <input type="text" name="studentPassport" value="{{$var->studentPassport}}" tabindex="78" dir="rtl" class="form-control" placeholder=""/>

</div>

<br>


<div class="form-group">
  <p dir="rtl">لیسه / School Name</p>
  <input type="text" name="studentSchool" value="{{$var->studentSchool}}" tabindex="79" dir="rtl" class="form-control" placeholder="" />

</div>

<br>

<div class="form-group">
  <p dir="rtl">دفراغت کال / Year of Graduation</p>
  <input type="text" name="schoolGraduateYear" value="{{$var->schoolGraduateYear}}" tabindex="80" dir="rtl"  class="form-control" placeholder="" />

</div>

<br>



<div class="form-group">
  <p dir="rtl">د اړیکې شمیره / Student Phone No</p>
  <input type="text" name="studentPhone" id="studentPhone" value="{{$var->studentPhone}}" tabindex="81" dir="rtl"  class="form-control" placeholder="" />

</div>

<br>


<div class="form-group">
  <p dir="rtl">بریښنالیک پته / Student Email</p>
  <input type="text" name="studentEmail" id="email" value="{{$var->studentEmail}}" tabindex="82" dir="rtl"  class="form-control" placeholder=""/>

</div>

<br>












<br>

 @endforeach


 

 


  
    


  
      <button class="w-100 btn btn-lg btn-primary" tabindex="86" type="submit" id="SubmetRecord" >Update</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>


      </div>
    </form>
      </div>
  </div>
  </div>
  

<script src="Scripts/jquery-1.10.2.min.js"></script>
 <script src="Scripts/bootstrap.min.js"></script>
    <link href="Scripts/bootstrap.min.css" rel="stylesheet" />


  




  