<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        Edit user
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
        <li class="active">
            Edit User
        </li>
    </ol>
</section>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo e(action('User@upgrade')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label >Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo e($data->names); ?>">
                </div>
                <div class="form-group">
                  <label >Lastname</label>
                  <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo e($data->lastnames); ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="<?php echo e($data->email); ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="<?php echo e($data->password); ?>">
                </div>
                <div class="form-group">
                    <label for="title">User Type</label>
                      <select class="form-control " style="width: 100%;" name="usertype" tabindex="-1" aria-hidden="true">
                        <?php $__currentLoopData = $userstypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usertype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($usertype->user_types_id); ?>"><?php echo e($usertype->user_type); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                </div>
              </div>
              <input type="hidden" name="userid" value="<?php echo e($data->user_id); ?>">
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