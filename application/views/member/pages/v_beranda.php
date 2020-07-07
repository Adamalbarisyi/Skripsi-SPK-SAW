<!-- ======= Info Section ======= -->
<section id="info" class="clearfix">
    <div class="container text-center">
        <div class="intro-info">
            <h2 class="mb-0">Sistem Pendukung Keputusan <br> <span>Menggunakan Metode Simple Weighting</span><br>
                <h3 class="mt-0">Pada Pembelian Tanah Kavling di Yogyakarta </h3>
            </h2>
            <div>
                <a href="#about" class="btn-get-started scrollto">Pilih Rekomendasi</a>
            </div>
        </div>
    </div>
</section><!-- End Info -->

<main id="main">

    <!-- ======= Produk Section ======= -->
    <section id="produk" class="produk section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Produk Tanah Untuk Anda</h3>
                <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant
                    vituperatoribus.</p>
            </header>


            <div class="row">

                <?php
                foreach ($data->result_array() as $i) :
                    $id_proyek = $i['id_proyek'];
                    $judul_proyek = $i['judul_proyek'];
                    $deskripsi_proyek = $i['deskripsi_proyek'];
                    $sertifikat_proyek = $i['sertifikat_proyek'];
                    $provinsi_proyek = $i['provinsi_proyek'];
                    $kabupaten_proyek = $i['kabupaten_proyek'];
                    $luastanah_proyek = $i['luastanah_proyek'];
                    $harga_m_proyek = $i['harga/m_proyek'];
                    $lebar_depan_proyek = $i['lebar_depan_proyek'];
                    $harga_total_proyek = $i['harga_total_proyek'];
                    $jarak_proyek = $i['jarak_proyek'];
                    $fasilitas_proyek = $i['fasilitas_proyek'];
                    $fotoproyek1 = $i['fotoproyek1'];
                    $fotoproyek2 = $i['fotoproyek2'];
                    $fotoproyek3 = $i['fotoproyek3'];
                    $fotoproyek4 = $i['fotoproyek4'];
                    $fotoproyek5 = $i['fotoproyek5'];
                    $nama_pengelola = $i['nama_pengelola'];
                    $nama_kantor = $i['nama_kantor'];
                    $nomor_hp = $i['nomor_hp'];
                    $waktu_post = $i['waktu_post'];
                    $status_post = $i['status_post'];
                ?>
                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="card">
                            <img class="card-img-top" style="width: 100%; height:300px;background-size:cover;"
                                src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek1; ?>" alt="Foto Produk">
                            <div class="card-body p-3">
                                <h5 class="card-title mb-1 font-weight-bold" style="font-size: 14px;">
                                    <?php echo word_limiter($judul_proyek, 10); ?></h5>
                                <p class="text-muted mb-0"><small class="font-weight-bold">
                                        <?php echo $kabupaten_proyek; ?>,<?php echo $provinsi_proyek; ?></small>
                                </p>
                                <h4 class="card-text mt-2 mb-2 font-weight-bold" style="color: orange;">Rp.
                                    <?php echo $harga_m_proyek; ?></h4>

                                <div class="row pt-1 pb-1 mb-2" style=" color: black;">
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-6 pr-0">
                                        <h6 class="card-text mb-0" style="color: black;">Luas :
                                            <b><?php echo $luastanah_proyek; ?> m<sup>2</sup></b>
                                        </h6>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 col-6 pr-0">
                                        <h6 class="card-text mb-0" style="color: black;">Sertifikat :
                                            <b><?php echo $sertifikat_proyek; ?></b> </h6>
                                    </div>
                                </div>
                                <p class="mb-1 mt-1 text-muted text-right"><small>Last updated <?php echo date('d-m-Y', strtotime(str_replace('/', '-', substr($waktu_post,0,-8)))); ?> day ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Produk Section -->




    <!-- ======= Artikel Section ======= -->
    <section id="artikel" class="artikel wow fadeInUp">
        <div class="container">
            <header class="section-header">
                <h3>Artikel Terkait</h3>
                <p>Beberapa kumpulan artikel tentang investasi property</p>
            </header>

            <ul id="artikel-list" class="wow fadeInUp">
                <?php
                                    foreach ($query->result_array() as $i) :
                                        $id_artikel = $i['id_artikel'];
                                        $judul_artikel = $i['judul_artikel'];
                                        $isi_artikel = $i['isi_artikel'];
                                        $foto_artikel = $i['foto_artikel'];
                                    ?>
                <li>
                    <a data-toggle="collapse" class="collapsed alink"
                        href="#artikel<?php echo $id_artikel; ?>"><?php echo $judul_artikel; ?><i
                            class="ion-android-remove"></i></a>
                    <div id="artikel<?php echo $id_artikel; ?>" class="collapse" data-parent="#artikel-list">
                        <p>
                        <?php echo word_limiter($isi_artikel,25); ?>
                            <a href="<?php echo base_url() . 'member/artikel/detail_artikel'?>"> Selengkapnya &rarr;</a>
                        </p>
                    </div>
                </li>

                <?php endforeach; ?>

            </ul>

        </div>
    </section><!-- End F.A.Q Section -->



    <!-- ======= About-me Section ======= -->
    <section id="about-me" class="about-me wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3>Anggota Koperasi Kami</h3>
            </header>

            <div class="owl-carousel clients-carousel align-center">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-1.jpeg') ?>"
                    alt="Orange Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-2.png') ?>" alt="Kans Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-3.png') ?>" alt="YanPro Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-4.jpg') ?>" alt="ATM Property">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-5.png') ?>"
                    alt="Jayantaka Property">
                <img class="w-100 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-6.jpg') ?>"
                    alt="Nitro Property">
                <img class="w-50 h-50" src="<?php echo base_url('assets/frondend/img/clients/anggota-7.jpg') ?>"
                    alt="BLD Property">
                <img src="<?php echo base_url('assets/frondend/img/clients/anggota-8.jpeg') ?>" alt="">
                <img src="<?php echo base_url('assets/frondend/img/clients/client-3.png') ?>" alt="">
            </div>

        </div>
    </section><!-- End Clients Section -->



</main><!-- End #main -->