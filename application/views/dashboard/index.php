<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="<?= base_url('images/pede.png')?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>FASKES-DEPOK</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="<?php echo base_url('https://fonts.googleapis.com')?>">

    <link rel="preconnect" href="<?php echo base_url('https://fonts.gstatic.com')?>" crossorigin>

    <link
        href="<?php echo base_url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap')?>"
        rel="stylesheet">

    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel=" stylesheet">

    <link href="<?php echo base_url('css/bootstrap-icons.css')?>" rel=" stylesheet">

    <link href="<?php echo base_url('css/owl.carousel.min.css')?>" rel=" stylesheet">

    <link href="<?php echo base_url('css/owl.theme.default.min.css')?>" rel=" stylesheet">

    <link href="<?php echo base_url('css/templatemo-medic-care.css')?>" rel=" stylesheet">
    <!--

TemplateMo 566 Medic Care

https://templatemo.com/tm-566-medic-care

-->
</head>

<body id="top" style="background-color: rgb(231, 229, 229) ;">

    <main>

        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
            <div class="container">
                <a class="navbar-brand mx-auto d-lg-none" href="index.html">
                    FASKES
                    <strong class="d-block">Depok City</strong>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">




                        <?php
                            if($this->session->has_userdata('USERNAME')){
                                ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#hero">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">Tentang</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#timeline">Linimasa</a>
                        </li>

                        <a class="navbar-brand d-none d-lg-block" href="<?php echo base_url()   ?>">
                            FASKES-DEPOK
                            <strong class="d-block">Spesialis Kesehatan</strong>
                        </a>

                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Komentar </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('index.php/login/logout')?>">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php
                                echo $this->session->userdata('USERNAME');
                                // echo $this->session->userdata("ID")
                        ?> <i class="bi bi-person-circle"></i> </a>
                        </li>
                        <?php if($this->session->userdata('ROLE')=="administrator"){?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('index.php/template')?>">
                                kelola data
                                <?php }
                                ?> </a>
                        </li>
                        <?php
                        
                        }else{
                        ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#hero">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">Tentang</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#timeline">Linimasa</a>
                        </li>

                        <a class="navbar-brand d-none d-lg-block" href="<?php echo base_url()   ?>">
                            FASKES-DEPOK
                            <strong class="d-block">Spesialis Kesehatan</strong>
                        </a>

                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Komentar </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Kontak</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#booking">Registrasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#login">Login</a>
                        </li>
                        <?php 
                        }
                        ?>
                    </ul>
                </div>

            </div>
        </nav>

        <section class="hero" id="hero">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo base_url('images/slider/portrait-successful-mid-adult-doctor-with-crossed-arms.jpg')?>"
                                        class=" img-fluid" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="<?php echo base_url('images/slider/young-asian-female-dentist-white-coat-posing-clinic-equipment.jpg')?>"
                                        class="img-fluid" alt="">
                                </div>

                                <div class="carousel-item">
                                    <img src="<?php echo base_url('images/slider/doctor-s-hand-holding-stethoscope-closeup.jpg')?>"
                                        class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="heroText d-flex flex-column justify-content-center">

                            <h1 class="mt-auto mb-2">
                                Better
                                <div class="animated-info">
                                    <span class="animated-item">health</span>
                                    <span class="animated-item">days</span>
                                    <span class="animated-item">lives</span>
                                </div>
                            </h1>

                            <p class="mt-auto mb-2">
                                Layanan Fasilitas Kesehatan Terbaik Kota Depok</p>

                            <div class="heroLinks d-flex flex-wrap align-items-center">
                                <a class="custom-link me-4" href="#about" data-hover="Pelajari Selengkapnya">Pelajari
                                    Selengkapnya</a>

                                <p class="contact-phone mb-0"><i class="bi-phone"></i>+62 813-1068-1623</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding" id="about">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-12">
                        <h2 class="mb-lg-3 mb-3"> FASKES-DEPOK </h2>

                        <p>FASKES-DEPOK Merupakan sebuah website Fasilitas Kesehatan yang dimiliki kota depok, yang
                            bertujuan untuk memudahkan masyarakat kota depok dalam menunjang fasilitas kesehatan.
                            Sehingga masyarakat dapat dapat mengetahui fasilitas yang tersedia dan cepat tertangani
                            oleh
                            tim medis yang dimiliki kota depok.</p>

                        <p> <b>KESEHATAN ANDA PRIORITAS KAMI</b> </p>
                    </div>

                    <div class="col-lg-4 col-md-5 col-12 mx-auto">
                        <div
                            class="featured-circle bg-white shadow-lg d-flex justify-content-center align-items-center">
                            <p class="featured-text"><span class="featured-number">10</span> Tahun<br> Kami Melayani
                                Anda</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-6 ps-0">
                        <img src="<?php echo base_url('images/gallery/medium-shot-man-getting-vaccine.jpg')?>"
                            class="img-fluid galleryImage" alt="get a vaccine" title="get a vaccine for yourself">
                    </div>

                    <div class="col-lg-6 col-6 pe-0">
                        <img src="<?php echo base_url('images/gallery/female-doctor-with-presenting-hand-gesture.jpg')?>"
                            class="img-fluid galleryImage" alt="wear a mask" title="wear a mask to protect yourself">
                    </div>

                </div>
            </div>
        </section>
        <section class="section-padding pb-0" id="timeline">
            <div class="container">
                <div class="row">

                    <h2 class="text-center mb-lg-5 mb-4">Linimasa kami</h2>

                    <div class="timeline">
                        <div
                            class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                            <div
                                class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                <h3 class=" text-light">Kunjungi Website</h3>

                                <p> Silahkan kunjungi website kami, untuk mengetahui layanan yang tersedia
                                </p>
                            </div>

                            <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                <i class="bi-patch-check-fill timeline-icon"></i>
                            </div>

                            <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">

                            </div>
                        </div>

                        <div
                            class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                            <div
                                class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                <h3 class=" text-light">Konsultasikan kesehatan Anda</h3>

                                <p> Tanya Dokter Kapan pun & di Mana pun. Dapatkan informasi kesehatan akurat langsung
                                    dari dokter, secara gratis.</p>
                            </div>

                            <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                <i class="bi-book timeline-icon"></i>
                            </div>

                            <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">

                            </div>
                        </div>

                        <div
                            class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                            <div
                                class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                <h3 class=" text-light">Perawat bersertifikat</h3>

                                <p> Pelayanan FASKES-DEPOK membuat kondisi kesehatan keluarga kita lebih terpantau
                                    dan mudah untuk berkonsultasi karena dirawat oleh tenaga ahli yang sudah terlatih
                                    dan terdidik secara profesional
                                    dan sudah melewati standar seleksi yang ketat agar perawatan yang dilakukan bisa
                                    maksimal dan sesuai dengan prosedur yang baik dan benar </p>
                            </div>

                            <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                <i class="bi-file-medical timeline-icon"></i>
                            </div>

                            <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">

                            </div>
                        </div>

                        <div
                            class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes my-lg-5 my-4">
                            <div
                                class="col-9 col-md-5 ms-md-4 ms-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                <h3 class=" text-light">Rumah Sakit </h3>

                                <p>Kami bekerja sama dengan Rumah Sakit terbaik dikota depok untuk melayani anda setulus
                                    hati,
                                    Segera booking jadwal konsultasi dokter dan ketahui estimasi biaya serta tindakan
                                    medis yang tersedia di rumah sakit terdekat.</p>

                            </div>

                            <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                <i class="bi-globe timeline-icon"></i>
                            </div>

                            <div class="col-9 col-md-5 pe-md-3 pe-lg-0 order-1 order-md-3 py-4 timeline-date">

                            </div>
                        </div>

                        <div
                            class="row g-0 justify-content-end justify-content-md-around align-items-start timeline-nodes">
                            <div
                                class="col-9 col-md-5 me-md-4 me-lg-0 order-3 order-md-1 timeline-content bg-white shadow-lg">
                                <h3 class=" text-light">Perawat lepas</h3>

                                <p> Jika Anda memerlukan formulir kontak yang berfungsi yang mengirimkan email ke kotak
                                    masuk Anda, <a rel="nofollow" href="https://templatemo.com/contact"
                                        target="_parent">kunjungi halaman kontak kami</a> untuk informasi lebih lanjut.
                                </p>
                            </div>

                            <div class="col-3 col-sm-1 order-2 timeline-icons text-md-center">
                                <i class="bi-person timeline-icon"></i>
                            </div>

                            <div class="col-9 col-md-5 ps-md-3 ps-lg-0 order-1 order-md-3 py-4 timeline-date">
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </section>
        <section class="content">
            <div class="container">
                <h3 class="text-center">Jenis Fasilitas Kesehatan</h3>
                <div class="row">
                    <div class="col-12">

                        <!-- Default box -->

                        <div class="card-body float ">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <?php
                                            foreach ($faskes as $row){
                                            ?>
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $row->nama?></h5>
                                            <img src="<?php echo base_url('images/uploads/'.$row->foto1)?>"
                                                class="card-img-top" alt="">
                                            <p class="card-text">
                                                <?= $row->deskripsi?>
                                            </p>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target=".bd-example-modal-lg">info
                                                selengkapnya...</button>


                                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <h3 class="text-center text-secondary">
                                                            <?= $row->nama?></h3>
                                                        <p class="text-center"><?= $row->alamat?></p>
                                                        <p class="text-center text-black">
                                                            <?= $row->website?></p>
                                                        <div id="carouselExampleControls" class="carousel slide"
                                                            data-ride="carousel">
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img style="width:100%"
                                                                        src="
                                                                            <?php echo base_url('images/uploads/'.$row->foto1)?>"
                                                                        alt="First slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img
                                                                        src="<?php echo base_url('images/uploads/'.$row->foto2)?>">
                                                                    <img src="<?php echo base_url('images/uploads/'.$row->foto3)?>"
                                                                        alt="Second slide">
                                                                </div>

                                                            </div>
                                                            <a class="carousel-control-prev"
                                                                href="#carouselExampleControls" role="button"
                                                                data-slide="prev">
                                                                <span class="carousel-control-prev-icon"
                                                                    aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next"
                                                                href="#carouselExampleControls" role="button"
                                                                data-slide="next">
                                                                <span class="carousel-control-next-icon"
                                                                    aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>
                                                        <p class="card-text mt-5 text-center">
                                                            <?= $row->deskripsi?>
                                                        </p>
                                                        <table class="table table-striped">

                                                            <tbody>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <td><?= $row->id?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Nama</th>
                                                                    <td><?= $row->nama?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Alamat</th>
                                                                    <td><?= $row->alamat?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Latlong</th>
                                                                    <td><?= $row->latlong?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Jenis_id</th>
                                                                    <td><?= $row->jenis_id?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Deskripsi</th>
                                                                    <td><?= $row->deskripsi?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Skor Rating</th>
                                                                    <td><?= $row->skor_rating?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Foto 1</th>
                                                                    <td><img
                                                                            src="<?php echo base_url('images/uploads/'.$row->foto1)?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Foto 2</th>
                                                                    <td><img
                                                                            src="<?php echo base_url('images/uploads/'.$row->foto2)?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Foto 3</th>
                                                                    <td><img
                                                                            src="<?php echo base_url('images/uploads/'.$row->foto3)?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Kecamatan</th>
                                                                    <td><?= $row->kecamatan_id?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Website</th>
                                                                    <td><?= $row->website?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Jumlah_dokter</th>
                                                                    <td><?= $row->jumlah_dokter?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Jumlah_pegawai</th>
                                                                    <td><?= $row->jumlah_pegawai?></td>
                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                        <div class="container">
                                                            <div class="col-md-12">

                                                                <?php 
                                                                        $hidden = ['users_id'=>$this->session->userdata("ID")];
                                                                        $hidden = ['faskes_id'=>$row->id];
                            
                                                                        ?>
                                                                <?php echo form_open('komentar/save','',$hidden)?>
                                                                <div class="form-group row">
                                                                    <label for="id" class="col-4 col-form-label">
                                                                    </label>
                                                                    <div class="col-8">
                                                                        <div class="input-group">

                                                                            <input type="hidden" name="id"
                                                                                value="default" tabindex="-1">
                                                                            <style type="text/css">
                                                                            input[name=id] {
                                                                                pointer-events: none;
                                                                            }
                                                                            </style>

                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row ">
                                                                        <label for="nilai_rating_id"
                                                                            class="col-4 col-form-label">Rating</label>
                                                                        <div class="col-5">
                                                                            <select id="nilai_rating_id"
                                                                                name="nilai_rating_id"
                                                                                class="custom-select">
                                                                                <?php
                                                                        foreach($rating as $row){
                                             ?>
                                                                                <option value="<?=$row->id?>">
                                                                                    <?= $row->nama?>
                                                                                </option>
                                                                                <?php
                                             }?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="komentar"
                                                                            class="col-4 col-form-label">komentar</label>
                                                                        <div class="col-5">
                                                                            <textarea id="komentar" name="komentar"
                                                                                cols="100   " rows="3"
                                                                                class="form-control"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="offset-4 col-5">
                                                                            <button name="submit" type="submit"
                                                                                class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </div>

                                                                    <?php echo form_close()?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }?>
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
        <section class="section-padding pb-0" id="reviews">
            <div class="container">

                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto" id="komentar">
                            <div class="booking-form">
                                <h2 class="text-center mb-lg-3 mb-2">Berikan Komentar Anda !</h2>
                                <form role="form" action="#" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <textarea class="form-control" rows="5" id="message" name="message"
                                                placeholder="Berikan Komentar Anda Disini !"></textarea>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                            <button type="submit" class="form-control"
                                                id="submit-button">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12">
                            <h2 class="text-center mb-lg-5 mb-4">Komentar Pasien</h2>
                            <div class="owl-carousel reviews-carousel">
                                <?php foreach($rating as $rate){?>
                                <?php foreach($komentar as $komen){?>
                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100">
                                        <strong>rating:<?= $rate->id?><br><?= $rate->nama?>
                                        </strong>
                                    </p>

                                    <p class="reviews-text w-100">
                                        <?= $komen->isi?>
                                    </p>


                                    <img src="public/images/reviews/beautiful-woman-face-portrait-brown-background.jpeg"
                                        class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong><?php echo $this->session->userdata('USERNAME');?></strong>

                                        <span class="text-muted">Pasien</span>
                                    </figcaption>
                                </figure>
                                <?php }?>
                                <?php } ?>
                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Biasa aja
                                            !</strong></p>

                                    <p class="reviews-text w-100">Saya adalah pasien yang sudah pulih dari penyakit
                                        saya,
                                        berkat bantuan FASKES-DEPOK yang peduli kepada siapapun. </p>

                                    <img src="public/images/reviews/senior-man-wearing-white-face-mask-covid-19-campaign-with-design-space.jpeg"
                                        class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Bambang </strong>

                                        <span class="text-muted">Pasien Pulih</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Sangat Bagus !</strong>
                                    </p>

                                    <p class="reviews-text w-100">Saya sofia beberapa hari yang lalu saya mencoba
                                        pelayanan
                                        FASKES-DEPOK, dan hasilnya sangat memuaskan baik sekali. </p>

                                    <img src="public/images/reviews/portrait-british-woman.jpeg"
                                        class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Sofia </strong>

                                        <span class="text-muted">Pasien Baru</span>
                                    </figcaption>
                                </figure>

                                <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                                    <div class="reviews-stars">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <p class="text-primary d-block mt-2 mb-0 w-100"><strong>Sangat Bagus !</strong></p>

                                    <p class="reviews-text w-100">Saran yang sangat baik dari dokter ando salah satu
                                        dokter
                                        di FASKES-DEPOK, dengan saran dokter saya hampir sembuh dari penyakit saya. </p>

                                    <img src="public/images/reviews/woman-wearing-mask-face-closeup-covid-19-green-background.jpeg"
                                        class="img-fluid reviews-image" alt="">

                                    <figcaption class="ms-4">
                                        <strong>Rosa</strong>

                                        <span class="text-muted">Hampir Sembuh</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="section-padding pb-0" id="reviews">


            <section class="section-padding" id="booking">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">

                                <h2 class="text-center mb-lg-3 mb-2">SILAHKAN REGISTRASI</h2>

                                <?php echo form_open('users/save')?>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="username" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Alamat Email" required>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="password" required>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                        <button type="submit" class="form-control" id="submit-button">Registrasi
                                            Now</button>
                                    </div>
                                </div>
                                <?php echo form_close()?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section-padding" id="login">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="booking-form">

                                <h2 class="text-center mb-lg-3 mb-2">SILAHKAN LOGIN</h2>
                                <?php echo form_open('login/otentikasi')?>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input type="text" name="username" id="username" class="form-control"
                                            placeholder="username" required>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="password" required>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-6 mx-auto">
                                        <button type="submit" class="form-control btn" id="submit-button">LOGIN</button>
                                    </div>
                                </div>
                                <?php form_close() ?>


                            </div>
                        </div>

                    </div>
                </div>
            </section>


    </main>

    <footer class="site-footer section-padding" id="contact">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 me-auto col-12">
                    <h5 class="mb-lg-4 mb-3">Jam Beroperasi</h5>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex">
                            Minggu : Tutup
                        </li>

                        <li class="list-group-item d-flex">
                            Senin, Selasa - Jum'at
                            <span>Pukul : 8:00 - 3:30 WIB </span>
                        </li>

                        <li class="list-group-item d-flex">
                            Sabtu
                            <span>Pukul : 10:30 - 5:30 WIB </span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 col-12 my-4 my-lg-0">
                    <h5 class="mb-lg-4 mb-3">Klinik Kami</h5>

                    <p><a href="mailto:hello@company.co">faskes@depok.co.id</a>
                    <p>

                    <p>Jalan Margonda 12, Depok City, 92123</p>
                </div>

                <div class="col-lg-3 col-md-6 col-12 ms-auto">
                    <h5 class="mb-lg-4 mb-2">Sosial</h5>

                    <ul class="social-icon">
                        <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                        <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                    </ul>

                </div>

                <div>
                    <p class="text-center"> <B>Copyright © FASKES-DEPOK 2022 </B>
                    </p>
                </div>

            </div>
            </section>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="<?php echo base_url("js/jquery.min.js")?>"></script>
    <script src=" <?php echo base_url("js/bootstrap.bundle.min.js")?>"></script>
    <script src=" <?php echo base_url("js/owl.carousel.min.js")?>"> </script>
    <script src=" <?php echo base_url("js/scrollspy.min.js")?>">
    </script>
    <script src="<?php echo base_url("js/custom.js")?>">
    </script>
    <!--



https://templatemo.com/tm-566-medic-care

-->
</body>

</html>