<html>
<head>
<script src="httpFolder/jquery-1.11.3.min.js"></script>
  
  <!-- include libraries BS -->
  <link rel="stylesheet" href="httpFolder/maxcdn.bootstrapcdn.css" />
  <script src="httpFolder/popper.js"></script>

  <script src="httpFolder/bootstrap.js"></script> 
</head>
<body dir="rtl"> 

<center>

    <img src="images/task_top.JPG" />
</center>
 <br />
<div dir="ltr">

    <?php
        if(isset($_COOKIE['my_cookie_endDay']) && !empty($_COOKIE['my_cookie_endDay']))
        {
            echo $_COOKIE['my_cookie_endDay'];
        }

    ?>

    تاریخ


</div>

   لیست فعالیت ها
              <br />
			  <ul>

                 @foreach ($title as $rec)

                        

                         
                             <li> {{ $rec->task }} </li>
                         
                 @endforeach  
            </ul>

			
			  
			 

			 
	


</body>
</html>