<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">KPTI</a></li>
                        <li class="breadcrumb-item"><a href="#">Data Alternatif</a></li>
                        <li class="breadcrumb-item active">Buat Alternatif</li>
                    </ol>
                </div>
                <h5 class="page-title">Buat Alternatif</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 ">Post Data Alternatif</h4>
                        <p class="text-muted m-b-30 font-14">Form upload untuk produk Tanah Kavling.</p>

                        <form action="<?php echo base_url() . 'pengelola/alternatif/simpan'?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                <label>Nama Proyek</label>
                                <input type="text" class="form-control input-bottom" name="nama_proyek" required placeholder="Tuliskan Nama Proyek" />
                            </div>
                           
                            <div class="form-group">
                                <label>Judul Proyek</label>
                                <input type="text" class="form-control input-bottom" name="judul_proyek" required placeholder="Tuliskan Judul Proyek" />
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Proyek</label>
                                <div>
                                    <textarea id="elm1" name="deskripsi_proyek"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Sertifikat</label>
                                <div>
                                    <input type="text" class="form-control input-bottom" name="sertifikat_proyek" required placeholder="Input Jenis Sertifikat" />
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Provinsi</label>
                                <div class="form-group">
                                    <select class="form-control" name="provinsi_proyek" required>
                                        <option value="">-PILIH-</option>
                                        <option value="Yogyakarta">Yogyakarta</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kabupaten</label>
                                <div class="form-group">
                                    <select class="form-control" name="kabupaten_proyek" required>
                                        <option value="">-PILIH-</option>
                                        <option value="Bantul">Bantul</option>
                                        <option value="Gunung Kidul">Gunung Kidul</option>
                                        <option value="Kulon Progo">Kulon Progo</option>
                                        <option value="Kota Yogyakarta">Kota Yogyakarta</option>
                                        <option value="Sleman">Sleman</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 ">Pilih Gambar Data Alternatif</h4>
                        <p class="text-muted m-b-30 font-14">Form upload untuk produk Tanah Kavling.</p>


                        <div class="form-group mt-3">
                            <label>Luas Tanah <b>(m<sup>2</sup>)</b> </label>
                            <div>
                                <input type="text" class="form-control input-bottom" name="luastanah_proyek" required placeholder="Input Luas Tanah" />
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label>Harga/m</label>
                            <div>
                                <input type="text" class="form-control input-bottom" name="harga/m_proyek" required placeholder="Input Harga/m" />
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label>Lebar Depan Tanah <b>(m<sup>2</sup>)</b></label>
                            <div>
                                <input type="text" class="form-control input-bottom" name="lebar_depan_proyek" required placeholder="Input Lebar Tanah" />
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label>Harga Total</label>
                            <div>
                                <input type="text" class="form-control input-bottom" name="harga_total_proyek" required placeholder="Input Harga Total" />
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label>Jarak dengan pusat kota (Km)</label>
                            <div>
                                <input type="text" class="form-control input-bottom" name="jarak_proyek" required placeholder="Input Jarak (Km)" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Fasilitas lokasi terdekat</label>
                            <div class="form-group">
                                <select class="form-control" name="fasilitas_proyek" required>
                                    <option value="">-PILIH-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group mt-4">
                            <label>Nama Pengelola</label>
                            <div>
                                <input type="text" class="form-control input-bottom" name="nama_pengelola" required placeholder="Input nama pengelola" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Nama Kantor</label>
                            <div class="form-group">
                                <select class="form-control" name="nama_kantor" required>
                                    <option value="">-PILIH-</option>
                                    <option value="Orange Property">Orange Property</option>
                                    <option value="ATM Property">ATM Property</option>
                                    <option value="AGSL Property">AGSL Property</option>
                                    <option value="Cakrawala Property">Cakrawala Property</option>
                                    <option value="BLD Jogja Property">BLD Jogja Property</option>
                                    <option value="KANS Property">KANS Property</option>
                                    <option value="GM Property">GM Property</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Nomor Hp/WA</label>
                            <div>
                                <input type="number" class="form-control input-bottom" name="nomor_hp" required placeholder="Input No Hp/WA" />
                            </div>
                        </div>
                        

                        <div class="form-group mt-2 mb-2">
                            <label>Foto 1 <small>* Foto Card Copy</small></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="fotoproyek1" required>
                                <label class="custom-file-label" for="customFile">Pilih file foto 1</label>
                            </div>
                        </div>

                        <div class="form-group mt-2 mb-2">
                            <label>Foto 2<small>* Foto Side Plan</small></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="fotoproyek2" required>
                                <label class="custom-file-label" for="customFile">Pilih file foto 2</label>
                            </div>
                        </div>

                        <div class="form-group mt-2 mb-2">
                            <label>Foto 3<small>* Foto Harga Proyek</small></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="fotoproyek3" required>
                                <label class="custom-file-label" for="customFile">Pilih file foto 3</label>
                            </div>
                        </div>

                        <div class="form-group mt-2 mb-2">
                            <label>Foto 4<small>* Foto Proyek</small></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="fotoproyek4" required>
                                <label class="custom-file-label" for="customFile">Pilih file foto 4</label>
                            </div>
                        </div>
                        
                        <div class="form-group mt-2 mb-2">
                            <label>Foto 5<small>* Foto Proyek</small></label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="fotoproyek5" required>
                                <label class="custom-file-label" for="customFile">Pilih file foto 5</label>
                            </div>
                        </div>


                        <div class="form-group mt-4">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg waves-effect waves-light btn-block" name="submit" value="upload">
                                    Submit
                                </button>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>