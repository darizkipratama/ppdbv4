@extends('layouts.landing')

@section('title', 'Register Page')
@section('content')
    <div class="d-flex p-3 pattern justify-content-center min-vh-100">
        <div class="col-12 col-md-6">
            <div class="text-center bg-white p-3 py-5 rounded">
                <div class="px-0 px-md-5 mb-4">
                    <img src="{{ asset('img/TSL-Islamic-School-kecil.png') }}" alt="logosdit" />
                    <h4>Buat Akun PPDB TSL Islamic School</h4>
                    <hr />
                </div>

                @foreach ($allProgrammes as $item)
                    @if($item->kuota_ikhwan <= $item->pendaftar_ikhwan)
                    <div class="alert alert-danger" role="alert">
                        Mohon Maaf, Kuota Untuk Program ${{$item->name}}, silahkan hubungi HELPDESK kami untuk informasi lebih lanjut
                    </div>
                    @endif
                @endforeach
                
                <div class="px-0 px-md-5">
                
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        {{-- name --}}
                        <div class="mb-2">
                            <select class="form-control form-select form-control-lg @error('programme_id') is-invalid @enderror"
                                name="programme_id" required >
                                <option value=''>Pilih Program Sekolah</option>
                                @foreach ($allProgrammes as $item)
                                    <option value={{$item->id}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">&nbsp;</div>
                        {{-- name --}}
                        <div class="mb-2">
                            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror"
                                name="name" placeholder="Nama lengkap calon siswa" required />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- number --}}
                        <div class="mb-2">
                            <input type="text"
                                class="form-control form-control-lg @error('email_number') is-invalid @enderror"
                                name="email_number" placeholder="No Wa Aktif (cth: 085xxxx)" />
                            @error('email_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- password --}}
                        <div class="form-group mb-2">
                            <input type="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror "
                                name="password" placeholder="Password (min 8 karakter)" />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <input type="password"
                                class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" placeholder="Ulangi Password" />
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-warning btn-lg my-3 w-75">Buat Akun</button>
                    </form>

                    <div class="text-center text-muted">atau</div>
                    <br />
                    <a href="{{ route('login') }}" class="btn btn-outline-dark btn-sm w-50 ">Login
                    </a>
                </div>
                
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .logo {
            width: 80px;
        }

        .pattern {
            background-color: #f79500;
            background-image: url({{ asset('img/pattern.svg') }});
        }
    </style>
@endpush
