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
                            <h3>Fasilitas Kesehatan Kota Depok</h3>
                            <table class="table table-striped">

                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td><?= $faskes->id?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?= $faskes->nama?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?= $faskes->alamat?></td>
                                    </tr>
                                    <tr>
                                        <th>Latlong</th>
                                        <td><?= $faskes->latlong?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis_id</th>
                                        <td><?= $faskes->jenis_id?></td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td><?= $faskes->deskripsi?></td>
                                    </tr>
                                    <tr>
                                        <th>Skor Rating</th>
                                        <td><?= $faskes->skor_rating?></td>
                                    </tr>
                                    <tr>
                                        <th>Foto 1</th>
                                        <td><img src="<?php echo base_url('images/uploads/'.$faskes->foto1)?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Foto 2</th>
                                        <td><img src="<?php echo base_url('images/uploads/'.$faskes->foto2)?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Foto 3</th>
                                        <td><img src="<?php echo base_url('images/uploads/'.$faskes->foto3)?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Kecamatan</th>
                                        <td><?= $faskes->kecamatan_id?></td>
                                    </tr>
                                    <tr>
                                        <th>Website</th>
                                        <td><?= $faskes->website?></td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah_dokter</th>
                                        <td><?= $faskes->jumlah_dokter?></td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah_pegawai</th>
                                        <td><?= $faskes->jumlah_pegawai?></td>
                                    </tr>


                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-4">
                                    <?php
                                    $filegambar= base_url('images/uploads/'.$faskes->foto1);
                                    $array = get_headers($filegambar);
                                    $string = $array[0];
                                    if(strpos($string,"200")){
                                        echo '<img class="rounded" style="width: 70%;" src="'.$filegambar.'" alt="foto"/>';
                                     }
                                    else{
                                        echo '<img src="'.base_url('images/uploads/noimg.png').'" />';
                                    }
                                    
                                    // if(strpos(!$string,"200"){
                                    //     echo '<img src="'.base_url('images/uploads/noimg.png').'" />';
                                    // }
                                    
                                    ?>
                                    <br>
                                    Nama File :<?=$faskes->foto1?>
                                    <br>
                                    <?php
                                    echo form_open_multipart('faskes/upload1');
                                    ?>
                                    <input type="hidden" name='id' value="<?= $faskes->id ?>">
                                    <input type="file" name='fotojf' size="20"><br>
                                    <input type="submit" class="btn btn-success" value=" upload">
                                    <?php
                                    echo form_close()
                                    ?>
                                </div>
                                <div class="col-sm-4">
                                    <?php
                                    $filegambar= base_url('images/uploads/'.$faskes->foto2);
                                    $array = get_headers($filegambar);
                                    $string = $array[0];
                                    if(strpos($string,"200")){
                                        echo '<img class="rounded" style="width: 70%;" src="'.$filegambar.'" alt="foto"/>';
                                     }
                                    else{
                                        echo '<img src="'.base_url('images/uploads/noimg.png').'" />';
                                    }
                                    
                                    // if(strpos(!$string,"200"){
                                    //     echo '<img src="'.base_url('images/uploads/noimg.png').'" />';
                                    // }
                                    
                                    ?>
                                    <br>
                                    Nama File :<?=$faskes->foto2?>
                                    <br>
                                    <?php
                                    echo form_open_multipart('faskes/upload2');
                                    ?>
                                    <input type="hidden" name='id' value="<?= $faskes->id ?>">
                                    <input type="file" name='fotojf' size="20"><br>
                                    <input type="submit" class="btn btn-success" value=" upload">
                                    <?php
                                    echo form_close()
                                    ?>
                                </div>
                                <div class="col-sm-4">
                                    <?php
                                    $filegambar= base_url('images/uploads/'.$faskes->foto3);
                                    $array = get_headers($filegambar);
                                    $string = $array[0];
                                    if(strpos($string,"200")){
                                        echo '<img class="rounded" style="width: 70%;" src="'.$filegambar.'" alt="foto"/>';
                                     }
                                    else{
                                        echo '<img src="'.base_url('images/uploads/noimg.png').'" />';
                                    }
                                    
                                    // if(strpos(!$string,"200"){
                                    //     echo '<img src="'.base_url('images/uploads/noimg.png').'" />';
                                    // }
                                    
                                    ?>
                                    <br>
                                    Nama File :<?=$faskes->foto3?>
                                    <br>
                                    <?php
                                    echo form_open_multipart('faskes/upload3');
                                    ?>
                                    <input type="hidden" name='id' value="<?= $faskes->id ?>">
                                    <input type="file" name='fotojf' size="20"><br>
                                    <input type="submit" class="btn btn-success" value=" upload">
                                    <?php
                                    echo form_close()
                                    ?>
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