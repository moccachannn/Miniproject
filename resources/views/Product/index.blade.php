@extends('layouts.app')
@section('content')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mx-auto" style="background: linear-gradient(to right, #a4bffa, #f8cdea);">
                <a href="{{ route('products.create') }}"><button>Tambah</button></a>
                <table border="1" cellpadding="15">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <thead>
                            <tr>
                                <th>Code_Product</th>
                                <th>Name_Product</th>
                                <th>Price_Product</th>
                                <th>Desc_Product</th>
                                <th>Unit_Id</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->code_product }}</td>
                                    <td>{{ $product->name_product }}</td>
                                    <td>{{ $product->price_product }}</td>
                                    <td>{{ $product->desc_product }}</td>
                                    <td>{{ $product->unit->name_unit }}</td>
                                    <td>@include('Product.action')</td>
                                </tr>
                            @endforeach
                    </div>
                    </tbody>
                </table>
            @endsection
