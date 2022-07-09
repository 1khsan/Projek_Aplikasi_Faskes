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
                                    <button type="submit" class="form-control" id="submit-button">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <h2 class="text-center mb-lg-5 mb-4">Komentar Pasien</h2>
                    <div class="owl-carousel reviews-carousel">

                        <figure class="reviews-thumb d-flex flex-wrap align-items-center rounded">
                            <div class="reviews-stars">
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star-fill"></i>
                                <i class="bi-star"></i>
                            </div>
                            <?php foreach($ratinf as $rate){?>
                            <p class="text-primary d-block mt-2 mb-0 w-100"><strong>$komen
                                </strong></p>
                            <?php } ?>
                            <?php foreach($komentar as $komen){?> <p class="reviews-text w-100"><?= $komen->isi?>
                            </p>

                            <?php }?>
                            <img src="public/images/reviews/beautiful-woman-face-portrait-brown-background.jpeg"
                                class="img-fluid reviews-image" alt="">

                            <figcaption class="ms-4">
                                <strong><?php echo $this->session->userdata('USERNAME');?></strong>

                                <span class="text-muted">Pasien</span>
                            </figcaption>
                        </figure>
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

                            <img src="public/images/reviews/portrait-british-woman.jpeg" class="img-fluid reviews-image"
                                alt="">

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