<?php if(count($errors)> 0): ?>
    <div class="form-group">
    <?php foreach ($errors as  $error): ?>
        <p><?php echo $error; ?> </p>
    <?php endforeach; ?>
    </div>
<?php endif; ?>