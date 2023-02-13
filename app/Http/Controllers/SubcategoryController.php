<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $subcategory = DB::table('db_subcategory')->where('is_slied', '1')->select('subcategory_name','banner_image','is_slied')->get();
    //      $subcategorys = DB::table('db_subcategory')->orderBy('id', 'desc')->where('is_advertise', '1')->select('is_advertise','advertise_image')->limit(6)->get();
    //     return view('product.subcategory',compact('subcategorys','subcategory'));
    // }
    public function subCategory($category_id)
    {
        $show_subcategory = DB::table('db_subcategory')->where('category_id',$category_id)->get();
        // return $show_subcategory;
        $subcategorys = DB::table('db_subcategory')->where('category_id',$category_id)->orderBy('id', 'desc')->where('is_advertise', '1')->select('is_advertise','advertise_image')->limit(6)->get();
        // return $show_subcategory;
        return view('product.subcategory',compact('show_subcategory','subcategorys'));

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
