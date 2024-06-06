

<?php $__env->startSection('main-section'); ?>

<section id="main-section">
    <div class="container"> 
    <div class="row">
        <div class="col-md-12">
        <form class="my-5" action="<?php echo e(route('roll.assign_roll_store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
    <label for="roll_name" class="form-label">Select Roll</label>
    <select class="form-control" id="roll_name" name="roll_name">
    <?php $__currentLoopData = $rolls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <option value="<?php echo e($roll->name); ?>"><?php echo e($roll->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </select>
  </div>
  
  <div class="mb-3">
    <label for="user_id" class="form-label">Select User</label>
    <select class="form-control" id="user_id" name="user_id">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </select>
  </div>
    
  <button type="submit" class="btn btn-primary">Assign</button>
</form>
        </div>
    </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/backend/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dms\resources\views/backend/roll_and_permission/roll/assign_roll.blade.php ENDPATH**/ ?>