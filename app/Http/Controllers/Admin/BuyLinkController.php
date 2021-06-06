<?php


namespace App\Http\Controllers\Admin;


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

     public function index()
     {
         $buy_links = $this->_buyLinkRepository->all();
         return view('admin.buyLinks.index')->with('buy_links',$buy_links);
     }
}
