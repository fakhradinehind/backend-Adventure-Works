<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use App\Models\Temps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CommandeJoinTemps extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        
    }
    public function sommerevenue($year){
        $sommerevenus=DB::table('FactInternetSales')->join('DimDate','FactInternetSales.DueDateKey','=','DimDate.DateKey')
        ->where('DimDate.CalendarYear',$year)
        ->sum('FactInternetSales.SalesAmount');
        return response()->json($sommerevenus);
    } 
    public function sommerevenuemonth($month){
        $sommerevenusmonth=DB::table('FactInternetSales')->join('DimDate','FactInternetSales.DueDateKey','=','DimDate.DateKey')
        ->where('DimDate.MonthNumberOfYear','=',$month)
        ->sum('FactInternetSales.SalesAmount');
        return response()->json($sommerevenusmonth);
    } 
    public function sommerevenuesemestre($semestre){
        $sommerevenuesemestre=DB::table('FactInternetSales')->join('DimDate','FactInternetSales.DueDateKey','=','DimDate.DateKey')
        ->where('DimDate.CalendarSemester','=',$semestre)
        ->sum('FactInternetSales.SalesAmount');
        return response()->json($sommerevenuesemestre);
    } 
    public function sommerevenuetrimestre($trimestre){
        $sommerevenuetrimestre=DB::table('FactInternetSales')->join('DimDate','FactInternetSales.DueDateKey','=','DimDate.DateKey')
        ->where('DimDate.CalendarQuarter','=',$trimestre)
        ->sum('FactInternetSales.SalesAmount');
        return response()->json($sommerevenuetrimestre);
    } 


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
