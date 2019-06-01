@extends('layout/master')

@section('title', 'Register TPA Makara UI')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('content')
    <div class="container-inner">
        <div class="picture-logo">
           <img src="{{asset('picture/logoTPAM.png')}}" alt="Logo TPAM">
        </div>
        <h1 class = "title">Welcome to TPA Makara UI!</h1>
        <div class="register-anak">
            <h2>Data Anak</h2>
            <h2>Taman Pengembangan Anak Makara</h2>
        </div>
        <h1 class = "sign-in">Sign Up</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="register">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="repeatPassword">Repeat Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <div class=button-section>
                    <a class="halo btn-primary btn" onclick = "toRegistrasiAnakFirst()" href="#">Sign Up</a>
                </div>
            </div>
            <div class="registrasi-anak-first">
                <div class="form-group">
                    <label for=""><u>DATA ANAK</u></label>
                </div>
                <div class="form-group">
                    <label for="namaLengkap">Nama Lengkap: </label>
                    <input type="text" class="form-control{{ $errors->has('namaLengkap') ? ' is-invalid' : '' }}" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap" required>
                    @if ($errors->has('namaLengkap'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('namaLengkap') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="namaPanggilan">Nama Panggilan: </label>
                    <input type="text" class="form-control{{ $errors->has('namaPanggilan') ? ' is-invalid' : '' }}" id="namaPanggilan" name="namaPanggilan" placeholder="Nama Panggilan" required>
                    @if ($errors->has('namaPanggilan'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('namaPanggilan') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row shorter">
                    <label for="jenisKelamin" class="col-sm-10 col-form-label">Jenis Kelamin:</label>
                    <div class="col-sm-2">
                        <select class="form-control{{ $errors->has('jenisKelamin') ? ' is-invalid' : '' }}" id="jenisKelamin" name="jenisKelamin" required>
                            <option>1</option>
                            <option>2</option>
                        </select>
                        @if ($errors->has('jenisKelamin'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('jenisKelamin') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempatTanggalLahir" class="col-sm-10 col-form-label">Tempat tanggal lahir:</label>
                    <div class="col-sm-2">
                        <select class="form-control{{ $errors->has('tempatTanggalLahir') ? ' is-invalid' : '' }}" id="tempatTanggalLahir" name="tempatTanggalLahir" required>
                            <option>1</option>
                            <option>2</option>
                        </select>
                        @if ($errors->has('tempatTanggalLahir'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('tempatTanggalLahir') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="usia">Usia: </label>
                    <input type="number" class="form-control{{ $errors->has('usia') ? ' is-invalid' : '' }}" id="usia" name="usia" placeholder="Usia" required>
                    @if ($errors->has('usia'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('usia') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="agama">Agama: </label>
                    <input type="text" class="form-control{{ $errors->has('agama') ? ' is-invalid' : '' }}" id="agama" name="agama" placeholder="Agama" required>
                    @if ($errors->has('agama'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('agama') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="alamatRumah">Alamat Rumah: </label>
                    <input type="text" class="form-control{{ $errors->has('alamatRumah') ? ' is-invalid' : '' }}" id="alamatRumah" name="alamatRumah" placeholder="Alamat Rumah" required>
                    @if ($errors->has('alamatRumah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('alamatRumah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="teleponRumah">Telepon Rumah: </label>
                    <input type="text" class="form-control{{ $errors->has('teleponRumah') ? ' is-invalid' : '' }}" id="teleponRumah" name="teleponRumah" placeholder="Telepon Rumah" required>
                    @if ($errors->has('teleponRumah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('teleponRumah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label class = "col-sm-12">Keadaan Anak: </label>
                    <label for="anakKe" class = "col-sm col-form-label short">Anak ke</label>
                    <input type="number" class="form-control{{ $errors->has('anakKe') ? ' is-invalid' : '' }} col-sm-4" id="anakKe" name="anakKe" placeholder="Urutan" required>
                    @if ($errors->has('anakKe'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('anakKe') }}</strong>
                        </span>
                    @endif
                    <label for="anakDari" class = "col-sm col-form-label short">dari</label>
                    <input type="number" class="form-control{{ $errors->has('anakDari') ? ' is-invalid' : '' }} col-sm-4" id="anakDari" name="anakDari" placeholder="Total Anak" required>
                    @if ($errors->has('anakDari'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('anakDari') }}</strong>
                        </span>
                    @endif
                </div>
                <div class=button-section>
                    <a class="halo btn-primary btn" onclick = "toRegistrasiAnakSecond()" href="#">
                        <img src="{{asset('svg/checksign.svg')}}" alt="checksign">
                        Next
                    </a>
                </div>
            </div>
            <div class="registrasi-anak-second">
                <div class="form-group">
                    <label for=""><u>DATA ANAK</u></label>
                </div>
                <div class="form-check">
                    <p class="font-basic">Catatan Khusus Medis:</p>
                    <input class="form-control{{ $errors->has('catatanMedis') ? ' is-invalid' : '' }} form-check-input correcting" type="radio" name="catatanMedis" id="tidakAda" value="option1" required>
                    <label class="form-check-label" for="tidakAda">
                        Tidak ada
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-control{{ $errors->has('catatanMedis') ? ' is-invalid' : '' }} form-check-input correcting" type="radio" name="catatanMedis" id="ada" value="option2" required>
                    @if ($errors->has('catatanMedis'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('catatanMedis') }}</strong>
                        </span>
                    @endif
                    <label class="form-check-label" for="ada">
                        Ada, keterangan:
                    </label>
                    {{-- belum jalan validation radio buttonnya --}}
                    <input type="text" class="form-control" id="keteranganMedis" name="keteranganMedis">
                </div>
                <div class="form-group">
                    <label for="penyakit">Penyakit Berat yang Pernah Dialami Anak: </label>
                    <input type="text" class="form-control{{ $errors->has('penyakit') ? ' is-invalid' : '' }}" id="penyakit" name="penyakit" required>
                    @if ($errors->has('penyakit'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('penyakit') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="keadaan">Keadaan yang Perlu Mendapat Perhatian Khusus TPAM: </label>
                    <input type="text" class="form-control{{ $errors->has('keadaan') ? ' is-invalid' : '' }}" id="keadaan" name="keadaan" required>
                    @if ($errors->has('keadaan'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('keadaan') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="sifatPerhatian">Sifat-sifat anak yang masih perlu mendapatkan perhatian:</label>
                    <input type="text" class="form-control{{ $errors->has('sifatPerhatian') ? ' is-invalid' : '' }}" id="sifatPerhatian" name="sifatPerhatian" required>
                    @if ($errors->has('sifatPerhatian'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('sifatPerhatian') }}</strong>
                        </span>
                    @endif
                </div>
                <div class=button-section>
                    <a class="halo btn-primary btn" onclick = "toRegistrasiIbu()" href="#">
                        <img src="{{asset('svg/checksign.svg')}}" alt="checksign">
                        Next
                    </a>
                </div>
            </div>
            <div class="registrasi-ibu">
                <div class="form-group">
                    <label for=""><u>DATA IBU</u></label>
                </div>
                <div class="form-group">
                    <label for="namaLengkapIbu">Nama Lengkap: </label>
                    <input type="text" class="form-control{{ $errors->has('namaLengkapIbu') ? ' is-invalid' : '' }}" id="namaLengkapIbu" name="namaLengkapIbu" placeholder="Nama Lengkap" required>
                    @if ($errors->has('namaLengkapIbu'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('namaLengkapIbu') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="tempatTanggalLahirIbu" class="col-sm-10 col-form-label">Tempat tanggal lahir:</label>
                    <div class="col-sm-2">
                        <select class="form-control{{ $errors->has('tempatTanggalLahirIbu') ? ' is-invalid' : '' }}" id="tempatTanggalLahirIbu" name="tempatTanggalLahirIbu" required>
                            <option>1</option>
                            <option>2</option>
                        </select>
                        @if ($errors->has('tempatTanggalLahirIbu'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('tempatTanggalLahirIbu') }}</strong>
                            </span>
                        @endif
                    </div>
                    <input type="text" class="form-control{{ $errors->has('tempatLahirIbu') ? ' is-invalid' : '' }}" id="tempatLahirIbu" name="tempatLahirIbu" placeholder="" required>
                    @if ($errors->has('tempatLahirIbu'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tempatLahirIbu') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="agamaIbu">Agama: </label>
                    <input type="text" class="form-control{{ $errors->has('agamaIbu') ? ' is-invalid' : '' }}" id="agamaIbu" name="agamaIbu" placeholder="Agama" required>
                    @if ($errors->has('agamaIbu'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('agamaIbu') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="pendidikanTerakhirIbu">Pendidikan terkahir: </label>
                    <input type="text" class="form-control{{ $errors->has('pendidikanTerakhirIbu') ? ' is-invalid' : '' }}" id="pendidikanTerakhirIbu" name="pendidikanTerakhirIbu" placeholder="Pendidikan Terakhir" required>
                    @if ($errors->has('pendidikanTerakhirIbu'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('pendidikanTerakhirIbu') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="jurusanIbu">Jurusan: </label>
                    <input type="text" class="form-control{{ $errors->has('jurusanIbu') ? ' is-invalid' : '' }}" id="jurusanIbu" name="jurusanIbu" placeholder="Jurusan" required>
                    @if ($errors->has('jurusanIbu'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('jurusanIbu') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="pekerjaanIbu">Pekerjaan: </label>
                    <input type="text" class="form-control{{ $errors->has('pekerjaanIbu') ? ' is-invalid' : '' }}" id="pekerjaanIbu" name="pekerjaanIbu" placeholder="Pekerjaan" required>
                    @if ($errors->has('pekerjaanIbu'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('pekerjaanIbu') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="alamatKerjaIbu">Alamat Kerja: </label>
                    <input type="text" class="form-control{{ $errors->has('alamatKerjaIbu') ? ' is-invalid' : '' }}" id="alamatKerjaIbu" name="alamatKerjaIbu" placeholder="Alamat Kerja" required>
                    @if ($errors->has('alamatKerjaIbu'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('alamatKerjaIbu') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="teleponKantorIbu">Telepon Kantor: </label>
                    <input type="text" class="form-control{{ $errors->has('teleponKantorIbu') ? ' is-invalid' : '' }}" id="teleponKantorIbu" name="teleponKantorIbu" placeholder="Telepon Kantor" required>
                    @if ($errors->has('teleponKantorIbu'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('teleponKantorIbu') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="emailIbu">Email: </label>
                    <input type="email" class="form-control{{ $errors->has('emailIbu') ? ' is-invalid' : '' }}" id="emailIbu" name="emailIbu" placeholder="Email" required>
                    @if ($errors->has('emailIbu'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('emailIbu') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="alamatRumahIbu">Alamat Rumah: </label>
                    <input type="text" class="form-control{{ $errors->has('alamatRumahIbu') ? ' is-invalid' : '' }}" id="alamatRumahIbu" name="alamatRumahIbu" placeholder="Alamat Rumah" required>
                    @if ($errors->has('alamatRumahIbu'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('alamatRumahIbu') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="nomorHpIbu">Nomor Handphone: </label>
                    <input type="text" class="form-control{{ $errors->has('nomorHpIbu') ? ' is-invalid' : '' }}" id="nomorHpIbu" name="nomorHpIbu" placeholder="+628..." required>
                    @if ($errors->has('nomorHpIbu'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nomorHpIbu') }}</strong>
                        </span>
                    @endif
                </div>
                <div class=button-section>
                    <a class="halo btn-primary btn" onclick = "toRegistrasiAyah()" href="#">
                        <img src="{{asset('svg/checksign.svg')}}" alt="checksign">
                        Next
                    </a>
                </div>
            </div>
            <div class="registrasi-ayah">
                <div class="form-group">
                    <label for=""><u>DATA AYAH</u></label>
                </div>
                <div class="form-group">
                    <label for="namaLengkapAyah">Nama Lengkap: </label>
                    <input type="text" class="form-control{{ $errors->has('namaLengkapAyah') ? ' is-invalid' : '' }}" id="namaLengkapAyah" name="namaLengkapAyah" placeholder="Nama Lengkap" required>
                    @if ($errors->has('namaLengkapAyah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('namaLengkapAyah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="tempatTanggalLahirAyah" class="col-sm-10 col-form-label">Tempat tanggal lahir:</label>
                    <div class="col-sm-2">
                        <select class="form-control{{ $errors->has('tempatTanggalLahirAyah') ? ' is-invalid' : '' }}" id="tempatTanggalLahirAyah" name="tempatTanggalLahirAyah" required>
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    <input type="text" class="form-control{{ $errors->has('tempatLahirAyah') ? ' is-invalid' : '' }}" id="tempatLahirAyah" name="tempatLahirAyah" placeholder="" required>
                    @if ($errors->has('tempatLahirAyah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tempatLahirAyah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="agamaAyah">Agama: </label>
                    <input type="text" class="form-control{{ $errors->has('agamaAyah') ? ' is-invalid' : '' }}" id="agamaAyah" name="agamaAyah" placeholder="Agama" required>
                    @if ($errors->has('agamaAyah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('agamaAyah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="pendidikanTerakhirAyah">Pendidikan terkahir: </label>
                    <input type="text" class="form-control{{ $errors->has('pendidikanTerakhirAyah') ? ' is-invalid' : '' }}" id="pendidikanTerakhirAyah" name="pendidikanTerakhirAyah" placeholder="Pendidikan Terakhir" required>
                    @if ($errors->has('pendidikanTerakhirAyah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('pendidikanTerakhirAyah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="jurusanAyah">Jurusan: </label>
                    <input type="text" class="form-control{{ $errors->has('jurusanAyah') ? ' is-invalid' : '' }}" id="jurusanAyah" name="jurusanAyah" placeholder="Jurusan" required>
                    @if ($errors->has('jurusanAyah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('jurusanAyah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="pekerjaanAyah">Pekerjaan: </label>
                    <input type="text" class="form-control{{ $errors->has('pekerjaanAyah') ? ' is-invalid' : '' }}" id="pekerjaanAyah" name="pekerjaanAyah" placeholder="Pekerjaan" required>
                </div>
                <div class="form-group">
                    <label for="alamatKerjaAyah" >Alamat Kerja: </label>
                    <input type="text" class="form-control{{ $errors->has('alamatKerjaAyah') ? ' is-invalid' : '' }}" id="alamatKerjaAyah" name="alamatKerjaAyah" placeholder="Alamat Kerja" required>
                    @if ($errors->has('alamatKerjaAyah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('alamatKerjaAyah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="teleponKantorAyah">Telepon Kantor: </label>
                    <input type="text" class="form-control{{ $errors->has('teleponKantorAyah') ? ' is-invalid' : '' }}" id="teleponKantorAyah" name="teleponKantorAyah" placeholder="Telepon Kantor" required>
                    @if ($errors->has('teleponKantorAyah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('teleponKantorAyah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="emailAyah">Email: </label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="emailAyah" name="emailAyah" placeholder="Email" required>
                    @if ($errors->has('emailAyah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('emailAyah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="alamatRumahAyah">Alamat Rumah: </label>
                    <input type="text" class="form-control{{ $errors->has('alamatRumahAyah') ? ' is-invalid' : '' }}" id="alamatRumahAyah" name="alamatRumahAyah" placeholder="Alamat Rumah" required>
                    @if ($errors->has('alamatRumahAyah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('alamatRumahAyah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="nomorHpAyah">Nomor Handphone: </label>
                    <input type="text" class="form-control{{ $errors->has('nomorHpAyah') ? ' is-invalid' : '' }}" id="nomorHpAyah" name="nomorHpAyah" placeholder="+628..." required>
                    @if ($errors->has('nomorHpAyah'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nomorHpAyah') }}</strong>
                        </span>
                    @endif
                </div>
                <div class=button-section>
                    <a class="halo btn-primary btn" onclick = "toRegistrasiWali()" href="#">
                        <img src="{{asset('svg/checksign.svg')}}" alt="checksign">
                        Next
                    </a>
                </div>
            </div>
            <div class="registrasi-wali">
                <div class="form-group">
                    <label for=""><u>DATA WALI</u></label>
                </div>
                <div class="form-group">
                    <label for="namaLengkapWali">Nama Lengkap: </label>
                    <input type="text" class="form-control{{ $errors->has('namaLengkapWali') ? ' is-invalid' : '' }}" id="namaLengkapWali" name="namaLengkapWali" placeholder="Nama Lengkap" required>
                    @if ($errors->has('namaLengkapWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('namaLengkapWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="tempatTanggalLahirWali" class="col-sm-10 col-form-label">Tempat tanggal lahir:</label>
                    <div class="col-sm-2">
                        <select class="form-control{{ $errors->has('tempatTanggalLahirWali') ? ' is-invalid' : '' }}" id="tempatTanggalLahirWali" name="tempatTanggalLahirWali" required>
                            <option>1</option>
                            <option>2</option>
                        </select>
                        @if ($errors->has('tempatTanggalLahirWali'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('tempatTanggalLahirWali') }}</strong>
                            </span>
                        @endif
                    </div>
                    <input type="text" class="form-control{{ $errors->has('tempatLahirWali') ? ' is-invalid' : '' }}" id="tempatLahirWali" name="tempatLahirWali" placeholder="" required>
                    @if ($errors->has('tempatLahirWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tempatLahirWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="agamaWali">Agama: </label>
                    <input type="text" class="form-control{{ $errors->has('agamaWali') ? ' is-invalid' : '' }}" id="agamaWali" name="agamaWali" placeholder="Agama" required>
                    @if ($errors->has('agamaWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('agamaWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="pendidikanTerakhirWali">Pendidikan terkahir: </label>
                    <input type="text" class="form-control{{ $errors->has('pendidikanTerakhirWali') ? ' is-invalid' : '' }}" id="pendidikanTerakhirWali" name="pendidikanTerakhirWali" placeholder="Pendidikan Terakhir" required>
                    @if ($errors->has('pendidikanTerakhirWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('pendidikanTerakhirWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="jurusanWali">Jurusan: </label>
                    <input type="text" class="form-control{{ $errors->has('jurusanWali') ? ' is-invalid' : '' }}" id="jurusanWali" name="jurusanWali" placeholder="Jurusan" required>
                    @if ($errors->has('jurusanWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('jurusanWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="pekerjaanWali">Pekerjaan: </label>
                    <input type="text" class="form-control{{ $errors->has('pekerjaanWali') ? ' is-invalid' : '' }}" id="pekerjaanWali" name="pekerjaanWali" placeholder="Pekerjaan" required>
                    @if ($errors->has('pekerjaanWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('pekerjaanWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="alamatKerjaWali">Alamat Kerja: </label>
                    <input type="text" class="form-control{{ $errors->has('alamatKerjaWali') ? ' is-invalid' : '' }}" id="alamatKerjaWali" name="alamatKerjaWali" placeholder="Alamat Kerja" required>
                    @if ($errors->has('alamatKerjaWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('alamatKerjaWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="teleponKantorWali">Telepon Kantor: </label>
                    <input type="text" class="form-control{{ $errors->has('teleponKantorWali') ? ' is-invalid' : '' }}" id="teleponKantorWali" name="teleponKantorWali" placeholder="Telepon Kantor" required>
                    @if ($errors->has('teleponKantorWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('teleponKantorWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="emailWali">Email: </label>
                    <input type="email" class="form-control{{ $errors->has('emailWali') ? ' is-invalid' : '' }}" id="emailWali" name="emailWali" placeholder="Email" required>
                    @if ($errors->has('emailWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('emailWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="alamatRumahWali">Alamat Rumah: </label>
                    <input type="text" class="form-control{{ $errors->has('alamatRumahWali') ? ' is-invalid' : '' }}" id="alamatRumahWali" name="alamatRumahWali" placeholder="Alamat Rumah" required>
                    @if ($errors->has('alamatRumahWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('alamatRumahWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="nomorHpWali">Nomor Handphone: </label>
                    <input type="text" class="form-control{{ $errors->has('nomorHpWali') ? ' is-invalid' : '' }}" id="nomorHpWali" name="nomorHpWali" placeholder="+628..." required>
                    @if ($errors->has('nomorHpWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nomorHpWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class=button-section>
                    <a class="halo btn-primary btn" onclick = "toRegistrasiNonWali()" href="#">
                        <img src="{{asset('svg/checksign.svg')}}" alt="checksign">
                        Next
                    </a>
                </div>
            </div>
            <div class="registrasi-non-wali">
                <div class="form-group">
                    <label for=""><u>ANGGOTA KELUARGA YANG DAPAT DIHUBUNGI SELAIN ORANG TUA DAN WALI</u></label>
                </div>
                <div class="form-group">
                    <label for="namaLengkapNonWali">Nama Lengkap: </label>
                    <input type="text" class="form-control{{ $errors->has('namaLengkapNonWali') ? ' is-invalid' : '' }}" id="namaLengkapNonWali" name="namaLengkapNonWali" placeholder="Nama Lengkap" required>
                    @if ($errors->has('namaLengkapNonWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('namaLengkapNonWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="teleponRumahNonWali">Telepon Rumah: </label>
                    <input type="text" class="form-control{{ $errors->has('teleponRumahNonWali') ? ' is-invalid' : '' }}" id="teleponRumahNonWali" name="teleponRumahNonWali" placeholder="Telepon Rumah" required>
                    @if ($errors->has('teleponRumahNonWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('teleponRumahNonWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="nomorHpNonWali">Nomor Handphone: </label>
                    <input type="text" class="form-control{{ $errors->has('nomorHpNonWali') ? ' is-invalid' : '' }}" id="nomorHpNonWali" name="nomorHpNonWali" placeholder="+628..." required>
                    @if ($errors->has('nomorHpNonWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nomorHpNonWali') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="emailNonWali">Email: </label>
                    <input type="email" class="form-control{{ $errors->has('emailNonWali') ? ' is-invalid' : '' }}" id="emailNonWali" name="emailNonWali" placeholder="Email" required>
                    @if ($errors->has('emailNonWali'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('emailNonWali') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id = "final-button">
                <img src="{{asset('svg/checksign.svg')}}" alt="checksign">
                Save
            </button>
        </form>
        <p class="bottom-auth">Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </p>
    </div>
@endsection

@section('extra-js')
    <script>
        function toRegistrasiAnakFirst(){
            // disappear
            var listErase = new Array();
            var pictureLogo = (document.getElementsByClassName("picture-logo"))[0];
            var title = (document.getElementsByClassName("title"))[0];
            var signIn = (document.getElementsByClassName("sign-in"))[0];
            var register = (document.getElementsByClassName("register"))[0];
            var auth = (document.getElementsByClassName("bottom-auth"))[0];
            listErase.push(pictureLogo);
            listErase.push(title);
            listErase.push(signIn);
            listErase.push(register);
            listErase.push(auth);
            for (let i of listErase){
                i.style.display = "none";
                i.style.tranform = "scale(0,0)";
                i.style.height = "0";
            }

            //appear
            var registerAnak = (document.getElementsByClassName("register-anak"))[0];
            var registrasiAnakFirst = (document.getElementsByClassName("registrasi-anak-first"))[0];
            registerAnak.style.transform = "scale(1,1)";
            registerAnak.style.height = "100%";
            registrasiAnakFirst.style.transform = "scale(1,1)";
            registrasiAnakFirst.style.height = "100%";
        }

        function toRegistrasiAnakSecond(){
            //disappear
            var registrasiAnakFirst = (document.getElementsByClassName("registrasi-anak-first"))[0];
            registrasiAnakFirst.style.display = "none";
            registrasiAnakFirst.style.transform = "scale(0,0)";
            registrasiAnakFirst.style.height = "0";

            //appear
            var registrasiAnakSecond = (document.getElementsByClassName("registrasi-anak-second"))[0];
            registrasiAnakSecond.style.transform = "scale(1,1)";
            registrasiAnakSecond.style.height = "100%";
        }

        function toRegistrasiIbu(){
            //disappear
            var registrasiAnakSecond = (document.getElementsByClassName("registrasi-anak-second"))[0];
            registrasiAnakSecond.style.display = "none";
            registrasiAnakSecond.style.transform = "scale(0,0)";
            registrasiAnakSecond.style.height = "0";


            //appear
            var registrasiIbu = (document.getElementsByClassName("registrasi-ibu"))[0];
            registrasiIbu.style.transform = "scale(1,1)";
            registrasiIbu.style.height = "100%";
        }

        function toRegistrasiAyah(){
            //disappear
            var registrasiIbu = (document.getElementsByClassName("registrasi-ibu"))[0];
            registrasiIbu.style.display = "none";
            registrasiIbu.style.transform = "scale(0,0)";
            registrasiIbu.style.height = "0";

            //appear
            var registrasiAyah = (document.getElementsByClassName("registrasi-ayah"))[0];
            registrasiAyah.style.transform = "scale(1,1)";
            registrasiAyah.style.height = "100%";
        }

        function toRegistrasiWali(){
            //disappear
            var registrasiAyah = (document.getElementsByClassName("registrasi-ayah"))[0];
            registrasiAyah.style.display = "none";
            registrasiAyah.style.transform = "scale(0,0)";
            registrasiAyah.style.height = "0";


            //appear
            var registrasiWali = (document.getElementsByClassName("registrasi-wali"))[0];
            registrasiWali.style.transform = "scale(1,1)";
            registrasiWali.style.height = "100%";
        }

        function toRegistrasiNonWali(){
            //disappear
            var registrasiWali = (document.getElementsByClassName("registrasi-wali"))[0];
            registrasiWali.style.display = "none";
            registrasiWali.style.transform = "scale(0,0)";
            registrasiWali.style.height = "0";


            //appear
            var registrasiNonWali = (document.getElementsByClassName("registrasi-non-wali"))[0];
            registrasiNonWali.style.transform = "scale(1,1)";
            registrasiNonWali.style.height = "100%";

            //button
            var finalButton = document.getElementById("final-button");
            finalButton.style.display = "block";
        }
    </script>
@endsection
