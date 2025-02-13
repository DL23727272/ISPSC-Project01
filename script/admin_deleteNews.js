$(document).on("click", ".deleteNews", function () {
  let newsId = $(this).data("id");

  Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#3085d6",
      confirmButtonText: "Yes, delete it!"
  }).then((result) => {
      if (result.isConfirmed) {
          $.ajax({
              url: "backend/delete_news.php",
              method: "POST",
              data: { id: newsId },
              dataType: "json",
              success: function (response) {
                  if (response.success) {
                      Swal.fire("Deleted!", "The news has been deleted.", "success");
                      fetchNews(); // Refresh news list
                  } else {
                      Swal.fire("Error!", "Failed to delete news.", "error");
                  }
              },
              error: function (error) {
                  console.error("Error deleting news:", error);
                  Swal.fire("Error!", "Failed to delete news due to a server issue.", "error");
              }
          });
      }
  });
});
