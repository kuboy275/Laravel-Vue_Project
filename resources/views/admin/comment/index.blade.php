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
              <div class="col-lg-12">
                <table class="table table-striped text-center">
                <thead>

                  <tr>
                    <th>Id</th>
                    <th>Blog id</th>
                    <th>User id</th>
                    <th>User email</th>
                    <th>Comment</th>
                    <th>Action</th>
                  </tr>

                </thead>
                <tbody>
                    <?php $stt=1; ?>
                @foreach($comments  as $cmt)

                  <tr>
                    <td style="vertical-align: inherit;" >{{  $stt }}</td>
                    <td style="vertical-align: inherit;" > {{ $cmt->blog_id }} </td>
                    <td style="vertical-align: inherit;" > {{ $cmt->user_id }} </td>
                    <td style="vertical-align: inherit;" > {{ $cmt->email }} </td>
                    <td style="vertical-align: inherit;" > {{ $cmt->comment }} </td>
                    <td style="vertical-align: inherit">
                        <a href=""
                            data-url="{{ route('comment.delete' , ['id'=>$cmt->id]) }}"
                            class="btn btn-danger action_delete">Xóa</a>
                    </td>
                  </tr>
                    <?php $stt++ ; ?>
                @endforeach 

                </tbody>
                </table>
              </div>

                {{ $comments->links() }} 

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