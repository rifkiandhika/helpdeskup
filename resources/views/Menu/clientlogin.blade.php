<title>Dashboard</title>
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
  


            <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

    
        
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              Hallo..<strong>{{Auth::user()->nama}}</strong> Selamat Datang...
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <br>
        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
            <div class="col-lg-3 col-17">
                <!-- small box -->
                <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$data}}</h3>

                    <p>Menunggu Respon..</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-clock"></i>
                </div>
                <a href="/ResponC" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-17">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$proses}}<sup style="font-size: 20px"></sup></h3>

                    <p>Proses Pengerjaan</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-clock"></i>
                </div>
                <a href="/ProsesC" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-17">
                <!-- small box -->
                <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$success}}</h3>

                    <p>Ticket Sukses</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-ticket-alt"></i>
                </div>
                <a href="/SuksesC" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            </div>
        </div>
        </section>
        
          
@endsection