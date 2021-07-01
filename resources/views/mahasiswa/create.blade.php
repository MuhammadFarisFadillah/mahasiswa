@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>
                <div class="card-body">
                
                    <form action="{{ route('simpan.mahasiswa') }}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" name="npm" class="form-control col-md-9" placeholder="Masukkan NPM">
                        </div>

                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" name="nama_mahasiswa" class="form-control col-md-9" placeholder="Masukkan Nama Mahasiswa">
                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control col-md-9" placeholder="Masukkan Jenis Kelamin">
                        </div>

                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" name="telepon" class="form-control col-md-9" placeholder="Masukkan Nomor Telp">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control col-md-9" placeholder="Masukkan Alamat">
                        </div>



                        <td>
                            <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
                            <a href="{{ route('mahasiswa') }}" class="btn btn-sm btn-danger">CANCEL</a>
                        </td><br><br>
                        </tr>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection