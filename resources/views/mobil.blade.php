@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pencatatan Mobil</div>
                <div class="card-body">
                    <a href="{{ route('mobil.create') }}" class="btn btn-primary">Tambah Mobil</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mobil</th>
                                <th>Jenis Mobil</th>
                                <th>Tanggal Masuk</th>
                                <th>Status Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mobil as $mobilItem)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mobilItem->nama_mobil }}</td>
                                <td>{{ $mobilItem->jenis_mobil }}</td>
                                <td>{{ $mobilItem->tanggal_masuk }}</td>
                                <td>{{ $mobilItem->status_pembayaran }}</td>
                                <td>
                                    <a href="{{ route('mobil.edit', $mobilItem->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="{{ route('mobil.destroy', $mobilItem->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection