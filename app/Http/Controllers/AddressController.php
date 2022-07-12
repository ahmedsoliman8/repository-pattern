<?php

namespace App\Http\Controllers;
use App\Repositories\Contracts\AddressRepository;
class AddressController extends Controller
{
    public function index(AddressRepository $addresses)
    {
        dd($addresses);
    }
}
