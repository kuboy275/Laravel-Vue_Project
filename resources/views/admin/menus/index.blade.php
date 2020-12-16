  @extends('layouts.admin')

  @section('title')

    <title> Trang Chu </title>

  @endsection

  @section('content')
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
             @include('partials.content-header',['name' =>'menus' , 'key'=>'List'])
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-right">
                  <a href="{{ route('menus.create') }}" class="btn btn-success my-2">Add</a>
                </div>

                <div class="col-lg-12">
                  <table class="table table-striped">
                  <thead>

                    <tr>
                      <th>Id</th>
                      <th>Tên Menu</th>
                      <th>Action</th>
                    </tr>

                  </thead>
                  <tbody>
                      <?php $stt=1; ?>
                  @foreach($menus  as $menu)

                    <tr  >
                      <td style="vertical-align: inherit;" >{{  $stt }}</td>
                      <td style="vertical-align: inherit;" >{{$menu->name}}</td>
                      <td style="vertical-align: inherit">
                        <a href="{{ route('menus.edit' , ['id'=> $menu->id ]) }}" class="btn btn-info">Sửa </a>
                        <a href="{{ route('menus.delete' ,['id' =>$menu->id]) }}"
                           data-url="{{ route('menus.delete' ,['id' =>$menu->id]) }}"
                           class="btn btn-danger action_delete">Xóa</a>
                      </td>
                    </tr>
                      <?php $stt++ ; ?>
                  @endforeach 

                  </tbody>
                  </table>
                </div>

                  {{ $menus ?? ''->links() }} 

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