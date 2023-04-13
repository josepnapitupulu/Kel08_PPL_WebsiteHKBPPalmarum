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
            <h1>Pendaftaran Jemaat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pendaftaran Jemaat</li>
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
                <h3 class="card-title" id="textHeader">Tambah Jemaat</h3>
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
                    <label for="exampleInputPassword1">Pendidikan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Pendidikan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bidang Pendidikan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bidang Pendidikan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pekerjaan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Gereja</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Gereja">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Distrik</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Distrik">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Wijk</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Wijk">
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