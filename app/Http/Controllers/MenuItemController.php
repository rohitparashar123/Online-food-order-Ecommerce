<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuItem;

class MenuItemController extends Controller
{
    public function create()
    {
       return view('admin.menuitem.addmenuitem');
    }
    public function insertMenuItem(Request $a){

        $a->validate([
                    'name'=>'required', 
                    'status'=>'required',
                    'link'=>'required',
                ]);

       
        $data = new MenuItem;
        $data->name=$a->name;
        $data->status=$a->status;
        $data->link=$a->link;
        $data->save();

        if ($data) {
        return redirect('admin/menu-item')->with('record_added','Item Inserted Successfully');
        }

        }
}
