<?php include 'include/header.php' ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Mitra Kerja Perusahaan</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>
                            Nama Mitra Kerja
                          </th>
                          <th>
                            Nama Pejabat
                          </th>
                          <th>
                            Nomor Telepon
                          </th>
                          <th>
                            Alamat
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Polres Cilacap
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            0988878786677
                          </td>
                          <td>
                            Alamat di rumah
                          </td>
                          <td>
                            <a href="edit.php?id=1" class="btn btn-sm btn-warning">
                                <i class="ti-pencil"></i>
                            </a>
                            <a href="hapus.php?id=1" class="btn btn-sm btn-danger"
                              onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="ti-trash"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Polres Kebumen
                          </td>
                          <td>
                            Herman Beck
                          </td>
                          <td>
                            0988878786677
                          </td>
                          <td>
                            Alamat di rumah
                          </td>
                          <td>
                            <a href="edit.php?id=1" class="btn btn-sm btn-warning">
                                <i class="ti-pencil"></i>
                            </a>
                            <a href="hapus.php?id=1" class="btn btn-sm btn-danger"
                              onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <i class="ti-trash"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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