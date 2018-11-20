<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Datatables;

class MyDatatablesController extends Controller
{
    public function index()
    {
        return view('pqrs.index');
    }

    public function getData()
    {
        return Datatables::of(Pqrs::query())->make(true);
    }
}
