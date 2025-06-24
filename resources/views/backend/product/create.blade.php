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
                    <form action="{{ route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="">Nama product</label>
                            <input type="text" name="name" class="form-control"
                            @error('name') is-invalid @enderror>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="">harga</label>
                            <input type="text" name="price" class="form-control"
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
                            <option value="{{ $data->id}}">{{$data->name}}</option>
                            @endforeach
                            </select>
                            @error('categori_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="">stok</label>
                            <input type="number" name="stock" class="form-control"
                            @error('stock') is-invalid @enderror>
                            @error('stock')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col">
                                 <div class="mb-2">
                            <label for="">gambar</label>
                            <input type="file" name="image" class="form-control"
                            @error('image') is-invalid @enderror>
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                                 </div>

                                 <div class="mb-2">
                            <label for="">deskripsi</label>
                            <input type="text" name="description" class="form-control"
                            @error('description') is-invalid @enderror>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                                 </div>

                            </div>
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