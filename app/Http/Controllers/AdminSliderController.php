<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\StorageImageTrait;
use App\Traits\DeleteModelTrait;
use App\Models\Slider;
use App\Http\Requests\SliderRequest;


class AdminSliderController extends Controller
{
    use StorageImageTrait , DeleteModelTrait;
    private $slider;
    public function __construct(Slider $slider){
        $this->slider = $slider;
    }

    public function index(){
        $sliders = $this->slider->latest()->paginate(5);
        return view('admin.slider.index', compact('sliders'));
    }

    public function create(){
        return view('admin.slider.add');
    }

    public function store(SliderRequest $request){

        $dataInsert = [
            'name' => $request->name,
            'description' => $request->description,
        ];
 

        $dataImageSlider = $this->storageTraitUpload($request,'image_path', 'slider');
        if(  !empty($dataImageSlider)) {
            $dataInsert['image_name'] = $dataImageSlider['file_name'];
            $dataInsert['image_path'] = $dataImageSlider['file_path']; 
        }

        $this->slider->create($dataInsert);
        return redirect()->route('slider.index');
    }

    public function edit($id){
        $slider = $this->slider->find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request , $id){
        
        $dataUpdate = [
            'name' => $request->name,
            'description' => $request->description,
        ];
 

        $dataImageSlider = $this->storageTraitUpload($request,'image_path', 'slider');
        if(  !empty($dataImageSlider)) {
            $dataUpdate['image_name'] = $dataImageSlider['file_name'];
            $dataUpdate['image_path'] = $dataImageSlider['file_path']; 
        }

        $this->slider->find($id)->update($dataUpdate);
        return redirect()->route('slider.index');
    }

    public function delete($id){
        return $this->deleteModelTrait($id,$this->slider);
    }

}
