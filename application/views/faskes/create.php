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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?= $judul?>
                            </h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <h3>Jenis Fasilitas Kesehatan Kota Depok</h3> -->
                            <link rel="stylesheet"
                                href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                            <link rel="stylesheet"
                                href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                            <?php echo form_open('faskes/save')?>
                            <div class="form-group row">
                                <label for="id" class="col-4 col-form-label">id</label>
                                <div class="col-5">
                                    <input id="id" name="id" type="int" class="form-control" value="default">
                                    <style type="text/css">
                                    input[name=id] {
                                        pointer-events: none;
                                    }
                                    </style>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label">Nama</label>
                                <div class="col-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-university"></i>
                                            </div>
                                        </div>
                                        <input id="nama" name="nama" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-4 col-form-label">Alamat</label>
                                <div class="col-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-tags"></i>
                                            </div>
                                        </div>
                                        <input id="alamat" name="alamat" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="latlong" class="col-4 col-form-label">Latlong</label>
                                <div class="col-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-anchor"></i>
                                            </div>
                                        </div>
                                        <input id="latlong" name="latlong" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jenis_id" class="col-4 col-form-label">Jenis id</label>
                                <div class="col-5">
                                    <select id="jenis_id" name="jenis_id" class="custom-select">
                                        <?php
                                        foreach($jenis_faskes as $row){
                                        ?>
                                        <option value="<?= $row->id?>"><?=$row->nama?></option>
                                        <?php
                                        }?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                                <div class="col-5">
                                    <textarea id="deskripsi" name="deskripsi" cols="40" rows="3"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="skor_rating" class="col-4 col-form-label">Skor Rating</label>
                                <div class="col-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-unlink"></i>
                                            </div>
                                        </div>
                                        <input id="skor_rating" name="skor_rating" type="double" max="10" min="0"
                                            class=" form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kecamatan_id" class="col-4 col-form-label">Kecamatan_id</label>
                                <div class="col-5">
                                    <select id="kecamatan_id" name="kecamatan_id" class="custom-select">
                                        <?php
                                        foreach($kecamatan as $row){
                                        ?>
                                        <option value="<?= $row->id?>"><?=$row->nama?></option>
                                        <?php
                                        }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">Website</label>
                                <div class="col-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-desktop"></i>
                                            </div>
                                        </div>
                                        <input id="website" name="website" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_dokter" class="col-4 col-form-label">Jumlah Dokter</label>
                                <div class="col-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-user-plus"></i>
                                            </div>
                                        </div>
                                        <input id="jumlah_dokter" name="jumlah_dokter" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_pegawai" class="col-4 col-form-label">Jumlah Pegawai</label>
                                <div class="col-5">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-user-o"></i>
                                            </div>
                                        </div>
                                        <input id="jumlah_pegawai" name="jumlah_pegawai" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-5">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <?php echo form_close()?>



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