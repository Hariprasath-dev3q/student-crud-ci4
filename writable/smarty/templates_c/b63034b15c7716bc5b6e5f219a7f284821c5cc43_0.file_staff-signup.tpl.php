<?php
/* Smarty version 5.7.0, created on 2026-02-18 07:45:23
  from 'file:staff-signup.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69956e1349fe45_77509792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b63034b15c7716bc5b6e5f219a7f284821c5cc43' => 
    array (
      0 => 'staff-signup.tpl',
      1 => 1771311562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69956e1349fe45_77509792 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\wamp64\\www\\student-login\\app\\Views\\smarty';
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php echo '<script'; ?>
>
    base_url = '<?php echo $_smarty_tpl->getValue('base_url');?>
';
    console.log("Base URL:", base_url);
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('base_url');?>
js/student-management.js"><?php echo '</script'; ?>
>
  <link href="<?php echo $_smarty_tpl->getValue('base_url');?>
css/style.css" rel="stylesheet">

  
</head>

<body>
  <div class="container mt-5 w-25 login-form">
    <h2 class="mb-4 text-center">Staff Signup</h2>
    <form action="/student/login" method="post" id="loginForm">
      <div class="mb-3">
        <label for="email" class="form-label">Teacher Name</label>
        <input type="text" class="form-control" id="teachername" name="teachername" value="" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Create Password</label>
        <input type="password" class="form-control" id="password" name="password" maxlength="8" required>
        <i class="fa-solid fa-eye " id="custom-eye"></i>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->getValue('cookieEmail') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
      </div>
            <div class="mb-3">Already have an account?
        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
" class="">Login</a>
      </div>
      <button type="button" class="btn btn-primary" onclick="studentSignup(event)">Signup</button>
      <span id="loginError" class="text-danger ms-3"><?php echo $_smarty_tpl->getValue('error');?>
</span>
    </form>

    <div id="feedback" class="mt-3"></div>
  </div>
</body>

</html><?php }
}
