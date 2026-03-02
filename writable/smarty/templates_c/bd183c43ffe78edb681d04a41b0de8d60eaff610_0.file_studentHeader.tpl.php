<?php
/* Smarty version 5.7.0, created on 2026-02-24 04:55:58
  from 'file:studentHeader.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_699d2f5e3c63a3_54241864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd183c43ffe78edb681d04a41b0de8d60eaff610' => 
    array (
      0 => 'studentHeader.tpl',
      1 => 1771414414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_699d2f5e3c63a3_54241864 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'F:\\wamp64\\www\\student-login\\app\\Views\\smarty';
?><nav class="navbar dashboard-header" style="background-color: #e3f2fd;" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="<?php echo $_smarty_tpl->getValue('base_url');?>
studentform/dashboard">Student Dashboard</a>
    <div class="d-flex justify-content-end align-items-center custom-dropdown">
      <div class="dropdown-center">
        <button class="btn btn-outline-info dropdown-toggle text-black" type="button" data-bs-toggle="dropdown" 
          aria-expanded="false">
          <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
images/img2.jpg" alt="Profile" class="rounded-circle me-2"
            style="width: 25px; height: 25px;">
          <p class="text-white">Welcome, <?php echo (($tmp = $_smarty_tpl->getValue('studentData')['teacher_name'] ?? null)===null||$tmp==='' ? "Guest" ?? null : $tmp);?>
</p>
        </button>
        <ul class="dropdown-menu dropdown-menu-end me-0">
          <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->getValue('base_url');?>
studentform/profile">Profile
              <i class="fa-solid fa-user"></i>
            </a></li>
          <li class="custom-logout"><a class="dropdown-item text-danger " onclick="logout(event)">Logout
              <i class="fa-solid fa-right-from-bracket"></i>
            </a></li>
        </ul>
      </div>
    </div>
  </div>
</nav><?php }
}
