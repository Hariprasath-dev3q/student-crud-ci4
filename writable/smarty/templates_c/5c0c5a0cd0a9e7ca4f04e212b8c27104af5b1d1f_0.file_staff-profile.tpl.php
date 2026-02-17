<?php
/* Smarty version 5.7.0, created on 2026-02-17 13:37:55
  from 'file:staff-profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69946f339c52a3_90197622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c0c5a0cd0a9e7ca4f04e212b8c27104af5b1d1f' => 
    array (
      0 => 'staff-profile.tpl',
      1 => 1771335472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:studentHeader.tpl' => 1,
  ),
))) {
function content_69946f339c52a3_90197622 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\wamp64\\www\\student-login\\app\\Views\\smarty';
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  <?php echo '</script'; ?>
>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
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
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('base_url');?>
js/student-form.js"><?php echo '</script'; ?>
>

  <link href="<?php echo $_smarty_tpl->getValue('base_url');?>
css/style.css" rel="stylesheet">

</head>

<body>
  <?php $_smarty_tpl->renderSubTemplate("file:studentHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <div class="container-fluid mt-5 main-content">
  <sidebar>
      <div class="list-group">
        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
studentform/display" class="list-group-item list-group-item-action active" aria-current="true">
          <i class="fa-solid fa-user-plus"></i> Add student
        </a>
        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
insertData/display" class="list-group-item list-group-item-action">
          <i class="fa-solid fa-file-import"></i>Import file</a>

      </div>
    </sidebar>
    <div class="card w-50 profile-card">
      <div class="card-header ">

        Student Profile
      </div>

      <div class="card-body">
        <figure>
          <figcaption class="blockquote-footer">
            <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
images/img2.jpg" alt="Profile" class="rounded-circle me-2 custom-header-img mt-2 mb-2"
              style="width: 60px; height: 60px;">
            <div class="row">
              <div class="col-md-6">
                <p class="text-black"><span class="label text-black">Staff Name:</span> <?php echo (($tmp = $_smarty_tpl->getValue('studentData')['teacherName'] ?? null)===null||$tmp==='' ? 'N/A' ?? null : $tmp);?>
</p>
              </div>
              <div class="col-md-6">
                <p class="text-black"><span class="label text-black">Email:</span> <?php echo (($tmp = $_smarty_tpl->getValue('studentData')['email'] ?? null)===null||$tmp==='' ? "N/A" ?? null : $tmp);?>
</p>
              </div>
              <div class="col-md-6">
                <p class="text-black"><span class="label text-black">Staff ID:</span> <?php echo (($tmp = $_smarty_tpl->getValue('studentData')['staffId'] ?? null)===null||$tmp==='' ? "N/A" ?? null : $tmp);?>
</p>
              </div>
            </div>
          </figcaption>
        </figure>
      </div>
    </div>


  </div>
</body>

</html><?php }
}
