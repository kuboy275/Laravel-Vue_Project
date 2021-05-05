  @extends('layouts.admin')

  @section('title')

    <title> Trang Chu </title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  @endsection

  @section('content')
      <div class="content-wrapper" >
         @include('partials.content-header',['name' =>'Home Dashboard' , 'key'=>''])
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 mb-3">
          
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3> {{ $orders }} </h3>
    
                    <p>New Orders</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href=" {{ route('order.index') }} " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3> {{ $categories }} </h3>
    
                    <p>Categories</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href=" {{ route('categories.index') }} " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3> {{ $users }} </h3>
    
                    <p>User Registrations</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>

                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3> {{ $products }} </h3>
    
                    <p>Products</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href=" {{ route('product.index') }} " class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
            {{--  --}}
            <div class="row mt-5">
              <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box bg-gradient-info">
                  <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">social networks</span>
                    <span class="info-box-number"> {{ $links }} </span>
    
                    <div class="progress" style="height: 5px">
                      <div class="progress-bar" style="width: {{ $links }} %"></div>
                    </div>
                
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box bg-gradient-success">
                  <span class="info-box-icon"><i class="fas fa-blog"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">Blogs</span>
                    <span class="info-box-number"> {{ $blogs }} </span>
    
                    <div class="progress" style="height: 5px">
                      <div class="progress-bar" style="width: {{ $blogs +10}}% "></div>
                    </div>
                
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-md-4 col-sm-6 col-12">
                <div class="info-box bg-gradient-danger">
                  <span class="info-box-icon"><i class="fas fa-comments"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">Comments</span>
                    <span class="info-box-number"> {{ $comments }} </span>
    
                    <div class="progress" style="height: 5px">
                      <div class="progress-bar" style="width: {{ $comments + 10 }}%"></div>
                    </div>
                
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
          </div>
        </div>
      </div>
  @endsection

  @section('js')
  @endsection