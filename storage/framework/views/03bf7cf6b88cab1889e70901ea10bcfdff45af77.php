<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Users
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
            Users
        </li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <a class="btn btn-primary " href="<?php echo e(url('users/create')); ?>" id="btnadd" style="margin-bottom: 20px;">
                <i class="fa fa-plus">
                </i>
                Create User
            </a>
            <table class="table table-bordered table-striped" id="example2">
                <thead>
                    <tr>
                        <th>
                            User Type
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Lastname
                        </th>
                        <th>
                            email
                        </th>
                        <th>
                            Created At
                        </th>
                        <th>
                            Updated At
                        </th>
                        <th>
                            Options
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php echo e($user->user_type); ?>

                        </td>
                        <td>
                            <?php echo e($user->names); ?>

                        </td>
                        <td>
                            <?php echo e($user->lastnames); ?>

                        </td>
                        <td>
                            <?php echo e($user->email); ?>

                        </td>
                        <td>
                            <?php echo e($user->created_at); ?>

                        </td>
                        <td>
                            <?php echo e($user->updated_at); ?>

                        </td>
                        <td>
                            <a class="btn btn-primary editar" href="<?php echo e(route('userEdit',[$user->user_id])); ?>" id="editar">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a class="btn btn-danger borrar" href="<?php echo e(route('userDestroy',[$user->user_id])); ?>" id="borrar">
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
                            Name
                        </th>
                        <th>
                            Lastname
                        </th>
                        <th>
                            email
                        </th>
                        <th>
                            Created At
                        </th>
                        <th>
                            Updated At
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
<!-- /.row -->
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>