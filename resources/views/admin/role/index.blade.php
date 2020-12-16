@extends('layouts.admin')

@section('title')

  <title> Trang Chu </title>

@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
           @include('partials.content-header',['name' =>'Role' , 'key'=>'List'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 text-right">
                <a href="{{ route('roles.create') }} " class="btn btn-success my-2">Add</a>
              </div>

              <div class="col-lg-12">
                <table class="table table-striped text-center">
                <thead>

                  <tr>
                    <th>Id</th>
                    <th>Tên vai trò</th>
                    <th>Mô tả vai trò</th>
                    <th>Action</th>
                  </tr>

                </thead>
                <tbody>
                <?php $stt=1; ?>

                @foreach($roles  as $role)

                  <tr class="text-left">
                    <td style="vertical-align: inherit;" >{{  $stt }}</td>
                    <td style="vertical-align: inherit;" > {{ $role->name }}</td>
                    <td style="vertical-align: inherit;" >{{ $role->display_name }}</td>

                    <td style="vertical-align: inherit">
                    <a href="{{ route('roles.edit',['id'=> $role->id]) }}" class="btn btn-info">Sửa</a>
                    <a href="{{ route('roles.delete',['id'=>$role->id]) }}"
                      data-url=" {{ route('roles.delete',['id'=>$role->id]) }} "
                      class="btn btn-danger action_delete">Xóa</a>
                    </td>
                  </tr>

                <?php $stt++ ; ?>

                @endforeach 

                </tbody>
                </table>
              </div>

                {{ $roles->links() }} 

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