
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
 @include('Partials.header')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('Partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">Starter Page</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('produk.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit anggota </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">

                <h3>Edit Produk</h3>

            </div>
          <div class="card-body">
            <form action="{{ route('produk.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <?php //var_dump($data->hj);die; ?>
                <input type="hidden" name="id" class="form-control" value="{{ $data->id }}" required>
                <div class="form-group">
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control mb-3" value="{{ $data->nama }}"" required>
                </div>
            
            <div class="form-group">
              <label for="gambar">Gambar</label>
              {{-- <form action="upload.php" method="post" enctype="multipart/form-data"> --}}
                <input type="file" name="gambar" accept="image/*" class="form-control" value="{{ $data->gambar }}" required>
                {{-- <input type="submit" value="Upload Foto"> --}}
                <div class="form-group">
                    <label for="kategori">kategori</label>
                    <select name="id_kategori" id="kategori" class="form-control" value="{{ $data->kategori }}" required>
                      @foreach ($kategori as $datas )
                        <option value="{{ $datas->id }}">{{ $datas->nama }}</option>
                      @endforeach

                    </select>
                    {{-- <input type="text" name="kategori" class="form-control mb-3" placeholder="kategori" autocomplete="off" autofocus required> --}}
                </div>
                  <div class="form-group">
                    <label for="hpp">HPP</label>
                      <input type="text" name="hpp" class="form-control mb-3" value="{{ $data->hpp }}" required>
                  </div>
                  <div class="form-group">
                    <label for="harga_jual">Harga Jual</label>
                      <input type="text" name="harga_jual" class="form-control mb-3" value="{{ $data->hj }}" required>
                  </div>
                  <div class="form-group">
                    <label for="hpp">Stok</label>
                      <input type="text" name="stok" class="form-control mb-3" value="{{ $data->stok }}" required>
                  </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
          </div>
        </div>
       
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
   @include('Partials.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Partials.script')

<script>

    $('#kategori').val('{{ $data->id_kategori }}').change();
</script>
</body>
</html>