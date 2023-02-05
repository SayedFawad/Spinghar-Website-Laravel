<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Report extends Model
{
    use HasFactory;


    protected $fillable = [
        'StartDateDay',
        'StartDateMonth',
        'StartDateYear',
        'Activities'
    ];


       //get user for duplicate
       public static function getReport($startDate,$endDate){
        
        //DB::table('texts')->where(DB::raw("strftime('%Y-%m', created_at) = '2010-1'"))->get();

        // $comp = Component::select(DB::raw("CONCAT('name','id') AS ID"))->get()

  
       

         $data = DB::table('reports')->where("StartDateYear", $startDate)->get();
        return $data;
 
     }


}
