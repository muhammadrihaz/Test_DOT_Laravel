@extends('auth/layout/app-layout')
@section('title', 'Dashboard')
@section('main')

    <section id="quick-box">
        <div class="row">
            <div class="col-md-4">
                <div class="card m-2 bg-info">
                    <div class="card-body text-white">
                        <h3>Category <i class="fa fa-archive float-end"></i></h3>
                        <span>5 Total</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-2 bg-success">
                    <div class="card-body text-white">
                        <h3>Products <i class="fa fa-archive float-end"></i></h3>
                        <span>5 Total</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-2 bg-warning">
                    <div class="card-body">
                        <h3>Category <i class="fa fa-archive float-end"></i></h3>
                        <span>5 Total</span>
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
                                <th scope="col">ID Produk</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Kategori Produk</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>



@endsection
