@extends('auth/layout/app-layout')
@section('title', 'Tambah Produk')
@section('main')

    <section id="form-create">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('store_product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Produk</label>
                        <input type="text" name="nama" class="form-control" id="nama"
                            aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_kategori" class="form-label">Kategori</label>
                        <select class="form-select" id="id_kategori" name="id_category" aria-label="Default select example">
                            <option value="" selected disabled>Open this select menu</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Images</label>
                        <input class="form-control" name="images" type="file" id="formFile" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>
        </div>
    </section>



@endsection
