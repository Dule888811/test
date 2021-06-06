<?php


namespace App\Repositories;


use App\Lists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ListRepositories implements ListRepositoriesInterface
{
   public function all()
   {
      $lists = Lists::all();
      return $lists;
   }

    public function findById($id)
    {
        $list = DB::table('lists')->select('*')->where('list_id',$id);

        return $list;
    }

    public function destroy($id)
    {
        $list = $this->findById($id);
        $list->delete();
    }

    public function store(Request $request)
    {
       $list = new Lists();
       $list->list_id = $request->list_id;
        $list->list_name = $request->list_name;
        $list->list_name_encoded = $request->list_name_encoded;
        $list->display_name = $request->display_name;
        $list->updated = $request->updated;
        $list->list_image = $request->list_image;
        $list->list_image_width = $request->list_image_width;
        $list->list_image_height = $request->list_image_height;
        $list->save();
    }

    public function update($id,Request $request)
    {
        DB::table('lists')
            ->where('list_id',  $id)
            ->update(['list_name' =>$request->list_name,
              'list_name_encoded' =>  $request->list_name_encoded,'display_name' => $request->display_name,
            'updated' => $request->updated ,'list_image' => $request->list_image,'list_image_width' => $request->list_image_width,
            'list_image_height' => $request->list_image_height]);

    }
}
