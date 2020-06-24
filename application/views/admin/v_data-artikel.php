<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">KPTI</a></li>
                        <li class="breadcrumb-item"><a href="#">Artikel </a></li>
                        <li class="breadcrumb-item active">Data Artikel </li>
                    </ol>
                </div>
                <h5 class="page-title">Data Artikel </h5>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title"> Artikel</h4>
                        <p class="text-muted m-b-30 font-14">
                            Data artikel tentang seputar property yang sudah diposting
                        </p>

                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive  text-justify"
                                style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Artikel</th>
                                        <th>Aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data->result_array() as $i) :
                                        $id_artikel = $i['id_artikel'];
                                        $judul_artikel = $i['judul_artikel'];
                                        $isi_artikel = $i['isi_artikel'];
                                        $foto_artikel = $i['foto_artikel'];
                                    ?>

                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $judul_artikel; ?></td>


                                        <td class="text-center">

                                            <span data-toggle="modal"
                                                data-target="#modal-detail<?php echo $id_artikel; ?>">
                                                <button type="button" class="btn btn-small btn-info"
                                                    data-placement="top" title="Detail Data" data-toggle="tooltip">
                                                    <i class="mdi mdi-lead-pencil font-weight-bold text-white"></i>
                                                </button>
                                            </span>

                                            <span data-toggle="modal"
                                                data-target="#modal-edit<?php echo $id_artikel; ?>">
                                                <button type="button" class="btn btn-small btn-warning"
                                                    data-placement="top" title="Edit Data" data-toggle="tooltip">
                                                    <i class="mdi mdi-lead-pencil font-weight-bold text-white"></i>
                                                </button>
                                            </span>

                                            <span data-toggle="modal"
                                                data-target="#modal-hapus<?php echo $id_artikel; ?>">
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
            </div>
        </div>
    </div>
</div>



<?php
foreach ($data->result_array() as $i) :
    $id_artikel = $i['id_artikel'];
    $judul_artikel = $i['judul_artikel'];
    $isi_artikel = $i['isi_artikel'];
    $foto_artikel = $i['foto_artikel'];
?>

<!-- DETAIL MODAL -->
<div id="modal-detail<?php echo $id_artikel; ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Detail Artikel</h5>
              
            </div>
            <div class="modal-body">
                <div class="mt-4 mb-4 ml-4">
                    <input type="hidden" name="id_kriteria" value="<?php echo $id_artikel; ?>" />
                    <h5 class="m-0"><?php echo $judul_artikel; ?></h5>
                </div>

                <div class="text-center">
                    <img class="img-fluid  " alt="100x100"
                        src="<?php echo base_url() . 'upload/artikel/'. $foto_artikel; ?>" data-holder-rendered="true">
                </div>

                <div class="m-4">
                    <?php echo ($isi_artikel)?>
                </div>




            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endforeach; ?>




<?php
foreach ($data->result_array() as $i) :
    $id_artikel = $i['id_artikel'];
    $judul_artikel = $i['judul_artikel'];
    $isi_artikel = $i['isi_artikel'];
    $foto_artikel = $i['foto_artikel'];
?>

<!-- EDIT MODAL -->
<div id="modal-edit<?php echo $id_kriteria; ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/kriteria/update' ?>" method="post"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id_kriteria" value="<?php echo $id_kriteria; ?>" />
                        <label>Nama Kriteria</label>
                        <input type="text" class="form-control" name="nama_kriteria"
                            value="<?php echo $nama_kriteria; ?>" required />
                    </div>

                    <div class="form-group">
                        <label>Jenis Kriteria</label>
                        <div class="form-group">

                            <select class="form-control" name="tipe_kriteria" required>
                                <option value="">-PILIH-</option>

                                <?php if ($tipe_kriteria == 'Cost') : ?>
                                <option value="Cost" selected>Cost</option>
                                <option value="Benefit">Benefit</option>

                                <?php else : ($tipe_kriteria == 'Benefit') ?>
                                <option value="Cost">Cost</option>
                                <option value="Benefit" selected>Benefit</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nilai Bobot</label>
                        <div>
                            <input type="number" name="bobot_kriteria" class="form-control" step="0.1" min="0.1"
                                max="10" value="<?php echo $bobot_kriteria; ?>" required />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php endforeach; ?>





<?php
foreach ($data->result_array() as $i) :
    $id_kriteria = $i['id_kriteria'];
    $nama_kriteria = $i['nama_kriteria'];
    $tipe_kriteria = $i['tipe_kriteria'];
    $bobot_kriteria = $i['bobot_kriteria'];
?>
<!-- Modal Hapus -->
<div id="modal-hapus<?php echo $id_kriteria; ?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title mt-0 " id="myModalLabel">Hapus Data Kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/kriteria/delete/' . $id_kriteria; ?>" method="post">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus <b
                            class="h6 bg-danger text-white pr-2 pl-2"><?php echo $nama_kriteria; ?></b> dari data
                        kriteria?</p>
                    <p class="text-danger text-left pt-1 mb-0">*Data yang dihapus tidak akan bisa
                        dikembalikan</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>