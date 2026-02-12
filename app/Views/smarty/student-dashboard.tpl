<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    base_url = '{$base_url}';
    console.log("Base URL:", base_url);
  </script>
  <script src="{$base_url}js/student-management.js"></script>
  <link href="{$base_url}css/style.css" rel="stylesheet">

  {* <style>
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
  *}

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
  <div class="container mt-5 main-content">

    <h2>Welcome to the Student Dashboard {$studentData.fname|default:"Guest"}</h2>
  </div>
</body>

</html>