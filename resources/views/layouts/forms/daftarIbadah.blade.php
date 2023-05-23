@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pendaftaran Jadwal Ibadah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pendaftaran Jadwal Ibadah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="height:6rem">
                <h3 class="card-title" id="textHeader">Tambah Jadwal Ibadah</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Jenis Minggu</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Minggu">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Waktu Ibadah</label>
                    <input type="datetime-local" class="form-control" id="exampleInputEmail1" placeholder="Waktu Ibadah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pelayan Ibadah</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pelayan Ibadah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pelayan</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Jumlah pelayan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keterangan Lain">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</button>
                  <button type="submit" class="btn btn-success btn-lg float-right">Create</button>
                </div>
              </form>
            </div>
            <!-- /.card -->