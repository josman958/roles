<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages=[
            [
                'id'=>1,
                'content'=>'este es mi primer mensaje',
                'image'=>'http://lorempixel.com/600/338?1',
            ],
            [
                'id'=>2,
                'content'=>'este es mi segundo mensaje',
                'image'=>'http://lorempixel.com/600/338?2',
            ],
            [
                'id'=>3,
                'content'=>'otro mensaje',
                'image'=>'http://lorempixel.com/600/338?3',
            ],
            [
                'id'=>4,
                'content'=>'ultimo mensaje',
                'image'=>'http://lorempixel.com/600/338?4',
            ],
        ];
        return view('welcome',[
            'messages'=>$messages,
        ]);
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
