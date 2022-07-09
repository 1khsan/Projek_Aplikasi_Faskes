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
                                <button type="button" class="btn btn-tool" data-ca rd-widget="collapse"
                                    title="Collapse">
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
                            <?php 
                            $hidden = ['idedit'=>$rating->id]
                            ?>
                            <?php echo form_open('nilai_rating/save','',$hidden)?>
                            <div class="form-group row">
                                <label for="nama_faskes" class="col-4 col-form-label">ID</label>
                                <div class="col-8">
                                    <div class="input-group">

                                        <input type="text" name="id" value="<?= $rating->id?>" tabindex="-1">
                                        <style type="text/css">
                                        input[name=id] {
                                            pointer-events: none;
                                        }
                                        </style>

                                    </div>
                                </div>
                                <label for="nama_faskes" class="col-4 col-form-label">Update Rating</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-address-card-o"></i>
                                            </div>
                                        </div>
                                        <input id="nama_faskes" name="nama_faskes" type="text" required="required"
                                            class="form-control" value="<?= $rating->nama?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-4 col-8">
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