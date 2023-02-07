<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = DB::table('db_category')->where('is_slied', '1')->select('id','category_name','banner_image','is_slied')->get();
        // return $category;
        $advertise_img = DB::table('db_category')->orderBy('id', 'desc')->where('is_advertise', '1')->select('is_advertise','advertise_image')->limit(6)->get();
        return view('product.category',compact('category','advertise_img'));
    }
    // public function sideCategory()
    // {
    //     $sidecategory = DB::table('db_subcategory')
    //         ->join('db_category', 'db_category.id', '=', 'db_subcategory.category_id')
    //         ->select('db_subcategory.subcategory_name as subcat_name','db_subcategory.image as subcat_icon', 'db_category.category_name as catnaem','db_category.image as caticon')->get();
    //         return $sidecategory;
    //         return view('layout.sidebar', compact('sidecategory'));
    // }

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
