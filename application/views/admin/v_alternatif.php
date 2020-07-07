<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">KPTI</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Alternatif </a></li>
                        <li class="breadcrumb-item active">Data Alternatif Proyek</li>
                    </ol>
                </div>
                <h5 class="page-title">Data Alternatif Proyek</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Data Alternatif Aktif <span
                                class="badge badge-success ml-2 p-2">Aktif</span> </h4>
                        <p class="text-muted m-b-30 font-14">
                            Data proyek tanah kavling publis yang ada di Yogyakarta
                        </p>

                        <div class="table-responsive">
                            <table id="" class="display table table-bordered dt-responsive  text-justify"
                                style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Artikel</th>
                                        <th>Nama Kantor</th>
                                        <th>Status Iklan</th>
                                        <th>Aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
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
                                        $status_post = $i['status_post'];
                                    ?>


                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $judul_proyek; ?></td>
                                        <td><?php echo $nama_kantor; ?></td>
                                        <td class="text-center"> <span class="badge badge-success p-2">Aktif</span>
                                        </td>

                                        <td class="text-center">

                                            <span data-toggle="modal"
                                                data-target="#modal-detail<?php echo $id_proyek; ?>">
                                                <button type="button" class="btn btn-small btn-info"
                                                    data-placement="top" title="Detail Data" data-toggle="tooltip">
                                                    <i class="mdi mdi-lead-pencil font-weight-bold text-white"></i>
                                                </button>
                                            </span>

                                            <span data-toggle="modal"
                                                data-target="#modal-edit<?php echo $id_proyek; ?>">
                                                <button type="button" class="btn btn-small btn-warning"
                                                    data-placement="top" title="Edit Data" data-toggle="tooltip">
                                                    <i class="mdi mdi-lead-pencil font-weight-bold text-white"></i>
                                                </button>
                                            </span>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Data Alternatif <span class="badge badge-default ml-2 p-2">Tidak
                                Aktif</span> </h4>
                        <p class="text-muted m-b-30 font-14">
                            Data proyek tanah kavling sudah terjual atau tidak aktif yang ada di Yogyakarta
                        </p>

                        <div class="table-responsive">
                            <table id="" class="display table table-bordered dt-responsive  text-justify"
                                style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Artikel</th>
                                        <th>Nama Kantor</th>
                                        <th>Status Iklan</th>
                                        <th>Aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($query->result_array() as $i) :
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
                                        $status_post = $i['status_post'];
                                    ?>


                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $judul_proyek; ?></td>
                                        <td><?php echo $nama_kantor; ?></td>
                                        <td class="text-center"> <span class="badge badge-default p-2">Tidak
                                                Aktif</span> </td>



                                        <td class="text-center">

                                            <span data-toggle="modal"
                                                data-target="#modal-detail<?php echo $id_proyek; ?>">
                                                <button type="button" class="btn btn-small btn-info"
                                                    data-placement="top" title="Detail Data" data-toggle="tooltip">
                                                    <i class="mdi mdi-lead-pencil font-weight-bold text-white"></i>
                                                </button>
                                            </span>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
</div>





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
    $status_post = $i['status_post'];
?>

<!-- DETAIL MODAL -->
<div id="modal-detail<?php echo $id_proyek; ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Detail Data</h5>
                    <button type="button" class="close" query-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id_proyek" value="<?php echo $id_proyek; ?>" />

                    </div>

                    <div class="form-group text-center">
                        <h6 class="m-0"><?php echo $judul_proyek; ?></h6>
                    </div>


                    <div class="form-group m-2">
                        <p class="text-justify"><?php echo $this->typography->auto_typography($deskripsi_proyek) ?></p>
                    </div>


                    <div class="col-lg-12 col-md-6 col-xs-12 pt-4 pb-4 ">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-xs-12 w-50 pr-0">
                                <ul style="list-style: none; padding-inline-start:0px">
                                    <li class="display-6">Kabupaten</li>
                                    <li class="display-6">Provinsi</li>
                                    <li class="display-6">Sertifikat</li>
                                    <li class="display-6">Luas Tanah</li>
                                    <li class="display-6">Lebar Depan</li>
                                    <li class="display-6">Harga/m</li>
                                    <li class="display-6">Jarak dengan Pusat Kota</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-12 w-50 pl-0">
                                <ul style="list-style: none; padding-inline-start:0px">

                                    <li class="display-6">: <b><?php echo $kabupaten_proyek; ?></b></li>
                                    <li class="display-6">: <b><?php echo $provinsi_proyek; ?></b></li>
                                    <li class="display-6">: <b><?php echo $sertifikat_proyek; ?></b></li>
                                    <li class="display-6">: <b><?php echo $luastanah_proyek; ?> m<sup>2</sup></b></li>
                                    <li class="display-6">: <b><?php echo $lebar_depan_proyek; ?> m<sup>2</sup></b></li>
                                    <li class="display-6">: <b>Rp. <?php echo $harga_m_proyek; ?></b></li>
                                    <li class="display-6">: <b><?php echo $jarak_proyek; ?> Km</b> </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-12 w-50 pr-0">
                                <ul style="list-style: none; padding-inline-start:0px">
                                    <li class="display-6">Jarak dengan Pusat Kota</li>
                                    <li class="display-6">Fasilitas terdekat</li>
                                    <li class="display-6">Harga Total</li>
                                    <li class="display-6">Nama Pengelola</li>
                                    <li class="display-6">Nama Kantor</li>
                                    <li class="display-6">No Handphone</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-12 w-50 pl-0">
                                <ul style="list-style: none; padding-inline-start:0px">
                                    <li class="display-6">: <b><?php echo $jarak_proyek; ?> Km</b> </li>
                                    <li class="display-6">: <b><?php echo $fasilitas_proyek; ?></b> Fasilitas</li>
                                    <li class="display-6">: <b>Rp. <?php echo $harga_total_proyek; ?></b></li>
                                    <li class="display-6">: <b><?php echo $nama_pengelola; ?></b></li>
                                    <li class="display-6">: <b><?php echo $nama_kantor; ?></b></li>
                                    <li class="display-6">: <b><?php echo $nomor_hp; ?></b></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <table>
                        <thead>
                            <tr>
                                <th class="text-center">Foto Card Copy</th>
                                <th class="text-center">Foto Side Plan</th>
                                <th class="text-center">Foto Harga Proyek</th>
                                <th class="text-center">Foto Lokasi 1</th>
                                <th class="text-center">Foto Lokasi 2</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td> <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek1; ?>"
                                        query-holder-rendered="true">
                                </td>
                                <td> <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek2; ?>"
                                        data-holder-rendered="true">
                                </td>
                                <td> <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek3; ?>"
                                        data-holder-rendered="true">
                                </td>
                                <td> <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek4; ?>"
                                        data-holder-rendered="true">
                                </td>
                                <td><img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek5; ?>"
                                        data-holder-rendered="true">
                                </td>

                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<?php endforeach; ?>




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
    $status_post = $i['status_post'];
?>

<!-- Edit MODAL -->
<div id="modal-edit<?php echo $id_proyek; ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="<?php echo base_url() . 'pengelola/alternatif/edit' ?>" method="post"
                        enctype="multipart/form-data">

                        <input type="hidden" name="id_kriteria" value="<?php echo $id_proyek;?>" />
                        <div class="form-group">
                            <label>Judul Proyek</label>
                            <input type="text" class="form-control input-bottom" name="judul_proyek"
                                value="<?php echo $judul_proyek;?>" required placeholder="Tuliskan Judul Proyek" />
                        </div>

                        <div class="form-group">
                            <label>Deskripsi Proyek</label>
                            <div>
                                <textarea id="elm1" name="deskripsi_proyek" cols=”45″ rows=”5″
                                    required><?php echo $this->typography->auto_typography($deskripsi_proyek)?></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group mt-3">
                                    <label>Sertifikat</label>
                                    <div>
                                        <input type="text" class="form-control input-bottom" name="sertifikat_proyek"
                                            value="<?php echo $sertifikat_proyek;?>" required
                                            placeholder="Input Jenis Sertifikat" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group mt-3">
                                    <label>Provinsi</label>
                                    <div class="form-group">
                                        <select class="form-control" name="provinsi_proyek" required>
                                            <option value="">-PILIH-</option>
                                            <?php if($provinsi_proyek=='Yogyakarta'):?>
                                            <option value="Yogyakarta" selected>Yogyakarta</option>
                                            <?php endif;?>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group mt-3">
                                    <label>Kabupaten</label>
                                    <div class="form-group">
                                        <select class="form-control" name="kabupaten_proyek" required>
                                            <option value="">-PILIH-</option>
                                            <option <?php if( $kabupaten_proyek=='Bantul'){echo "selected"; } ?>
                                                value='Bantul'>Bantul</option>

                                            <option <?php if( $kabupaten_proyek=='Gunung Kidul'){echo "selected"; } ?>
                                                value='Gunung Kidul'>Gunung Kidul</option>

                                            <option <?php if( $kabupaten_proyek=='Kulon Progo'){echo "selected"; } ?>
                                                value='Kulon Progo'>Kulon Progo</option>

                                            <option
                                                <?php if( $kabupaten_proyek=='Kota Yogyakarta'){echo "selected"; } ?>
                                                value='Kota Yogyakarta'>Kota Yogyakarta</option>

                                            <option <?php if( $kabupaten_proyek=='Sleman'){echo "selected"; } ?>
                                                value='Sleman'>Sleman</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group mt-3">
                                    <label>Luas Tanah <b>(m<sup>2</sup>)</b> </label>
                                    <div>
                                        <input type="text" class="form-control input-bottom" name="luastanah_proyek"
                                            value="<?php echo $luastanah_proyek;?>" required
                                            placeholder="Input Luas Tanah" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group mt-3">
                                    <label>Harga/m</label>
                                    <div>
                                        <input type="text" class="form-control input-bottom" name="harga/m_proyek"
                                            value="<?php echo $harga_m_proyek;?>" required
                                            placeholder="Input Harga/m" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group mt-3">
                                    <label>Lebar Depan Tanah <b>(m<sup>2</sup>)</b></label>
                                    <div>
                                        <input type="text" class="form-control input-bottom" name="lebar_depan_proyek"
                                            value="<?php echo $lebar_depan_proyek;?>" required
                                            placeholder="Input Lebar Tanah" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                                <div class="form-group mt-3">
                                    <label>Harga Total</label>
                                    <div>
                                        <input type="text" class="form-control input-bottom" name="harga_total_proyek"
                                            value="<?php echo $harga_total_proyek;?>" required
                                            placeholder="Input Harga Total" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group mt-3">
                                    <label>Jarak dengan pusat kota (Km)</label>
                                    <div>
                                        <input type="text" class="form-control input-bottom" name="jarak_proyek"
                                            value="<?php echo $jarak_proyek;?>" required
                                            placeholder="Input Jarak (Km)" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group mt-3">
                                    <label>Fasilitas lokasi terdekat</label>
                                    <div class="form-group">
                                        <select class="form-control" name="fasilitas_proyek" required>
                                            <option value="">-PILIH-</option>
                                            <option <?php if( $fasilitas_proyek=='1'){echo "selected"; } ?> value='1'>1
                                            </option>

                                            <option <?php if( $fasilitas_proyek=='2'){echo "selected"; } ?> value='2'>2
                                            </option>

                                            <option <?php if( $fasilitas_proyek=='3'){echo "selected"; } ?> value='3'>3
                                            </option>

                                            <option <?php if( $fasilitas_proyek=='4'){echo "selected"; } ?> value='4'>4
                                            </option>

                                            <option <?php if( $fasilitas_proyek=='5'){echo "selected"; } ?> value='5'>5
                                            </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group mt-3">
                                    <label>Nama Pengelola</label>
                                    <div>
                                        <input type="text" class="form-control input-bottom" name="nama_pengelola"
                                            value="<?php echo $nama_pengelola;?>" required
                                            placeholder="Input nama pengelola" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group mt-3">
                                    <label>Nama Kantor</label>
                                    <div class="form-group">
                                        <select class="form-control" name="nama_kantor" required>
                                            <option value="">-PILIH-</option>
                                            <option <?php if( $nama_kantor=='Orange Property'){echo "selected"; } ?>
                                                value='Orange Property'>Orange Property</option>

                                            <option <?php if( $nama_kantor=='ATM Property'){echo "selected"; } ?>
                                                value='ATM Property'>ATM Property</option>

                                            <option <?php if( $nama_kantor=='AGSL Property'){echo "selected"; } ?>
                                                value='AGSL Property'>AGSL Property</option>

                                            <option <?php if( $nama_kantor=='Cakrawala Property'){echo "selected"; } ?>
                                                value='Cakrawala Property'>Cakrawala Property</option>

                                            <option <?php if( $nama_kantor=='BLD Jogja Property'){echo "selected"; } ?>
                                                value='BLD Jogja Property'>BLD Jogja Property</option>

                                            <option <?php if( $nama_kantor=='KANS Property'){echo "selected"; } ?>
                                                value='KANS Property'>KANS Property</option>

                                            <option <?php if( $nama_kantor=='GM Property'){echo "selected"; } ?>
                                                value='GM Property'>GM Property</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="form-group mt-3">
                                    <label>Nomor Hp/WA</label>
                                    <div>
                                        <input type="number" class="form-control input-bottom" name="nomor_hp" value="<?php echo $nomor_hp;?>" required
                                            placeholder="Input No Hp/WA" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>


                        <h4 class="mt-0 ">Pilih Gambar Data Alternatif</h4>
                        <p class="text-muted mb-3 font-14">Form upload untuk produk Tanah Kavling.</p>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                                <div class="form-group mt-2 mb-2">
                                    <label>Foto 1 <small>* Foto Card Copy</small></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="fotoproyek1"
                                            required>
                                        <label class="custom-file-label" for="customFile">Pilih file foto 1</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group mt-3">
                                    <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek1; ?>"
                                        data-holder-rendered="true">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                                <div class="form-group mt-2 mb-2">
                                    <label>Foto 2<small>* Foto Side Plan</small></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="fotoproyek2"
                                            required>
                                        <label class="custom-file-label" for="customFile">Pilih file foto 2</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group mt-3">
                                    <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek2; ?>"
                                        data-holder-rendered="true">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group mt-2 mb-2">
                                    <label>Foto 3<small>* Foto Harga Proyek</small></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="fotoproyek3"
                                            required>
                                        <label class="custom-file-label" for="customFile">Pilih file foto 3</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group mt-3">
                                    <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek3; ?>"
                                        data-holder-rendered="true">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

                                <div class="form-group mt-2 mb-2">
                                    <label>Foto 4<small>* Foto Side Plan</small></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="fotoproyek4"
                                            required>
                                        <label class="custom-file-label" for="customFile">Pilih file foto 4</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group mt-3">
                                    <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek4; ?>"
                                        data-holder-rendered="true">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group mt-2 mb-2">
                                    <label>Foto 5<small>* Foto Harga Proyek</small></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="fotoproyek3"
                                            required>
                                        <label class="custom-file-label" for="customFile">Pilih file foto 5</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group mt-3">
                                    <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek5; ?>"
                                        data-holder-rendered="true">
                                </div>
                            </div>
                        </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-waarning">Update</button>
                </div>

                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<?php endforeach; ?>


<?php
foreach ($query->result_array() as $i) :
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
    $status_post = $i['status_post'];
?>

<!-- DETAIL MODAL -->
<div id="modal-detail<?php echo $id_proyek; ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Detail query</h5>
                    <button type="button" class="close" query-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id_proyek" value="<?php echo $id_proyek; ?>" />

                    </div>

                    <div class="form-group text-center">
                        <h6 class="m-0"><?php echo $judul_proyek; ?></h6>
                    </div>


                    <div class="form-group m-2">
                        <p class="text-justify"><?php echo $this->typography->auto_typography($deskripsi_proyek) ?></p>
                    </div>


                    <div class="col-lg-12 col-md-6 col-xs-12 pt-4 pb-4 ">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-xs-12 w-50 pr-0">
                                <ul style="list-style: none; padding-inline-start:0px">
                                    <li class="display-6">Kabupaten</li>
                                    <li class="display-6">Provinsi</li>
                                    <li class="display-6">Sertifikat</li>
                                    <li class="display-6">Luas Tanah</li>
                                    <li class="display-6">Lebar Depan</li>
                                    <li class="display-6">Harga/m</li>
                                    <li class="display-6">Jarak dengan Pusat Kota</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-12 w-50 pl-0">
                                <ul style="list-style: none; padding-inline-start:0px">

                                    <li class="display-6">: <b><?php echo $kabupaten_proyek; ?></b></li>
                                    <li class="display-6">: <b><?php echo $provinsi_proyek; ?></b></li>
                                    <li class="display-6">: <b><?php echo $sertifikat_proyek; ?></b></li>
                                    <li class="display-6">: <b><?php echo $luastanah_proyek; ?> m<sup>2</sup></b></li>
                                    <li class="display-6">: <b><?php echo $lebar_depan_proyek; ?> m<sup>2</sup></b></li>
                                    <li class="display-6">: <b>Rp. <?php echo $harga_m_proyek; ?></b></li>
                                    <li class="display-6">: <b><?php echo $jarak_proyek; ?> Km</b> </li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-12 w-50 pr-0">
                                <ul style="list-style: none; padding-inline-start:0px">
                                    <li class="display-6">Jarak dengan Pusat Kota</li>
                                    <li class="display-6">Fasilitas terdekat</li>
                                    <li class="display-6">Harga Total</li>
                                    <li class="display-6">Nama Pengelola</li>
                                    <li class="display-6">Nama Kantor</li>
                                    <li class="display-6">No Handphone</li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-xs-12 w-50 pl-0">
                                <ul style="list-style: none; padding-inline-start:0px">
                                    <li class="display-6">: <b><?php echo $jarak_proyek; ?> Km</b> </li>
                                    <li class="display-6">: <b><?php echo $fasilitas_proyek; ?></b> Fasilitas</li>
                                    <li class="display-6">: <b>Rp. <?php echo $harga_total_proyek; ?></b></li>
                                    <li class="display-6">: <b><?php echo $nama_pengelola; ?></b></li>
                                    <li class="display-6">: <b><?php echo $nama_kantor; ?></b></li>
                                    <li class="display-6">: <b><?php echo $nomor_hp; ?></b></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <table>
                        <thead>
                            <tr>
                                <th class="text-center">Foto Card Copy</th>
                                <th class="text-center">Foto Side Plan</th>
                                <th class="text-center">Foto Harga Proyek</th>
                                <th class="text-center">Foto Lokasi 1</th>
                                <th class="text-center">Foto Lokasi 2</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td> <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek1; ?>"
                                        query-holder-rendered="true">
                                </td>
                                <td> <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek2; ?>"
                                        data-holder-rendered="true">
                                </td>
                                <td> <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek3; ?>"
                                        data-holder-rendered="true">
                                </td>
                                <td> <img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek4; ?>"
                                        data-holder-rendered="true">
                                </td>
                                <td><img class="img-fluid" style="width: 150px; height:150px" alt="100x100"
                                        src="<?php echo base_url() . 'uploads/produk/' . $fotoproyek5; ?>"
                                        data-holder-rendered="true">
                                </td>

                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<?php endforeach; ?>