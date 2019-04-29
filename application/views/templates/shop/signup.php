<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <div class="inner-nav">
    <div class="container">
        <a href="<?= LANG_URL ?>"><?= lang('home') ?></a> <span class="active"> > <?= lang('user_login') ?></span>
    </div>
</div>
<div class="container user-page">
<div class="row">
<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
<div class="loginmodal-container">
<h1><?= lang('user_register') ?></h1><br>
<form method="POST" action="">
<input type="text" name="name" placeholder="Name" required>
<input type="text" name="phone" placeholder="Phone" required>
<input type="text" name="email" placeholder="Email" required>
<input type="password" name="pass" placeholder="Password" required>
<input type="password" name="pass_repeat" placeholder="Password repeat" required>
<input type="submit" name="signup" class="login loginmodal-submit" value="<?= lang('register_me') ?>">
</form>
</div>
</div>
</div>
</div>