@extends('layouts.app')
@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
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
                            id="codeProduct" value="{{ old('codeProduct') }}" placeholder="Enter Code Product">
                        @error('codeProduct')
                            <div class="textdanger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nameProduct" class="form-label">name Product</label>
                        <input class="form-control @error('nameProduct') isinvalid @enderror" type="text" name="nameProduct"
                            id="nameProduct" value="{{ old('nameProduct') }}" placeholder="Enter Name Product">
                        @error('nameProduct')
                            <div class="textdanger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="priceProduct" class="form-label">price Product</label>
                        <input class="form-control @error('priceProduct') isinvalid @enderror" type="text" name="priceProduct"
                            id="priceProduct" value="{{ old('priceProduct') }}" placeholder="Enter Price Product">
                        @error('priceProduct')
                            <div class="textdanger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="descProduct" class="form-label">desc Product</label><input
                            class="form-control @error('descProduct') is-invalid @enderror" type="text" name="descProduct"
                            id="descProduct" value="{{ old('email') }}"placeholder="Enter Desc Product">
                        @error('descProduct')
                            <div class="textdanger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Unit" class="formlabel">Unit</label>
                        <select name="unit" id="unit" class="formselect">
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}"
                                    {{ old('unit') == $unit->id ? 'selected' : '' }}>
                                    {{ $unit->code . ' - ' . $unit->name_unit }}</option>
                            @endforeach
                        </select>
                        @error('position')
                            <div class="textdanger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('products.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class=" bi-arrow-left-square-fill me-2"></i>
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
