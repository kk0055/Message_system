

<?php $__env->startSection('content'); ?>

        <?php if(count($messages) > 0): ?>
        <ul class="list-group">
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       
            <li class="list-group-item">
                <strong>From: <?php echo e($message->userFrom->name); ?>, <?php echo e($message->userFrom->email); ?> </strong>
                | タイトル : <?php echo e($message->subject); ?>

                <a href="<?php echo e(route('return',$message->id)); ?> " class="btn btn-info folat-right btn-sm">Return message to inbox</a>
                </li>
                 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        
        <?php else: ?>
        No messages!
        <?php endif; ?>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Keisuke\Desktop\Message_system\resources\views/deleted.blade.php ENDPATH**/ ?>