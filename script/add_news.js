$(document).ready(function () {
  // Ensure fetchNews is globally available
  function refreshNews() {
    if (typeof fetchNews === "function") {
      fetchNews(); // Call fetchNews from fetch_news.js
    } else {
      console.error(
        "fetchNews function not found. Make sure fetch_news.js is loaded."
      );
    }
  }

  // Handle form submission
  $("#newsForm").submit(function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
      url: "backend/add_news.php",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
    })
      .done(function (response) {
        let result = JSON.parse(response);
        if (result.success) {
          $("#addNewsModal").modal("hide");
          $("#newsForm")[0].reset();

          // ✅ Show SweetAlert success message
          Swal.fire({
            icon: "success",
            title: "News Added!",
            text: "The latest news has been updated.",
            timer: 2000,
            showConfirmButton: false,
          });

          // ✅ Refresh the news content
          setTimeout(refreshNews, 1000);
        } else {
          // ❌ Show SweetAlert error message
          Swal.fire({
            icon: "error",
            title: "Error!",
            text: "Error adding news: " + result.error,
          });
        }
      })
      .fail(function () {
        Swal.fire({
          icon: "error",
          title: "Oops!",
          text: "Failed to add news. Please try again.",
        });
      });
  });
});
