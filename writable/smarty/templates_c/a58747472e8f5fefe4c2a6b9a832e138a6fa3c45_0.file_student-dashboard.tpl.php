<?php
/* Smarty version 5.7.0, created on 2026-02-19 12:43:31
  from 'file:student-dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_69970573216fb7_63353708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a58747472e8f5fefe4c2a6b9a832e138a6fa3c45' => 
    array (
      0 => 'student-dashboard.tpl',
      1 => 1771505008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:studentHeader.tpl' => 1,
  ),
))) {
function content_69970573216fb7_63353708 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\wamp64\\www\\student-login\\app\\Views\\smarty';
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
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
    
    const genderData = {
      boys: <?php echo (($tmp = $_smarty_tpl->getValue('gender')['male_count'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
,
      girls: <?php echo (($tmp = $_smarty_tpl->getValue('gender')['female_count'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>

    };
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
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
>
  <link href="<?php echo $_smarty_tpl->getValue('base_url');?>
css/style.css" rel="stylesheet">

</head>

<body>
  <?php $_smarty_tpl->renderSubTemplate("file:studentHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <sidebar>
    <div class="list-group">
      <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
studentform/display" class="list-group-item list-group-item-action active"
        aria-current="true">
        <i class="fa-solid fa-user-plus"></i> Add student
      </a>
      <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
insertData/display" class="list-group-item list-group-item-action">
        <i class="fa-solid fa-file-import"></i>Import file</a>

    </div>
  </sidebar>
  <div class="container mt-5 main-content">

    <h2>Welcome, <?php echo (($tmp = $_smarty_tpl->getValue('studentData')['teacher_name'] ?? null)===null||$tmp==='' ? "Guest" ?? null : $tmp);?>
</h2>

    
    <div class="card mt-4 p-3 w-25" style="max-width:500px;">
      <h5 class="text-center">Gender Distribution</h5>
      <canvas id="genderChart"></canvas>
      <p class="card-text mt-3"><i class="fa-solid fa-users"></i> Total Students: <?php echo $_smarty_tpl->getValue('studentCount');?>
</p>
    </div>

  </div>
</body>

</html><?php }
}
