<?php

namespace App\Repositories;
use App\Models\Category;

abstract  class CategoryRepository{
    private $category;
 
    
    public function __construct(Category $category){
        $this->category = $category;
    }

    public function getIndexByName(){
       return $this->category->orderBy('name','asc')->get();
    }

}
