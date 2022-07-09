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
                            <h3>Nama Kecamatan Kota Depok</h3>
                            <a href="<?php echo base_url('index.php/users/create')?>" role="button"
                                class=" btn btn-primary mt-3">Tambah
                                +</a>
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    foreach($datalist as $row){
                                    ?>
                                    <tr>
                                        <td><?= $row->id?></td>
                                        <td><?= $row->username?></td>
                                        <td><?= $row->email?></td>
                                        <td><?= $row->role?></td>
                                        <td>
                                            <a class="btn btn-primary"
                                                href="<?php echo base_url('index.php/users/view?id=').$row->id?>">
                                                <i class="bi bi-eye-fill "> </i>view</a>
                                            <a class="btn btn-warning"
                                                href="<?php echo base_url('index.php/users/edit?id=').$row->id?>"><i
                                                    class="bi bi-pencil-square"></i>edit</a>
                                            <a class="btn btn-danger"
                                                href="<?php echo base_url('index.php/users/delete?id=').$row->id?> "
                                                onclick="
                                                if(!confirm('Anda Yakin Hapus Jenis Faskes dengan id <?=$row->id?>?')) {return
                                                false}""><i class=" bi bi-trash"></i>delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                    }?>
                                </tbody>
                            </table>


                        </div>
                        <!-- /.card-body -->
                        <div class=" card-footer">
                        </div>
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