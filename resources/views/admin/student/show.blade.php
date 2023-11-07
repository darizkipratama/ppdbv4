@extends('layouts.dashboard')

@section('title', 'Detail Calon Siswa')

@section('content')

    @include('layouts.partial.name')

    <div class="bg-white rounded p-3 min-vh-100">
        <a href="{{ url()->previous() }}" class="btn btn-outline-primary btn-sm mb-3"> <i class="bi bi-arrow-left-circle"></i>
            kembali</a>

        <p class="fs-5 text-center mb-0">Detail Data Pendaftar</p>
        <hr>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Calon
                    Siswa</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"> Orang
                    Tua</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes-tab-pane"
                    type="button" role="tab" aria-controls="notes-tab-pane" aria-selected="false"> Catatan
                    Tambahan</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <table class="table">
                    <p class="badge bg-orange mt-3">Data Calon Siswa</p>
                    <tbody>
                        <tr>
                            <td class="width">Program Yang Dipilih</td>
                            <td>{{ $student->programme->name }}</td>
                        </tr>
                        <tr>
                            <td class="width">Nama</td>
                            <td>{{ $student->full_name }}</td>
                        </tr>
                        <tr>
                            <td>Panggilan</td>
                            <td>{{ $student->nick_name }}</td>
                        </tr>
                        <tr>
                            <td>Asal</td>
                            <td>{{ $student->school_origin }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>{{ $student->gender }}</td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal lahir</td>
                            <td>{{ $student->place_birth }},
                                {{ \Carbon\Carbon::parse($student->date_birth)->isoFormat('DD MMMM YYYY') }} </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $student->address }}, {{ $student->rtrw }} {{ $student->desa }}
                                {{ $student->kecamatan }} {{ $student->kota }} {{ $student->provinsi }}</td>
                        </tr>
                        <tr>
                            <td>Kebutuhan Khusus</td>
                            <td>{{ $student->special_needs }}</td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>{{ $student->child_of }} dari {{ $student->child_from }}</td>
                        </tr>
                        <tr>
                            <td>Tinggal bersama</td>
                            <td>{{ $student->living }}</td>
                        </tr>
                        <tr>
                            <td>Status Orang Tua</td>
                            <td>{{ $student->parent_status }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Yang Digunakan Sehari-hari Di Rumah</td>
                            <td>{{ $student->language_home }}</td>
                        </tr>
                        <tr>
                            <td>Golongan Darah</td>
                            <td>{{ $student->blood_type }}</td>
                        </tr>
                        <tr>
                            <td>Riwayat Penyakit</td>
                            <td>{{ $student->history_ofillness }}</td>
                            <td>Riwayat Alergi</td>
                            <td>{{ $student->allergic }}</td>
                            
                        </tr>
                        <tr>
                            <td>Pengobatan/Obat Khusus Yang Harus Diberikan</td>
                            <td>{{ $student->special_medication }}</td>
                        </tr>
                        <tr>
                            <td>Makanan Yang Tidak Boleh Diberikan</td>
                            <td>{{ $student->food_allergic }}</td>
                        </tr>
                        <tr>
                            <td>Hobi</td>
                            <td>{{ $student->hobby }}</td>
                        </tr>
                        <tr>
                            <td>Karakteristik Khusus</td>
                            <td>{{ $student->sp_characteristic }}</td>
                        </tr>
                        <tr>
                            <td>Perlu Pendampingan Khusus</td>
                            <td>{{ $student->sp_company }}</td>
                        </tr>
                        <tr>
                            <td>Lama Di Sekolah Sebelumnya</td>
                            <td>{{ $student->playgroup_before }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="1">
                <p class="badge bg-orange mt-3">Data Ayah</p>
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="width">Ayah</td>
                            <td>{{ $student->dad }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>{{ $student->dad_edu }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{ $student->dad_occupation }}</td>
                        </tr>
                        <tr>
                            <td>Penghasilan</td>
                            <td>{{ $student->dad_income }}</td>
                        </tr>
                        <tr>
                            <td>HP</td>
                            <td>{{ $student->dad_phone }}</td>
                            <td>Email</td>
                            <td>{{ $student->dad_email }}</td>
                        </tr>
                    </tbody>
                </table>
                <p class="badge bg-orange">Data Ibu</p>
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="width">Ibu</td>
                            <td>{{ $student->mom }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>{{ $student->mom_edu }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>{{ $student->mom_occupation }}</td>
                        </tr>
                        <tr>
                            <td>Penghasilan</td>
                            <td>{{ $student->mom_income }}</td>
                        </tr>
                        <tr>
                            <td>Hp</td>
                            <td>{{ $student->mom_phone }}</td>
                            <td>Email</td>
                            <td>{{ $student->mom_email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="notes-tab-pane" role="tabpanel" aria-labelledby="notes-tab" tabindex="2">
                <p class="badge bg-orange mt-3">Catatan Tambahan</p>
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="width">Catatan Khusus Untuk Sekolah</td>
                            <td>{{ $student->specialnote_school }}</td>
                        </tr>
                        <tr>
                            <td>Harapan Orang Tua Terhadap Sekolah</td>
                            <td>{{ $student->parent_note }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .width {
            width: 170px
        }

        @media (max-width: 700px) {
            .width {
                width: 110px;
            }
        }
    </style>
@endpush
