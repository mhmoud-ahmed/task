@extends('backend.layouts.parent')
@section('title', 'Edit Product')
@section('content')
<div class="row">
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
        @include('backend.include.message')
    </div>
        <div class="col-12">
            <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-6">
                        <label for="name_en">Name_en</label>
                        <input type="text" name="name_en" id="" class="form-control" value="{{ $product->name_en }}">
                        @error('name_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="name_en">Name_ar</label>
                        <input type="text" name="name_ar" id="Name_ar" class="form-control" value="{{ $product->name_ar }}">
                        @error('name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="price">price</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}">
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="code">code</label>
                        <input type="number" name="code" id="code" class="form-control" value="{{ $product->code }}">
                        @error('code')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="quantity">quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control"
                            value="{{ $product->quantity }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-4">
                        <label for="status">status</label>
                        <select name="status" id="status" class="form-control">
                            <option {{ $product->status == 1 ? 'selected' : '' }} value="1">Active</option>
                            <option {{ $product->status == 0 ? 'selected' : '' }} value="0">Not Active</option>
                        </select>
                        @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="brands">Brands</label>
                        <select name="brand_id" id="brand" class="form-control">
                            @foreach ($brands as $brand)
                                <option {{ $product->brand_id == $brand->id ? 'selected' : '' }} value="{{ $brand->id }}">
                                    {{ $brand->name_en }}</option>
                            @endforeach
                        </select>
                        @error('brand_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="subcategory_id">subcategories</label>
                        <select name="subcategory_id" id="subcategory_id" class="form-control">
                            @foreach ($subcategories as $subcategory)
                                <option {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }} value="{{ $subcategory->id }}">
                                    {{ $subcategory->name_en }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="desc_en">desc_en</label>
                        <textarea name="desc_en" id="desc_en" cols="30" rows="10"
                            class="form-control">{{ $product->desc_en }}</textarea>
                        @error('desc_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="desc_ar">desc_ar</label>
                        <textarea name="desc_ar" id="desc_ar" cols="30" rows="10"
                            class="form-control">{{ $product->desc_ar }}</textarea>
                        @error('desc_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="image">image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        <div class="col-6">
                            {{-- <img src="{{url('dist/img/products/'.$product->image)}}" alt="{{ $product->name_en }}"> --}}
                            <img src="{{ url('dist/img/products/' . $product->image) }}" alt="{{ $product->name_en }}"
                                class="w-100">
                        </div>
                    </div>

                </div>
                <div class="form-row my-3">
                    <div class="col-2">
                        <button class="btn btn-primary" name="page" value="index"> update </button>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-dark" name="page" value="back"> update & return </button>
                    </div>
                </div>
            </form>
        </div>
</div>
@endsection
