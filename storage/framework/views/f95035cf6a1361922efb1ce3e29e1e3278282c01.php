<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        User Types
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
            User Types
        </li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <a class="btn btn-primary " href="<?php echo e(url('userstype/create')); ?>" id="btnadd" style="margin-bottom: 20px;">
                <i class="fa fa-plus">
                </i>
                Create User Type
            </a>
            <table class="table table-bordered table-striped" id="example1">
                <thead>
                    <tr>
                        <th>
                            User Type
                        </th>
                        <th>
                            Options
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $userstype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usertype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($usertype->user_type); ?>

                        </td>
                        <td>
                            <a class="btn btn-primary editar" href="<?php echo e(route('usertypeEdit',[$usertype->user_types_id])); ?>" id="editar">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a class="btn btn-danger borrar" href="<?php echo e(route('usertypeDestroy',[$usertype->user_types_id])); ?>" id="borrar">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            User Type
                        </th>
                        <th>
                            Options
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
<!-- /.col -->
<!-- /.row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>