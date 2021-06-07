<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface BuyLinkRepositoryInterface
{

    public function findById($id);
    public function destroy($id);
    public function store(Request $request);
    public function update($id, Request $request);
}
