@extends('layouts.backend')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Detail Produk</h5>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="mb-3">
                            <label for="">Nama product</label>
                            <div>{{ $product->name }}</div>
                            </div>

                            <div class="mb-3">
                            <label for="">Harga</label>
                            <div>RP {{ number_format($product->price, 0, ',', '.')}} </div>
                            </div>

                         </div>

                     </div>
                   

                     <div class="row">
                        <div class="col-md-6">

                        <div class="mb-3">
                            <label for=""><strong>Kategory</strong></label>
                            <div>{{ $product->category->name ?? '-' }}</div>
                        </div>

                        <div class="mb-3">
                            <label for="">Stok</label>
                            <div>{{ $product->stok }}</div>
                        </div>

                        
                        </div>
                    </div>
               
                    
                    

                        <div class="row mt-3">
                            <dic class="col-md-6">
                                <div class="mb-3">
                                   @if($product->image)
                                   <img src="{{ Store::url($product->image) }}" alt="Gambar Produk" class="img-thumbnail"
                                   style="width: 150px; height: 150px; object-fit: cover; "  >
                                   @else
                                   <div>tidak ada gambar</div>
                                   @endif
                                </div>
                            </dic>


                                <div class="col-md-6">
                                    <div class="mb-3">
                            <label for=""><strong>deskripsi</strong></label>
                            <div>{{ $product->description }}</div>
                                     </div>
                                </div>
                                 

                            
                        </div>
                        

                        

                        <div class="mb-4">
                           <a href="{{ route('backend.product.index')}}" class="btn btn-smbtn-secondart">
                            <i class="fas fa-arrow-left"></i> Kembali
                           </a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection