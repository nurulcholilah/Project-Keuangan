@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Keuangan</h3>
                        <a href="{{ route('keuangan.create') }}" type="button" class="btn btn-success" style="float: right">Tambah
                            Data Keuangan</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Pemasukan</th>
                                    <th>Pengeluaran</th>
                                    <th>Saldo</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                      <td>{{ $no++ }}</td>
                                      <td>{{ $item->tanggal }}</td>
                                      <td>{{ $item->keterangan }}</td>
                                      <td>@currency($item->pemasukan)</td>
                                      <td>@currency($item->pengeluaran)</td>
                                      <td>@currency($item->saldo)</td>
                                      <td>
                                        <form action="{{ route('keuangan.destroy', $item->id) }}" method="post"
                                                    style="display:inline">
                                                    <a href="{{ route('keuangan.edit', $item->id) }}"
                                                        class="btn btn-sm btn-warning">EDIT</a>
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Yakin ingin menghapus data ? Data tidak dapat dipulihkan')">DELETE</button>
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                      </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection