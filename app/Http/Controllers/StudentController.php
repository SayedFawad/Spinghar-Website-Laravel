<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnlineRegister;
use App\Models\studentDoc;


use Validator;
use Session;
use DB;
use File;
use Crypt;
use Hash;

class StudentController extends Controller
{


  //facebook posts
  public function posts()
      {
       
        return view('home.posts');
      }








//Register New User Dashboard

   public function RegisterUser()
      {
       
       
        return view('registeruser');
      }


       public function SaveUser(Request $request){


         $curTime = new \DateTime();
         $created_at = $curTime->format("Y-m-d H:i:s");

        $name = $request->input('name');
        $position = $request->input('position');
        $department = $request->input('department');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $hashedPassword = Hash::make($password);


          if($username <> '' && $password <> '' && $email <> '')
        {

            $data = array(
                'name' => $name,
                'position' => $position,
                'department' => $department,
                'username' => $username,
                'email' => $email,
                'password' => $hashedPassword,
                'created_at' => $created_at 
            );
           
            DB::table('users')->insert($data);
            return back()->with('success', 'You have registered successfully');
         
        }
            else
        {
          return back()->with('fail', 'Please Fill in All!');
         
        }

    }

    
    

//add daily task


      public function add_daily()
      {
        
          if(session()->has('session_login'))
        {
               
                return view('daily');
        }
        else
        {
            return Redirect('login');
        }

      }



   
    public function save_daily(Request $request){

        $task = $request->input('task');
        $day = $request->input('day');
        
        if($task <> '' && $day <> '' )
        {

            $data = array(
                'task' => $task,
                'day' => $day  
            );
           
            DB::table('daily_tasks')->insert($data);
            return Redirect('/add_daily');
         
            // Session::flash('success','Thank you, We will reply you as soon as possible');
            
        }
            else
        {
          return Redirect('/');
         
        }
        
    }



        public function daily_management()
     {
         if(session()->has('session_login'))
        {
                
                return view('daily_management');
        }
        else
        {
            return Redirect('login');
        }
     }


      public function print_daily(Request $req)
      {
          session_start();

        $StartDay = $req->start_day;
        $EndDay = $req->end_day;
        $var1 = DB::table('daily_tasks')  
        ->where('date',$StartDay)
        ->get();

       if ($EndDay <> '') {
           

            setcookie('my_cookie_endDay', $EndDay, time() + (86400 * 1), "/");
       }

       

          $data1 = array(
    
                    'title'=>$var1
                    );
                
        
        return view('printTasks',$data1);
      }





    
    
    //added 1 mar 2022
    
    
//Added 23 Feb 2022


   public function login()
      {
             
        return view('login');
      }








 public function admin()
     {


      if(session()->has('session_login'))
      {
             $Var = DB::table('online_registers')->get();

               
                // $var1 = DB::table('main')
                
                // ->where('ID',1)
                // ->get();

                // $var2 = DB::table('main_pic')
                // ->get();


                $data = array(
                    'main'=>$Var
                    // 'title'=>$var1,
                    // 'photo'=>$var2
                    );
                
                return view('home',$data);
      }
      else
      {
        return Redirect('login');
      }

         
     }








      public function home_system(Request $req)
      {
        session_start();
         $username = $req->input('username');
     
          $password = $req->input('password');
         $hashedPassword = Hash::make($password);
 
       /*

$validate_admin = DB::table('administrators')
                            ->select('username')
                            ->where('username', Input::get('admin_username'))
                            ->first();

if ($validate_admin && Hash::check(Input::get('admin_password'), $validate_admin->password)) {
  // here you know data is valid
}

*/


       
             //allow
                    //check with database
             $check = DB::Table('users') 
                                       ->select('username','authorization','password')
                                       ->where('username', $username)
                                       ->first();

              if($check && Hash::check($password, $check->password) && $check->authorization == "admin")
               {



              $req->session()->put('session_login',$username.$hashedPassword);
                      $_SESSION['session_login'] = $username.$hashedPassword;

                      setcookie('my_cookie', $_SESSION['session_login'], time() + (86400 * 360), "/");
                                             
                     // if(isset($_COOKIE['my_cookie']) && !empty($_COOKIE['my_cookie']))
                     // {
              



              
                $Var = DB::table('online_registers')->get();

               
                // $var1 = DB::table('main')
                
                // ->where('ID',1)
                // ->get();

                // $var2 = DB::table('main_pic')
                // ->get();


                $data = array(
                    'main'=>$Var
                    // 'title'=>$var1,
                    // 'photo'=>$var2
                    );
                
                return view('home',$data);

              //   }
              // else
              //   {
              //     return Redirect('login');
              //   }
         }
         else
         {
            return back()->with('fail','Invalid Cridentials');
         }

       

      }

           public function admin_system()
     {
          if(session()->has('session_login'))
        {
               $Var = DB::table('online_registers')->paginate(10);

                
            





                $data = array(
                    'main'=>$Var
                    );
                
                return view('admin',$data);
        }
        else
        {
            return Redirect('login');
        }
     }


 



      public function updateRegister(Request $request)
    {
         
       if(session()->has('session_login'))
        {
            
        


        $id = $request->input('id');
        $studentName = $request->input('studentName');
        $studentNameLetter1 = $request->input('studentNameLetter1');
        $studentNameLetter2 = $request->input('studentNameLetter2');
        $studentNameLetter3 = $request->input('studentNameLetter3');
        $studentNameLetter4 = $request->input('studentNameLetter4');
        $studentNameLetter5 = $request->input('studentNameLetter5');
        $studentNameLetter6 = $request->input('studentNameLetter6');
        $studentNameLetter7 = $request->input('studentNameLetter7');
        $studentNameLetter8 = $request->input('studentNameLetter8');
        $studentNameLetter9 = $request->input('studentNameLetter9');
        $studentNameLetter10 = $request->input('studentNameLetter10');
        $studentNameLetter11 = $request->input('studentNameLetter11');
        $studentNameLetter12 = $request->input('studentNameLetter12');
        $studentNameLetter13 = $request->input('studentNameLetter13');
        $studentNameLetter14 = $request->input('studentNameLetter14');
        $studentNameLetter15 = $request->input('studentNameLetter15');

        $studentFatherName = $request->input('studentFatherName');
        $studentFatherNameLetter1 = $request->input('studentFatherNameLetter1');
        $studentFatherNameLetter2 = $request->input('studentFatherNameLetter2');
        $studentFatherNameLetter3 = $request->input('studentFatherNameLetter3');
        $studentFatherNameLetter4 = $request->input('studentFatherNameLetter4');
        $studentFatherNameLetter5 = $request->input('studentFatherNameLetter5');
        $studentFatherNameLetter6 = $request->input('studentFatherNameLetter6');
        $studentFatherNameLetter7 = $request->input('studentFatherNameLetter7');
        $studentFatherNameLetter8 = $request->input('studentFatherNameLetter8');
        $studentFatherNameLetter9 = $request->input('studentFatherNameLetter9');
        $studentFatherNameLetter10 = $request->input('studentFatherNameLetter10');
        $studentFatherNameLetter11 = $request->input('studentFatherNameLetter11');
        $studentFatherNameLetter12 = $request->input('studentFatherNameLetter12');
        $studentFatherNameLetter13 = $request->input('studentFatherNameLetter13');
        $studentFatherNameLetter14 = $request->input('studentFatherNameLetter14');
        $studentFatherNameLetter15 = $request->input('studentFatherNameLetter15');

        $studentLastName = $request->input('studentLastName');
        $studentLastNameLetter1 = $request->input('studentLastNameLetter1');
        $studentLastNameLetter2 = $request->input('studentLastNameLetter2');
        $studentLastNameLetter3 = $request->input('studentLastNameLetter3');
        $studentLastNameLetter4 = $request->input('studentLastNameLetter4');
        $studentLastNameLetter5 = $request->input('studentLastNameLetter5');
        $studentLastNameLetter6 = $request->input('studentLastNameLetter6');
        $studentLastNameLetter7 = $request->input('studentLastNameLetter7');
        $studentLastNameLetter8 = $request->input('studentLastNameLetter8');
        $studentLastNameLetter9 = $request->input('studentLastNameLetter9');
        $studentLastNameLetter10 = $request->input('studentLastNameLetter10');
        $studentLastNameLetter11 = $request->input('studentLastNameLetter11');
        $studentLastNameLetter12 = $request->input('studentLastNameLetter12');
        $studentLastNameLetter13 = $request->input('studentLastNameLetter13');
        $studentLastNameLetter14 = $request->input('studentLastNameLetter14');
        $studentLastNameLetter15 = $request->input('studentLastNameLetter15');

        $studentGrandFatherName = $request->input('studentGrandFatherName');
        $studentGrandFatherNameLetter1 = $request->input('studentGrandFatherNameLetter1');
        $studentGrandFatherNameLetter2 = $request->input('studentGrandFatherNameLetter2');
        $studentGrandFatherNameLetter3 = $request->input('studentGrandFatherNameLetter3');
        $studentGrandFatherNameLetter4 = $request->input('studentGrandFatherNameLetter4');
        $studentGrandFatherNameLetter5 = $request->input('studentGrandFatherNameLetter5');
        $studentGrandFatherNameLetter6 = $request->input('studentGrandFatherNameLetter6');
        $studentGrandFatherNameLetter7 = $request->input('studentGrandFatherNameLetter7');
        $studentGrandFatherNameLetter8 = $request->input('studentGrandFatherNameLetter8');
        $studentGrandFatherNameLetter9 = $request->input('studentGrandFatherNameLetter9');
        $studentGrandFatherNameLetter10 = $request->input('studentGrandFatherNameLetter10');
        $studentGrandFatherNameLetter11 = $request->input('studentGrandFatherNameLetter11');
        $studentGrandFatherNameLetter12 = $request->input('studentGrandFatherNameLetter12');
        $studentGrandFatherNameLetter13 = $request->input('studentGrandFatherNameLetter13');
        $studentGrandFatherNameLetter14 = $request->input('studentGrandFatherNameLetter14');
        $studentGrandFatherNameLetter15 = $request->input('studentGrandFatherNameLetter15');

        $DoB = $request->input('DoB');
        $studentGender = $request->input('studentGender');
        $examLang = $request->input('examLang');
        $examType = $request->input('examType');
        $relativeName = $request->input('relativeName');
        $relativeType = $request->input('relativeType');
        $relativeJob = $request->input('relativeJob');
        $relativePhone = $request->input('relativePhone');
        $studentProvince = $request->input('studentProvince');
        $studentDistrict = $request->input('studentDistrict');
        $studentVillage = $request->input('studentVillage');
        $studentTazkiraNo = $request->input('studentTazkiraNo');
        $studentPassport = $request->input('studentPassport');
        $studentSchool = $request->input('studentSchool');
        $schoolGraduateYear = $request->input('schoolGraduateYear');
        $studentPhone = $request->input('studentPhone');
        $studentEmail = $request->input('studentEmail');
        $faculty = $request->input('faculty');
       
         


           $data = array(
                'studentName' => $studentName,
                'studentNameLetter1' => $studentNameLetter1,
                'studentNameLetter2' => $studentNameLetter2,
                'studentNameLetter3' => $studentNameLetter3,
                'studentNameLetter4' => $studentNameLetter4,
                'studentNameLetter5' => $studentNameLetter5,
                'studentNameLetter6' => $studentNameLetter6,
                'studentNameLetter7' => $studentNameLetter7,
                'studentNameLetter8' => $studentNameLetter8,
                'studentNameLetter9' => $studentNameLetter9,
                'studentNameLetter10' => $studentNameLetter10,
                'studentNameLetter11' => $studentNameLetter11,
                'studentNameLetter12' => $studentNameLetter12,
                'studentNameLetter13' => $studentNameLetter13,
                'studentNameLetter14' => $studentNameLetter14,
                'studentNameLetter15' => $studentNameLetter15,
        
                'studentFatherName' => $studentFatherName,
                'studentFatherNameLetter1' => $studentFatherNameLetter1,
                'studentFatherNameLetter2' => $studentFatherNameLetter2,
                'studentFatherNameLetter3' => $studentFatherNameLetter3,
                'studentFatherNameLetter4' => $studentFatherNameLetter4,
                'studentFatherNameLetter5' => $studentFatherNameLetter5,
                'studentFatherNameLetter6' => $studentFatherNameLetter6,
                'studentFatherNameLetter7' => $studentFatherNameLetter7,
                'studentFatherNameLetter8' => $studentFatherNameLetter8,
                'studentFatherNameLetter9' => $studentFatherNameLetter9,
                'studentFatherNameLetter10' => $studentFatherNameLetter10,
                'studentFatherNameLetter11' => $studentFatherNameLetter11,
                'studentFatherNameLetter12' => $studentFatherNameLetter12,
                'studentFatherNameLetter13' => $studentFatherNameLetter13,
                'studentFatherNameLetter14' => $studentFatherNameLetter14,
                'studentFatherNameLetter15' => $studentFatherNameLetter15,
        
                'studentLastName' => $studentLastName,
                'studentLastNameLetter1' => $studentLastNameLetter1,
                'studentLastNameLetter2' => $studentLastNameLetter2,
                'studentLastNameLetter3' => $studentLastNameLetter3,
                'studentLastNameLetter4' => $studentLastNameLetter4,
                'studentLastNameLetter5' => $studentLastNameLetter5,
                'studentLastNameLetter6' => $studentLastNameLetter6,
                'studentLastNameLetter7' => $studentLastNameLetter7,
                'studentLastNameLetter8' => $studentLastNameLetter8,
                'studentLastNameLetter9' => $studentLastNameLetter9,
                'studentLastNameLetter10' => $studentLastNameLetter10,
                'studentLastNameLetter11' => $studentLastNameLetter11,
                'studentLastNameLetter12' => $studentLastNameLetter12,
                'studentLastNameLetter13' => $studentLastNameLetter13,
                'studentLastNameLetter14' => $studentLastNameLetter14,
                'studentLastNameLetter15' => $studentLastNameLetter15,
        
                'studentGrandFatherName' => $studentGrandFatherName,
                'studentGrandFatherNameLetter1' => $studentGrandFatherNameLetter1,
                'studentGrandFatherNameLetter2' => $studentGrandFatherNameLetter2,
                'studentGrandFatherNameLetter3' => $studentGrandFatherNameLetter3,
                'studentGrandFatherNameLetter4' => $studentGrandFatherNameLetter4,
                'studentGrandFatherNameLetter5' => $studentGrandFatherNameLetter5,
                'studentGrandFatherNameLetter6' => $studentGrandFatherNameLetter6,
                'studentGrandFatherNameLetter7' => $studentGrandFatherNameLetter7,
                'studentGrandFatherNameLetter8' => $studentGrandFatherNameLetter8,
                'studentGrandFatherNameLetter9' => $studentGrandFatherNameLetter9,
                'studentGrandFatherNameLetter10' => $studentGrandFatherNameLetter10,
                'studentGrandFatherNameLetter11' => $studentGrandFatherNameLetter11,
                'studentGrandFatherNameLetter12' => $studentGrandFatherNameLetter12,
                'studentGrandFatherNameLetter13' => $studentGrandFatherNameLetter13,
                'studentGrandFatherNameLetter14' => $studentGrandFatherNameLetter14,
                'studentGrandFatherNameLetter15' => $studentGrandFatherNameLetter15,
        
                'DoB' => $DoB,
                'studentGender' => $studentGender,
                'examLang' => $examLang,
                'examType' => $examType,
                'relativeName' => $relativeName,
                'relativeType' => $relativeType,
                'relativeJob' => $relativeJob,
                'relativePhone' => $relativePhone,
                'studentProvince' => $studentProvince,
                'studentDistrict' => $studentDistrict,
                'studentVillage' => $studentVillage,
                'studentTazkiraNo' => $studentTazkiraNo,
                'studentPassport' => $studentPassport,
                'studentSchool' => $studentSchool,
                'schoolGraduateYear' => $schoolGraduateYear,
                'studentPhone' => $studentPhone,
                'studentEmail' => $studentEmail,
                'faculty' => $faculty
        
        
            );
          

            DB::table('online_registers')
            ->where('id',$id)
            ->update($data);



        $var1 = DB::table('online_registers')  
        ->where('id',$id)
        ->get();

          $data1 = array(
    
                    'title'=>$var1
                    );
                
        
        return view('editstudent',$data1);
       }
         else
        {
            return Redirect('login');
        }



    }





       public function printSt_get(Request $req)
      {
        $ID = $req->ID;
        $var1 = DB::table('online_registers')  
        ->where('ID',$ID)
        ->get();

          $data1 = array(
    
                    'title'=>$var1
                    );
                
        
        return view('printView',$data1);
      }




 public function editRegister(Request $req)
      {


   if(session()->has('session_login'))
        {


        $ID = $req->ID;
        $var1 = DB::table('online_registers')  
        ->where('ID',$ID)
        ->get();

          $data1 = array(
    
                    'title'=>$var1
                    );
                
        
        return view('editstudent',$data1);


        }
        else
        {
            return Redirect('login');
        }




      }




//added 23 Feb 2022




 
       public function test()
      {
        
                
        return view('test');
      }
    
    
    public function uploadArbitrationImg(Request $store)
     {
            
                   // get current time and append the upload file extension to it,
                   // then put that name to $photoName variable.
               $photoName = time().'.'.$store->img_upload->getClientOriginalExtension();

                $content = $store->input('contents');



          /*
          talk the select file and move it public directory and make avatars
          folder if doesn't exsit then give it that unique name.
          */
               $store->img_upload->move('images', $photoName);

             
               $data = array(
          'certificate'=>$photoName,
          'studentName'=>$content
            );


                 DB::table('online_registers')->insert($data);
                 
                

        
                
                return view('test');

            
     }
    
    

    
    //added 1 mar 2022
    
    


    public function getStudentLastID() {

        // $studentID = DB::table('online_registers')->latest('id')->get('id')->first();
    //    $studentID = OnlineRegister::get(['id'])->first();
        // return response()->json($studentID, 200);
        return response()->json(OnlineRegister::all(), 200);
    }


    public function addStudentDoc(Request $request){

        $post = new studentDoc;

        if($request->hasFile('certificate')){
            $completeFileName = $request->file('certificate')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extension = $request->file('certificate')->getClientOriginalExtension();
            $compPic = str_replace(' ', '_', $fileNameOnly).'-'.rand().'_'.time().'.'.$extension;
            $path = $request->file('certificate')->storeAs('public/posts', $compPic);
          
            $post->id = $request->id;
            $post->image = $compPic;
        }
    



            // $student = OnlineRegister::create($request->all());
        
        if($post->save()){
            return ['status' => true, 'message' => 'successfully saved!!'];
        }
        else{
            return ['status' => false, 'message' => 'Something Went Wrong'];
        }

       
        

    }



    public function student()
      {
       
       
        return view('addstudent');
      }


      public function succeed()
      {
        
        return view('succeed');
      }
      
      
      
        public function duplicate()
      {
        
        return view('duplicate');
      }

    /*

    public function updateMainTitle(Request $req)
        {
          if(session()->has('session_login'))
          {
                

             $Title = $req->title;
             
           

          
            $data = array('title'=>$Title);

            DB::table('main')
            ->where('ID',1)
            ->update($data);

           



            $Var = DB::table('main')->get();

                //also get customer ID and Name 
                $var1 = DB::table('main')
               
                ->where('ID',1)
                ->get();

                $var2 = DB::table('main_pic')
                ->get();


                $data1 = array(
                	'main'=>$Var,
                	'title'=>$var1,
                	'photo'=>$var2
                	);
                return view('admin_index',$data1);

            
          }
          else
          {
            return Redirect('login');
          }
        }


    */


  
      
       public function printSt()
      {
        
                
        return view('search');
      }


       public function printSt_post(Request $req)
      {
        $ID = $req->searchID;
        $var1 = DB::table('online_registers')  
        ->where('ID',$ID)
        ->get();

          $data1 = array(
    
                    'title'=>$var1
                    );
                
        
        return view('printView',$data1);
      }


//test json 

       public function newst()
      {
        
                
        return view('student');
      }

      public function save(Request $request){
           $validator = Validator::make($request->all(),[
                 
                 'name'=>'required|max:255',
                 'studentNameLetter1'=>'required|max:1',
                 'studentFatherName'=>'required|max:255',
                 'studentFatherNameLetter1'=>'required|max:1',
                 'studentLastName'=>'required|max:255',
                 'studentLastNameLetter1'=>'required|max:1',
                 'studentGrandFatherName'=>'required|max:255',
                 'studentGrandFatherNameLetter1'=>'required|max:1',
                 'DoB'=>'required',
                 'studentGender'=>'required',
                 'examLang'=>'required',
                 'examType'=>'required',
                 'faculty'=>'required',
                 'studentCurrentProvince'=>'required',
                 'studentCurrentDistrict'=>'required',
                 'studentCurrentVillage'=>'required',
                 'studentTazkiraNo'=>'required',
                 'studentPhone'=>'required',
                 'studentEmail'=>'required|email',
                 'certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 'certificate1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                 'certificate2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

           ]);

            //check duplicate
          //allow
                    //check with database
             $check = DB::Table('online_registers')->where(['studentName'=>$request->name, 'studentTazkiraNo'=>$request->studentTazkiraNo])->get();


                  //      1 >= 1
              if(count($check) >= 1)
               {
              
                //dublicate error:
                
               return response()->json(['status'=>2, 'msg'=>'You have already registered']);
                   
                }

          if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
          }else{


               //photo
                $imagePath = $request->file('certificate');
                $imageName = $imagePath->getClientOriginalName();

                $new_name = rand() . '.' . $imagePath->getClientOriginalExtension();
                $imagePath->move('public/images', $new_name);


               //Tazkira
               if($request->file('certificate1') <> null)
               {
                $imagePath1 = $request->file('certificate1');
                $imageName1 = $imagePath1->getClientOriginalName();

                $new_name1 = rand() . '.' . $imagePath1->getClientOriginalExtension();
                $imagePath1->move('public/images', $new_name1);
               }else
               {
                   $new_name1 = '';
               }

               //D.M.C
               if($request->file('certificate2') <> null)
               {
                $imagePath2 = $request->file('certificate2');
                $imageName2 = $imagePath2->getClientOriginalName();

                $new_name2 = rand() . '.' . $imagePath2->getClientOriginalExtension();
                $imagePath2->move('public/images', $new_name2);
               }else
               {
                   $new_name2 = '';
               }


              $curTime = new \DateTime();
              $created_at = $curTime->format("Y-m-d H:i:s");





            $values = [
                'studentName'=>$request->name,
                'studentNameLetter1' => $request->studentNameLetter1,
                'studentNameLetter2' => $request->studentNameLetter2,
                'studentNameLetter3' => $request->studentNameLetter3,
                'studentNameLetter4' => $request->studentNameLetter4,
                'studentNameLetter5' => $request->studentNameLetter5,
                'studentNameLetter6' => $request->studentNameLetter6,
                'studentNameLetter7' => $request->studentNameLetter7,
                'studentNameLetter8' => $request->studentNameLetter8,
                'studentNameLetter9' => $request->studentNameLetter9,
                'studentNameLetter10' => $request->studentNameLetter10,
                'studentNameLetter11' => $request->studentNameLetter11,
                'studentNameLetter12' => $request->studentNameLetter12,
                'studentNameLetter13' => $request->studentNameLetter13,
                'studentNameLetter14' => $request->studentNameLetter14,
                'studentNameLetter15' => $request->studentNameLetter15,
        
                'studentFatherName' => $request->studentFatherName,
                'studentFatherNameLetter1' => $request->studentFatherNameLetter1,
                'studentFatherNameLetter2' => $request->studentFatherNameLetter2,
                'studentFatherNameLetter3' => $request->studentFatherNameLetter3,
                'studentFatherNameLetter4' => $request->studentFatherNameLetter4,
                'studentFatherNameLetter5' => $request->studentFatherNameLetter5,
                'studentFatherNameLetter6' => $request->studentFatherNameLetter6,
                'studentFatherNameLetter7' => $request->studentFatherNameLetter7,
                'studentFatherNameLetter8' => $request->studentFatherNameLetter8,
                'studentFatherNameLetter9' => $request->studentFatherNameLetter9,
                'studentFatherNameLetter10' => $request->studentFatherNameLetter10,
                'studentFatherNameLetter11' => $request->studentFatherNameLetter11,
                'studentFatherNameLetter12' => $request->studentFatherNameLetter12,
                'studentFatherNameLetter13' => $request->studentFatherNameLetter13,
                'studentFatherNameLetter14' => $request->studentFatherNameLetter14,
                'studentFatherNameLetter15' => $request->studentFatherNameLetter15,
        
                'studentLastName' => $request->studentLastName,
                'studentLastNameLetter1' => $request->studentLastNameLetter1,
                'studentLastNameLetter2' => $request->studentLastNameLetter2,
                'studentLastNameLetter3' => $request->studentLastNameLetter3,
                'studentLastNameLetter4' => $request->studentLastNameLetter4,
                'studentLastNameLetter5' => $request->studentLastNameLetter5,
                'studentLastNameLetter6' => $request->studentLastNameLetter6,
                'studentLastNameLetter7' => $request->studentLastNameLetter7,
                'studentLastNameLetter8' => $request->studentLastNameLetter8,
                'studentLastNameLetter9' => $request->studentLastNameLetter9,
                'studentLastNameLetter10' => $request->studentLastNameLetter10,
                'studentLastNameLetter11' => $request->studentLastNameLetter11,
                'studentLastNameLetter12' => $request->studentLastNameLetter12,
                'studentLastNameLetter13' => $request->studentLastNameLetter13,
                'studentLastNameLetter14' => $request->studentLastNameLetter14,
                'studentLastNameLetter15' => $request->studentLastNameLetter15,
        
                'studentGrandFatherName' => $request->studentGrandFatherName,
                'studentGrandFatherNameLetter1' => $request->studentGrandFatherNameLetter1,
                'studentGrandFatherNameLetter2' => $request->studentGrandFatherNameLetter2,
                'studentGrandFatherNameLetter3' => $request->studentGrandFatherNameLetter3,
                'studentGrandFatherNameLetter4' => $request->studentGrandFatherNameLetter4,
                'studentGrandFatherNameLetter5' => $request->studentGrandFatherNameLetter5,
                'studentGrandFatherNameLetter6' => $request->studentGrandFatherNameLetter6,
                'studentGrandFatherNameLetter7' => $request->studentGrandFatherNameLetter7,
                'studentGrandFatherNameLetter8' => $request->studentGrandFatherNameLetter8,
                'studentGrandFatherNameLetter9' => $request->studentGrandFatherNameLetter9,
                'studentGrandFatherNameLetter10' => $request->studentGrandFatherNameLetter10,
                'studentGrandFatherNameLetter11' => $request->studentGrandFatherNameLetter11,
                'studentGrandFatherNameLetter12' => $request->studentGrandFatherNameLetter12,
                'studentGrandFatherNameLetter13' => $request->studentGrandFatherNameLetter13,
                'studentGrandFatherNameLetter14' => $request->studentGrandFatherNameLetter14,
                'studentGrandFatherNameLetter15' => $request->studentGrandFatherNameLetter15,
        
                'DoB' => $request->DoB,
                'studentGender' => $request->studentGender,
                'examLang' => $request->examLang,
                'examType' => $request->examType,
                'relativeName' => $request->relativeName,
                'relativeType' => $request->relativeType,
                'relativeJob' => $request->relativeJob,
                'relativePhone' => $request->relativePhone,
                
                'studentProvince' => $request->studentCurrentProvince,
                'studentDistrict' => $request->studentCurrentDistrict,
                'studentVillage' => $request->studentCurrentVillage,
                
                'studentMainResidence_province' => $request->studentProvince,
                'studentMainResidence_district' => $request->studentDistrict,
                'studentMainResidence_village' => $request->studentVillage,
                
                'studentTazkiraNo' => $request->studentTazkiraNo,
                'studentPassport' => $request->studentPassport,
                'studentSchool' => $request->studentSchool,
                'schoolGraduateYear' => $request->schoolGraduateYear,
                'studentPhone' => $request->studentPhone,
                'studentEmail' => $request->studentEmail,
                'faculty' => $request->faculty,
                'RegisteredDate' => $created_at,
                'certificate' => $new_name,
                'certificate1' => $new_name1,
                'certificate2' => $new_name2
            ];


         

            $query = DB::table('online_registers')->insert($values);
            if($query){
                return response()->json(['status'=>1, 'msg'=>'New Student has been successfully registered']);
            }
          }

      } 




    public function record(Request $request){

      

        $studentName = $request->input('studentName');
        $studentNameLetter1 = $request->input('studentNameLetter1');
        $studentNameLetter2 = $request->input('studentNameLetter2');
        $studentNameLetter3 = $request->input('studentNameLetter3');
        $studentNameLetter4 = $request->input('studentNameLetter4');
        $studentNameLetter5 = $request->input('studentNameLetter5');
        $studentNameLetter6 = $request->input('studentNameLetter6');
        $studentNameLetter7 = $request->input('studentNameLetter7');
        $studentNameLetter8 = $request->input('studentNameLetter8');
        $studentNameLetter9 = $request->input('studentNameLetter9');
        $studentNameLetter10 = $request->input('studentNameLetter10');
        $studentNameLetter11 = $request->input('studentNameLetter11');
        $studentNameLetter12 = $request->input('studentNameLetter12');
        $studentNameLetter13 = $request->input('studentNameLetter13');
        $studentNameLetter14 = $request->input('studentNameLetter14');
        $studentNameLetter15 = $request->input('studentNameLetter15');

        $studentFatherName = $request->input('studentFatherName');
        $studentFatherNameLetter1 = $request->input('studentFatherNameLetter1');
        $studentFatherNameLetter2 = $request->input('studentFatherNameLetter2');
        $studentFatherNameLetter3 = $request->input('studentFatherNameLetter3');
        $studentFatherNameLetter4 = $request->input('studentFatherNameLetter4');
        $studentFatherNameLetter5 = $request->input('studentFatherNameLetter5');
        $studentFatherNameLetter6 = $request->input('studentFatherNameLetter6');
        $studentFatherNameLetter7 = $request->input('studentFatherNameLetter7');
        $studentFatherNameLetter8 = $request->input('studentFatherNameLetter8');
        $studentFatherNameLetter9 = $request->input('studentFatherNameLetter9');
        $studentFatherNameLetter10 = $request->input('studentFatherNameLetter10');
        $studentFatherNameLetter11 = $request->input('studentFatherNameLetter11');
        $studentFatherNameLetter12 = $request->input('studentFatherNameLetter12');
        $studentFatherNameLetter13 = $request->input('studentFatherNameLetter13');
        $studentFatherNameLetter14 = $request->input('studentFatherNameLetter14');
        $studentFatherNameLetter15 = $request->input('studentFatherNameLetter15');

        $studentLastName = $request->input('studentLastName');
        $studentLastNameLetter1 = $request->input('studentLastNameLetter1');
        $studentLastNameLetter2 = $request->input('studentLastNameLetter2');
        $studentLastNameLetter3 = $request->input('studentLastNameLetter3');
        $studentLastNameLetter4 = $request->input('studentLastNameLetter4');
        $studentLastNameLetter5 = $request->input('studentLastNameLetter5');
        $studentLastNameLetter6 = $request->input('studentLastNameLetter6');
        $studentLastNameLetter7 = $request->input('studentLastNameLetter7');
        $studentLastNameLetter8 = $request->input('studentLastNameLetter8');
        $studentLastNameLetter9 = $request->input('studentLastNameLetter9');
        $studentLastNameLetter10 = $request->input('studentLastNameLetter10');
        $studentLastNameLetter11 = $request->input('studentLastNameLetter11');
        $studentLastNameLetter12 = $request->input('studentLastNameLetter12');
        $studentLastNameLetter13 = $request->input('studentLastNameLetter13');
        $studentLastNameLetter14 = $request->input('studentLastNameLetter14');
        $studentLastNameLetter15 = $request->input('studentLastNameLetter15');

        $studentGrandFatherName = $request->input('studentGrandFatherName');
        $studentGrandFatherNameLetter1 = $request->input('studentGrandFatherNameLetter1');
        $studentGrandFatherNameLetter2 = $request->input('studentGrandFatherNameLetter2');
        $studentGrandFatherNameLetter3 = $request->input('studentGrandFatherNameLetter3');
        $studentGrandFatherNameLetter4 = $request->input('studentGrandFatherNameLetter4');
        $studentGrandFatherNameLetter5 = $request->input('studentGrandFatherNameLetter5');
        $studentGrandFatherNameLetter6 = $request->input('studentGrandFatherNameLetter6');
        $studentGrandFatherNameLetter7 = $request->input('studentGrandFatherNameLetter7');
        $studentGrandFatherNameLetter8 = $request->input('studentGrandFatherNameLetter8');
        $studentGrandFatherNameLetter9 = $request->input('studentGrandFatherNameLetter9');
        $studentGrandFatherNameLetter10 = $request->input('studentGrandFatherNameLetter10');
        $studentGrandFatherNameLetter11 = $request->input('studentGrandFatherNameLetter11');
        $studentGrandFatherNameLetter12 = $request->input('studentGrandFatherNameLetter12');
        $studentGrandFatherNameLetter13 = $request->input('studentGrandFatherNameLetter13');
        $studentGrandFatherNameLetter14 = $request->input('studentGrandFatherNameLetter14');
        $studentGrandFatherNameLetter15 = $request->input('studentGrandFatherNameLetter15');

        $DoB = $request->input('DoB');
        $studentGender = $request->input('studentGender');
        $examLang = $request->input('examLang');
        $examType = $request->input('examType');
        $relativeName = $request->input('relativeName');
        $relativeType = $request->input('relativeType');
        $relativeJob = $request->input('relativeJob');
        $relativePhone = $request->input('relativePhone');
        
        
        $studentProvince = $request->input('studentProvince');
        $studentDistrict = $request->input('studentDistrict');
        $studentVillage = $request->input('studentVillage');
        
        $studentCurrentProvince = $request->input('studentCurrentProvince');
        $studentCurrentDistrict = $request->input('studentCurrentDistrict');
        $studentCurrentVillage = $request->input('studentCurrentVillage');
        
        $studentTazkiraNo = $request->input('studentTazkiraNo');
        $studentPassport = $request->input('studentPassport');
        $studentSchool = $request->input('studentSchool');
        $schoolGraduateYear = $request->input('schoolGraduateYear');
        $studentPhone = $request->input('studentPhone');
        $studentEmail = $request->input('studentEmail');
        $faculty = $request->input('faculty');
       


        $request->validate([
            'certificate' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ]);


          if($request->file('certificate1') <> null)
          {
            $request->validate([
               
                'certificate1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
              ]);
          }
          

          if($request->file('certificate2') <> null)
          {
            $request->validate([
               
                'certificate2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
              ]);
          }



        // $name = $req->input('name');
        // $email = $req->input('email');
        // $subject = $req->input('subject');
        // $message = $req->input('message');s
       
        if($studentName <> '' && $studentNameLetter1 <> '' && $studentFatherName <> '' && $studentFatherNameLetter1 <> '' && $studentLastName <> ''  && $studentLastNameLetter1 <> '' && $studentGrandFatherName <> '' && $studentGrandFatherNameLetter1 <> '' && $DoB <> '' && $studentGender <> '' && $examLang <> '' && $examType <> '' && $faculty <> '' && $studentTazkiraNo <> '' && $studentPhone <> '' && $studentEmail <> '' && $request->file('certificate'))
        {






           //check duplicate
          //allow
                    //check with database
             $check = DB::Table('online_registers')->where(['studentName'=>$studentName,'studentTazkiraNo'=>$studentTazkiraNo])->get();


                  //      1 >= 1
              if(count($check) >= 1)
               {
              
                //dublicate error:
                
               return  back()->with('duplicate','You have already registered');
                   
                }
              else
                {
                  //return Redirect('login');






         
            $imagePath = $request->file('certificate');
            $imageName = $imagePath->getClientOriginalName();

            $new_name = rand() . '.' . $imagePath->getClientOriginalExtension();
            $imagePath->move('images', $new_name);



            if($request->file('certificate1') <> null)
            {
                $imagePath1 = $request->file('certificate1');
                $imageName1 = $imagePath1->getClientOriginalName();

                $new_name1 = rand() . '.' . $imagePath1->getClientOriginalExtension();
                $imagePath1->move('images', $new_name1);
            }else{
                $new_name1 = '';
            }


            if($request->file('certificate2') <> null)
            {
                $imagePath2 = $request->file('certificate2');
                $imageName2 = $imagePath2->getClientOriginalName();

                $new_name2 = rand() . '.' . $imagePath2->getClientOriginalExtension();
                $imagePath2->move('images', $new_name2);
            } else{
                $new_name2 = '';
            }

          

         
       
                
           



            $data = array(
                'studentName' => $studentName,
                'studentNameLetter1' => $studentNameLetter1,
                'studentNameLetter2' => $studentNameLetter2,
                'studentNameLetter3' => $studentNameLetter3,
                'studentNameLetter4' => $studentNameLetter4,
                'studentNameLetter5' => $studentNameLetter5,
                'studentNameLetter6' => $studentNameLetter6,
                'studentNameLetter7' => $studentNameLetter7,
                'studentNameLetter8' => $studentNameLetter8,
                'studentNameLetter9' => $studentNameLetter9,
                'studentNameLetter10' => $studentNameLetter10,
                'studentNameLetter11' => $studentNameLetter11,
                'studentNameLetter12' => $studentNameLetter12,
                'studentNameLetter13' => $studentNameLetter13,
                'studentNameLetter14' => $studentNameLetter14,
                'studentNameLetter15' => $studentNameLetter15,
        
                'studentFatherName' => $studentFatherName,
                'studentFatherNameLetter1' => $studentFatherNameLetter1,
                'studentFatherNameLetter2' => $studentFatherNameLetter2,
                'studentFatherNameLetter3' => $studentFatherNameLetter3,
                'studentFatherNameLetter4' => $studentFatherNameLetter4,
                'studentFatherNameLetter5' => $studentFatherNameLetter5,
                'studentFatherNameLetter6' => $studentFatherNameLetter6,
                'studentFatherNameLetter7' => $studentFatherNameLetter7,
                'studentFatherNameLetter8' => $studentFatherNameLetter8,
                'studentFatherNameLetter9' => $studentFatherNameLetter9,
                'studentFatherNameLetter10' => $studentFatherNameLetter10,
                'studentFatherNameLetter11' => $studentFatherNameLetter11,
                'studentFatherNameLetter12' => $studentFatherNameLetter12,
                'studentFatherNameLetter13' => $studentFatherNameLetter13,
                'studentFatherNameLetter14' => $studentFatherNameLetter14,
                'studentFatherNameLetter15' => $studentFatherNameLetter15,
        
                'studentLastName' => $studentLastName,
                'studentLastNameLetter1' => $studentLastNameLetter1,
                'studentLastNameLetter2' => $studentLastNameLetter2,
                'studentLastNameLetter3' => $studentLastNameLetter3,
                'studentLastNameLetter4' => $studentLastNameLetter4,
                'studentLastNameLetter5' => $studentLastNameLetter5,
                'studentLastNameLetter6' => $studentLastNameLetter6,
                'studentLastNameLetter7' => $studentLastNameLetter7,
                'studentLastNameLetter8' => $studentLastNameLetter8,
                'studentLastNameLetter9' => $studentLastNameLetter9,
                'studentLastNameLetter10' => $studentLastNameLetter10,
                'studentLastNameLetter11' => $studentLastNameLetter11,
                'studentLastNameLetter12' => $studentLastNameLetter12,
                'studentLastNameLetter13' => $studentLastNameLetter13,
                'studentLastNameLetter14' => $studentLastNameLetter14,
                'studentLastNameLetter15' => $studentLastNameLetter15,
        
                'studentGrandFatherName' => $studentGrandFatherName,
                'studentGrandFatherNameLetter1' => $studentGrandFatherNameLetter1,
                'studentGrandFatherNameLetter2' => $studentGrandFatherNameLetter2,
                'studentGrandFatherNameLetter3' => $studentGrandFatherNameLetter3,
                'studentGrandFatherNameLetter4' => $studentGrandFatherNameLetter4,
                'studentGrandFatherNameLetter5' => $studentGrandFatherNameLetter5,
                'studentGrandFatherNameLetter6' => $studentGrandFatherNameLetter6,
                'studentGrandFatherNameLetter7' => $studentGrandFatherNameLetter7,
                'studentGrandFatherNameLetter8' => $studentGrandFatherNameLetter8,
                'studentGrandFatherNameLetter9' => $studentGrandFatherNameLetter9,
                'studentGrandFatherNameLetter10' => $studentGrandFatherNameLetter10,
                'studentGrandFatherNameLetter11' => $studentGrandFatherNameLetter11,
                'studentGrandFatherNameLetter12' => $studentGrandFatherNameLetter12,
                'studentGrandFatherNameLetter13' => $studentGrandFatherNameLetter13,
                'studentGrandFatherNameLetter14' => $studentGrandFatherNameLetter14,
                'studentGrandFatherNameLetter15' => $studentGrandFatherNameLetter15,
        
                'DoB' => $DoB,
                'studentGender' => $studentGender,
                'examLang' => $examLang,
                'examType' => $examType,
                'relativeName' => $relativeName,
                'relativeType' => $relativeType,
                'relativeJob' => $relativeJob,
                'relativePhone' => $relativePhone,
                
                'studentProvince' => $studentCurrentProvince,
                'studentDistrict' => $studentCurrentDistrict,
                'studentVillage' => $studentCurrentVillage,
                
                'studentMainResidence_province' => $studentProvince,
                'studentMainResidence_district' => $studentDistrict,
                'studentMainResidence_village' => $studentVillage,
                
                'studentTazkiraNo' => $studentTazkiraNo,
                'studentPassport' => $studentPassport,
                'studentSchool' => $studentSchool,
                'schoolGraduateYear' => $schoolGraduateYear,
                'studentPhone' => $studentPhone,
                'studentEmail' => $studentEmail,
                'faculty' => $faculty,
                'certificate' => $new_name,
                'certificate1' => $new_name1,
                'certificate2' => $new_name2
        
        
            );
           
            DB::table('online_registers')->insert($data);
            // return Redirect('https://spingharkabul.edu.af/registers/succeed');

            return  back()->with('success','You have registered successfully');
         
            // Session::flash('success','Thank you, We will reply you as soon as possible');
            



            }

        }
            else
        {
          return Redirect('/');
         
        }
        
    

        

    }

}
