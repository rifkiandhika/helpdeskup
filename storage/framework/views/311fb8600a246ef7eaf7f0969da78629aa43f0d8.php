<title>Laporan Ticket</title>

<?php $__env->startSection("css"); ?>
<style>
  /* .btn{
    color: white;
  } */

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan Ticket</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Laporan Ticket</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <!-- Main content -->
     <section class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <h3> Print Laporan Ticket</h3>
        </div>

       
        <div class="card-body">
          <div class="input-group mb-1">
            <label for="label">Tanggal Awal</label>
          </div>
          <input type="date" name="tglawal" id="tglawal" class="form-control">
            <br>

          <div class="input-group mb-1">
            <label for="label">Tanggal Akhir</label>
          </div>
          <input type="date" name="tglakhir" id="tglakhir" class="form-control">
          <br>
          <div class="row">
          <div class="col-4"> 
            <label for="">Kategory</label><br>
            <select name="keluhan" id="keluhan" class="form-control">
              <option select>Masukan Kategory</option>
              <option>Jaringan</option>
              <option>System</option>
              <option>Perangkat</option>
              <option>Semua</option>
            </select>
          </div>

          <div class="col-4"> 
            <label for="">Departemen</label><br>
            <select name="divisi" id="divisi" class="form-control">
              <option select>Masukan Departemen</option>
                <option>HRD</option>
                <option>Accounting</option>
                <option>Marketing</option>
            </select>
          </div>

          <div class="col-4">
            <label for="">Tempat</label><br>
            <select name="tempat" id="tempat" class="form-control">
              <option select>Masukan Tempat</option>
              <option>Meruya</option>
              <option>Bintaro</option>
              <option>Cikande</option>
            </select>
          </div>
          </div>
          <br>

          <div class="input-group mb-3">
            
            <a href="" onclick="this.href='/Print/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value " 
            target="_blank" class="btn btn-primary">Cetak Laporan <i class="fas fa-print"></i></a>
          </div> 
        </div>
       
      </div>
     </section>


                





















<?php $__env->stopSection(); ?>












<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Helpdesk\resources\views/Report/index.blade.php ENDPATH**/ ?>