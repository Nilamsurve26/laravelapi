<?php

namespace App\Http\Controllers;
use App\Models\Device;

use Illuminate\Http\Request;

class apicontroller extends Controller
{
    public function getData(){
        return ["name"=>"nilam","age"=>"90"];
    }
    public function list(){
         return Device::all();
    }
    public function add(Request $req){
        $devices=new Device;

        
        $devices->name=$req->name;
        $devices->age=$req->age;
        $result=$devices->save();
        if($result){
        return ["result"=>"data has been saved"];
        }
        else{
            return["result"=>"opretion failed"];
        }
    }
    public function update(Request $req){
         $devices=Device::find($req->id);
         $devices->name=$req->name;
         $devices->age=$req->age;
         $result=$devices->save();
         if($result){
     return ["result"=>"data has been update"];
         }
         else{
            return["result"=>"opretion failed"];
         }



    }
    public function delete($id){
       $devices= Device::find($id)->delete();
        return ["Result"=>"data has been deleted successfully",$id];
    }
}
