@extends('layouts.backend')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Tambah Category 
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update',$category->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-2">
                            <label for="">Nama Kategory</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->id}}"
                            @error('name') is-invalid @enderror>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-outline-primary">simpan</button>
                            <button class="btn btn-sm btn-outline-warning">reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection