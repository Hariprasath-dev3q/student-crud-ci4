<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Profile</title>
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
  <script src="{$base_url}js/student-form.js"></script>

  <link href="{$base_url}css/style.css" rel="stylesheet">

</head>

<body>
  {include file="studentHeader.tpl"}
  <div class="container-fluid mt-5 main-content">
  <sidebar>
      <div class="list-group">
        <a href="{$base_url}studentform/display" class="list-group-item list-group-item-action active" aria-current="true">
          <i class="fa-solid fa-user-plus"></i> Add student
        </a>
        <a href="{$base_url}insertData/display" class="list-group-item list-group-item-action">
          <i class="fa-solid fa-file-import"></i>Import file</a>
      </div>
    </sidebar>
    <div class="card w-50 profile-card">
      <div class="card-header ">

        Staff Profile
      </div>

      <div class="card-body">
        <figure>
          <figcaption class="blockquote-footer">
            <img src="{$base_url}images/img2.jpg" alt="Profile" class="rounded-circle me-2 custom-header-img mt-2 mb-2"
              style="width: 60px; height: 60px;">
            <div class="row">
              <div class="col-md-6">
                <p class="text-black"><span class="label text-black">Staff Name:</span> {$studentData.teacher_name|default:'N/A'}</p>
              </div>
              <div class="col-md-6">
                <p class="text-black"><span class="label text-black">Email:</span> {$studentData.email|default:"N/A"}</p>
              </div>
              <div class="col-md-6">
                <p class="text-black"><span class="label text-black">Staff ID:</span> {$studentData.staffId|default:"N/A"}</p>
              </div>
            </div>
          </figcaption>
        </figure>
      </div>
    </div>


  </div>
</body>

</html>