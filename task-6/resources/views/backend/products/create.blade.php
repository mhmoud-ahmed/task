@extends('backend.layouts.parent')
@section('title', 'Create Product')
@section('content')
    <div class="row">
        <div class="col-12">
            @include('backend.include.message')
        </div>
        <div class="col-12">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-12">
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-6">
                        <label for="name_en">Name_en</label>
                        <input type="text" name="name_en" id="" class="form-control" value="{{ old('name_ar') }}">
                        @error('name_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="name_en">Name_ar</label>
                        <input type="text" name="name_ar" id="Name_ar" class="form-control"
                            value="{{ old('name_ar') }}">
                        @error('name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="price">price</label>
                        <input type="number" name="price" value="{{ old('price') }}" id="price" class="form-control">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="code">code</label>
                        <input type="number" name="code" value="{{ old('code') }}" id="code" class="form-control">
                        @error('code')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="quantity">quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control"
                            value="{{ old('quantity') }}">
                        @error('quantity')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="status">status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Not Active</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="brands">Brands</label>
                        <select name="brand_id" id="brand" class="form-control">
                            @foreach ($brands as $brand)
                                <option {{ old('brand_id') == $brand->id ? 'selected' : '' }} value="{{ $brand->id }}">
                                    {{ $brand->name_en }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="subcategory_id">subcategories</label>
                        <select name="subcategory_id" id="subcategory_id" class="form-control">
                            @foreach ($subcategories as $subcategory)
                                <option {{ old('subcategory_id') == $subcategory->id ? 'selected' : '' }}
                                    value="{{ $subcategory->id }}">{{ $subcategory->name_en }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="desc_en">desc_en</label>
                        <textarea name="desc_en" id="desc_en" cols="30" rows="10"
                            class="form-control">{{ old('desc_en') }}</textarea>
                        @error('desc_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="desc_ar">desc_ar</label>
                        <textarea name="desc_ar" id="desc_ar" cols="30" rows="10"
                            class="form-control">{{ old('desc_en') }}</textarea>
                        @error('desc_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row my-3">
                    <div class="col-2">
                        <button class="btn btn-primary" name="page" value="index"> Create </button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-dark" name="page" value="back"> Create & return </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
