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
                <h3 class="card-title" id="textHeader">Detail Data Pernikahan Mempelai Laki-Laki</h3>
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
                      <td>Nama Lengkap</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Tanggal Nikah</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Tanggal Martumpol</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Nama Ayah</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Nama Ibu</td>
                      <td>------</td>
                    </tr>
                    <tr>
                    <tr>
                      <td>Akta Kelahiran</td>
                      <td>------</td>
                    </tr>
                    <tr>
                      <td>Surat Sidih</td>
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
                <a href="/pernikahan"><button class="btn btn-default" id="buttonKembali">Kembali</button></a>
                <a href="/detailPernikahanPerempuan"><button class="btn btn-default" id="buttonKembali">Next</button></a>
                <a href="/updatePernikahanLaki"><button class="btn btn-warning" id="buttonEdit">Edit</button></a>
              </div><br><br>
                
            </div>
            <!-- /.card -->
          </div>
        </div>