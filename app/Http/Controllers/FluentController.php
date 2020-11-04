<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FluentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$slice = Str::after('Welcome to my Youtube Channel', 'Welcome to');
        
        $slice = Str::of('Welcome to my Youtube Channel')->after('Welcome to');
        
        echo $slice. '<br>';
    
        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
    
        echo $slice2. '<br>';
        
        $string = Str::of('Hello')->append('World!');
        echo $string. '<br>';
        
        $result = Str::of('LARAVEL')->lower();
        echo $result. '<br>';
        
        $replaced = Str::of('Laravael 7.0')->replace('7.0', '8.13');
        echo $replaced. '<br>';
        
        $converted = Str::of('This is a title')->title();
        echo $converted. '<br>';
        
        $slug = Str::of('Laravel 8 frameword')->slug();
        echo $slug. '<br>';
        
        $str = Str::of('Laravel framework')->substr(8,5);
        echo $str. '<br>';
        
        $str = Str::of('/Laravel8/')->trim('/');
        echo $str. '<br>';
        
        $str = Str::of('Laravel')->upper();
        echo $str. '<br>';
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
