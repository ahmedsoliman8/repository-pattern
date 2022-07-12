<?php

namespace App\Repositories\Eloquent;

use App\Models\Address;
use App\Repositories\Contracts\AddressRepository;
use App\Repositories\RepositoryAbstract;

class  EloquentAddressRepository extends RepositoryAbstract implements AddressRepository
{
    public function entity()
    {
        return Address::class;
    }


}
