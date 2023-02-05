<html>
<head>

   <link href="Scripts/bootstrap.min.css" rel="stylesheet" />
    <script src="{{ asset('jquery-3.6.1.min.js') }}"></script>
    <link href="Scripts/bootstrap.min.js" rel="stylesheet" />
  <!-- include libraries BS -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>  -->
</head>
<body>


<table class="table table-striped table-bordered"  style="font-size:14px;">
 <theads style="position: fixed !important; ;color: #000;">
  <tr style="color: #000 !important; ">
   <th style="width: 100px;">Registration Date</th>
   <th style="width: 30px;">ID</th>
   <th style="width: 200px;">Student Name</th>
  
   <th style="width: 150px;">Student FatherName</th>
   
   <th style="width: 150px;">Student Last Name</th>
   
   <th style="width: 200px;">Student Grand FatherName</th>
  
   <th style="width: 100px;">DoB</th>
   <th style="width: 100px;">Gender</th>
   <th style="width: 100px;">Exam Language</th>
   <th style="width: 100px;">Exam Type</th>
   <th style="width: 150px;">Relative Name</th>
   <th style="width: 150px;">Relative Type</th>
   <th style="width: 100px;">Relative Job</th>
   <th style="width: 100px;">Relative Phone</th>

   <th style="width: 200px;">Student Current Province</th>
   <th style="width: 200px;">Student Current District</th>
   <th style="width: 200px;">Student Current Village</th>

   <th style="width: 200px;">Student Permanent Province</th>
   <th style="width: 200px;">Student Permanent District</th>
   <th style="width: 200px;">Student Permanent Village</th>

   <th style="width: 100px;">Tazkira No</th>
   <th style="width: 100px;">Passport</th>
   <th style="width: 150px;">School</th>
   <th style="width: 200px;">Graduation Year</th>
   <th style="width: 150px;">Phone</th>
   <th style="width: 150px;">Email</th>
   <th style="width: 150px;">Chosen Faculty</th>
   <th style="width: 150px;">Photo</th>
   <th style="width: 150px;">Tazkira</th>
   <th style="width: 150px;">D.M.C Photo</th>
   <th>Update</th> 
   <th>Delete</th>
   <th>Print</th>
  </tr>
</thead>
    @foreach($main as $var)
     
      <tr scope="row" >
          <td style="background-color:#e5f7d0;" >{{$var->RegisteredDate}}</td>
      	 <td>{{$var->id}}</td>
         <td>{{$var->studentName}}</td>
        

          <td>{{$var->studentFatherName}}</td>
        

         <td>{{$var->studentLastName}}</td>
        

         <td>{{$var->studentGrandFatherName}}</td>
        

         <td>{{$var->DoB}}</td>
         <td>{{$var->studentGender}}</td>
         <td>{{$var->examLang}}</td>
         <td>{{$var->examType}}</td>
         <td>{{$var->relativeName}}</td>
         <td>{{$var->relativeType}}</td>
          <td>--</td>
         <td>{{$var->relativePhone}}</td>

         <td>{{$var->studentProvince}}</td>
         <td>{{$var->studentDistrict}}</td>
         <td>{{$var->studentVillage}}</td>

         <td>{{$var->studentMainResidence_province}}</td>
         <td>{{$var->studentMainResidence_district}}</td>
         <td>{{$var->studentMainResidence_village}}</td>

          <td>{{$var->studentTazkiraNo}}</td>
           <td>{{$var->studentPassport}}</td>
            <td>{{$var->studentSchool}}</td>
             <td>{{$var->schoolGraduateYear}}</td>
              <td>{{$var->studentPhone}}</td>
               <td>{{$var->studentEmail}}</td>
                <td>{{$var->faculty}}</td>

            <td> <img src="./images/{{$var->certificate}}" style="width:60px; height:auto;"> </td>
             <td><a href="./images/{{$var->certificate1}}" target="_blank">Tazkira Image</a></td>
             <td><a href="./images/{{$var->certificate2}}" target="_blank">D.M.C Image</a></td>
            
         <td><a href="/editRegister/{{$var->id}}" class="btn-primary" >Edit</a></td>
         <td><a href="/deleteContactReceive&{{$var->id}}" class="btn-primary" >Delete</a></td>
         
         
          <td>
              
             
          
             <form  method="post" action="/search">
       {{ csrf_field() }}
           <input type="hidden" value="{{$var->id}}" name="searchID" id="searchID" />
           <input type="submit" value="Print Preview" class="btn-default" />
      </form>
          
          </td>
      </tr>
     
    @endforeach
    
        
        

   
 
</table>




<div class="pagination">
    {!! $main->links() !!}
</div>



</body>
</html>