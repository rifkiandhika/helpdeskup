<title>Tambah Ticket</title>
@extends("client")
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
            <h1 class="m-0">Ticket</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Karyawan">Home</a></li>
              <li class="breadcrumb-item active">Ticket</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>

                    <!-- Modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" >
                      Tambah Ticket +
                    </button>

                     <!-- form tambah tiket -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModallabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Form Tambah Ticket</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      </button>
                    </div>
                    
                    <div class="modal-body">
                      <form action="/insert_data" method="post" enctype="multipart/form-data">
                         @csrf
                         <!-- keluhan -->
                         <div class="form-group">
                           <label for="keluhan" class="col-form-label">Keluhan</label>
                           <input type="text" class="form-control" name="keluhan" id="keluhan" placeholder="Masukan Keluhan">
                         </div>
                         <!-- keterangan -->
                         <div class="form-group">
                           <label for="message-text" class="col-form-label">Keterangan</label>
                           <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Masukan Keterangan"></textarea>
                         </div>
                         <!-- tingkat kesulitan -->
                         <select id="tingkat_kesulitan" class="form-control" name="tingkat_kesulitan">
                         <option selected>Tingkat Kesulitan</option>
                            <option>Tinggi</option>
                            <option>Menengah</option>
                            <option>Sedang</option>
                         </select>
                         
                         <!-- Tempat Lokasi -->
                         <select id="tempat" class="form-control mt-4" name="tempat">
                         <option selected>Masukan Lokasi</option>
                            <option>Pondok Kacang</option>
                            <option>Meruya</option>
                            <option>Cikande</option>
                            <option>Gudang Utama</option>
                            <option>Gudang KT</option>
                            <option>Gudang Cikande</option>
                            <option>Gudang Dadab</option>
                            <option>Pabrik Terakota</option>
                         </select>
                            
                         <!-- input gambar -->
                        <div class="form-group mt-4">
                          <label for="exampleFormControlFile1">Masukan Gambar</label>
                          <input type="file" name="image" class="form-control-file" id="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Save</button>
                    </div>     
                  </div>
               </div>
            </form>
          </div>


                    <br>
                    <br>
                      <tr>
                        <th>#</th>
                        <th>Keluhan</th>
                        <th>Keterangan</th>
                        <th>Tingkat Kesulitan</th>
                        <th>Tempat</th>
                        <th>Status</th>
                        <!-- <th>Konfirmasi</th> -->
                        <th>Tanggal</th>
                        <th style="width: 150px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tickets as $Ticket)
                      <tr>
                        <td>{{$Ticket->id}}</td>
                        <td>{{$Ticket->keluhan}}</td>
                        <td>{{$Ticket->keterangan}}</td>
                        <td>{{$Ticket->tingkat_kesulitan}}</td>
                        <td>{{$Ticket->tempat}}</td>
                        <td>{{$Ticket->status_ticket}}</td>
                        <!-- <td>{{$Ticket->konfirmasi}}</td> -->
                        <td>{{$Ticket->created_at}}</td>
                        <td>
                          <ul class="table-action">
                            <li><a href="/tickets/detail/{{$Ticket->id}}" class="btn btn-success" "><i class="fa fa-eye"></i> Detail</a></li>
                          </ul>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
      </div>
    </section>
    @endsection