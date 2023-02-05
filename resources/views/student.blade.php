<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Spinghar University (Kabul Campus)</title>
	

    <link href="Scripts/bootstrap.min.css" rel="stylesheet" />
   

   <style type="text/css">
   	.error-text{
   		font-size: 15px !important;
   		

   	}
   </style>

</head>
<body>



<nav   id="nav" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="color: black !important;background-color:rgb(148, 221, 3) !important">
    <div class="container-fluid" >

      <img src="8877.png" style="width:60px; height:auto">

      <a class="navbar-brand" href="#" style="color: black !important;">&nbsp;&nbsp; Spinghar University (Kabul Campus) &nbsp; &nbsp; MIS - Online Registration Form</a>
       
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

 <center>
 	<a href="./">
       Home
      </a>
 </center> 


<br>
<br>

  <div class="container-fluid" style="font-size: 20px !important; float:right !important">
  <div class="row">
      <div class="col-xs-9 col-md-9">
          <form method="post" action="save" name="main_form" id="main_form" enctype="multipart/form-data">
          @csrf
            <div class="formbox" dir="rtl">
       
         <p id="myText"></p>
     
       
    
      <h3 class=""> Registration of new student / ثبت داوطلبان جدید</h3>

      <h3 dir="rtl" class=" mb-3 fw-normal">Profile of the student / مشخصات داوطلب</h3>


      <hr>
  
      <div class="form-group">
        <p dir="rtl">نوم /  Name</p>
        <input type="text" name="name" id="name" tabindex="1" dir="rtl"  class="form-control" placeholder="" />

        <span dir="ltr" class="text-danger error-text name_error"></span>
        <br>
        <span dir="ltr" class="text-danger error-text studentNameLetter1_error"></span>
		</div>
    <p dir="rtl">نوم حروف / Letters Of Name</p>
    <table>
      <tr>
        <td>
        	
          <div class="form-group" dir="rtl">
          
                <input type="text" name="studentNameLetter1" id="studentNameLetter1"  tabindex="2"   style="width:40px" class="form-control" placeholder="" />
              
                 

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

       <span dir="ltr" class="text-danger error-text studentFatherName_error"></span>
       <br>
        <span dir="ltr" class="text-danger error-text studentFatherNameLetter1_error"></span>
    
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

  <span dir="ltr" class="text-danger error-text studentLastName_error"></span>
  <br>
  <span dir="ltr" class="text-danger error-text studentLastNameLetter1_error"></span>

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

  <span dir="ltr" class="text-danger error-text studentGrandFatherName_error"></span>
  <br>
   <span dir="ltr" class="text-danger error-text studentGrandFatherNameLetter1_error"></span>
 
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

     <span dir="ltr" class="text-danger error-text DoB_error"></span>


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

    <span dir="ltr" class="text-danger error-text studentGender_error"></span>
  
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
   
     <span dir="ltr" class="text-danger error-text examLang_error"></span>

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

   <span dir="ltr" class="text-danger error-text examType_error"></span>
 
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


    <span dir="ltr" class="text-danger error-text faculty_error"></span>

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

   <span dir="ltr" class="text-danger error-text studentCurrentProvince_error"></span>

</div>

<br>


<div class="form-group">
  <p dir="rtl">ناحیه - ولسوالی / District</p>
  <input type="text" name="studentCurrentDistrict" id="studentCurrentDistrict" tabindex="75" dir="rtl" class="form-control" placeholder=""/>

  <span dir="ltr" class="text-danger error-text studentCurrentDistrict_error"></span>
 
</div>

<br>


<div class="form-group">
  <p dir="rtl">قریه / Village</p>
  <input type="text" name="studentCurrentVillage" id="studentCurrentVillage" tabindex="76" dir="rtl" class="form-control" placeholder="" />

    <span dir="ltr" class="text-danger error-text studentCurrentVillage_error"></span>

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

  <span dir="ltr" class="text-danger error-text studentTazkiraNo_error"></span>
 
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

  <span dir="ltr" class="text-danger error-text studentPhone_error"></span>

</div>

<br>


<div class="form-group">
  <p dir="rtl">بریښنالیک پته / Student Email</p>
  <input type="text" name="studentEmail" id="studentEmail" tabindex="82" dir="rtl"  class="form-control" placeholder=""/>

   <span dir="ltr" class="text-danger error-text studentEmail_error"></span>

</div>

<br>



<div class="form-group">
  <p dir="rtl">آپلود عکس / Student Photo Upload</p>
  <input type="file" name="certificate"  id="certificate" accept="image/x-png,image/gif,image/jpeg" tabindex="83" dir="rtl"  class="form-control" placeholder=""/>

  <span dir="ltr" class="text-danger error-text certificate_error"></span>
  
 
 
</div>

<br>

<div class="form-group">
<p dir="rtl">آپلود تذکره / National ID Upload</p>
  <input type="file" name="certificate1" id="certificate1" tabindex="84" dir="rtl"  class="form-control" placeholder="" />

  <span dir="ltr" class="text-danger error-text certificate1_error"></span>
 
</div>

<br>


<div class="form-group">
    <p dir="rtl">آپلود شهادت نامه / D.M.C/Certificate Upload</p>
  <input type="file" name="certificate2" id="certificate2" tabindex="85" dir="rtl"  class="form-control" placeholder="" />

   <span dir="ltr" class="text-danger error-text certificate2_error"></span>

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
                <img src="images/loading.gif" style="width:160px; height:auto"> <br>
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







 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="Scripts/bootstrap.min.js"></script>




	<!--<script src="{{ asset('public/jquery-3.6.1.min.js') }}"></script>-->
      <!-- <script src="{{ asset('main.js') }}"></script> -->
      <script>
      	 $(function(){

               $("#main_form").on('submit', function(e){
   	           e.preventDefault();


                $("#loadingBox").modal("show");

                 var file_data = $('#certificate').prop('files')[0];
			        var file_data1 = $('#certificate1').prop('files')[0];
			        var file_data2 = $('#certificate2').prop('files')[0];

			        var form_data = new FormData(this);
			        form_data.append('file', file_data);
			        form_data.append('file', file_data1);
			        form_data.append('file', file_data2);
   	           

		       $.ajax({
		       	  url:$(this).attr('action'),
		       	  method:$(this).attr('method'),
		       	  data:form_data,
		       	  processData:false,
		       	  dataType:'json',
		       	  contentType:false,
		       	  beforeSend:function(){
		             $(document).find('span.error-text').text('');
		       	  },
		       	  success:function(data){

		       	  	 $("#loadingBox").modal("hide");

                      if(data.status == 2){
                      	alert(data.msg);
                      }

		              if(data.status == 0) {

		              	
		              	  $.each(data.error, function(prefix, val){
		                      $('span.'+prefix+'_error').text(val[0]);
		              	  });
		              }else{
		              	  $('#main_form')[0].reset();
		              	  alert(data.msg);
		              }
		       	  }
		       });

   });

      	 });
      </script>

</body>
</html>