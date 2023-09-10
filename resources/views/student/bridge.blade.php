@extends('layouts.landing')

@section('title', 'Bridge Page')

@section('content')
    <div class="bg-orange">
        <div class="container">
            <div class="d-flex flex-column pt-4 pt-md-0 justify-content-md-center vh-100">
                <!-- SAAT PENDAFTRAN DIBUKA, NAMUN BELUM BAYAR -->

                <div class="bg-white p-3 p-md-5 rounded shadow">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <strong>Bukti pembayaran berhasil di upload</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="text-center">
                        <img class="logobridge rounded p-1 mb-2" src="{{ asset('img/user.png') }}" alt="user" />
                        <p class="fs-4 text-black"> Assalamualaikum, <strong>{{ $user->name }} </strong> </p>
                    </div>
                    <ul class="list-group fs-5 mb-3">
                        <li class="list-group-item">
                            Sebelum melanjutkan pendaftaran, lakukan pembayaran
                            terlebih dahulu untuk mengaktifkan Akun.
                        </li>
                        <li class="list-group-item">
                            Biaya pendaftaran sebesar:
                            <span class="badge bg-orange">Rp 300.000</span>, pembayaran melalui
                            rekening sekolah BSI <span class="badge bg-orange">4441234007</span><br />
                            a/n
                            <i>
                                Sekolah Dasar Islam Terpadu Harapan Umat
                                Jember</i>
                        </li>
                        <li class="list-group-item">
                            Upload bukti pembayaran disini
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#document">
                                upload
                            </button>
                        </li>
                        <li class="list-group-item">
                            Akun akan aktif 1x24 jam, jika akun belum aktif silahkan hubungi ke <a
                                href="https://api.whatsapp.com/send/?phone=6285232213939&text&type=phone_number&app_absent=0"
                                target="_blank" class="btn btn-orange"> No. WA Admin</a>
                        </li>
                    </ul>
                    <form action="{{ route('logout') }}" method="post">
                        <div class="btn-group w-100 mt-2">
                            <a href="{{ route('home') }}" class="btn btn-orange d-block-inline"> Refresh Page</a>
                            @csrf
                            <button type="submit" class="btn btn-danger">logout</button>
                        </div>
                    </form>
                </div>
                <!-- PENDAFTARAN MASIH BELUM DIBUKA -->
                {{-- <div v-if="title == 'offline'" class="bg-white p-3 p-md-5 rounded shadow">
                    <div class="text-center">
                        <img class="logo rounded p-1 mb-2 text-center" :src="'/storage/img/user.png'" alt="user" />
                        <p class="fs-3">
                            Assalamualaikum, <strong>{{ 'user' }} </strong>
                            <br />
                        </p>
                        <hr />
                    </div>
                    <div class=" text-center">

                        <ul class="list-group fs-5 mb-3 ">
                            <li class="list-group-item ">
                                Mohon kesediaannya menunggu, karena pendaftaran saat
                                ini masih belum dibuka
                                <br />
                                Namun tidak perlu khwatir, saat pendaftaran dibuka.
                                kami akan menginformasikannya untuk anda
                            </li>
                            <li class="list-group-item">
                                Informasi lebih lanjut wa No Admin berikut <a href="https://wa.me/6288289378109/"
                                    target="_blank" class="btn btn-orange btn-sm">WA Admin (klik disini)</a>
                            </li>
                        </ul>

                        <Link as="button" class="btn btn-secondary text-white w-50 mt-2" href="/logout" method="POST">
                        Logout
                        </Link>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    @include('student.upload')
@endsection
@push('css')
    <style>
        .logobridge {
            width: 70px;
        }
    </style>
@endpush
