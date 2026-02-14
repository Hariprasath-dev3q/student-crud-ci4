<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="{$base_url}css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script>
    base_url = '{$base_url}';
    console.log("Base URL:", base_url);
  </script>
  <script src="{$base_url}js/student-management.js"></script>
  <link href="{$base_url}css/style.css" rel="stylesheet">

  {* <style>
    .login-form {
      background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%) !important;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    #password{

    }
    .custom-eye{
      position: absolute;
      right: 50px;
      top: 214px;
      cursor: pointer;
    }
  </style> *}

</head>

<body>
  <div class="container mt-5 w-25 login-form">
    <h2 class="mb-4 text-center">Staff Signup</h2>
    <form action="/student/login" method="post" id="loginForm">
      <div class="mb-3">
        <label for="email" class="form-label">Teacher Name</label>
        <input type="text" class="form-control" id="teachername" name="teachername" value="" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Create Password</label>
        <input type="password" class="form-control" id="password" name="password" maxlength="8" required>
        <i class="fa-solid fa-eye " id="custom-eye"></i>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="{$cookieEmail|default: ''}" required>
      </div>
      {* <div class="form-check mb-3">
        <input type="checkbox" name="remember" id="remember" class="form-check-input" />
        <label for="remember" class="form-check-label">Remember me</label>
      </div> *}
      <div class="mb-3">Already have an account?
        <a href="{$base_url}" class="">Login</a>
      </div>
      <button type="button" class="btn btn-primary" onclick="studentSignup(event)">Signup</button>
      <span id="loginError" class="text-danger ms-3">{$error}</span>
    </form>

    <div id="feedback" class="mt-3"></div>
  </div>
</body>

</html>