

<?php $__env->startSection('content'); ?>

            <?php if(count($messages) > 0): ?>
              <ul class="list-group">
                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <li class="list-group-item">
                    <strong> To: <?php echo e($message->userTo->name); ?>, <?php echo e($message->userTo->email); ?> </strong>
                    | タイトル : <?php echo e($message->subject); ?>

                    <?php if($message->read): ?>
                    <span class="badge badge-success float-right">Read</span> 
                    <?php endif; ?>
                
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </ul>
            
            <?php else: ?>
            No messages!
            <?php endif; ?>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Keisuke\Desktop\Message_system\resources\views/sent.blade.php ENDPATH**/ ?>