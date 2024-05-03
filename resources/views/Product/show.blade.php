@extends('layouts.app')
@section('content')
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi bi-clipboard-heart fs-1"></i>
                    <h4>Detail Product</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="codeProduct" class="form-label">Code Product</label>
                            <h5>{{ $product->code_product }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="nameProduct" class="form-label">Name Product</label>
                            <h5>{{ $product->name_product }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="priceproduct" class="form-label">Price Product</label>
                            <h5>{{ $product->price_product }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="descproduct" class="form-label">Desc Product</label>
                        <h5>{{ $product->desc_product }}</h5>
                    </div>
                    <div class="col-md-12 mb-3">
                            <label for="unit" class="form-label">Unit</label>
                            <h5>{{ $product->unit->name_unit }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('products.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi bi-arrow-left-square-fill me-2"></i></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
