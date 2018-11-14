<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Cars Models
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
            Car Models
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <a href="<?php echo e(url('carmodels/create')); ?>" id="btnadd" style="margin-bottom: 20px;"class="btn btn-primary "><i class="fa fa-plus"></i> Create Car models</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Car Models</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
              <?php $__currentLoopData = $carmodels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carmodel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($carmodel->car_model); ?></td>
                  <td><?php echo e($carmodel->created_at); ?></td>
                  <td><?php echo e($carmodel->updated_at); ?></td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="<?php echo e(route('carmodelsEdit',[$carmodel->car_model_id])); ?>"><i class="fa fa-edit">
                </i></a>
                    <a id="borrar" class="btn btn-danger borrar" href="<?php echo e(route('carmodelsDestroy',[$carmodel->car_model_id])); ?>"><i class="fa fa-remove">
                </i></a>
                  </td>

                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>car models</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>