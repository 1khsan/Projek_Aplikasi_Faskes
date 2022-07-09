<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo "Admin"?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layout</a></li>
                        <li class="breadcrumb-item active">Fixed Layout</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card ">
                        <div class="card-header">
                            kelola data faskes
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body float ">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body bg-secondary ">
                                            <h5 class="card-title ">Kelola Fasilitas Kesehatan <i
                                                    class="bi bi-hospital"></i> </h5>
                                            <p class="card-text">Mengelola Fasilitas Kesehatan kota Depok</p>
                                            <a href="<?php echo base_url('index.php/faskes')?>"
                                                class="btn btn-secondary text-dark">Lebih lanjut <i
                                                    class="bi bi-arrow-right-circle-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body bg-success ">
                                            <h5 class="card-title ">Kelola Jenis FASKES <i
                                                    class="bi bi-file-earmark-medical"></i> </h5>
                                            <p class="card-text">Mengelola Jenis Fasilitas Kesehatan kota Depok</p>
                                            <a href="<?php echo base_url('index.php/JenisFaskes')?>"
                                                class="btn btn-success">Lebih lanjut <i
                                                    class="bi bi-arrow-right-circle-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body bg-danger    ">
                                            <h5 class="card-title ">Kelola Kecamatan FASKES <i
                                                    class="bi bi-columns-gap"></i></h5>
                                            <p class="card-text">Mengelola Kecamatan yang berada di DEPOK untuk
                                                Fasilitas Kesehatannya</p>
                                            <a href="<?php echo base_url('index.php/kecamatan')?>"
                                                class="btn btn-danger    ">Lebih lanjut <i
                                                    class="bi bi-arrow-right-circle-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body bg-info ">
                                            <h5 class="card-title ">Kelola User <i
                                                    class="bi bi-person-circle text-light"></i>
                                            </h5>
                                            <p class="card-text">Mengelola Fasilitas Kesehatan kota Depok</p>
                                            <a href="<?php echo base_url('index.php/users')?>"
                                                class="btn btn-info">Lebih
                                                lanjut <i class="bi bi-arrow-right-circle-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body bg-danger ">
                                            <h5 class="card-title ">Kelola Nilai Rating <i class="bi bi-star-fill"></i>
                                            </h5>
                                            <p class="card-text">Mengelola Rating Faskes Depok berdasarkan Jenis</p>
                                            <a href="<?php echo base_url('index.php/NilaiRating')?>"
                                                class="btn btn-info">Lebih
                                                lanjut <i class="bi bi-arrow-right-circle-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="card">
                                        <div class="card-body bg-dark ">
                                            <h5 class="card-title ">Kelola Komentar <i
                                                    class="bi bi-person-circle text-light"></i>
                                            </h5>
                                            <p class="card-text">Mengelola Fasilitas Kesehatan kota Depok</p>
                                            <a href="<?php echo base_url('index.php/komentar')?>"
                                                class="btn btn-info">Lebih
                                                lanjut <i class="bi bi-arrow-right-circle-fill"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer"></div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->