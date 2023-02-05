<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use DB;

class ReportController extends Controller
{
    //

    public function addReport(Request $request){

       $add = Report::create([
           'StartDateDay' => $request->input('StartDateDay'),
           'StartDateMonth' => $request->input('StartDateMonth'),
           'StartDateYear' => $request->input('StartDateYear'),
           'Activities' => $request->input('Activities')
       ]);

       return response($add, 201);

    }



    public function getReportById($id){
        $report = Report::find($id);
        if(is_null($report)) {
            return response()->json(['message' => 'Employee not found'], 404);
        }else
        
        return response()->json($report::find($id), 200);
    }




    public function getReport() {
        return response()->json(Report::all(), 200);
    }


    public function deleteReport(Request $request, $id){
        $report = Report::find($id);
        if(is_null($report)){
            return response()->json(['message' => 'Report not found'], 404);
        }
        $report->delete();
        return response()->json(null, 204);
    }



    public function updateReport(Request $request, $id){
        $report = Report::find($id);
        if(is_null($report)) {
            return response()->json(['message' => 'Report not found'], 404);
        }
        $report->update($request->all());
        return response($report, 200);
    }




    public function filterReport(Request $request) 
    {
        $startFormatYear = $request->StartDateYear;//.'-'.$request->StartDateMonth.'-'.$request->StartDateDay;
        $endFormatYear = $request->EndDateYear;//.'-'.$request->EndDateMonth.'-'.$request->EndDateDay;


        $startFormatMonth = $request->StartDateMonth;
        $endFormatMonth = $request->EndDateMonth;

        $startFormatDay = $request->StartDateDay;
        $endFormatDay = $request->EndDateDay;
        // $reportData = Report::getReport($startFormat,$endFormat);

        $reportDataYear = Report::select("StartDateYear")
        ->whereBetween("StartDateYear", [$startFormatYear, $endFormatYear])
        ->get();

        $reportDataMonth = Report::select("StartDateMonth")
        ->whereBetween("StartDateMonth", [$startFormatMonth, $endFormatMonth])
        ->get();

        $reportDataDay = Report::select("*")
        ->whereBetween("StartDateDay", [$startFormatDay, $endFormatDay])
        ->get();

        




        if($reportDataYear != "[]" && $reportDataMonth != "[]" && $reportDataDay != "[]")
        {
           
           
            return response($reportDataDay);  


    
        }else {
            return response('Error!');
            
        }

    }




}
