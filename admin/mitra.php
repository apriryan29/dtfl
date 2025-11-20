<?php include 'include/header.php' ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mitra Perusahaan</h4>
                  <p class="card-description">
                    Formulir isian Mitra Kerja Perusahaan
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="nama">Nama Mitra Kerja Perusahaan</label>
                      <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Mitra Perusahaan">
                    </div>
                    <div class="form-group">
                      <label for="pj">Nama Pimpinan Mitra</label>
                      <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Pimpinan Mitra">
                    </div>
                    <div class="form-group">
                      <label for="email">Email Mitra</label>
                      <input type="email" class="form-control" id="email" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat Mitra</label>
                      <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat Mitra Perusahaan">
                    </div>
                    <div class="form-group">
                      <label for="nomor">Nomor Telepon Mitra</label>
                      <input type="text" class="form-control" id="nomor" placeholder="Masukan Nomor Mitra Perusahaan">
                    </div>
                    <div class="form-group">
                      <label>Unggah Logo Mitra Kerja</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah Logo">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="website">Masukan Link website mitra</label>
                      <input type="text" class="form-control" id="nama" placeholder="Masukan link website mitra">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tim Perusahaan</h4>
                  <p class="card-description">
                    Formulir isian Tim Perusahaan
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="nama">Nama Mitra Kerja Perusahaan</label>
                      <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Tim Perusahaan">
                    </div>
                    <div class="form-group">
                      <label for="jabatan">Jabatan</label>
                      <input type="text" class="form-control" id="jabatan" placeholder="Masukan Jabatan">
                    </div>
                    <div class="form-group">
                      <label>Unggah Foto</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah Foto">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="ig">Masukan Link Instagaram</label>
                      <input type="text" class="form-control" id="ig" placeholder="Masukan link Instagram">
                    </div>
                    <div class="form-group">
                      <label for="lk">Masukan Link LinkedIn</label>
                      <input type="text" class="form-control" id="lk" placeholder="Masukan link LinkedIn">
                    </div>
                    <div class="form-group">
                      <label for="x">Masukan Link X</label>
                      <input type="text" class="form-control" id="x" placeholder="Masukan link X">
                    </div>
                    <div class="form-group">
                      <label for="fb">Masukan Link Facebook</label>
                      <input type="text" class="form-control" id="fb" placeholder="Masukan link Facebook">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>

<?php include 'include/footer.php' ?>


<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025. All rights reserved by <a href="https://dtflab.id/" target="_blank">PT DataTrace Forensics Lab</a>.</span>
        </div>
    </footer> 
<!-- partial -->
</div>