<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Cars Years
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
            Car Years
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <a href="<?php echo e(url('caryears/create')); ?>" id="btnadd" style="margin-bottom: 20px;"class="btn btn-primary "><i class="fa fa-plus"></i> Create Car Years</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Start Years</th>
                  <th>End Years</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
              <?php $__currentLoopData = $caryears; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caryear): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($caryear->start_years); ?></td>
                  <td><?php echo e($caryear->end_years); ?></td>
                  <td><?php echo e($caryear->created_at); ?></td>
                  <td><?php echo e($caryear->updated_at); ?></td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="<?php echo e(route('caryearsEdit',[$caryear->car_years_id])); ?>"><i class="fa fa-edit">
                </i></a>
                    <a id="borrar" class="btn btn-danger borrar" href="<?php echo e(route('caryearsDestroy',[$caryear->car_years_id])); ?>"><i class="fa fa-remove">
                </i></a>
                  </td>

                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Start Years</th>
                  <th>End Years</th>
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