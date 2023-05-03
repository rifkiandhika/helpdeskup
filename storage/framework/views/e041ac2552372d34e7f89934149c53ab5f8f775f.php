<title>Detail</title>

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
        <form class="/Ticket/details/<?php echo e($data->id); ?>" method="post">
            <form action="User/details/<?php echo e($data->id); ?>">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input  class="form-control" readonly value="<?php echo e($data->nama); ?>" name="nama" id="recipient-name">
                </div>
            </form>   
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input  class="form-control" readonly value="<?php echo e($data->keluhan); ?>" name="keluhan" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" readonly value="<?php echo e($data->keterangan); ?>" name="keterangan"  id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" readonly value="<?php echo e($data->tingkat_kesulitan); ?>" name="tingkat_kesulitan" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" readonly value="<?php echo e($data->tempat); ?>" name="tempat" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" readonly value="<?php echo e($data->status_ticket); ?>" name="status" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" readonly value="<?php echo e($data->created_at); ?>" name="created_at" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label"></label>
                    <input type="text" class="form-control" value="<?php echo e($data->image); ?>" name="image" id="image">
                </div> 
                </form>
            </div>
                </div>
            </div>
            </div>

   





<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Helpdesk\resources\views/Ticket/detail.blade.php ENDPATH**/ ?>