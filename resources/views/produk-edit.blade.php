@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Produk</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<form action="/produk/{{ $produk->id }}" method="POST">
@method('patch')
<section class="content">
  <div class="container-fluid">

    <div class="card">
      <div class="card-header">
          <div class="form-group">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="name" value="{{ $produk->name }}">
              </div>

              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" placeholder="Harga" name="harga" value="{{ $produk->harga }}">
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="category_id" value="{{ $produk->category_id }}">
                      <option value="1">Bunga</option>
                      <option value="1">Tanaman Hias</option>
                      <option value="1">Peralatan</option>
                      <option value="1">Lain-lain</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi">{{ $produk->deskripsi }}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File Gambar</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                    <label class="custom-file-label" for="exampleInputFile" value="{{ $produk->image }}">Choose file</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>


        </div>
      </div>
    </div>
    </form>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection