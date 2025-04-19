@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div>
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div >
                                <table class="table table-striped align-items-center w-100 no wrap">
                                    <thead style="background-color: #f8f9fa;">
                                        <tr>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif; align-self: center;">Transaction No.</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif; align-self: center;">User No.</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif; align-self: center;">Product No.</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif; align-self: center;">Service No.</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif; align-self: center;">Transaction <br>Date</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif; align-self: center;">Customer's<br>Payment</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif; align-self: center;">Name of <br>User</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif; align-self: center;">User Role</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif; align-self: center;">Product <br>Name</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif; align-self: center;">Service <br>Rendered</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif; align-self: center;">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ( $moderate as $transact)
                                        <tr>
                                            <td><strong><center>{{ $transact->id}}</center></strong></td>
                                            <td><strong><center>{{ $transact->user_id}}</center></strong></td>
                                            <td><strong><center>{{ $transact->product_id}}</center></strong></td>
                                            <td><strong><center>{{ $transact->service_id}}</center></strong></td>
                                            <td><strong><center>{{ $transact->transaction_date}}</center></strong></td>
                                            <td><strong><center>{{ $transact->payment}}</center></strong></td>
                                            <td><strong><center>{{ $transact->user_name}}</center></strong></td>
                                            <td><strong><center>{{ $transact->user_role}}</center></strong></td>
                                            <td><strong><center>{{ $transact->product_name}}</center></strong></td>
                                            <td><strong><center>{{ $transact->service_name}}</center></strong></td>
                                            <td>
                                                <a href="#" style="background-color: blue; color: white; text-decoration: none; padding: 8px 14px; border-radius: 5px; display: inline-block;">Edit</a>
                                                <a href="#" style="background-color: red; color: white; text-decoration: none; padding: 8px 14px; border-radius: 5px; display: inline-block;">Remove</a>

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

