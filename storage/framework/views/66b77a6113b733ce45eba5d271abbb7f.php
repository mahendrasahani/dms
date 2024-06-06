

<?php $__env->startSection('main-section'); ?>

<section id="main-section">
    <div class="container"> 
    <div class="row"> 
        <div class="col-md-12">
        <h3 class="my-5">Create Permission</h3>
        <form class="my-5" action="<?php echo e(route('permission.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="permission_name" class="form-label">Permission Name</label>
    <input type="text" class="form-control" id="permission_name" name="permission_name"> 
  </div> 
  <button type="submit" class="btn btn-primary">Create</button>
</form>
        </div>
    </div>
    </div>
</section> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/backend/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dms\resources\views/backend/roll_and_permission/permission/create.blade.php ENDPATH**/ ?>