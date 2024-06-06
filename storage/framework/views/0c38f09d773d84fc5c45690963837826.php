

<?php $__env->startSection('main-section'); ?>

<section id="main-section">
    <div class="container"> 
    <div class="row">
        <div class="col-md-12">
        <form class="my-5" action="<?php echo e(route('roll.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label for="roll_name" class="form-label">Roll Name</label>
    <input type="text" class="form-control" id="roll_name" name="roll_name"> 
  </div> 
  <button type="submit" class="btn btn-primary">Create</button>
</form>
        </div>
    </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/backend/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dms\resources\views/backend/roll_and_permission/roll/create.blade.php ENDPATH**/ ?>