<?php
/* Smarty version 5.7.0, created on 2026-02-21 13:00:08
  from 'file:qrDetails.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_6999ac580c60e1_12738057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '807f1b9b2d13a17ad6d6f04e24c6c2fd079e666a' => 
    array (
      0 => 'qrDetails.tpl',
      1 => 1771678803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6999ac580c60e1_12738057 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\wamp64\\www\\student-login\\app\\Views\\smarty';
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff QR Details</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container py-5">

    <div class="card shadow-lg border-0 mb-4">
      <div class="card-body">
        <h3 class="card-title text-primary mb-3">👨‍🏫 Staff Details</h3>

        <div class="row">
          <div class="col-md-6">
            <p><strong>Name:</strong> <?php echo $_smarty_tpl->getValue('staffDetails')['teacher_name'];?>
</p>
                      </div>
          <div class="col-md-6">
            <p><strong>Email:</strong> <?php echo (($tmp = $_smarty_tpl->getValue('staffDetails')['email'] ?? null)===null||$tmp==='' ? 'N/A' ?? null : $tmp);?>
</p>
                      </div>
        </div>
      </div>
    </div>

    
    <div class="card shadow-lg border-0">
      <div class="card-body">
        <h4 class="card-title text-success mb-3">🎓 Students Under This Staff</h4>

        <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('studentDetails')) > 0) {?>
          <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
              <thead class="table-dark">
                <tr>
                  <th>S.No</th>
                  <th >Student Name</th>
                  <th>Gender</th>
                  <th>Department</th>
                </tr>
              </thead>
              <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('studentDetails'), 'student', false, 'index');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('index')->value => $_smarty_tpl->getVariable('student')->value) {
$foreach0DoElse = false;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->getValue('index')+1;?>
</td>
                    <td ><?php echo $_smarty_tpl->getValue('student')['fname'];?>
 <?php echo $_smarty_tpl->getValue('student')['lname'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('student')['gender'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('student')['department'];?>
</td>
                  </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
              </tbody>
            </table>
          </div>
        <?php } else { ?>
          <div class="alert alert-warning">
            No students assigned.
          </div>
        <?php }?>

      </div>
    </div>

  </div>

</body>

</html><?php }
}
