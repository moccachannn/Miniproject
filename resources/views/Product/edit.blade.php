@extends('layouts.app')
@section('content')
    <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi bi-clipboard-heart fs-1"></i>
                    <h4>Tambah Product</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="codeProduct" class="form-label">code Product</label>
                        <input class="form-control @error('codeProduct') isinvalid @enderror" type="text" name="codeProduct"
                            id="codeProduct" value="{{ $product->code_product }}" placeholder="Enter code Product">
                        @error('codeProduct')
                            <div class="textdanger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nameProduct" class="form-label">name Product</label>
                        <input class="form-control @error('nameProduct') isinvalid @enderror" type="text" name="nameProduct"
                            id="nameProduct" value="{{ $product->name_product }}" placeholder="Enter name Product">
                        @error('nameProduct')
                            <div class="textdanger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="priceproduct" class="form-label">price Product</label>
                        <input class="form-control @error('priceproduct') isinvalid @enderror" type="text" name="priceproduct"
                            id="priceproduct" value="{{ $product->price_product }}" placeholder="Enter price product">
                        @error('priceproduct')
                            <div class="textdanger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="descproduct" class="form-label">desc Product</label><input
                            class="form-control @error('descproduct') is-invalid @enderror" type="text" name="descproduct"
                            id="descproduct" value="{{ $product->desc_product }}"placeholder="Enter desc product">
                        @error('descproduct')
                            <div class="textdanger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="unit" class="formlabel">unit</label>
                        <select name="unit" id="unit" class="formselect">
                            @php
                                $selected = ' ';
                                if ($errors->any()) {
                                    $selected = old('unit');
                                }else {
                                    $selected = $product->unit_id;
                                }
                            @endphp
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}"
                                    {{ old('unit') == $unit->id ? 'selected' : '' }}>
                                    {{ $unit->code . ' - ' . $unit->name_unit }}</option>
                            @endforeach
                        </select>
                        @error('unit')
                            <div class="textdanger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('products.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi bi-arrow-left-square-fill me-2"></i>
                            Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
