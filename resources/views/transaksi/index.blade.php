@extends('partials.main');
@section('content');
<link rel="stylesheet" href="{{ asset('css/style.css') }}">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0"></h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            {{-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Daftar Barang</li>
            </ol> --}}
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="content">
  <div class="row">
    <div class="card card-info card-outline col-8">
      <div class="card-header">
       
        <div class="card-tools">
            {{-- <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Barang <i class="fas fa-plus-square"></i></a> --}}
          </div>
        </div>
        {{-- <div class="search-container">
          <input type="text" placeholder="Search...">
          <button type="submit">Search</button>

        </div> --}}

        {{-- <div class="container-fluid">
          <div class="row">
            @foreach ($products as $item)
            <div class="col-lg-3 col-md-6 col-xs-12 mb-4 mt-3" onclick="pilihProduk({{ json_encode($item) }})">
              <div class="card product-card">
                <div class="card product-card" data-product-id="{{ $item->id }}" >
                  <img src="{{ asset('uploads/' . $item->gambar) }}" class="card-img-top product-img" alt="{{ $item->name }}" style="width: 200px; height: 200px">
                  <div class="card-body">
                    <h5 class="card-title"><b>{{ $item->nama }}</b></h5>
                    <br>
                    <p class="card-text ">Rp. {{ number_format($item->hj, 0, ',', '.') }}</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div> --}}



        <div class="container-fluid">
            <div class="row">

              <div class="col-md-9" style="max-height: 90vh; overflow-y: auto;">
              <div class="row">
                
                @foreach ($products as $item)
                <div class="col-lg-3 col-md-6 col-xs-12 mb-4 mt-3" onclick="pilihProduk({{ json_encode($item) }})">
                  <div class="card product-card" data-product-id="{{ $item->id }}" >

                        <img src="{{ asset('uploads/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->name }}" style="width: 100px; height: 100px">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $item->nama }}</b></h5>
                            <br>
                            {{-- <h5 class="card-title">{{ $item->name }}</h5> --}}
                            <p class="card-text badge badge-success">Rp. {{ number_format($item->hj, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
                {{-- @dd($item) --}}
                @endforeach
              </div>
            </div>           
          </div>
        </div>
</div>
    <div class="card card-info card-outline col-4">
      <div class="card-header">
       
        <div class="card-tools">
            {{-- <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Barang <i class="fas fa-plus-square"></i></a> --}}
          </div>
        </div>
        
        <div class="container-fluid">
                  <h3>KERANJANG</h3>
                  <form action="{{ route('transaksi.store') }}" method="post">
                    @csrf

                    <div class="main">
                      <table class="table">
                      <thead>
                        <tr>
                          <th>produk</th>
                          <th>harga</th>
                          <th>Stok</th>
                          <th>Jumlah</th>
                        </tr>
                      </thead>
                      <tbody id="keranjang">

                      </tbody>
                    </table>
                  </div>
                    <div class="main">
                      <label for="">Total:</label>   
                      <div class="form-group">
                        <input type="text" name="total" id="total" class="form-control" readonly>
                      </div>
                      <label for="">Bayar:</label>
                      <div class="form-group">
                        <input type="text" name="bayar" id="bayar" class="form-control" oninput="(pembayaran())">
                      </div>
                      <label for="">Kembalian:</label>
                      <div class="form-group">
                        <input type="text" name="kembalian" id="kembalian" class="form-control" readonly>
                      </div>
                      <button type="submit" class="btn btn-primary">bayar</button>
                    </div>
                  </form>
            </div>
       
        <div class="card-body">            

</div>
</div>

  </div>

</div>
<!-- /.content -->
</div>

<script src="{{ asset('js/transaksi.js') }}"></script>

<!-- /.content-wrapper -->

@endsection
