  @extends('layouts.admin')

  @section('title')

    <title> Trang Chu </title>

  @endsection

  @section('content')
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
             @include('partials.content-header',['name' =>'category' , 'key'=>'List'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-right">
                  @can('category-add')
                    <a href="{{route('categories.create')}}" class="btn btn-success my-2">Add</a>
                  @endcan
                </div>

                <div class="col-lg-12">
                  <table class="table table-striped">
                  <thead>

                    <tr>
                      <th>Id</th>
                      <th>Tên Danh Mục</th>
                      <th>Action</th>
                    </tr>

                  </thead>
                  <tbody>
                <?php $stt=1; ?>
                  @foreach($categories as $category)

                    <tr  >
                      <td style="vertical-align: inherit;" >{{$stt}}</td>
                     
                      <td style="vertical-align: inherit;" >
                         {{$category->parent_id == 0 ? $category->name : '--'.$category->name }}
                      </td>
                      <td style="vertical-align: inherit">

                        @can('category-edit')
                          <a href="{{ route('categories.edit' , $category->id ) }}" class="btn btn-info">Sửa </a>
                        @endcan

                        @can('category-delete')
                          <a href="{{ route('categories.delete' ,$category->id ) }}"
                            data-url="{{route('categories.delete',['id'=>$category->id])}}"
                            class="btn btn-danger action_delete">  Xóa</a>
                        @endcan

                      </td>
                    </tr>
                <?php $stt++ ; ?>
                    
                  @endforeach

                  </tbody>
                  </table>
                </div>

                  {{ $categories->links() }}

            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
  
  @endsection

  @section('js')
        <script src="{{ asset('admins/product/index/list.js') }}"></script>
        <script src="{{ asset('vendors\sweetalert2\sweetalert2@10.js') }}"></script>
  @endsection