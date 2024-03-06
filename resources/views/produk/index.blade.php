
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
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Daftar Barang</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
         
          <div class="card-tools">
              <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Barang <i class="fas fa-plus-square"></i></a>
            </div>
          </div>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Gambar</th>
                      <th>Kategori</th>
                      <th>Hpp</th>
                      <th>Harga Jual</th>
                      <th>Stok</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody id="isi">
                  <?php  $no=1; ?>
                  @foreach ($datas as $data) 
                      <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $data->nama  }}</td>
                          <td><img src="{{ asset('uploads/' . $data->gambar) }}" style="width: 50px; height: 50px;" alt="gambar anggota"></td>
                          <td>{{ $data->kategori  }}</td>
                          <td>Rp {{ number_format($data->hpp, 0, ',', '.') }}</td>
                          <td>Rp {{ number_format($data->hj, 0, ',', '.') }}</td>
                          <td>{{ $data->stok }}</td>
                          <td><a href="{{ route('produk.edit', $data->id) }}" class="btn btn-warning m-1 "><i class="bi bi-pencil-square">Edit</i></a>
                              <form action="{{ route('produk.destroy', $data->id) }}" method="post" style="display: inline">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="bi bi-trash">Hapus</i></button>
                              </form>
                          <td>{{ $data->keterangan }}</td>
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