// Open edit modal with existing data
$(document).on("click", ".editNews", function () {
  let newsId = $(this).data("id");
  let newsTitle = $(this).data("title");
  let newsContent = $(this).data("content");
  let newsImage = $(this).data("image");
  let newsDate = $(this).data("date");

  // Debugging logs
  console.log("News ID:", newsId);
  console.log("Title:", newsTitle);
  console.log("Content:", newsContent);
  console.log("Image URL:", newsImage);
  console.log("Date:", newsDate);

  $("#editNewsId").val(newsId);
  $("#editNewsTitle").val(newsTitle);
  $("#editNewsContent").val(newsContent);
  $("#editNewsDate").val(newsDate);

  if (newsImage) {
    console.log("Setting image preview:", newsImage);
    $("#editImagePreview").attr("src", newsImage);
  } else {
    console.log("No image found, setting default image.");
    $("#editImagePreview").attr("src", "img/ispsc.png"); // Default image
  }

  $("#editNewsModal").modal("show");
});

// Submit edit form
$("#editNewsForm").submit(function (event) {
  event.preventDefault();

  let formData = new FormData(this);

  $.ajax({
    url: "backend/edit_news.php",
    method: "POST",
    data: formData,
    dataType: "json",
    contentType: false,
    processData: false,
    success: function (response) {
      console.log("Update Response:", response);

      if (response.no_changes) {
        Swal.fire({
          title: "No Changes Detected",
          text: "No updates were made as no changes were found.",
          icon: "info",
          timer: 1500,
          showConfirmButton: false,
        });
      } else if (response.success) {
        Swal.fire({
          title: "Updated!",
          text: "News has been updated.",
          icon: "success",
          timer: 1500,
          showConfirmButton: false,
        }).then(() => {
          $("#editNewsModal").modal("hide"); // Close modal
          fetchNews(); // Refresh table
        });
      } else {
        Swal.fire(
          "Error!",
          "Failed to update news. Please try again.",
          "error"
        );
      }
    },
    error: function (error) {
      console.error("Error updating news:", error);
      Swal.fire(
        "Error!",
        "Failed to update news due to a server issue.",
        "error"
      );
    },
  });
});
