@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div>
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-12 mb-3">
                                @include('modal.add-product')
                                <button type="button" class="btn btn-success btnAddProducts">
                                    + Add Product
                                </button>
                                {{-- @include('modal.add-product') --}}
                            </div>
                            <div >
                                <table class="table table-striped align-items-center w-100 no wrap">
                                    <thead style="background-color: #f8f9fa;">
                                        <tr>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;"><center>Product No.</center></th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;"><center>User No.</center></th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;"><center>Product Name</center></th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;"><center>Product Price</center></th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;"><center>Product Quantity</center></th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;"><center>Sales Volume</center></th>

                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;"><center>Actions</center></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ( $product_management as $prod)
                                        <tr>
                                            <td><strong><center>{{ $prod->id}}</center></strong></td>
                                            <td><strong><center>{{ $prod->user_id}}</center></strong></td>
                                            <td><strong><center>{{ $prod->product_name}}</center></strong></td>
                                            <td><strong><center>{{ $prod->product_price}}</center></strong></td>
                                            <td><strong><center>{{ $prod->product_quantity}}</center></strong></td>
                                            <td><strong><center>{{ $prod->sales_volume}}</center></strong></td>
                                            <td>
                                                <a href="#" style="background-color: green; color: white; text-decoration: none; padding: 7px 14px; border-radius: 5px; display: inline-block;">View</a>
                                                <a href="#" style="background-color: blue; color: white; text-decoration: none; padding: 7px 14%; border-radius: 5px; display: inline-block;">Edit</a>
                                                <a href="#" style="background-color: red; color: white; text-decoration: none; padding: 7px 14%; border-radius: 5px; display: inline-block;">Remove</a>

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
        </div>
    </div>
    @include('layouts.footers.auth.footer')
    </div>
@endsection

