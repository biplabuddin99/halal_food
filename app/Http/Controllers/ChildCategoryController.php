<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChildCategoryController extends Controller
{
    // public function index()
    // {
    //     $child_category = DB::table('db_childcategory')->where('is_slied', '1')->select('id','childcategory_name','banner_image','is_slied')->get();
    //      $child_advertise = DB::table('db_childcategory')->orderBy('id', 'desc')->where('is_advertise', '1')->select('is_advertise','advertise_image')->limit(6)->get();
    //     return view('product.childcategory',compact('child_category','child_advertise'));
    // }
    public function childCategory($subcategory_id)
    {
        $show_childcategory = DB::table('db_childcategory')->where('subcategory_id',$subcategory_id)->get();
        $child_advertise = DB::table('db_childcategory')->where('subcategory_id',$subcategory_id)->orderBy('id', 'desc')->where('is_advertise', '1')->select('is_advertise','advertise_image')->limit(6)->get();
        return view('product.childcategory',compact('show_childcategory','child_advertise'));

    }
}
