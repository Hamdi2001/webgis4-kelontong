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
                        <h4>Data <?= $title?></h4>
                    </div>
                    <div>
                        <a href="kategori/form" class= "btn btn-primary"><i class= "bi bi-plus"></i> Tambah</a>
                    </div>
                </div>
              </div>
              <div class="card-body">
                <table class="table table-striped" id="table1">
                  <thead>
                    <tr>
                      <th>Nama Kategori</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Graiden</td>
                      <td>vehicula.aliquet@semconsequat.co.uk</td>
                      <td>

                      <!-- Button Hijau -->
                        <div class="btn-group mb-1">
                        <div class="dropdown">
                          <button
                            class="btn btn-success dropdown-toggle me-1"
                            type="button"
                            id="dropdownMenuButton2"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Success
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton2"
                          >
                            <a class="dropdown-item" href="#">Option 1</a>
                            <a class="dropdown-item" href="#">Option 2</a>
                            <a class="dropdown-item" href="#">Option 3</a>
                          </div>
                        </div>
                      </div>

                      <!-- Button Merah -->
                      <div class="btn-group mb-1">
                        <div class="dropdown">
                          <button
                            class="btn btn-danger dropdown-toggle me-1"
                            type="button"
                            id="dropdownMenuButton4"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            Danger
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton4"
                          >
                            <a class="dropdown-item" href="#">Option 1</a>
                            <a class="dropdown-item" href="#">Option 2</a>
                            <a class="dropdown-item" href="#">Option 3</a>
                          </div>
                        </div>
                      </div>

                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
<?= $this->endSection() ?>