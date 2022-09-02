<?php

namespace App\Http\Controllers;
use App\Models\Employes;
use App\Models\Commande;
use App\Models\DimSalesTerritory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CommandeJoinEmployes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 360;
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
    public function revenusparemployes($EmployeeKey){
        $revenus=DB::table('DimSalesTerritory')
        ->join('FactInternetSales','DimSalesTerritory.SalesTerritoryKey','=','FactInternetSales.SalesTerritoryKey')
        ->join('DimEmployee','DimSalesTerritory.SalesTerritoryKey','=','DimEmployee.SalesTerritoryKey')
        ->where('DimEmployee.EmployeeKey',$EmployeeKey)
        ->sum('FactInternetSales.SalesAmount');
        return response()->json($revenus);
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
