

<?php $__env->startSection('main-section'); ?>

<section id="main-section">
    <h3>Assign Permission</h3>
    <div class="container"> 
    <div class="row">
        <div class="col-md-12">
        <form class="my-5" action="<?php echo e(route('permission.assign_permission_store')); ?>" method="get">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
    <label for="role_id" class="form-label">Select Role</label>
    <select class="form-control" id="roll_id" name="role_id">
    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </select>
  </div>
  
  <div class="mb-3">
    <label for="permissions" class="form-label">Select Permission</label>
    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="<?php echo e($permission->name); ?>" id="permissions" name="permissions[]" <?php echo e($permission->id); ?>>
        <label class="form-check-label" for="flexCheckChecked"><?php echo e($permission->name); ?></label>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    
  <button type="submit" class="btn btn-primary">Assign</button>
</form>
        </div>
    </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/backend/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dms\resources\views/backend/roll_and_permission/permission/assign_permission.blade.php ENDPATH**/ ?>