<?php

namespace App\Components;
use App\Models\Permission;

class PermissionRecusive {

    public function __construct(){
        $this->html = " ";
    }
    
    public function PermissionRecusiveAdd($parentId = 0 , $subMark = '') {
        $data = Permission::where('parent_id', $parentId)->get();
        foreach ($data as $dataItem){
            $this->html .= 
                '<option value=" '
                    . $dataItem->id .' ">' 
                    . $subMark 
                    .$dataItem->name . 
                '</option>';
                
            $this->PermissionRecusiveAdd($dataItem->id , $subMark .'--');
        }
        return $this->html;
    }

}