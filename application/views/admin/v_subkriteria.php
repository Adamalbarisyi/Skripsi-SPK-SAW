<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">KPTI</a></li>
                        <li class="breadcrumb-item"><a href="#">Nilai Subkriteria</a></li>
                        <li class="breadcrumb-item active">Data Nilai Subkriteria</li>
                    </ol>
                </div>
                <h5 class="page-title">Data Nilai Subkriteria</h5>
            </div>
        </div>
        <!-- end row -->



        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Subkriteria</h4>
                        <p class="text-muted m-b-30 font-14">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aspernatur impedit aliquid,
                            officiis debitis quidem? Earum autem recusandae a dolor doloribus voluptas voluptates enim
                            natus soluta vitae, aut quis consectetur!
                        </p>


                        <div class="table-responsive">

                            <div class="text-center p-4 float-right">

                                <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal"
                                    data-target="#modal-tambah"><i
                                        class="mdi mdi-plus p-1 font-weight-bold"></i><span>Tambah
                                        Data</span></button>
                            </div>


                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Kriteria</th>
                                        <th class="text-center">Nama Subkriteria</th>
                                        <th class="text-center">Nilai Subkriteria</th>
                                        <th class="text-center">Keterangan Subkriteria</th>

                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                       foreach($data->result_array() as $i):
                                           $id_subkriteria =$i['id_subkriteria'];
                                           $id_kriteria    =$i['nama_kriteria'];
                                           $nama_subkriteria=$i['nama_subkriteria'];
                                           $nilai_subkriteria=$i['nilai_subkriteria'];
                                           $ket_subkriteria=$i['ket_subkriteria'];
                                   ?>
                                    <tr>
                                        <th class="text-center" scope="row"><?php echo $no++; ?></th>
                                        <td class="text-center"><?php echo $id_kriteria;?></td>
                                        <td class="text-center"><?php echo $nama_subkriteria;?></td>
                                        <td class="text-center"><?php echo $nilai_subkriteria;?></td>
                                        <td class="text-center"><?php echo $ket_subkriteria;?></td>


                                        <td class="text-center">

                                            <span data-toggle="modal"
                                                data-target="#modal-edit<?php echo $id_subkriteria;?>">
                                                <button type="button" class="btn btn-small btn-warning"
                                                    data-placement="top" title="Edit Data" data-toggle="tooltip">
                                                    <i class="mdi mdi-lead-pencil font-weight-bold text-white"></i>
                                                </button>
                                            </span>

                                            <span data-toggle="modal"
                                                data-target="#modal-hapus<?php echo $id_subkriteria;?>">
                                                <button type="button" class="btn btn-small btn-danger"
                                                    data-placement="top" title="Hapus Data" data-toggle="tooltip">
                                                    <i class="mdi mdi-delete font-weight-bold text-white"></i>
                                                </button>
                                            </span>

                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ADD MODAL -->
<div id="modal-tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/subkriteria/save'?>" method="post"
                enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Kriteria</label>
                        <div class="form-group">
                            <select class="form-control" name="id_kriteria" required>
                                <option value="">-PILIH-</option>
                                <?php
                                    foreach($criteria->result_array() as $i):
                                ?>
                                <option value="<?= $i['id_kriteria'] ?>"><?= $i['nama_kriteria'] ?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Subkriteria</label>
                        <input type="text" class="form-control" name="nama_subkriteria"
                            placeholder="Masukkan nama subkriteria" required />
                    </div>

                    <div class="form-group">
                        <label>Nilai Subkriteria</label>
                        <div>
                            <input type="number" name="nilai_subkriteria" class="form-control" step="0.1" min="0.1"
                                max="10" placeholder="Masukkan nilai subkriteria" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Keterangan Subkriteria</label>
                        <input type="text" class="form-control" name="ket_subkriteria"
                            placeholder="Masukkan Keterangan Subkriteria" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="float-right">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary waves-effect m-l-5">
                            Batal
                        </button>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Tambah
                        </button>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<?php
     foreach($data->result_array() as $i):
        $id_subkriteria =$i['id_subkriteria'];
        $id_kriteria    =$i['nama_kriteria'];
        $nama_subkriteria=$i['nama_subkriteria'];
        $nilai_subkriteria=$i['nilai_subkriteria'];
        $ket_subkriteria=$i['ket_subkriteria'];
    ?>

<!-- EDIT MODAL -->
<div id="modal-edit<?php echo $id_subkriteria;?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/subkriteria/update/'.$id_subkriteria?>" method="post"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Kriteria</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama_subkriteria"
                                value="<?php echo $id_kriteria;?>" placeholder="Masukkan nama subkriteria" required
                                readonly />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Subkriteria</label>
                        <input type="text" class="form-control" name="nama_subkriteria"
                            value="<?php echo $nama_subkriteria;?>" placeholder="Masukkan nama subkriteria" required />
                    </div>

                    <div class="form-group">
                        <label>Nilai Subkriteria</label>
                        <div>
                            <input type="number" name="nilai_subkriteria" value="<?php echo $nilai_subkriteria;?>"
                                class="form-control" step="0.1" min="0.1" max="10"
                                placeholder="Masukkan nilai subkriteria" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Keterangan Subkriteria</label>
                        <input type="text" class="form-control" name="ket_subkriteria"
                            value="<?php echo $ket_subkriteria;?>" placeholder="Masukkan Keterangan Subkriteria"
                            required />
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
<?php endforeach;?>





<?php
     foreach($data->result_array() as $i):
        $id_subkriteria =$i['id_subkriteria'];
        $id_kriteria    =$i['nama_kriteria'];
        $nama_subkriteria=$i['nama_subkriteria'];
        $nilai_subkriteria=$i['nilai_subkriteria'];
        $ket_subkriteria=$i['ket_subkriteria'];
    ?>
<!-- Modal Hapus -->
<div id="modal-hapus<?php echo $id_subkriteria;?>" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title mt-0 " id="myModalLabel">Hapus Data Kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'admin/subkriteria/delete/'.$id_subkriteria;?>" method="post">
                <div class="modal-body">
                    <p>Anda yakin mau menghapus <b
                            class="h6 bg-danger text-white pr-2 pl-2"><?php echo $nama_subkriteria;?></b> dari data
                        Nama Subkriteria?</p>
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
<?php endforeach;?>