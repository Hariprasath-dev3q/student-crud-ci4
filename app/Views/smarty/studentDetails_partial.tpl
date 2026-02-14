<input type="hidden" id="current-page" value="{$pager->getCurrentPage()}" />
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
      <th scope="col">TeacherID</th>
      <th scope="col">TeacherName</th>
      <th scope="col">File</th>
      <th scope="col">City</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-nowrap">
    {if empty($items)}
      <tr>
        <td colspan="15" class="text-center">{$no_data}</td>
      </tr>
    {else}
      {assign var="itemsPerPage" value=4}
      {assign var="currentPage" value=$pager->getCurrentPage()}
      {assign var="count" value=($currentPage - 1) * $itemsPerPage + 1}
      {foreach $items as $item}
        <tr>
          <td>{$count++}</td>
          <td>{$item.rollNo}</td>
          <td>{$item.fname} {$item.lname}</td>
          <td>{$item.father_name}</td>
          <td>{$item.dob}</td>
          <td>{$item.mobile}</td>
          <td>{$item.email}</td>
          <td>{$item.password}</td>
          <td>{$item.gender}</td>
          <td>{$item.department}</td>
          <td>{$item.course}</td>
          <td>{$item.teacher_id}</td>
          <td>{$item.teacher_name}</td>
          <td><img src="{$base_url}{$item.file}" alt="item Image"></td>
          <td>{$item.city}</td>
          <td>{$item.address}</td>
          <td>
            <a href="{$editUrl}/{$item.id}" class="me-2"><i class="fa-solid fa-pen-to-square custom-edit-icon"></i></a>
            <a href="javascript:void(0);" onclick="deleteOne('{$item.id}','{$item.file}')"><i
                class="fa-solid fa-trash custom-del-icon"></i></a>
          </td>
        </tr>

      {/foreach}
    {/if}
  </tbody>
</table>

{assign var=pageCount value=$pager->getPageCount()}
{assign var=currentPage value=$pager->getCurrentPage()}

{if $pageCount > 1}
  <div class="dropdown">
    <select id="pageSelector">
      {for $i=1 to $pageCount}
        <option value="{$i}" {if $i == $currentPage} selected="selected" {/if}>Page {$i}</option>
      {/for}
    </select>
  </div>
{/if}