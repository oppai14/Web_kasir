@extends('partials.main')

@section('content')
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
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <select type="text" id="format" name="format" class="form-control" disabled="true" required>
            <option value="">-- Pilih Format --</option>
            <option value="harian">Harian</option>
            <option value="bulanan">Bulanan</option>
            <option value="tahunan">tahunan</option>
            <option value="rentang_tanggal">Rentang Tanggal</option>
          </select>
          <div class="card-tools">
            {{-- <a href="{{ route('laporantransaksi.cetaklaporan') }}" class="btn btn-primary">Cetak data<i class="fas fa-plus-square"></i></a> --}}
          </div>
          <div class="pull-right">
            <a href="{{url('/downloadpdf')}}" target="_blank" class="btn-btn-info btn-md">Cetak Pdf</a>
          </div>          
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>No Transaksi</th>
              <th>Nama Kasir</th>
              <th>Prouk</th>
              <th>Jumlah</th>
              <th>Total</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody id="isi">
            <?php $no=1; ?>
            @foreach ($data as $item) 
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->id_transaksi }}</td> 
                <td>{{ $item->nama_kasir }}</td> 
                <td>{{ $item->nama_produk }}</td> 
                <td>{{ $item->jumlah }}</td> 
                <td>Rp {{ number_format($item->total, 0, ',', '.') }}</td>
                <td>{{ $item->tanggal }}</td> 
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="card-body">            
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
