<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use Session;
use Validator;
use File;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index')->with('menus',$menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = array();
    	foreach (Category::all() as $category) {
    		$categories[$category->id] = $category->name;
    	}
    	return view('menu.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20|min:3',
            'category_id' => 'required|integer',
            'price' => 'required|max:20|min:3',
            'image' => 'required|mimes:jpg,jpeg,png,gif',
            'description' => 'required|max:1000|min:10',
        ]);
          
        if ($validator->fails()) {
            return redirect('menu/create')
                ->withInput()
                ->withErrors($validator);
        }
    
        // Create The menu
        $image = $request->file('image');
        $upload = 'img/';
        $filename = time().$image->getClientOriginalName();
        move_uploaded_file($image->getPathName(), $upload. $filename);
    
        $menu = new Menu();
        $menu->name = $request->name;
	    $menu->category_id = $request->category_id;
        $menu->price = $request->price;
        $menu->image = $filename;
        $menu->description = $request->description;
        $menu->save();
        Session::flash('menu_create','New data is created.');
        return redirect('menu/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menu.show')->with('menu', $menu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = array();
        foreach (Category::all() as $category) {
            $categories[$category->id] = $category->name;
        }
        $menu = Menu::findOrFail($id);
        return view('menu.edit')->with('menu', $menu)->with('categories', $categories);
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
        $validator = Validator::make($request->all(), [
			'name' => 'required|max:20|min:3',
			'price' => 'required|max:20|min:3',
			'image' => 'mimes:jpg,jpeg,png,gif',
			'description' => 'required|max:1000|min:10',
		]);

		if ($validator->fails()) {
			return redirect('menu/'.$id.'/edit')
				->withInput()
				->withErrors($validator);
		}
        $menu = Menu::find($id);
		// Create The Post
		if($request->file('image') != ""){
            $image = $request->file('image');
            $upload = 'img/';
            $filename = time().$image->getClientOriginalName();
move_uploaded_file($image->getPathName(), $upload . $filename);
		}
		
		$menu->name = $request->Input('name');
		$menu->price = $request->Input('price');
		if(isset($filename)){
		    $menu->image = $filename;
		}
        $menu->category_id = $request->Input('category_id');
		$menu->description = $request->Input('description');
		$menu->save();

		Session::flash('menu_update','Data is updated');
		return redirect('menu/'.$menu->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
    	$image_path = 'img/'.$menu->image;
    	File::delete($image_path);
    	$menu->delete();
    	Session::flash('menu_delete','Data is deleted.');
    	return redirect('menu');
    }
}
