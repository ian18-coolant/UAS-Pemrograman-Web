<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::orderBy('id', 'DESC')->get();
        return view('product.index', compact(["products"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_code' => 'required|string|max:155|unique:products,product_code',
            'product_name' => 'required',
            'product_price' => 'required'
        ]);
        $filename = time() . '.' . $request->product_image->extension();
        $upload = $request->product_image->move(public_path('images'), $filename);

        if ($upload) {
            $request->product_image = $filename;
        } else {
            $request->product_image = "";
        }
        $post = Product::create([
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
            'product_image' => $request->product_image,
            'product_status' => "1",
        ]);

        if ($post) {
            return redirect()
                ->route('products.index')
                ->with([
                    'success' => 'Produk berhasil di input'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Produk gagal di input'
                ]);
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
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()
            ->route('products.index')
            ->with([
                'success' => 'Produk berhasil di hapus'
            ]);
    }
}
