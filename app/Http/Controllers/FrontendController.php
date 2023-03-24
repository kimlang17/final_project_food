<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("frontend.index");
    }
    public function about()
    {
        return view("frontend.about");
    }
    public function contact()
    {
        return view("frontend.contact");
    }
    public function list()
    {
        $categories = Category::all();
        $menus = Menu::orderBy('created_at','DESC')->paginate(6);
    	return view('frontend.list')->with('menus',$menus)->with('categories', $categories);
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
        $categories = Category::all();
        return view('frontend.show')->with('menu', menu::find($id))->with('categories',$categories);
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
    public function getByCategory($id) {
        $categories = Category::all();
        // $menus = DB::table('menus')->where('category_id', $id)->paginate(3);
        $menus = Menu::with('category')->where('category_id', $id)->paginate(6);
        return view('frontend.list')
            ->with('menus', $menus)
            ->with('categories', $categories);
    }
    public function getBySearch(Request $request) {
        $keyword = !empty($request->input('keyword'))?$request->input('keyword'):"";
        $categories = Category::all();
        if( $keyword != ""){
            return view('frontend.list')
                ->with('menus', Menu::where('name', 'LIKE', '%'.$keyword.'%')->paginate(6))
                ->with('keyword', $keyword)
                ->with('categories', $categories);
        } else {
            return view('frontend.list')
                ->with('menus', Menu::paginate(6))
                ->with('keyword', $keyword)
                ->with('categories', $categories);
        } 
    }
}
