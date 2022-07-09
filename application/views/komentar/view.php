<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo "Komentar users"?></h1>
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
                            <div class="row">
                                <div class="col-sm-5">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <td>id </td>
                                                <td><?= $komentar->id ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal </td>
                                                <td><?=$komentar->tanggal ?></td>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <td>Isi Komentar </td>
                                                <td><?=$komentar->isi ?></td>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <td>User </td>
                                                <td><?=$komentar->users_id?></td>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <td>Faskes </td>
                                                <td><?=$komentar->faskes_id ?></td>
                                            </tr>
                                            <tr>
                                                <td>Rating </td>
                                                <td><?=$komentar->nilai_rating_id ?></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- <div class="col-sm-4">
                                    <?php
                                    $filegambar= base_url('/images/uploads/'.$faskes->foto);
                                    $array = get_headers($filegambar);
                                    $string = $array[0];
                                    if(strpos($string,"200")){
                                        echo '<img class="rounded" style="width: 70%;" src="'.$filegambar.'" alt="foto"/>';
                                     }
                                    else{
                                        echo '<img src="'.base_url('/images/uploads/noimg.png').'" />';
                                    }
                                    
                                    // if(strpos(!$string,"200"){
                                    //     echo '<img src="'.base_url('/images/uploads/noimg.png').'" />';
                                    // }
                                    
                                    ?>
                                    <br>
                                    Nama File :<?=$kecamatan->foto?>
                                    <br>
                                    <?php
                                    echo form_open_multipart('jenis_faskes/upload');
                                    ?>
                                    <input type="hidden" name='id' value="<?= $faskes->id ?>">
                                    <input type="file" name='fotojf' size="20"><br>
                                    <input type="submit" class="btn btn-success" value=" upload">
                                    <?php
                                    echo form_close()
                                    ?>
                                </div> -->
                            </div>

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