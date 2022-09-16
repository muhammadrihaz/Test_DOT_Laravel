@extends('auth/layout/app-layout')
@section('title', 'Tambah Category')
@section('main')

    <section id="form-create">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('store_category') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" name="nama" class="form-control" id="nama_kategori"
                            aria-describedby="emailHelp" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>
        </div>
    </section>



@endsection
