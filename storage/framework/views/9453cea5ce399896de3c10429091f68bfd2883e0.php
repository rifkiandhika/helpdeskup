<title>Tambah Ticket</title>

<?php $__env->startSection("css"); ?>
<style>
  /* .btn{
    color: white;
  } */

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
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
                         <?php echo csrf_field(); ?>
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
                      <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($Ticket->id); ?></td>
                        <td><?php echo e($Ticket->keluhan); ?></td>
                        <td><?php echo e($Ticket->keterangan); ?></td>
                        <td><?php echo e($Ticket->tingkat_kesulitan); ?></td>
                        <td><?php echo e($Ticket->tempat); ?></td>
                        <td><?php echo e($Ticket->status_ticket); ?></td>
                        <!-- <td><?php echo e($Ticket->konfirmasi); ?></td> -->
                        <td><?php echo e($Ticket->created_at); ?></td>
                        <td>
                          <ul class="table-action">
                            <li><a href="/tickets/detail/<?php echo e($Ticket->id); ?>" class="btn btn-success" "><i class="fa fa-eye"></i> Detail</a></li>
                          </ul>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
            </div>
      </div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make("client", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Helpdesk\resources\views//Ticket/client.blade.php ENDPATH**/ ?>