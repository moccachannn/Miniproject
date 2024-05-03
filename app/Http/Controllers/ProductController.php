<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Unit;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle="Daftar Product";
        $products=Product::all();

        return view('Product.index', ['pageTitle'=> $pageTitle,
        'products'=> $products
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Input Product';
        $units=Unit::all();

        return view('Product.create', compact('pageTitle',
        'units'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Seluruh Field harus diisi.',
            'numeric' => 'Isi field dengan angka'
        ];

        $validator = FacadesValidator::make($request->all(), [
            'nameProduct' => 'required',
            'descProduct' => 'required',
            'priceProduct' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $product = new Product();
        $product->code_product = $request->codeProduct;
        $product->name_Product = $request->nameProduct;
        $product->price_Product = $request->priceProduct;
        $product->desc_Product = $request->descProduct;
        $product->unit_id = $request->unit;
        $product->save();

        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Show Product';

        $units = Unit::all();
        $product = Product::find($id);
        return view ('Product.show', compact('pageTitle', 'product',
        'units'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Product';

        $units = Unit::all();
        $product = Product::find($id);
        return view('Product.edit', compact('pageTitle', 'product',
        'units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Seluruh Field harus diisi.',
            'numeric' => 'Isi field dengan angka'
        ];

        $validator = FacadesValidator::make($request->all(), [
            'codeProduct' => 'required',
            'nameProduct' => 'required',
            'descproduct' => 'required',
            'priceproduct' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $product = Product::find($id);
        $product->code_product = $request->codeProduct;
        $product->name_product = $request->nameProduct;
        $product->price_product = $request->priceproduct;
        $product->desc_product = $request->descproduct;
        $product->unit_id = $request->unit;
        $product->save();

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index');
    }
}
