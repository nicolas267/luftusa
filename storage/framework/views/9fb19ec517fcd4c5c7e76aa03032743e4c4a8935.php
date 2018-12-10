<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Cars Parts
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
            Car Parts
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <a class="btn btn-primary " href="<?php echo e(url('carparts/create')); ?>" style="margin-bottom: 20px;">
                        <i class="fa fa-plus">
                        </i>
                        Create Car Parts
                    </a>
                    <table class="table table-bordered table-striped" id="example1">
                        <thead>
                            <tr>
                                <th>
                                    Part
                                </th>
                                <th>
                                    Car Model
                                </th>
                                <th>
                                    Car Version
                                </th>
                                <th>
                                    Year
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    stock
                                </th>
                                <th>
                                    Created at
                                </th>
                                <th>
                                    Updated at
                                </th>
                                <th>
                                    Options
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i = 0; $i < count($carparts); $i++): ?>
                            <tr>
                                <td>
                                    <?php echo e($carparts[$i]->part); ?>

                                </td>
                                <td>
                                    <?php echo e($models[$i][0]->car_model); ?>

                                </td>
                                <td>
                                    <?php echo e($versions[$i][0]->car_version); ?>

                                </td>
                                <td>
                                    <?php echo e($carparts[$i]->year); ?>

                                </td>
                                <td>
                                    <?php echo e($carparts[$i]->price); ?>

                                </td>
                                <td>
                                    <?php echo e($carparts[$i]->stock); ?>

                                </td>
                                <td>
                                    <?php echo e($carparts[$i]->created_at); ?>

                                </td>
                                <td>
                                    <?php echo e($carparts[$i]->updated_at); ?>

                                </td>
                                <td>
                                    <a class="btn btn-primary editar" href="<?php echo e(route('carpartsEdit',[ $carparts[$i]->car_part_id ])); ?>" id="editar">
                                        <i class="fa fa-edit">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger borrar" href="<?php echo e(route('carpartsDestroy',[ $carparts[$i]->car_part_id ])); ?>" id="borrar">
                                        <i class="fa fa-remove">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            <?php endfor; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>
                                    Part
                                </th>
                                <th>
                                    Car Model
                                </th>
                                <th>
                                    Car Version
                                </th>
                                <th>
                                    Year
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    stock
                                </th>
                                <th>
                                    Created at
                                </th>
                                <th>
                                    Updated at
                                </th>
                                <th>
                                    Options
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.box-body -->
<!-- /.box -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>