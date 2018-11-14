<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Edit Car Version
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
            Car Version
        </li>
        <li class="active">
            Edit Car Version
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
            <form role="form" action="<?php echo e(action('Carversion@upgrade')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label >Car Version</label>
                  <input type="text" class="form-control" name="Carversion" placeholder="Car version" value="<?php echo e($data->car_version); ?>">
                </div>
              </div>
              <input type="hidden" class="form-control" name="Carversionid"  value="<?php echo e($data->car_versions_id); ?>">
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