<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface ListRepositoriesInterface
{
    public function all();
    public function findById($id);
    public function destroy($list_id);
    public function store(Request $request);
    public function update($id,Request $request);
}
