<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubMenuItem;
use App\MenuItem;
use DB;


class SubMenuItemController extends Controller
{
     public function create()
    {
       $menuItem = MenuItem::where('status','Enabled')->get(); 
        
       return view('admin.submenuitem.addsubmenuitem',compact('menuItem'));
    }
    public function insertMenuItem(Request $a){

        $a->validate([
                    'name'=>'required', 
                    'status'=>'required',
                    'link'=>'required',
                ]);

       
        $data = new SubMenuItem;
        $data->name=$a->name;
        $data->menu_item_id=$a->menu_item_id;
        $data->status=$a->status;
        $data->link=$a->link;
        $data->save();

        if ($data) {
        return redirect('admin/sub-menu-item')->with('record_added','Sub-Menu Inserted Successfully');
        }

        } 

}
