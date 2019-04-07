@extends('admin.layout.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Item</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('item/'.$item->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Item Name</label>

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $item->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Category Name</label>

                            <div class="col-md-6">
                                <select name="category_id" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                                    <option value="">Select Category</option>

                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @if($category->id==$item->category_id) 
                                        selected
                                        @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">SubCategory Name</label>

                            <div class="col-md-6">
                                <select name="subcategory_id" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                                    <option value="">Select SubCategory</option>

                                    @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}"
                                        @if($subcategory->id==$item->subcategory_id) 
                                        selected
                                        @endif>
                                        {{ $subcategory->name }}
                                    </option>
                                    @endforeach
                                </select>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Brand Name</label>

                            <div class="col-md-6">
                                <select name="brand_id" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required>
                                    <option value="">Select Brand</option>

                                    @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}"
                                        @if($brand->id==$item->brand_id) 
                                        selected
                                        @endif>{{ $brand->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                                <input type="text" name="price" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $item->price }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="description">{{ $item->description }}</textarea>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                                    
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Save
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
