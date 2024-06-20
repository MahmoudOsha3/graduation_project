<div>
                <!--[if BLOCK]><![endif]--><?php if(session()->has('delete')): ?>
                <div class="alert alert-success">
                    <h4><?php echo e(session()->get('delete')); ?></h4>
                </div>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                
                <div class="comments-area">
                    <h4><?php echo e($comments->count()); ?> Comments</h4>
                    
                    <!--[if BLOCK]><![endif]--><?php if($comments->count() > 0): ?>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <?php $patient = $comment->patient ?>
                                            <img src="<?php echo e(asset('images/'."$patient->image")); ?>" alt="">
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
                                                <?php echo e($comment->comment); ?>

                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#"><?php echo e($patient->name); ?></a>
                                                    </h5>
                                                    
                                                    <p class="date"><?php echo e($comment->created_at->diffForHumans()); ?></p>
                                                </div>
                                                <!--[if BLOCK]><![endif]--><?php if($comment->patient->id == auth()->user()->id): ?>
                                                    <button wire:click="delete(<?php echo e($comment->id); ?>)" class="btn btn-sm" style="margin: 5px">Delete</button>
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    <?php else: ?>
                        <div class="alert alert-info">
                            <h4 style="text-align: center">No comments</h4>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    

                </div>

                
                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    
                    <form class="form-contact comment_form" wire:submit.defer="store">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                
                                <textarea class="form-control w-100" wire:model="newComment" cols="30" rows="4"
                                placeholder="Write Comment"></textarea>
                                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['newComment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="msg">
                                    <p><?php echo e($message); ?></p>
                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                    </div>
                    </form>
                </div>
                
</div>
<?php /**PATH D:\Projects Laravel\projects\doctor appointment\resources\views/livewire/doctor-comments.blade.php ENDPATH**/ ?>