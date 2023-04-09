@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')

<!-- general form elements disabled -->
        <div class="content-wrapper"><br><br>
        <section class="content">
            <div class="card card-primary">
              <div class="card-header" style="height:6rem;">
                <h3 class="card-title" id="textHeader">Tambah Naik Sidih</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Id Jemaat</label>
                        <input type="text" class="form-control" placeholder="id jemaat">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Sidih</label>
                        <input type="text" class="form-control" placeholder="tanggal sidih" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="nama lengkap">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Asal Gereja</label>
                        <input type="text" class="form-control" placeholder="asal gereja" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" class="form-control" placeholder="tanggal lahir">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Pendeta</label>
                        <input type="text" class="form-control" placeholder="nama pendeta" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="alamat" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" rows="3" placeholder="keterangan" disabled></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-outline-dark btn-lg ml-3 float-right">Cancel</button>
                    <button type="submit" class="btn btn-success btn-lg float-right">Create</button>
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
        </section>
    </div>
            <!-- /.card -->