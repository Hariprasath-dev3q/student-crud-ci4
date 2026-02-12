<?php
/* Smarty version 5.7.0, created on 2026-02-12 11:48:00
  from 'file:studentDetails_partial.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.7.0',
  'unifunc' => 'content_698dbdf08ff0c4_86181662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa03b7e59449eb83c6545a36d4e72b4e0975b35d' => 
    array (
      0 => 'studentDetails_partial.tpl',
      1 => 1770896833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_698dbdf08ff0c4_86181662 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\wamp64\\www\\student-login\\app\\Views\\smarty';
?><input type="hidden" id="current-page" value="<?php echo $_smarty_tpl->getValue('pager')->getCurrentPage();?>
" />
<table class="table bordercurrent-page border-dark table-responsive custom-scroll">
  <thead class="table-success text-nowrap">
    <tr class="">
      <th scope="col">S.No</th>
      <th scope="col">Roll.No</th>
      <th scope="col">UserName</th>
      <th scope="col">Father</th>
      <th scope="col">DOB</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Gender</th>
      <th scope="col">Department</th>
      <th scope="col">Course</th>
      <th scope="col">File</th>
      <th scope="col">City</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-nowrap">
    <?php if (( !$_smarty_tpl->hasVariable('items') || empty($_smarty_tpl->getValue('items')))) {?>
      <tr>
        <td colspan="15" class="text-center"><?php echo $_smarty_tpl->getValue('no_data');?>
</td>
      </tr>
    <?php } else { ?>
      <?php $_smarty_tpl->assign('itemsPerPage', 4, false, NULL);?>
      <?php $_smarty_tpl->assign('currentPage', $_smarty_tpl->getValue('pager')->getCurrentPage(), false, NULL);?>
      <?php $_smarty_tpl->assign('count', ($_smarty_tpl->getValue('currentPage')-1)*$_smarty_tpl->getValue('itemsPerPage')+1, false, NULL);?>
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('items'), 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
        <tr>
          <td><?php echo $_smarty_tpl->getVariable('count')->postIncDec('++');?>
</td>
          <td><?php echo $_smarty_tpl->getValue('item')['rollNo'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('item')['fname'];?>
 <?php echo $_smarty_tpl->getValue('item')['lname'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('item')['father_name'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('item')['dob'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('item')['mobile'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('item')['email'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('item')['password'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('item')['gender'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('item')['department'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('item')['course'];?>
</td>
          <td><img src="<?php echo $_smarty_tpl->getValue('base_url');
echo $_smarty_tpl->getValue('item')['file'];?>
" alt="item Image"></td>
          <td><?php echo $_smarty_tpl->getValue('item')['city'];?>
</td>
          <td><?php echo $_smarty_tpl->getValue('item')['address'];?>
</td>
          <td>
            <a href="<?php echo $_smarty_tpl->getValue('editUrl');?>
/<?php echo $_smarty_tpl->getValue('item')['id'];?>
" class="me-2"><i class="fa-solid fa-pen-to-square custom-edit-icon"></i></a>
            <a href="javascript:void(0);" onclick="deleteOne('<?php echo $_smarty_tpl->getValue('item')['id'];?>
','<?php echo $_smarty_tpl->getValue('item')['file'];?>
')"><i
                class="fa-solid fa-trash custom-del-icon"></i></a>
          </td>
        </tr>

      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }?>
  </tbody>
</table>

<?php $_smarty_tpl->assign('pageCount', $_smarty_tpl->getValue('pager')->getPageCount(), false, NULL);
$_smarty_tpl->assign('currentPage', $_smarty_tpl->getValue('pager')->getCurrentPage(), false, NULL);?>

<?php if ($_smarty_tpl->getValue('pageCount') > 1) {?>
  <div class="dropdown">
    <select id="pageSelector">
      <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getValue('pageCount')+1 - (1) : 1-($_smarty_tpl->getValue('pageCount'))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <option value="<?php echo $_smarty_tpl->getValue('i');?>
" <?php if ($_smarty_tpl->getValue('i') == $_smarty_tpl->getValue('currentPage')) {?> selected="selected" <?php }?>>Page <?php echo $_smarty_tpl->getValue('i');?>
</option>
      <?php }
}
?>
    </select>
  </div>
<?php }
}
}
