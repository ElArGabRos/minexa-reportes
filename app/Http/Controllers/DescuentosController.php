<?php

namespace App\Http\Controllers;

use App\descuentos;
use Illuminate\Http\Request;
use PDF;
use Excel;
//use App\Exports\ExportAlcaldia;

class DescuentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $descuentos = descuentos::all();
        //$descuentos = descuento::orderBy('id','asc')
        //->get();
        //return view('descuentos', ['descuentos'=>$descuentos]);
        $pdf = PDF::loadView('descuentos',compact('descuentos'));
        return $pdf->stream('descuentos.pdf');

        //return Excel::download(new ExportAlcaldia, 'disney.xlsx');
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
     * @param  \App\alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function show(alcaldia $alcaldia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function edit(alcaldia $alcaldia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alcaldia $alcaldia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alcaldia  $alcaldia
     * @return \Illuminate\Http\Response
     */
    public function destroy(alcaldia $alcaldia)
    {
        //
    }
}

