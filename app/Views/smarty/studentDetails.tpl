<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Table</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="{$base_url}css/style.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    var base_url='{$base_url}';
  </script>
  <script src="{$base_url}js/student-form.js"></script>
  <script src="{$base_url}js/student-management.js"></script>


</head>

<body>

  {include file="studentHeader.tpl"}

  <sidebar>
    <div class="list-group">
      <a href="{$base_url}studentform/display" class="list-group-item list-group-item-action active"
        aria-current="true">
        <i class="fa-solid fa-user-plus"></i> Add student
      </a>
      <a href="{$base_url}insertData/display" class="list-group-item list-group-item-action">
        <i class="fa-solid fa-file-import"></i>Import file</a>
    </div>
  </sidebar>

  <div class="container main-content mt-3">
    <div class="col-md-12 mb-3 d-flex ">
      <div class="d-flex justify-content-start">
        <a href="{$addUserUrl}" class="btn btn-primary mb-3 text-decoration-none text-white">Add Student</a>
      </div>
      <div class="input-group ms-3 mb-3 w-25">
        <input type="text" class="form-control" id="globalSearchData" name="globalSearchData" placeholder="Search" onkeyup="globalSearch()" >
      </div>
    </div>
  </div>

  <div id="student-container" class="container main-content custom-scroll mt-3">
    {include file="studentDetails_partial.tpl"}
  </div>

</body>

</html>