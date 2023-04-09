@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')

<div class="content-wrapper"><br><br>
  <section class="content">
      <div class="container-fluid">
          <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Detail Data Kegiatan</h3>
              </div><br><br>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Bio Data</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nama Kegiatan</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Jenis Kegiatan</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Jadwal Kegiatan</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Lokasi Kegiatan</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Jenis Status</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Keterangan</td>
                      <td>------</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                  </tbody>
                </table>
              </div><br>
              <!-- /.card-body -->
              <div>
                <button class="btn btn-default" id="buttonKembali">Kembali</button>
                <button class="btn btn-warning" id="buttonEdit">Edit</button>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>