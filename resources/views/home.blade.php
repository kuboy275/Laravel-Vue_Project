  @extends('layouts.admin')

  @section('title')

    <title> Trang Chu </title>

  @endsection

  @section('content')
      <div class="content-wrapper">
         @include('partials.content-header',['name' =>'Home' , 'key'=>''])
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <h2> Chào mừng <a href="#"> {{ $users }} </a> đến với trang admin</h2>
                <h2> <a href="/"> Chuyển đến giao diện template vue</a> </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
  @endsection

  @section('js')
  @endsection