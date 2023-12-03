<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data Pentest</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container-fluid px-4">
    <div class="card">
        <div class="card-header bg-danger">
            Form Pengajuan Pentest
        </div>
        <div class="card-body">
            <!-- Kalau Error -->
            <div class="alert alert-danger error" role="alert" style="display: none;">
            </div>

            <!-- Kalau Sukkes -->
            <div class="alert alert-primary sukses" role="alert" style="display: none;">
            </div>
            <form>
                <input type="hidden" id="inputId">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="idPentest">Id Pentest</label>
                        <input type="text" class="form-control" id="inputIdPentest" placeholder="Nama Pemohon">
                    </div>
                    <div class="form-group col-6">
                        <label for="pemohon">Pemohon</label>
                        <input type="text" class="form-control" id="inputPemohon" placeholder="Nama Pemohon">
                    </div>
                    <div class="form-group col-6">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="inputTanggal" placeholder="Masukan Tanggal">
                    </div>
                    <div class="form-group col-6">
                        <label for="urlTarget">URL Target</label>
                        <input type="text" class="form-control" id="inputUrl" placeholder="Masukan Url Target">
                    </div>
                    <div class="form-group col-6">
                        <label for="namaInstansi">Nama Instansi/Dinas</label>
                        <select class="form-control" id="inputDinas">
                            <option>- Pilih Instansi/Dinas -</option>
                            <option>01 - Sekretariat Daerah Aceh</option>
                            <option>02 - Sekretariat DPRA</option>
                            <option>03 - Inspektorat Aceh</option>
                            <option>04 - Badan Perencanaan Pembangunan Daerah Aceh</option>
                            <option>05 - Badan Pengelolaan Keuangan Aceh</option>
                            <option>06 - Kepegawaian Aceh</option>
                            <option>07 - Badan Pengembangan Sumber Daya Manusia Aceh</option>
                            <option>08 - Badan Penghubung Pemerintah Aceh</option>
                            <option>09 - Dinas Pendidikan Aceh</option>
                            <option>10 - Dinas Kesehatan Aceh</option>
                            <option>11 - Dinas Pekerjaan Umum dan Penataan Ruang Aceh</option>
                            <option>12 - Dinas Pengairan Aceh</option>
                            <option>13 - Dinas Perumahan Rakyat dan Kawasan Permukiman Aceh</option>
                            <option>14 - Satuan Polisi Pamong Praja dan Wilayatul Hisbah Aceh</option>
                            <option>15 - Dinas Sosial Aceh</option>
                            <option>16 - Dinas Tenaga Kerja dan Mobilitas Penduduk Aceh</option>
                            <option>17 - Dinas Pemberdayaan Perempuan dan Perlindungan Anak</option>
                            <option>18 - Dinas Pangan Aceh</option>
                            <option>19 - Dinas Lingkungan Hidup dan Kehutanan Aceh</option>
                            <option>20 - Dinas Registrasi Kependudukan Aceh</option>
                            <option>21 - Dinas Pemberdayaan Masyarakat dan Gampong Aceh</option>
                            <option>22 - Dinas Perhubungan Aceh</option>
                            <option>23 - Dinas Komunikasi, Informatika dan Persandian Aceh</option>
                            <option>24 - Dinas Koperasi, Usaha Kecil dan Menengah Aceh</option>
                            <option>25 - Dinas Penanaman Modal dan Pelayanan Terpadu </option>
                            <option>26 - Dinas Pemuda dan Olah Raga Aceh</option>
                            <option>27 - Dinas Kebudayaan dan Pariwisata Aceh</option>
                            <option>28 - Dinas Perpustakaan dan Kearsipan Aceh</option>
                            <option>29 - Dinas Kelautan dan Perikanan Aceh</option>
                            <option>30 - Dinas Pertanian dan Perkebunan Aceh</option>
                            <option>31 - Dinas Peternakan Aceh</option>
                            <option>32 - Dinas Energi dan Sumber Daya Mineral Aceh</option>
                            <option>33 - Dinas Perindustrian dan Perdagangan Aceh</option>
                            <option>34 - Keurukon Katibul Wali / Sekretariat Lembaga Wali</option>
                            <option>35 - Dinas Syariat Islam Acehh</option>
                            <option>36 - Dinas Pendidikan Dayah Aceh</option>
                            <option>37 - Sekretariat Majelis Adat Aceh</option>
                            <option>38 - Sekretariat Majelis Permusyawaratan Ulama Aceh</option>
                            <option>39 - Sekretariat Majelis Pendidikan Aceh</option>
                            <option>40 - Sekretariat Baitul Mal Aceh/option>
                            <option>41 - Sekretariat Badan Reintegrasi Aceh</option>
                            <option>42 - Dinas Pertanahan Aceh</option>
                            <option>43 - Badan Penanggulangan Bencana Aceh</option>
                            <option>44 - Badan Kesatuan Bangsa dan Politik Aceh</option>
                            <option>45 - Rumah Sakit Umum Daerah dr. Zainoel Abidin</option>
                            <option>46 - Rumah Sakit Jiwa Aceh</option>
                            <option>47 - Rumah Sakit Ibu dan Anak</option>
                            <option>91 - Biro Tata Pemerintah</option>
                            <option>92 - Biro Hukum</option>
                            <option>93 - Biro Keistimewaan dan Kesejahteraan Rakyat</option>
                            <option>94 - Biro Perekonomian</option>
                            <option>95 - Biro Administrasi Pembangunan</option>
                            <option>96 - Biro Pengadaan Barang dan Jasa</option>
                            <option>97 - Biro Organisasi</option>
                            <option>98 - Biro Administrasi Pimpinan</option>
                            <option>99 - Biro Umum</option>

                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="penanggungJawab">Penanggung Jawab</label>
                        <table class="col-md">
                            <tr>
                                <td><input type="text" class="form-control" id="inputPjawab" placeholder="Nama">
                                </td>
                                <td><input type="email" class="form-control" id="inputPemail" placeholder="Email">
                                </td>
                                <td><input type="number" class="form-control" id="inputPkontak" placeholder="No.Kontak">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputIPAddress">IP Address</label>
                        <input type="text" class="form-control" id="inputIpAddress" placeholder="Masukan IP Address">
                    </div>
                    <div class="form-group col-6">
                        <label for="sthosting">Status Hosting</label>
                        <select id="inputStatusHosting" class="form-control">
                            <option selected="--Pilih Keterangan--">--Pilih Keterangan--</option>
                            <option value="Permanen">Permanen</option>
                            <option value="Temporary">Temporary</option>

                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="exampleInputEmail1">Hasil Pentest</label>
                        <table class="col-md">
                            <tr>
                                <td><input type="number" class="form-control" id="inputHigh" placeholder="High">
                                </td>
                                <td><input type="number" class="form-control" id="inputMedium" placeholder="Medium">
                                </td>
                                <td><input type="number" class="form-control" id="inputLow" placeholder="Low">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group col-6">
                        <label for="namaInstansi">Keterangan</label>
                        <select id="inputKeterangan" class="form-control" placeholder="masukan nama">
                            <option selecteed="--Pilih Keterangan--">--Pilih Keterangan--</option>
                            <option value="Berhasil">Berhasil</option>
                            <option value="Bagus">Bagus</option>
                            <option value="OK">OK</option>
                            <option value="Pentest Ulang">Pentest Ulang</option>
                            <option value="Tidak Dapat Diakses">Tidak Dapat Diakses</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <div class="modal-footer">
            <a href="<?php echo site_url('tabelpentest') ?>"><button type="submit" class="btn btn-success">Lihat
                    Data</button></a>
            <button type="submit" class="btn btn-primary" id="tombolSimpan">Simpan</button>
        </div>
    </div>
</div><br>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
</script>

<script>
$('#tombolSimpan').on('click', function() {
    var $id = $('#inputId').val();
    var $id_pentest = $('#inputIdPentest').val();
    var $pemohon = $('#inputPemohon').val();
    var $tanggal = $('#inputTanggal').val();
    var $url_target = $('#inputUrl').val();
    var $nama_in = $('#inputDinas').val();
    var $p_jawab = $('#inputPjawab').val();
    var $p_email = $('#inputPemail').val();
    var $p_no = $('#inputPkontak').val();
    var $ip_addres = $('#inputIpAddress').val();
    var $status_hg = $('#inputStatusHosting').val();
    var $h_high = $('#inputHigh').val();
    var $h_med = $('#inputMedium').val();
    var $h_low = $('#inputLow').val();
    var $ket = $('#inputKeterangan').val();

    $.ajax({
        url: "<?php echo site_url('formtambahdata/simpan')?>",
        type: "POST",
        data: {
            id: $id,
            id_pentest: $id_pentest,
            pemohon: $pemohon,
            tanggal: $tanggal,
            url_target: $url_target,
            nama_in: $nama_in,
            p_jawab: $p_jawab,
            p_email: $p_email,
            p_no: $p_no,
            ip_addres: $ip_addres,
            status_hg: $status_hg,
            h_high: $h_high,
            h_med: $h_med,
            h_low: $h_low,
            ket: $ket

        },
        success: function(hasil) {
            var $obj = $.parseJSON(hasil);
            if ($obj.sukses == false) {
                $('.sukses').hide();
                $('.error').show();
                $('.error').html($obj.error);

            } else {
                $('.error').hide();
                $('.sukses').show();
                $('.sukses').html($obj.sukses);
            }
        }
    });

});
</script>
