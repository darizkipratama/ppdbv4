@extends('layouts.landing')

@section('title', 'Form Page')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 bg-orange p-3 p-md-5">
                <div class="text-left">
                    <img src="{{ asset('/img/gbr.png') }}" class="img" alt="logoppdb" />
                </div>
                <p class="fs-2 my-4 text-white">
                    Formulir Pendaftaran Siswa Baru </br>TSL Islamic School
                </p>
                <hr class="hr" />
                {{-- <span class="text-light">
                {{ gelombang[1] }} - Gelombang {{ gelombang[0] }}</span> --}}
            </div>
            <div class="col-12 col-md-8 p-3 p-md-5">
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <p class="fs-4">Program Yang Didaftar</p>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="full_name">Nama Program
                                        </label>
                                        <input class="form-control bg-light" id="programme_name" name="programme_name" type="text"
                                            value="{{ $programName }}" required readonly />
                                        <input type="hidden" value="{{ $programId }}"/>
                                    </div>
                                </div>
                            </div>

                            <p class="fs-4">Identitas Calon Siswa</p>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="full_name">Nama Lengkap
                                        </label>
                                        <input class="form-control bg-light" id="full_name" name="full_name" type="text"
                                            value="{{ Str::upper(Auth::user()->name) }}" required readonly />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="nick_name">Nama Panggilan</label>
                                        <input class="form-control" id="nick_name" name="nick_name" type="text"
                                            required />
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="school_origin">Asal sekolah Sebelumnya (Jika Ada)</label>
                                <input class="form-control" id="school_origin" name="school_origin" type="text" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="gender">Jenis Kelamin</label>
                                <select class="form-select" id="gender" name="gender">
                                    <option selected disabled>Pilih</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="nik">NIK</label>
                                <input class="form-control" id="nik" name="nik" type="text"
                                    required />
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="place_birth">Tempat Lahir</label>
                                        <input class="form-control" id="place_birth" name="place_birth" type="text"
                                            required />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="date_birth">Tanggal Lahir</label>
                                        <input class="form-control" name="date_birth" type="date" id="date_birth"
                                            placeholder="Bulan/Hari/Tahun" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="child_of">Anak Ke</label>
                                        <input class="form-control" id="child_of" name="child_of" type="number"
                                            required />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="child_from">Dari</label>
                                        <input class="form-control" name="child_from" type="number" id="child_from"
                                           required />
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="language_home">Bahasa Yang Digunakan Di Rumah</label>
                                <input class="form-control" id="language_home" name="language_home" type="text"
                                    required />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="blood_type">Golongan Darah</label>
                                <select class="form-select" id="blood_type" name="blood_type">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>O</option>
                                    <option>AB</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="special_needs">Berkebutuhan Khusus</label>
                                <select class="form-select" id="special_needs" name="special_needs">
                                    <option>Tidak</option>
                                    <option>Netra</option>
                                    <option>Rungu</option>
                                    <option>Grahita ringan</option>
                                    <option>Grahita sedang</option>
                                    <option>Daksa ringan</option>
                                    <option>Daksa sedang</option>
                                    <option>Laras</option>
                                    <option>Wicara</option>
                                    <option>Tuna Ganda</option>
                                    <option>Hiperaktif</option>
                                    <option>Cerdas Istimewa</option>
                                    <option>Bakat Istimewa</option>
                                    <option>Kesulitan Belajar</option>
                                    <option>Indigo</option>
                                    <option>Down Syndrome</option>
                                    <option>Autis</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="parent_status">
                                    Status Orang Tua
                                </label>
                                <select class="form-select" id="parent_status" name="parent_status">
                                    <option>Orang Tua Kandung</option>
                                    <option>Wali</option>
                                </select>
                            </div>
                            <hr />
                            <div class="mb-3">
                                <label class="form-label" for="living">Tempat Tinggal</label>
                                <select class="form-select" id="living" name="living">
                                    <option>Bersama orangtua</option>
                                    <option>Kakek-Nenek</option>
                                    <option>Wali</option>
                                    <option>Kos</option>
                                    <option>Asrama</option>
                                    <option>Panti Asuhan</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="address" name="address" required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="rt" class="form-label">RT/RW</label>
                                    <input type="text" class="form-control" id="rt" name="rtrw" required />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="postalcode" class="form-label">Kode Pos</label>
                                    <input type="number" class="form-control" id="postalcode" name="postalcode" />
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="desa" class="form-label">Desa</label>
                                    <input type="text" required class="form-control" id="desa" name="desa" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" required class="form-control" id="kecamatan"
                                        name="kecamatan" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="kota" class="form-label">Kabupaten/Kota</label>
                                    <input type="text" required class="form-control" id="kota" name="kota" />
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="provinsi" class="form-label">Provinsi</label>
                                    <input type="text" required class="form-control" id="provinsi"
                                        name="provinsi" />
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <hr />
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p class="fs-4">Identitas Ayah</p>

                            <div class="mb-3">
                                <label class="form-label" for="dad">Nama Ayah</label>
                                <input class="form-control" id="dad" name="dad" type="text" required />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="dad_edu">Pendidikan Ayah</label>
                                <select class="form-select" id="dad_edu" name="dad_edu">
                                    <option>SD/Sederajat</option>
                                    <option>SMP/Sederajat</option>
                                    <option>SMA/Sederajat</option>
                                    <option>D1</option>
                                    <option>D2</option>
                                    <option>D3</option>
                                    <option>D4/S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                    <option>Tidak Sekolah</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="dad_occupation">Pekerjaan Ayah</label>
                                <select class="form-select" id="dad_occupation" name="dad_occupation">
                                    <option>Dosen</option>
                                    <option>Pegawai Bank</option>
                                    <option>Dokter</option>
                                    <option>
                                        Perawat/Tenaga kesehatan lain
                                    </option>
                                    <option>Pegawai Departemen Keuangan</option>
                                    <option>TNI</option>
                                    <option>Polri</option>
                                    <option>PNS</option>
                                    <option>Tidak Bekerja</option>
                                    <option>Nelayan</option>
                                    <option>Petani</option>
                                    <option>Peternak</option>
                                    <option>Karyawan Swasta</option>
                                    <option>Pedagang Kecil</option>
                                    <option>Pedagang Besar</option>
                                    <option>Wiraswasta</option>
                                    <option>Wirausaha</option>
                                    <option>Buruh</option>
                                    <option>Pensiunan</option>
                                    <option>Tenaga Kerja Indonesia</option>
                                    <option>Tidak dapat diterapkan</option>
                                    <option>Sudah Meninggal</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="dad_income">
                                    Penghasilan (gaji pokok dan pendapatan lain)
                                </label>
                                <select class="form-select" id="dad_income" name="dad_income">
                                    <option>kurang dari Rp. 1.000.000</option>
                                    <option>
                                        Rp. 1.000.000 - Rp. 2.000.000
                                    </option>
                                    <option>
                                        Rp. 2.000.000 - Rp. 3.000.000
                                    </option>
                                    <option>
                                        Rp. 3.000.000 - Rp. 4.000.000
                                    </option>
                                    <option>
                                        Rp. 4.000.000 - Rp. 5.000.000
                                    </option>
                                    <option>
                                        Rp. 5.000.000 - Rp. 7,5.000.000
                                    </option>
                                    <option>
                                        Rp. 7,5.000.000 - Rp. 10.000.000
                                    </option>
                                    <option>
                                        Rp. 10.000.000 - Rp. 20.000.000
                                    </option>
                                    <option>Lebih dari Rp. 20.000.000</option>
                                    <option>Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="dad_phone">Nomor Telpon Ayah</label>
                                <input class="form-control" id="dad_phone" name="dad_phone" type="number" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="dad_email">Email Ayah</label>
                                <input class="form-control" id="dad_email" name="dad_email" type="text" />
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <p class="fs-4">Identitas Ibu</p>
                            <div class="mb-3">
                                <label class="form-label" for="mom">Nama Ibu</label>
                                <input class="form-control" id="mom" name="mom" type="text" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="mom_edu">Pendidikan Ibu</label>
                                <select class="form-select" id="mom_edu" name="mom_edu">
                                    <option>SD/Sederajat</option>
                                    <option>SMP/Sederajat</option>
                                    <option>SMA/Sederajat</option>
                                    <option>D1</option>
                                    <option>D2</option>
                                    <option>D3</option>
                                    <option>D4/S1</option>
                                    <option>S2</option>
                                    <option>S3</option>
                                    <option>Tidak Sekolah</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="mom_occupation">Pekerjaan Ibu</label>
                                <select class="form-select" id="mom_occupation" name="mom_occupation">
                                    <option>Dosen</option>
                                    <option>Pegawai Bank</option>
                                    <option>Dokter</option>
                                    <option>
                                        Perawat/Tenaga kesehatan lain
                                    </option>
                                    <option>Pegawai Departemen Keuangan</option>
                                    <option>TNI</option>
                                    <option>Polri</option>
                                    <option>PNS</option>
                                    <option>Tidak Bekerja</option>
                                    <option>Nelayan</option>
                                    <option>Petani</option>
                                    <option>Peternak</option>
                                    <option>Karyawan Swasta</option>
                                    <option>Pedagang Kecil</option>
                                    <option>Pedagang Besar</option>
                                    <option>Wiraswasta</option>
                                    <option>Wirausaha</option>
                                    <option>Buruh</option>
                                    <option>Pensiunan</option>
                                    <option>Tenaga Kerja Indonesia</option>
                                    <option>Tidak dapat diterapkan</option>
                                    <option>Sudah Meninggal</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="mom_income">
                                    Penghasilan (gaji pokok dan pendapatan lain)
                                </label>
                                <select class="form-select" id="mom_income" name="mom_income">
                                    <option>kurang dari Rp. 1.000.000</option>
                                    <option>
                                        Rp. 1.000.000 - Rp. 2.000.000
                                    </option>
                                    <option>
                                        Rp. 2.000.000 - Rp. 3.000.000
                                    </option>
                                    <option>
                                        Rp. 3.000.000 - Rp. 4.000.000
                                    </option>
                                    <option>
                                        Rp. 4.000.000 - Rp. 5.000.000
                                    </option>
                                    <option>
                                        Rp. 5.000.000 - Rp. 7,5.000.000
                                    </option>
                                    <option>
                                        Rp. 7,5.000.000 - Rp. 10.000.000
                                    </option>
                                    <option>
                                        Rp. 10.000.000 - Rp. 20.000.000
                                    </option>
                                    <option>Lebih dari Rp. 20.000.000</option>
                                    <option>Tidak berpenghasilan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="mom_phone">Nomor Telpon Ibu</label>
                                <input class="form-control" id="mom_phone" name="mom_phone" type="number" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="mom_email">Email Ibu</label>
                                <input class="form-control" id="mom_email" name="mom_email" type="text" />
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p class="fs-4">Riwayat Kesehatan Anak</p>

                            <div class="mb-3">
                                <label class="form-label" for="history_ofillness">Riwayat Penyakit</label>
                                <textarea cols="8" rows="2" class="form-control" id="history_ofillness" name="historyOfIllness"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="allergic">Alergi/Kondisi Yang Perlu Diperhatikan</label>
                                <input class="form-control" id="allergic" name="allergic" type="text" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="special_medication">Pengobatan/Obat Khusus Yang Harus Diberikan</label>
                                <textarea cols="8" rows="2" class="form-control" id="special_medication" name="special_medication"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="food_allergic">Makanan Yang Tidak Boleh Diberikan</label>
                                <textarea cols="8" rows="2" class="form-control" id="food_allergic" name="food_allergic"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p class="fs-4">Informasi Khusus</p>
                            <div class="mb-3">
                                <label class="form-label" for="emergency_contact">Kontak Yang Bisa Dihubungi Pada Saat Darurat</label>
                                <input class="form-control" id="emergency_contact" name="emergency_contact" type="number"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="hobby">Hobi Anak</label>
                                <input class="form-control" id="hobby" name="hobby" type="text" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="sp_characteristic">Karakteristik Khusus</label>
                                <input class="form-control" id="sp_characteristic" name="sp_characteristic" type="text" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="sp_company">Perlu Pendampingan Khusus </label>
                                <select class="form-select" id="sp_company" name="sp_company">
                                    <option value=0>Tidak</option>
                                    <option value=1>Ya</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="playgroup_before">Lama Di Sekolah Sebelumnya </label>
                                <input class="form-control" id="playgroup_before" name="playgroup_before" type="text" />
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <p class="fs-4">Catatan Lainnya</p>
                            <div class="mb-3">
                                <label class="form-label" for="specialnote_school">Catatan Khusus Untuk Sekolah</label>
                                <textarea cols="8" rows="2" class="form-control" id="specialnote_school" name="specialnote_school"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="parent_note">Harapan Orang Tuan Terhadap Kami</label>
                                <textarea cols="8" rows="2" class="form-control" id="parent_note" name="parent_note"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-orange btn-lg w-100 mt-3"
                        onclick="return confirm('Pastikan Data yang anda kirim sudah benar!')" value="Simpan Data">
                </form>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .img {
            width: 30vh;
        }
    </style>
@endpush
