<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">KPTI</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Alternatif </a></li>
                        <li class="breadcrumb-item active">Data Alternatif </li>
                    </ol>
                </div>
                <h5 class="page-title">Data Alternatif </h5>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Data Alternatif</h4>
                        <p class="text-muted m-b-30 font-14">
                            Data proyek tanah kavling yang ada di Yogyakarta
                        </p>
                        
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive  text-justify"
                                style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Artikel</th>
                                        <th>Nama Kantor</th>
                                        <th>Aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                <?php
                                    $no=1;
                                       foreach($data->result_array() as $i):
                                           $id_proyek=$i['id_proyek'];
                                           $judul_proyek=$i['judul_proyek'];
                                           $deskripsi_proyek=$i['deskripsi_proyek'];
                                           $sertifikat_proyek=$i['sertifikat_proyek'];
                                           $provinsi_proyek=$i['provinsi_proyek'];
                                           $kabupaten_proyek=$i['kabupaten_proyek'];
                                           $luastanah_proyek=$i['luastanah_proyek'];
                                           $harga_m_proyek = $i['harga/m_proyek'];
                                           $lebar_depan_proyek=$i['lebar_depan_proyek'];
                                           $harga_total_proyek=$i['harga_total_proyek'];
                                           $jarak_proyek=$i['jarak_proyek'];
                                           $fasilitas_proyek=$i['fasilitas_proyek'];
                                           $fotoproyek1=$i['fotoproyek1'];
                                           $fotoproyek2=$i['fotoproyek2'];
                                           $fotoproyek3=$i['fotoproyek3'];
                                           $fotoproyek4=$i['fotoproyek4'];
                                           $fotoproyek5=$i['fotoproyek5'];
                                           $nama_pengelola=$i['nama_pengelola'];
                                           $nama_kantor=$i['nama_kantor'];
                                           $nomor_hp=$i['nomor_hp'];
                                           $status_post=$i['status_post'];
                                   ?>
                                

                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $judul_proyek; ?></td>
                                        <td><?php echo $nama_kantor; ?></td>


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

                                            <span data-toggle="modal"
                                                data-target="#modal-hapus<?php echo $id_proyek; ?>">
                                                <button type="button" class="btn btn-small btn-danger"
                                                    data-placement="top" title="Hapus Data" data-toggle="tooltip">
                                                    <i class="mdi mdi-delete font-weight-bold text-white"></i>
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