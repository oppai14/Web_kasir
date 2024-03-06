@extends('partials.main');
@section('content');
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
              <li class="breadcrumb-item active">Daftar kategori</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="card card-info card-outline">
          <div class="card-header">
           
            <div class="card-tools">
                <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori<i class="fas fa-plus-square"></i></a>
              </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="isi">
                    <?php  $no=1; ?>
                    @foreach ($data as $data) 
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama  }}</td>
                            <td><a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-warning m-1 "><i class="bi bi-pencil-square">Edit</i></a>
                                <form action="{{ route('kategori.destroy', $data->id) }}" method="post" style="display: inline">
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