<?php
/* Smarty version 5.7.0, created on 2026-02-19 07:08:33
  from 'file:studentFormDetails.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6996b6f127f446_33458035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64cc7a6ca88a22c7250eb3291695e7ee3ca7c84b' => 
    array (
      0 => 'studentFormDetails.tpl',
      1 => 1771484716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:studentHeader.tpl' => 1,
    'file:studentFormDetails_partial.tpl' => 1,
  ),
))) {
function content_6996b6f127f446_33458035 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\wamp64\\www\\student-login\\app\\Views\\smarty';
?><!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Student Table</title>

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

  
  <link href="<?php echo $_smarty_tpl->getValue('base_url');?>
css/style.css" rel="stylesheet">
</head>

<body>
  <?php $_smarty_tpl->renderSubTemplate("file:studentHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
  <div class="container-fluid ">
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
    <div class="container-fluid main-content custom-scroll mt-3">
      <div class="col-md-12 mb-3 d-flex justify-content-between">

        <div class="d-flex justify-content-start">

          <form method="post" enctype="multipart/form-data" action="<?php echo $_smarty_tpl->getValue('base_url');?>
insertData/import-excel"
            id="importExcelForm">
            <label class="file-btn btn btn-warning mb-3 ms-3 text-white">
              Import <i class="fa-solid fa-file-import"></i>
              <input type="file" id="excelFile" name="excelFile" accept=".xls,.xlsx" style="display: none;"
                onchange=" if(confirm('Are you sure you want to import this file?')) return importDataJS(event)" />
            </label>
          </form>
          <button class="btn btn-success mb-3 ms-3 text-decoration-none text-white" onclick='exportDataJS()'>Export <i
              class="fas fa-file-excel"></i>
          </button>
          <button class="btn btn-danger mb-3 ms-3" onclick="deleteAllUsers()">Delete <i class="fa-solid fa-trash"></i>
          </button>
          <button class="btn btn-primary mb-3 ms-3 text-decoration-none text-white" onclick="sampleExport()">
            Sample Excel <i class="fa-solid fa-file-lines"></i>
          </button>
        </div>
        <div class="d-flex justify-content-end w-50">
          <?php if ($_smarty_tpl->getValue('error')) {?>
            <div class="alert alert-danger alert-dismissible fade show myAlert w-50" role="alert">
              <?php echo $_smarty_tpl->getValue('error');?>

              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php }?>
          <?php if ($_smarty_tpl->getValue('success')) {?>
            <div class="alert alert-success alert-dismissible fade show myAlert w-50" role="alert">
              <?php echo $_smarty_tpl->getValue('success');?>

              <button type="button" class="btn-close my-alert-height" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php }?>
        </div>
      </div>
      <div id="student-container">
        <?php $_smarty_tpl->renderSubTemplate('file:studentFormDetails_partial.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
      </div>
    </div>
</body>

</html>

<?php }
}
