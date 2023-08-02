<?= $this->extend('admin_layouts/IndexView') ?>

<?= $this->section('content') ?>
       <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $title ?></h3>
                <p class="text-subtitle text-muted">
                  A sortable, searchable, paginated table without dependencies
                  thanks to simple-datatables.
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                  aria-label="breadcrumb"
                  class="breadcrumb-header float-start float-lg-end"
                >
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      <?= $title ?>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <section class="section">
            <div class="card">
              <div class="card-header">
                <div class= "d-flex align-items-center justify-content-between">
                    <div>
                       <h4>Form <?= $title?></h4>
                    </div>
                </div>
              </div>
              <div class="card-body">
                <form action="/kategori/save" method="POST">
                  <div class="row">
                    <div class="col md-2">
                        <div class="col md-8">
                            <div class="form-group mb-3">
                            <label for="" class="mb-3">Nama Kategori</label>
                            <input class="form-control" type="text" id="kategori_nama" name="kategori_nama">
                            </div>

                            <div class="form-group mb-3">
                            <label for="" class="mb-3">Deskripsi Kategori</label>
                            <input class="form-control" type="text" id="kategori_deskripsi" name="kategori_deskripsi">
                            </div>
                            
                            <div class="form-group mb-3">
                              <button class="btn btn-primary" type="submit"><i class="bi bi-save"></i>Simpan</button>
                              <a href="kategori" class= "btn btn-danger"><i class= "bi bi-reply"></i>Kembali</a>
                            </div>

                        </div>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </section>
        </div>
<?= $this->endSection() ?>