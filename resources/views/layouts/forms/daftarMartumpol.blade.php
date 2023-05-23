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
                <h3 class="card-title">Tambah Martumpol</h3>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Data Awal</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Mempelai Laki-laki</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information2-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information2-part" id="information2-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Mempelai Perempuan</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                              <label>ID Gereja Martumpol</label>
                              <input type="text" class="form-control" placeholder="ID Gereja Martumpol">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Nama Gereja Martumpol</label>
                              <input type="text" class="form-control" placeholder="Nama Gereja Martumpol">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Tanggal Martumpol</label>
                              <input type="date" class="form-control" placeholder="Tanggal Martumpol">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>ID Gereja Pemberkatan</label>
                              <input type="text" class="form-control" placeholder="ID Gereja Pemberkatan">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                              <label>Tanggal Warta Martumpol</label>
                              <input type="date" class="form-control" placeholder="Tanggal Warta Martumpol">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Tanggal Warta Pemberkatan</label>
                              <input type="date" class="form-control" placeholder="Tanggal Warta Pemberkatan">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                              <label>Nama Gereja Martumpol</label>
                              <input type="text" class="form-control" placeholder="Nama Gereja Martumpol">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Nama Gereja Pemberkatan</label>
                              <input type="text" class="form-control" placeholder="Nama Gereja Pemberkatan">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                              <label>Nomor Surat Martumpol</label>
                              <input type="text" class="form-control" placeholder="Nomor Surat Martumpol">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Nomor Surat Pemberkatan</label>
                              <input type="text" class="form-control" placeholder="Nomor Surat Pemberkatan">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                              <label>Nama Pendeta Martumpol</label>
                              <input type="text" class="form-control" placeholder="Nama Pendeta Martumpol">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Nama Pendeta Pemberkatan</label>
                              <input type="text" class="form-control" placeholder="Nama Pendeta Pemberkatan">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label>Tanggal Pemberkatan</label>
                              <input type="date" class="form-control" placeholder="Tanggal Pemberkatan">
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Nama Lengkap">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">ID Jemaat</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="ID Jemaat">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">ID Gereja</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="ID Gereja">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ayah</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Nama Ayah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ibu</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Nama Ibu">
                      </div>
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="information2-part" class="content" role="tabpanel" aria-labelledby="information2-part-trigger">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Nama Lengkap">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">ID Jemaat</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="ID Jemaat">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">ID Gereja</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="ID Gereja">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ayah</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Nama Ayah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nama Ibu</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="Nama Ibu">
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