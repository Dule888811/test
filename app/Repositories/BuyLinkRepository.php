<?php


namespace App\Repositories;


use App\Buy_links;
use Illuminate\Http\Request;

class BuyLinkRepository implements BuyLinkRepositoryInterface
{


    public function findById($id)
    {
        $Buy_links = Buy_links::findOrFail($id);
        return $Buy_links;
    }

    public function destroy($id)
    {
        $Buy_links = $this->findById($id);
        $Buy_links->delete();
    }

    public function store(Request $request)
    {
        $buy_link = new Buy_links();
        $buy_link->name = $request->name;
        $buy_link->url = $request->url;
        $buy_link->book_id = $request->book_id;
        $buy_link->save();
    }

    public function update($id, Request $request)
    {
        $buy_link = $this->findById($id);
        $buy_link->name = $request->name;
        $buy_link->url = $request->url;
        $buy_link->update();
    }
}
