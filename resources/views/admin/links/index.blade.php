@extends('layouts.admin')

@section('title')

  <title> Settings Links </title>

@endsection

@section('content')
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
           @include('partials.content-header',['name' =>'Links' , 'key'=>'List'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 mb-5">
                
                {{-- @can('link-add') --}}
                  
                <div class="btn-group bg-success ">
                  <button class="btn text-white">Add</button>
                  <button class="btn dropdown-toggle text-white" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu px-3 py-1" >
                    <li><a href="{{ route('links.create') . '?type=Text' }}">Text</a></li>
                    <li><a href="{{ route('links.create') . '?type=Textarea' }}">Textarea</a></li>

                  </ul>
                </div>

                {{-- @endcan --}}

              </div>

              <div class="col-lg-12">
                <table class="table table-striped text-center">
                <thead>

                  <tr>
                    <th>Id</th>
                    <th>Config key</th>
                    <th>Config value</th>
                    <th>Action</th>
                  </tr>

                </thead>
                <tbody>
                    <?php $stt=1; ?>
                @foreach($links  as $link)

                  <tr>
                    <td style="vertical-align: inherit;" >{{  $stt }}</td>
                    <td style="vertical-align: inherit;" > {{ $link->config_key }} </td>
                    <td style="vertical-align: inherit;" > {{ $link->config_value }} </td>
                    <td style="vertical-align: inherit">
                      <a href="{{ route('links.edit' , ['id'=>$link->id]) .'?type='.$link->type }}" class="btn btn-info">Sửa</a>
                      <a href="{{ route('links.delete' , ['id'=>$link->id]) }}"
                        data-url="{{ route('links.delete' , ['id'=>$link->id]) }}"
                        class="btn btn-danger action_delete">Xóa</a>
                    </td>
                  </tr>
                    <?php $stt++ ; ?>
                @endforeach 

                </tbody>
                </table>
              </div>

                {{ $links->links() }} 

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