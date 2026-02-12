<?php
/* Smarty version 5.7.0, created on 2026-02-12 12:55:06
  from 'file:student-login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_698dcdaabeaf14_20870673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d2330f7061bebe03dc66625aff4ed57737156f7' => 
    array (
      0 => 'student-login.tpl',
      1 => 1770900902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_698dcdaabeaf14_20870673 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\wamp64\\www\\student-login\\app\\Views\\smarty';
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
    <h2 class="mb-4 text-center">Student Login</h2>
    <form action="/student/login" method="post" id="loginForm">
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo (($tmp = $_smarty_tpl->getValue('cookieEmail') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" maxlength="8" required>
        <i class="fa-solid fa-eye " id="custom-eye"></i>
        
      </div>
      <div class="form-check mb-3">
        <input type="checkbox" name="remember" id="remember" class="form-check-input" />
        <label for="remember" class="form-check-label">Remember me</label>
      </div>
      <button type="button" class="btn btn-primary" onclick="studentLogin(event)">Login</button>
      <span id="loginError" class="text-danger ms-3"><?php echo $_smarty_tpl->getValue('error');?>
</span>
    </form>

    <div id="feedback" class="mt-3"></div>
  </div>
</body>

</html><?php }
}
