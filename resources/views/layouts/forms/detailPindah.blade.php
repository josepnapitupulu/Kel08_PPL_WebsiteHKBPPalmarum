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
                <h3 class="card-title" id="textHeader">Detail Data Jemaat Pindah</h3>
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
                      <td>ID Registrasi Pindah</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>ID Registrasi Jemaat</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>No Surat Pindah</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>ID Jemaat</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>ID Gereja Tujuan</td>
                      <td>------</td>
                    </tr>
                    <tr>
                    <tr>
                      <td>Nama Gereja</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Tanggal Warta</td>
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
                <a href="/updatePernikahanLaki"><button class="btn btn-warning" id="buttonEdit">Edit</button></a>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>