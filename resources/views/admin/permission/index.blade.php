@extends('layouts.admin')

@section('title')

  <title> Permission </title>

@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
           @include('partials.content-header',['name' =>'Permission' , 'key'=>'List'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 text-right">
                  <a href="{{route('permissions.create')}}" class="btn btn-success my-2">Add</a>
              </div>

              <div class="col-lg-12">
                <table class="table table-striped">
                <thead>

                  <tr>
                    <th>Id</th>
                    <th>Tên Permission</th>
                    <th>Action</th>
                  </tr>

                </thead>
                <tbody>
                    
                <?php $stt=1; ?>
                @foreach($permissions as $permission)

                  <tr> 

                    <td style="vertical-align: inherit;" >{{$stt}}</td>

                    <td style="vertical-align: inherit;" >  {{$permission->name}}</td>
                    <td style="vertical-align: inherit">
                       <a href="{{ route('permissions.delete' ,$permission->id ) }}"
                        data-url="{{route('permissions.delete',['id'=>$permission->id])}}"
                        class="btn btn-danger action_delete">  Xóa</a>
                    </td>
                  </tr>

                <?php $stt++ ; ?>
                @endforeach

                </tbody>
                </table>
              </div>

                {{ $permissions->links() }}

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