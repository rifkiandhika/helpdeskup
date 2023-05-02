<title>Detail</title>
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

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Ticket">Home</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    
    <div class="modal-fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Details Ticket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="/Ticket/details/{{$data->id}}" method="post">
            <form action="User/details/{{$data->id}}">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input  class="form-control" readonly value="{{$data->nama}}" name="nama" id="recipient-name">
                </div>
            </form>   
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input  class="form-control" readonly value="{{$data->keluhan}}" name="keluhan" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" readonly value="{{$data->keterangan}}" name="keterangan"  id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" readonly value="{{$data->tingkat_kesulitan}}" name="tingkat_kesulitan" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" readonly value="{{$data->tempat}}" name="tempat" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" readonly value="{{$data->status_ticket}}" name="status" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" readonly value="{{$data->created_at}}" name="created_at" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" value="{{$data->image}}" name="image" id="image">
                </div> 
                </form>
            </div>
                </div>
            </div>
            </div>

   





@endsection