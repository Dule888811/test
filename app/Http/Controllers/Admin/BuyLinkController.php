<?php


namespace App\Http\Controllers\Admin;

use App\Book;
use Illuminate\Support\Facades\Validator;
use App\Buy_links;
use App\Http\Controllers\Controller;
use App\Repositories\BuyLinkRepository;
use App\Repositories\BuyLinkRepositoryInterface;
use Illuminate\Http\Request;
class BuyLinkController extends  Controller
{
    private $_buyLinkRepository;

    public function __construct(BuyLinkRepositoryInterface $buyLinkRepository)
     {
         $this->_buyLinkRepository = $buyLinkRepository;
     }



    public function destroy($id)
    {
        $this->_buyLinkRepository->destroy($id);
        return redirect()->back();
    }

    public function show($id)
    {
        $buy_link = $this->_buyLinkRepository->findById($id);
        return view('admin.buyLinks.show')->with('buy_links',$buy_link);
    }

    public function create()
    {
        $books = Book::all();
        return view('admin.buyLinks.create')->with('books',$books);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'url' => 'required|url',
        ]);
        $this->_buyLinkRepository->store($request);
        return redirect()->back();
    }

    public function edit($id)
    {
        $buy_link = $this->_buyLinkRepository->findById($id);
        return view('admin.buyLinks.edit')->with('buy_link',$buy_link);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'url' => 'required|url',
        ]);
       $this->_buyLinkRepository->update($id,$request);
        return redirect()->back();
    }
}
