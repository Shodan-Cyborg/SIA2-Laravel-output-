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
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;">Transaction No.</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;">User No.</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;">Product No.</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;">Service No.</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;">Transaction <br>Date</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;">Customer's<br>Payment</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;">Name of <br>User</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;">User Role</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;">Product <br>Name</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;">Service <br>Rendered</th>
                                            <th style="font-weight: 800; font-size: 18px; font-family: 'Segoe UI', sans-serif;">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ( $moderate as $transact)
                                        <tr>
                                            <td><strong>{{ $transact->id}}</strong></td>
                                            <td><strong>{{ $transact->user_id}}</strong></td>
                                            <td><strong>{{ $transact->product_id}}</strong></td>
                                            <td><strong>{{ $transact->service_id}}</strong></td>
                                            <td><strong>{{ $transact->transaction_date}}</strong></td>
                                            <td><strong>{{ $transact->payment}}</strong></td>
                                            <td><strong>{{ $transact->user_name}}</strong></td>
                                            <td><strong>{{ $transact->user_role}}</strong></td>
                                            <td><strong>{{ $transact->product_name}}</strong></td>
                                            <td><strong>{{ $transact->service_name}}</strong></td>
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

