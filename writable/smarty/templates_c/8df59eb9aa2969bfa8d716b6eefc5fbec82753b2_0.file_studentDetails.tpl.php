<?php
/* Smarty version 5.7.0, created on 2026-02-18 10:31:23
  from 'file:studentDetails.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_699594fbaae053_24122740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8df59eb9aa2969bfa8d716b6eefc5fbec82753b2' => 
    array (
      0 => 'studentDetails.tpl',
      1 => 1771410551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:studentHeader.tpl' => 1,
    'file:studentDetails_partial.tpl' => 1,
  ),
))) {
function content_699594fbaae053_24122740 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\wamp64\\www\\student-login\\app\\Views\\smarty';
?><!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Table</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  <?php echo '</script'; ?>
>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="<?php echo $_smarty_tpl->getValue('base_url');?>
css/style.css" rel="stylesheet">
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    var base_url='<?php echo $_smarty_tpl->getValue('base_url');?>
';
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('base_url');?>
js/student-form.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('base_url');?>
js/student-management.js"><?php echo '</script'; ?>
>


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

  <div class="container main-content mt-3">
    <div class="col-md-12 mb-3 d-flex ">
      <div class="d-flex justify-content-start">
        <a href="<?php echo $_smarty_tpl->getValue('addUserUrl');?>
" class="btn btn-primary mb-3 text-decoration-none text-white">Add Student</a>
      </div>
      <div class="input-group ms-3 mb-3 w-25">
        <input type="text" class="form-control" id="globalSearchData" name="globalSearchData" placeholder="Search" onkeyup="globalSearch()" >
      </div>
    </div>
  </div>

  <div id="student-container" class="container main-content custom-scroll mt-3">
    <?php $_smarty_tpl->renderSubTemplate("file:studentDetails_partial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  </div>

</body>

</html><?php }
}
