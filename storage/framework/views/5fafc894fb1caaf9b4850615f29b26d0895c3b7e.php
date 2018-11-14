<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
         Blogs
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
            Blogs
        </li>
    </ol>
</section>
<section class="content">
    <div class="box">
            <div class="box-body">
              <a href="<?php echo e(url('blogs/create')); ?>" id="btnadd" style="margin-bottom: 20px;"class="btn btn-primary "><i class="fa fa-plus"></i> Create Blog</a>
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>User</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
              <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($blog->names); ?></td>
                  <td><?php echo e($blog->title); ?></td>
                  <td><?php echo e($blog->description); ?></td>
                  <td><?php echo e($blog->created_at); ?></td>
                  <td><?php echo e($blog->updated_at); ?></td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="<?php echo e(route('blogsEdit',[$blog->blog_id])); ?>"><i class="fa fa-edit">
                </i></a>
                    <a id="borrar" class="btn btn-danger borrar" href="<?php echo e(route('blogsDestroy',[$blog->blog_id])); ?>"><i class="fa fa-remove">
                </i></a>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>User</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>