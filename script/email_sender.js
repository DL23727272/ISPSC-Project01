$(document).ready(function () {
  $("#contactForms").submit(function (e) {
    e.preventDefault();

    $.ajax({
      url: "backend/email_sender.php",
      type: "POST",
      data: $(this).serialize(),
      dataType: "json",
      success: function (response) {
        console.log("AJAX Success Response:", response);

        if (response.status && response.status === "success") {
          Swal.fire({
            icon: "success",
            title: "Message Sent!",
            text: response.message,
          });
          $("#contactForms")[0].reset();
        } else {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Error sending message: " + response.message,
          });
        }
      },
      error: function (xhr, status, error) {
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Something went wrong. Please try again.",
        });
        console.error("AJAX Error:", status, error);
      },
    });
  });
});
