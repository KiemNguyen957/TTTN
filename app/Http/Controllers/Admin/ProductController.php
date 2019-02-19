<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Categorylist;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.products.index',compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categorylist= Categorylist::all();
        return view('admin.products.create',compact('categorylist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['slug' => changeTitle($request->name)]);
        $allow_type=['jpg','jpeg','png','svg','gif'];
        $data=$request->except(['image']);
        if($request->hasFile('image')){
            $image=$request->image;
            $flie_text=$image->getClientOriginalExtension();
            if(in_array($flie_text,$allow_type)){
                $file_name=$request->image->store('produts');
                $data['image']=$file_name;
                $error=0;
            }
            else{
                $error=1;
            }
        }
        if($error==0){
            $request->image=$file_name;
            Product::create($data);
        }
        else{
            $error="ảnh không hợp lệ";
            return redirect()->route('products.create',$id)->with('_error',$error);
        }
        return redirect()->route('products.index');
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
        $categorylist= Categorylist::all();
        $product = Product::findOrFail($id);
        return view('admin.products.edit',compact(['product'],['categorylist']));
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
        $request->merge(['slug' => changeTitle($request->name)]);
        $product = Product::findOrFail($id);
        if(isset($request->image)){
            $allow_type=['jpg','jpeg','png','svg','gif'];
            $data=$request->except(['image']);
            if($request->hasFile('image')){
                $image=$request->image;
                $flie_text=$image->getClientOriginalExtension();
                if(in_array($flie_text,$allow_type)){
                    $file_name=$request->image->store('produts');
                    $data['image']=$file_name;
                    $error=0;
                }
                else{
                    $error=1;
                }
            }
            if($error==0){
                $request->image=$file_name;
                $request->image = $request->merge(['image' => $file_name]);
                Storage::delete($product->image);
                $product->update($data);
                
            }
            else{
                $error="ảnh không hợp lệ";
                return redirect()->route('products.edit',$id)->with('_error',$error);
            }
        }
        else{
            $product->update($request->all());
        }
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Storage::delete($product->image);
        $product->delete();
        return redirect()->route('products.index');
    }
}
