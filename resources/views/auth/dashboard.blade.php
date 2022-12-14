@extends('auth/layout/app-layout')
@section('title', 'Dashboard')
@section('main')

    <section id="quick-box">
        <div class="row">
            <div class="col-md-4">
                <div class="card m-2 bg-info">
                    <div class="card-body text-white">
                        <h3>Category <i class="fa fa-archive float-end"></i></h3>
                        <span>{{ $t_category }} Total</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-2 bg-success">
                    <div class="card-body text-white">
                        <h3>Products <i class="fa fa-archive float-end"></i></h3>
                        <span>{{ $t_product }} Total</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-2 bg-warning">
                    <div class="card-body">
                        <h3>Users <i class="fa fa-archive float-end"></i></h3>
                        <span>{{ $user }} Total</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tables">
        <div class="card my-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Images</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $key => $item)
                                <tr>
                                    <th scope="row">{{ $product->firstItem() + $key }}</th>
                                    <td><img style="width: 200px; height:200px;"
                                            src="{{ asset('storage/img/product/' . $item->images) }}">
                                    </td>
                                    <td>{{ $item->nama }}</td>
                                    @foreach ($category as $item_category)
                                        @if ($item_category->id == $item->id_category)
                                            <td>{{ $item_category->nama }}</td>
                                        @endif
                                    @endforeach
                                    <td>
                                        @if ($item->status == '1')
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-danger">Tidak Aktif</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('edit_product', ['id' => $item->id]) }}"
                                            class="btn btn-info">Edit</a>
                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal-{{ $item->id }}">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $product->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </section>



@endsection
