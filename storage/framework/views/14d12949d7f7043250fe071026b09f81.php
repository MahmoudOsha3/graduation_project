<div class="chat-container">
    <div class="chat-header">
        <h2 style="color: white"><?php echo app('translator')->get('site.doctor-ai'); ?></h2>
    </div>
    <div class="chat-box">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="message <?php echo e($msg['user'] ? 'user' : 'bot'); ?>">
                <p><?php echo e($msg['message']); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <div class="chat-input">
        <input type="text" wire:model="message" wire:keydown.enter="sendMessage" placeholder="اكتب رسالتك هنا...">
        <button wire:click="sendMessage"><?php echo app('translator')->get('site.send'); ?></button>
    </div>
</div>
<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/livewire/chat-bot.blade.php ENDPATH**/ ?>