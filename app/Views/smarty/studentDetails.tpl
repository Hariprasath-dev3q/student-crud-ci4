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

  {* <style>
    .custom-edit-icon {
      color: black;
    }

    .custom-del-icon {
      color: red;
    }

    th,
    td {
      border: 1px solid black !important;
    }

    img {
      width: 150px;
    }

    .pagination {
      margin-top: 20px;

    }

    .dropdown {
      margin-bottom: 20px;
      width: 100dvw;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .dropdown select,
    option {
      padding: 10px 15px;
      border-radius: 5px;
      background-color: #f8f8f8;
      border: 1px solid #ddd;
      color: #333;
    }
    body {
      overflow-x: hidden;
    }

    .custom-dropdown {
      height: auto;
    }

    .dropdown-toggle {
      height: auto;
      padding: 8px 16px !important;
      display: flex;
      align-items: center;
      white-space: nowrap;
    }

    .dropdown-toggle p {
      margin: 0;
    }

    sidebar {
      position: fixed;
      top: 58px;
      left: 0;
      width: 200px;
      height: calc(100% - 58px);
      background-color: #f8f9fa;
      padding: 20px;
    }

    sidebar a {
      transition: 0.2s ease;
    }

    sidebar a:hover {
      transform: translateX(5px);
    }

    .main-content {
      margin-left: 220px;
    }

    .dashboard-header {
      background: linear-gradient(90deg, #4e73df, #224abe);
      color: white;
    }
  </style> *}

</head>

<body>

  {include file="studentHeader.tpl"}
  
  <sidebar>
    <div class="list-group">
      <a href="{$base_url}studentform/" class="list-group-item list-group-item-action active" aria-current="true">
        <i class="fa-solid fa-user-plus"></i> Add student
      </a>
      <a href="{$base_url}insertData/display" class="list-group-item list-group-item-action">
        <i class="fa-solid fa-file-import"></i>Import file</a>
    </div>
  </sidebar>

  <div class="container main-content mt-3">
    <div class="col-md-12 mb-3 d-flex justify-content-between">
      <div class="d-flex justify-content-start">
        <a href="{$addUserUrl}" class="btn btn-primary mb-3 text-decoration-none text-white">Add User</a>
      </div>
    </div>
  </div>
  
  <div id="student-container" class="container main-content custom-scroll mt-3">
    {include file="studentDetails_partial.tpl"}
  </div>

</body>

</html>