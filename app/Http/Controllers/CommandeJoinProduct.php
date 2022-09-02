<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CommandeJoinProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function revenusparproduit($ProductKey){
        $sommerevenus=DB::table('FactInternetSales')->join('DimProduct','FactInternetSales.ProductKey','=','DimProduct.ProductKey')
        ->where('DimProduct.ProductKey',$ProductKey)
        ->sum('FactInternetSales.SalesAmount');
        return response()->json($sommerevenus);
    }
    public function nombrecommandeparproduit($ProductKey){
        $nombrecommande=DB::table('FactInternetSales')->join('DimProduct','FactInternetSales.ProductKey','=','DimProduct.ProductKey')
        ->where('DimProduct.ProductKey',$ProductKey)
        ->count('FactInternetSales.SalesOrderNumber');
        return response()->json($nombrecommande);
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
