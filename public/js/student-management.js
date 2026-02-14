$(document).ready(function () {
  $(".custom-eye").on("mouseenter", function () {
    $("#password").attr("type", "text");
  });

  $(".custom-eye").on("mouseleave", function () {
    $("#password").attr("type", "password");
  });

  $(document).on("click", "#custom-eye", function () {
    const passwordInput = $("#password");
    const type =
      passwordInput.attr("type") === "password" ? "text" : "password";
    passwordInput.attr("type", type);

    $(this).toggleClass("fa-eye fa-eye-slash");
  });
});

var div = $("<div></div>");
var feedback = $("#feedback");

function showSuccess(message) {
  $("#feedback")
    .removeClass("alert-danger")
    .addClass("alert alert-success")
    .text(message);
  $(this).css("border", "1px solid green");
  feedback.append(div);
}

function showError(message) {
  $("#feedback")
    .removeClass("alert-success")
    .addClass("alert alert-danger")
    .text(message);
  $(this).css("border", "1px solid red");
  feedback.append(div);
}

function studentLogin(e) {
  var isValid = true;
  e.preventDefault();

  const email = $("#email").val().trim();
  const password = $("#password").val().trim();

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  $("#feedback").removeClass("alert alert-success alert-danger").text("");
  $("#email, #password").css("border", "");

  if (!emailPattern.test(email)) {
    $("#email").css("border", "1px solid red");
    showError("Please enter a valid email.");
    isValid = false;
  } else {
    $("#email").css("border", "1px solid green");
  }

  if (password.length < 5) {
    $("#password").css("border", "1px solid red");
    showError("Password must be at least 5 characters.");
    isValid = false;
    return;
  } else {
    $("#password").css("border", "1px solid green");
  }

  if (!isValid) {
    return;
  }

  $.ajax({
    url: base_url + "studentAuth/userLogin",
    method: "POST",
    dataType: "json",
    data: {
      email: email,
      password: password,
    },
    success: function (response) {
      console.log(response);
      //return;
      if (response.status === 1) {
        showSuccess("Login successful...");
        setTimeout(function () {
          window.location.href = base_url + "studentAuth/dashboard";
        }, 1000);
      } else {
        showError(response.message);
      }
    },
    error: function () {
      showError("Something went wrong. Try again.");
    },
  });
}

function studentSignup(e) {
  e.preventDefault();
  var isValid = true;
  const email = $("#email").val().trim();
  const password = $("#password").val().trim();

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  $("#feedback").removeClass("alert alert-success alert-danger").text("");
  $("#email, #password").css("border", "");

  let teacherName = $("#teachername").val();

  if (!teacherName) {
    $("#teachername").css("border", "1px solid red");
    showError("Please select a teacher.");
    isValid = false;
  } else {
    $("#teachername").css("border", "1px solid green");
  }

  if (!emailPattern.test(email)) {
    $("#email").css("border", "1px solid red");
    showError("Please enter a valid email.");
    isValid = false;
  } else {
    $("#email").css("border", "1px solid green");
  }

  if (password.length < 5) {
    $("#password").css("border", "1px solid red");
    showError("Password must be at least 5 characters.");
    isValid = false;
    return;
  } else {
    $("#password").css("border", "1px solid green");
  }

  if (!isValid) {
    return;
  }

  $.ajax({
    url: base_url + "studentAuth/signup",
    method: "POST",
    dataType: "json",
    data: {
      email: email,
      password: password,
      teacherName: teacherName,
    },
    success: function (response) {
      console.log(response);
      //return;
      if (response.status === 1) {
        showSuccess("Signup successful...");
        setTimeout(function () {
          window.location.href = base_url + "/";
        }, 1000);
      } else {
        showError(response.message);
      }
    },
    error: function () {
      showError("Something went wrong. Try again.");
    },
  });
}

function logout(e) {
  e.preventDefault();
  console.log("Logout clicked");
  $.ajax({
    url: base_url + "studentAuth/logout",
    method: "POST",
    success: function (response) {
      window.location.href = base_url + "/";
    },
    error: function (xhr, status, error) {
      alert("Logout failed. Please try again.");
    },
  });
}


