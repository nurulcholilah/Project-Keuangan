@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Data Keuangan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="{{ route('keuangan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" required>
                @error('tanggal')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" required>
                @error('keterangan')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Pemasukan</label>
                    <input type="text" class="form-control @error('pemasukan') is-invalid @enderror" name="pemasukan" id="pemasukan" required>
                @error('pemasukan')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Pengeluaran</label>
                    <input type="text" class="form-control @error('pengeluaran') is-invalid @enderror" name="pengeluaran" id="pengeluaran" required>
                @error('pengeluaran')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Saldo</label>
                    <input type="text" class="form-control @error('saldo') is-invalid @enderror" name="saldo" id="saldo" required>
                @error('saldo')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
                </div>
        </div>
       
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
            </div>
        </div>
</div>
@endsection
