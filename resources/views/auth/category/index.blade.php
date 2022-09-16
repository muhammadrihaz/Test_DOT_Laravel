@extends('auth/layout/app-layout')
@section('title', 'Category')
@section('main')

    <section id="tables">
        <div class="card my-4">
            <div class="card-body">
                <a href="{{ route('create_category') }}" class="btn btn-primary mb-3"> <i class="fa fa-plus"></i> Tambah</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $key => $item)
                                <tr>
                                    <th scope="row">{{ $category->firstItem() + $key }}</th>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('edit_category', ['id' => $item->id]) }}"
                                            class="btn btn-info">Edit</a>
                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal-{{ $item->id }}">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $category->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </section>
    @foreach ($category as $item)
        <!-- Modal -->
        <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Kamu yakin ingin menghapus kategori <b>{{ $item->nama }}</b> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{ route('delete_category', ['id' => $item->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Yakin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
