{{-- @extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))



 --}}
<h2> Mày không được phép vào phần này dcm mày  <span> By Admin System</span> </h2>
<a href="{{ route("home") }}"> cút ve home </a>

<style>

    
    h2{
        color: red;
    }
    h2 span{
        color: brown;
    }
</style>