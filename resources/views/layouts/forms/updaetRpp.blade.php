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
            <h1>Update Data Jemaat Kenak RPP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Data Jemaat Kenak RPP</li>
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
                <h3 class="card-title" id="textHeader">Ubah Data Jemaat Kenak RPP</h3>
              </div><br>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Jemaat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Jemaat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelanggaran</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Pelanggaran">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Manopoti Dosa</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Manopoti Dosa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keteranagn</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Keteranagn">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</button>
                  <button type="submit" class="btn btn-warning btn-lg float-right">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->