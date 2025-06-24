@extends('layouts.backend')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Tambah product 
                </div>
                <div class="card-body">
                    <form action="{{ route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama product</label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}"
                            @error('name') is-invalid @enderror>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="">Harga</label>
                            <input type="text" name="price" class="form-control" value="{{ $product->price }}"
                            @error('price') is-invalid @enderror>
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="">kategori</label>
                            <select type="text" name="category_id" class="form-control"
                            @error('category_id') is-invalid @enderror> 
                            @foreach( $category as $data)
                            <option value="{{ $data->id}}" value="{{$data->id}}" {{ $data->id == $product->category_id ? 
                                'selected' :''}}>
                                {{$data->name}}
                            </option>
                            @endforeach
                            </select>
                            @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="">stok</label>
                            <input type="number" name="stock" class="form-control" value="{{ $product->stock }}"
                            @error('stok') is-invalid @enderror>
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row">
                            <dic class="col">
                                <div class="mb-2">
                                   @if($product->image)
                                   <img src="{{ Storage::url($product->image) }}" alt=""
                                   style="width: 100px; height: 100px; "  >
                                   @endif
                                   <br>
                            <label for="">gambar</label>
                            <input type="file" name="image" 
                            class="form-control
                            @error('image') is-invalid @enderror">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                                </div>

                                 <div class="mb-2">
                            <label for="">deskripsi</label>
                            <textarea type="text" name="description" class="form-control
                            @error('description') is-invalid @enderror"> {{ $product->description }} </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                                 </div>

                            </dic>
                        </div>
                        

                        

                        <div class="mb-2">
                            <button type="submit" class="btn btn-sm btn-outline-primary">simpan</button>
                            <button type="reset" class="btn btn-sm btn-outline-warning">reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection