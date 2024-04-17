@extends('layout.dashboard')
@section('title', 'Produk')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Produk List</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Users Table</h4>
                    <div class="card-header-form">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> New
                                    Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Foto</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                            
                                <tr>
                                    <td><img src="assets/image/" alt="" srcset="" width="100px"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    
                                    <td>
                                        <form method="post" action="">
                                            <a href="" class="btn btn-primary">Edit</a>
                                            <button type="button" class="btn btn-primary" onclick="tampilkanFormEdit()">Edit Stok</button>
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                           
                                        </form>
                                    </td>
                                </tr>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

@endsection
