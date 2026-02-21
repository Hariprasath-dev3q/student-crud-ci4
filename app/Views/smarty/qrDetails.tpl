<!DOCTYPE html>
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
            <p><strong>Name:</strong> {$staffDetails.teacher_name}</p>
            {* <p><strong>Department:</strong> {$staffDetails.department|default:'N/A'}</p> *}
          </div>
          <div class="col-md-6">
            <p><strong>Email:</strong> {$staffDetails.email|default:'N/A'}</p>
            {* <p><strong>Mobile:</strong> {$staffDetails.mobile|default:'N/A'}</p> *}
          </div>
        </div>
      </div>
    </div>

    
    <div class="card shadow-lg border-0">
      <div class="card-body">
        <h4 class="card-title text-success mb-3">🎓 Students Under This Staff</h4>

        {if $studentDetails|@count > 0}
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
                {foreach $studentDetails as $index => $student}
                  <tr>
                    <td>{$index+1}</td>
                    <td >{$student.fname} {$student.lname}</td>
                    <td>{$student.gender}</td>
                    <td>{$student.department}</td>
                  </tr>
                {/foreach}
              </tbody>
            </table>
          </div>
        {else}
          <div class="alert alert-warning">
            No students assigned.
          </div>
        {/if}

      </div>
    </div>

  </div>

</body>

</html>