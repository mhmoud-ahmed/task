<?php

namespace App\Http\Controllers\backend;

use App\http\traits\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdataProductRequest;

class ProductController extends Controller
{
    use media;
    public function index()
    {
        $products = DB::table('products')->select('id', 'name_en', 'name_ar', 'price', 'status', 'quantity', 'code', 'created_at')->get();
        return view('backend.products.index', compact('products'));
    }
    public function create()
    {
        $brands = DB::table('brands')->get();
        $subcategories = DB::table('subcategories')->select('id', 'name_en')->where('status', 1)->get();
        return view('backend.products.create', compact('brands', 'subcategories'));
    }
    public function store(StoreProductRequest $request)
    {
        // Upload photo ar5m 7aga shoftha
        $photoName = $this->uploadPhoto($request->image, 'products');
        $data = $request->except('_token', 'image', 'page');
        $data['image'] = $photoName;
        // dd($data);
        DB::table('products')->insert($data);
        return $this->redirectAccordingToRequest($request);
    }

    public function edit($id)
    {
        $brands = DB::table('brands')->get();
        $subcategories = DB::table('subcategories')->select('id', 'name_en')->where('status', 1)->get();
        $product = DB::table('products')->where('id', $id)->first();
        return view('backend.products.edit', compact('product', 'brands', 'subcategories'));
    }
    public function update(UpdataProductRequest $request, $id)
    {
        $data = $request->except('_token', '_method', 'image', 'page');
        if ($request->has('image')) {
            $oldPhotoName = DB::table('products')->select('image')->where('id', $id)->first()->image;
            $photoPath = public_path('dist/img/products');
            $this->deletePhoto($photoPath . $oldPhotoName);
            $photoName = $this->uploadPhoto($request->image, 'products');
            $data['image'] = $photoName;
        }
        DB::table('products')->where('id', $id)->update($data);
        return $this->redirectAccordingToRequest($request);
    }
    public function destroy($id)
    {
        $oldPhotoName = DB::table('products')->select('image')->where('id', $id)->first()->image;
        $photoPath = public_path('dist/img/products'). $oldPhotoName;
        $this->deletePhoto($photoPath);
        DB::table('products')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Success Operation');
    }
    private function redirectAccordingToRequest($request)
    {
        if($request->page == 'back'){
            return redirect()->back()->with('success','Successfull Opertaion');
        }else{
            return redirect()->route('products.index')->with('success','Successfull Opertaion');
        }
    }
}
