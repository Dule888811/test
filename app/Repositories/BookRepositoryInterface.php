<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface BookRepositoryInterface
{
    public function all();

    public function findById($id);

    public function destroy($id);

    public function store(Request $request);

    public function update($id, Request $request);
}
