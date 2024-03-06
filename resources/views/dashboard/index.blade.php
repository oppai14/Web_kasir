@extends('partials.main');

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            {{-- card-no-1 --}}
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $totalKategori }}</h3>
    
                        <p>Kategori</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-cube"></i>
                    </div>
                    <a href="{{ route('kategori.index') }}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            {{-- card-no-1-end --}}
    
            {{-- card-no-2 --}}
            <div class="col-lg-4 col-md-4 col-sm-6">
                <!-- small card -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>{{ $totalProduk }}</h3>
    
                        <p>Produk</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <a href="{{ route('produk.index') }}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            {{-- card-no-2-end --}}
    
            {{-- card-no-3 --}}
            <div class="col-lg-4 col-md-4 col-sm-6">
                <!-- small card -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>12</h3>
    
                        <p>Transaksi</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-tags"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            {{-- card-no-3-end --}}
        </div>
    </div>
</div>

@endsection