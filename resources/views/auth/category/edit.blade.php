@extends('auth/layout/app-layout')
@section('title', 'Edit Category')
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
                <form action="{{ route('update_category', ['id' => $category->id]) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" name="nama" class="form-control" id="nama_kategori"
                            value="{{ $category->nama }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update data</button>
                </form>
            </div>
        </div>
    </section>



@endsection
