<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Edit Car model
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard">
                </i>
                Home
            </a>
        </li>
        <li class="active">
            Car Model
        </li>
        <li class="active">
            Edit Car Model
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="<?php echo e(action('Carmodel@upgrade')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label >Car Model</label>
                  <input type="text" class="form-control" name="CarModel" placeholder="Car Model" value="<?php echo e($data->car_model); ?>">
                </div>
              </div>
              <input type="hidden" class="form-control" name="CarModelid"  value="<?php echo e($data->car_model_id); ?>">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
              </div>
            </form>
          </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>