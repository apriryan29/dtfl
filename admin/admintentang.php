<?php include 'include/header.php' ?>

    <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tentang Kami</h4>
                  <p class="card-description">
                    Formulir isian tentang perusahaan
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Perusahaan</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Masukan nama perusahaan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email Perusahaan</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                      <label>Unggah Logo Perusahaan</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Unggah Gambar">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Unggah</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Nomor Telepon</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Maukan Nomor Telepon">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat Perusahaan</label>
                      <textarea class="form-control" id="alamat" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Deskripsi Perusahaan</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="tagline">Tagline Promosi Perusahaan</label>
                      <input type="text" class="form-control" id="tagline" placeholder="Masukan Tagline">
                    </div>
                    <div class="form-group">
                      <label for="kasus">Jumlah Kasus yang ditangani</label>
                      <input type="text" class="form-control" id="kasus" placeholder="Masukan Total Kasus yang ditangani">
                    </div>
                    <div class="form-group">
                      <label for="ahli">Jumlah Permintaan Saksi Ahli</label>
                      <input type="text" class="form-control" id="ahli" placeholder="Masukan Total Permintaan Saksi">
                    </div>
                    <div class="form-group">
                      <label for="ahli">Jam Terbang</label>
                      <input type="text" class="form-control" id="ahli" placeholder="Masukan Total Jam Terbang">
                    </div>
                    <div class="form-group">
                      <label for="ig">Link Instagram</label>
                      <input type="text" class="form-control" id="ig" placeholder="Masukan Link Instagram">
                    </div>
                    <div class="form-group">
                      <label for="tiktok">Link Tiktok</label>
                      <input type="text" class="form-control" id="tiktok" placeholder="Masukan Link Tiktok">
                    </div>
                    <div class="form-group">
                      <label for="wa">Link WhatsApp</label>
                      <input type="text" class="form-control" id="wa" placeholder="Masukan Link WhatsApp">
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