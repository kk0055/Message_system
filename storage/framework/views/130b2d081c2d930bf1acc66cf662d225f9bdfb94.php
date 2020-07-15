

          <?php $__env->startSection('content'); ?>

          <form action="<?php echo e(route('send')); ?> " method="post">
            <?php echo csrf_field(); ?>
             <label for="to">To</label>
              <select class="form-control" name="to" id="to"> 
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?>, <?php echo e($user->email); ?></option>
               
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>  
           
               <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject"  placeholder="Enter subject" value="<?php echo e($subject); ?>">
            </div>
         
            <div class="form-group">
              <label for="body">Message</label>
              <textarea class="form-control" id="message" name="message" rows="3"  placeholder="Enter message"></textarea>
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Keisuke\Desktop\Message_system\resources\views/create.blade.php ENDPATH**/ ?>