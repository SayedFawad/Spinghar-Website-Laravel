<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Daily Tasks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>

 <script type="text/javascript">
$().ready(function () {
    $("#loginForm").validate({
        rules: {
            username: "required",
            password: "required"
            
        },
        messages: {
            username: "* Username",
            password: "* Password"
            
        }
    });
});
</script>







<style type="text/css">
#loginForm label.error {
  padding-left:8px;
  background-color:#ffffff;
  width: auto;
  display: inline;
  }
</style>

             <!-- Styles -->
        <style>
         
              body{
          background-color:#eef;
         }
             
         #div{
          background-color: #fff;
          width:600px;
          height:100%;
          z-index: -1;
          border-color:gray;
          border:0.5px;
          box-shadow: 0px 0px 2px gray;
          border-radius:5px;
         }
              
              #button{
                width: 100px;
                height: 33px;
                background-color: #eee;
                text-align:center;
                color:#000;


              }

              .inputs
              {
                color:black;
                border:1px 1px;
                
                width: 300px;
                height: 30px;

                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                
                margin: 0;


              }




        </style>



    </head>
    <body dir="rtl">
           <center>
            <div id="div">
              <br />
              <br />
			  <h1>
			  ثبت فعالیت های روزمره و ساعتوار
			  
			  <br>
			  آمریت نشرات پوهنتون سپین غر شعبه کابل
			  </h1>
              <br />
              <br />
           
              <form action="/save_daily" id="loginForm" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
               
                <table>
                   <tr> 
                       <td>نوع فعالیت : </td> 
                       <td> 
                            
                             <textarea name="task" class="summernote" id="task" style="color:#000;width: 450px;height: 150px;"></textarea>    
                        </td>
                    </tr>
                    <tr>
                       <td>روز : </td> <td> <input type="text" name="day" id="day" class="inputs"></td>
                   </tr>
                    <tr>
                   
                        <td>  </td>
                        <td></td>
                   </tr>
                   <tr>
                        <td>  </td>
                        <td><input type="submit" id="button" name="login" value="اضافه کردن" > </td>
                   </tr>
                </table>


             </form>

           <!-- <div> <a href="insertForm"> Create New User </a> </div> -->

         </div>

           <br />
                          

         </center>

    </body>
</html>
