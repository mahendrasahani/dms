

<?php $__env->startSection('main-section'); ?>
<section id="main-section">
    <div class="container"> 
    <div class="row">
        <div class="col-md-12">
            <h3 class="my-5">All Permission</h3>
        <table class="table my-3">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Permission Name</th>
      <th scope="col">Action</th> 
    </tr>
  </thead>
  <tbody>
     <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo e($permission->name); ?></td>
      <td>
      <button type="button" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-danger">Dekete</button>
    </td> 
    </tr> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
  </tbody>
</table>    
        </div>
    </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/backend/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\dms\resources\views/backend/roll_and_permission/permission/index.blade.php ENDPATH**/ ?>