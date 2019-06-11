<?php

namespace App\Http\Controllers\admin;

use App\TCategoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = TCategoria::all()->sortBy('dia');
        return view('admin.category', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('admin.included-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = $_POST["txt_category"];
        $descripcion = $_POST["txta_descripcion"];

        if ($request->filled(['txt_category'])){

            $category2 = new TCategoria();
            $category2->nombre = $category;
            $category2->descripcion = $descripcion;
            $category2->save();

            return redirect(route('admin_category_index_path'))->with('status', 'Category created successfully');

        }else{
            return "false";
        }
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
        $categoria = TCategoria::where('id', $id)->get();
        return view('admin.category-edit', compact('categoria'));
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
//        $category = $_POST["txt_category"];
//        $descripcion = $_POST["txta_descripcion"];
//        $group = $_POST["slc_group"];
//        $order = $_POST["chk_order"];

        if ($request->filled(['txt_category'])){

            $category2 = TCategoria::FindOrFail($id);
            $category2->nombre = $request->input('txt_category');
            $category2->descripcion = $request->input('txta_descripcion');
            if ($request->has('chk_order')){
                $category2->estado = $request->input('chk_order');
            }else{
                $category2->estado = 0;
            }
            $category2->grupo = $request->input('slc_group');
            $category2->save();

            return redirect(route('admin_category_index_path'))->with('status', 'Successfully updated category');

        }else{
            return "false";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category2=TCategoria::find($id);
        $category2->delete();
        return redirect(route('admin_category_index_path'))->with('delete', 'Category successfully removed');
    }
}
