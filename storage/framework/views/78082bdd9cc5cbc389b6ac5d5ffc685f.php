<?php $__env->startComponent('mail::message'); ?>
<h2>Hello admin,</h2>

<p>If you received this email, then SMTP is working fine on your website.</p>
 
Thanks,<br>
<?php echo e(config('app.name'), false); ?><br>
<?php echo $__env->renderComponent(); ?><?php /**PATH /www/wwwroot/rev.gigple.com/resources/views/mail/admin/settings/smtp.blade.php ENDPATH**/ ?>