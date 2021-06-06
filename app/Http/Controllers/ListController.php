<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Lists;
use App\Repositories\ListRepositories;
use App\Repositories\ListRepositoriesInterface;
use Illuminate\Http\Request;

class ListController extends Controller
{
   private $_listRepositories;

   public function __construct(ListRepositoriesInterface $listRepositories)
   {
       $this->_listRepositories  = $listRepositories;
   }

   public function index()
   {
       $lists = $this->_listRepositories->all();
       return view('user.lists.index')->with('lists',$lists);
   }

   public function destroy($id)
   {
       $this->_listRepositories->destroy($id);
       return redirect()->back();
   }

   public function create()
   {
       return view('user.lists.create');
   }

   public function store(Request $request)
   {
       $request->validate([
           'list_id' => 'required|integer|unique:lists',
           'list_name' => 'required|string',
           'list_name_encoded' => 'required|string',
           'display_name' =>  'required|string',
           'updated' => 'required|string',
           'list_image' => 'nullable|url',
           'list_image_width' => 'nullable|integer',
           'list_image_height' => 'nullable|integer',
       ]);
       $this->_listRepositories->store($request);
       return redirect()->back();
   }

    public function edit($id)
    {

        $list = $this->_listRepositories->findById($id)->get();
        return view('user.lists.edit')->with('list',$list);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'list_name' => 'required|string',
            'list_name_encoded' => 'required|string',
            'display_name' =>  'required|string',
            'updated' => 'required|string',
            'list_image' => 'nullable|url',
            'list_image_width' => 'nullable|integer',
            'list_image_height' => 'nullable|integer',
        ]);
        $this->_listRepositories->update($id,$request);
        return redirect()->back();
    }

    public function show($id)
    {
        $list = $this->_listRepositories->findById($id)->get();
        return view('user.lists.show')->with('list',$list);
    }
}
