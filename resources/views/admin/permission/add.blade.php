@extends('layouts.admin')
@section('title')
    <title> permission Add </title>
@endsection
@section('content')
    <div class="content-wrapper">
        @include('partials.content-header',['name' =>'permission' , 'key'=>'Add'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="{{ route('permissions.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên permisson</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="nhập tên danh mục" name="module_parent" autocomplete="off">
                                @error('name')
                                    <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    @foreach (config('permissions.module_childrent') as $moduleItemChilrent)
                                        <div class="col-md-3">
                                            <label for="">
                                                <input type="checkbox" value="{{ $moduleItemChilrent }}"
                                                    name="module_chilrent[]">
                                                {{ $moduleItemChilrent }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="form-group">
                                <label>Chọn permisson cha</label>
                                <select class="form-control" name="parent_id">
                                    <option value="0">Chọn permisson cha</option>
                                    {!! $optionSelect !!}
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary"> Submit</button>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
