<main id="main">

<!-- ======= Produk Section ======= -->
<section id="produk" class="produk section-bg" style="padding-top: 200px;">
  <div class="container">

    <header class="section-header">
      <h3>Produk Tanah Kavling di Yogyakarta</h3>
      <p>Lokasi strategis proyek tanah kavling di KPTI.</p>
    </header>

    <div class="row">
    
    <?php
                foreach ($data->result_array() as $i) :
                    $id_proyek = $i['id_proyek'];
                    $nama_proyek = $i['nama_proyek'];
                    $judul_proyek = $i['judul_proyek'];
                    $deskripsi_proyek = $i['deskripsi_proyek'];
                    $sertifikat_proyek = $i['sertifikat_proyek'];
                    $provinsi_proyek = $i['provinsi_proyek'];
                    $kabupaten_proyek = $i['kabupaten_proyek'];
                    $luastanah_proyek = $i['luastanah_proyek'];
                    $harga_m_proyek = $i['harga_m_proyek'];
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
                
    
    
        <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
          <a href="<?php echo base_url('member/produk/detail_produk/'.$id_proyek) ?>">
            <div class="box">
              <div class="card">
                <img class="card-img-top" src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek1; ?>" alt="Card image">
                <div class="card-body p-3">
                  <h6 class="card-title mb-1 font-weight-bold" style="color: #444444;"><?php echo word_limiter($judul_proyek, 10); ?></h6>
                  <p class="text-muted mb-0"><small class="font-weight-bold"><?php echo $kabupaten_proyek; ?>,<?php echo $provinsi_proyek; ?></small></p>
                  <h4 class="card-text mt-2 mb-2 font-weight-bold" style="color: orange;">Rp. <?php echo $harga_m_proyek; ?></h4>
                  
                  <div class="row pt-1 pb-1 mb-2" style=" color: black;">
                    <div class="col-md-5 col-sm-6 col-xs-6 col-6 pr-0">
                        <h6 class="card-text mb-0" style="color: black; font-size: 13px;">Luas : <b> <?php echo $luastanah_proyek; ?>m<sup>2</sup></b></h6>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-6 col-6 pr-0">
                        <h6 class="card-text mb-0" style="color: black; font-size: 13px;">Sertifikat : <b> <?php echo $sertifikat_proyek; ?></b> </h6>
                    </div>
                </div>
                <p class="mb-1 mt-1 text-muted text-right"><small>Last updated <?php echo date('d-m-Y', strtotime(str_replace('/', '-', substr($waktu_post,0,-8)))); ?> day ago</small></p>
                      
              </div>          
            </div>
          </div>
          </a>
      </div>
      <?php endforeach; ?>


    </div>
  </div>
</div>
</section><!-- End Produk Section -->

</main><!-- End #main -->

