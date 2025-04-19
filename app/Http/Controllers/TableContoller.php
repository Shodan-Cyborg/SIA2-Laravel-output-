<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Response;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class TableContoller extends Controller
{
    public function DisplayPage()
    {
        $moderate = DB::table('transaction AS t')
            ->select('t.*', 'u.name AS user_name', 'u.role AS user_role', 'p.product_name', 's.service_name')
            ->join('users AS u', 'u.id', '=', 't.user_id')
            ->leftJoin('products AS p', 'p.user_id', '=', 't.user_id')
            ->leftJoin('services AS s', 's.user_id', '=', 't.user_id')
            ->get();

        return view('tableView.tableView', compact('moderate'));

    }

    public function displayData(){
        $moderate = DB::table('transaction AS t')
            ->select('t.*', 'u.name AS user_name', 'u.role AS user_role', 'p.product_name', 's.service_name')
            ->join('users AS u', 'u.id', '=', 't.user_id')
            ->leftJoin('products AS p', 'p.user_id', '=', 't.user_id')
            ->leftJoin('services AS s', 's.user_id', '=', 't.user_id')
            ->get();

        return response()->json(['success' => true, 'moderate' => $moderate], 200);
    }


    //This block of code functions below are for ajax, axios testing
    public function getTransactionRecord() {
        $moderate = DB::table('transaction AS t')
            ->select('t.*', 'u.name AS user_name', 'u.role AS user_role', 'p.product_name', 's.service_name')
            ->join('users AS u', 'u.id', '=', 't.user_id')
            ->leftJoin('products AS p', 'p.user_id', '=', 't.user_id')
            ->leftJoin('services AS s', 's.user_id', '=', 't.user_id')
            ->get();

        return response()->json(["success" => true, "moderate" => $moderate], 200);
    }

    // Controller Method
    /* public function getTransactions()
    {
        $moderate = DB::table('transaction AS t')
            ->select('t.*', 'u.name AS user_name', 'u.role AS user_role', 'p.product_name', 's.service_name')
            ->join('users AS u', 'u.id', '=', 't.user_id')
            ->leftJoin('products AS p', 'p.user_id', '=', 't.user_id')
            ->leftJoin('services AS s', 's.user_id', '=', 't.user_id')
            ->get();

        return view('tableView.tableView', compact('moderate'));
    } */
}
