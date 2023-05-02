<title>Menunggu respon</title>
@extends("layouts.master")
@section("css")
<style>
  /* .btn{
    color: white;
  } */

</style>
@endsection
@section("content")
<!-- Content Header (Page header) -->

        @php
        $no=0
        @endphp
        @foreach($data as $datas) 
        {{++$no}}
        @endforeach




@endsection