<html>
<head>
<script src="httpFolder/jquery-1.11.3.min.js"></script>
  
  <!-- include libraries BS -->
  <link rel="stylesheet" href="httpFolder/maxcdn.bootstrapcdn.css" />
  <script src="httpFolder/popper.js"></script>

  <script src="httpFolder/bootstrap.js"></script> 
</head>
<body> 

<center>

 <br />
              <br />
			  <h1>
			چاپ فعالیت روزمره
			  
			  <br>
			  آمریت نشرات پوهنتون سپین غر شعبه کابل
			  </h1>
              <br />
              <br />

     <form action="/search_daily" id="loginForm" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
               
                <table>
                   <tr> 
                       <td>
							<input type="text" name="start_day" id="start_day" class="inputs">   
					   </td> 
                       <td> 
                            : شروع تاریخ 
                           
                        </td>
                    </tr>
                    <tr>
                       <td>
					   <input type="text" name="end_day" id="end_day" class="inputs">
					   </td> 
					   <td> 
					       : ختم تاریخ 
					   </td>
                   </tr>
                    <tr>
                   
                        <td>  </td>
                        <td></td>
                   </tr>
                   <tr>
                        <td>  </td>
                        <td><input type="submit" id="button" name="login" value="چاپ کردن" > </td>
                   </tr>
                </table>


             </form>
			 
	</center>


</body>
</html>