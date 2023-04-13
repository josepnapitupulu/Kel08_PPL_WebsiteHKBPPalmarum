@include('layouts.forms.header')
@include('layouts.forms.navbar')
@include('layouts.forms.sidebar')
@include('layouts.forms.footer')

<!-- general form elements disabled -->
        <div class="content-wrapper"><br><br>
        <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambnah Pernikahan</h3>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Mempelai Laki-laki</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Mempelai Perempuan</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Masukkan Alamat">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Pernikahan</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Tanggal Nikah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ayah Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Nama Ayah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ibu Mempelai Laki-Laki</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Nama Ibu">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Akta Kelahiran Mempelai Laki-Laki</label>
                        <input type="file" class="form-control" id="exampleInputText" placeholder="Akta Kelahiran">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Surat Sidi Mempelai Laki-Laki</label>
                        <input type="file" class="form-control" id="exampleInputText" placeholder="Surat Sidi">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Surat Martumpol</label>
                        <input type="file" class="form-control" id="exampleInputText" placeholder="Surat Martumpol">
                      </div>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Masukkan Nama">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Masukkan Alamat">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Pernikahan</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Tanggal Nikah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Martumpol</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Tanggal Martumpol">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ayah Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Nama Ayah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ibu Mempelai Perempuan</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Nama Ibu">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Akta Kelahiran Mempelai Perempuan</label>
                        <input type="file" class="form-control" id="exampleInputText" placeholder="Akta Kelahiran">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Surat Sidi Mempelai Perempuan</label>
                        <input type="file" class="form-control" id="exampleInputText" placeholder="Surat Sidi">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Keterangan">
                      </div>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        </section>
    </div>
            <!-- /.card -->