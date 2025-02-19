function fetchNews() {
  $.ajax({
    url: "backend/fetch_news.php",
    method: "GET",
    dataType: "json",
    success: function (newsData) {
      // Sort manually in case backend doesn't return in correct order
      newsData.sort((b, a) => a.id - b.id);

      let tableContent = "";
      newsData.forEach((news) => {
        tableContent += `
                    <tr>
                        <td>${news.title}</td>
                        <td>${news.content}</td>
                        <td><img src="${news.image}" alt="News Image" width="80"></td>
                        <td>${news.date_posted}</td>
                        <td>
                            <button class="btn btn-warning btn-sm  editNews" 
                                data-id="${news.id}" 
                                data-title="${news.title}" 
                                data-content="${news.content}" 
                                data-image="${news.image}" 
                                data-date="${news.date_posted}">Edit</button>
                            <button class="btn btn-danger btn-sm deleteNews" data-id="${news.id}">Delete</button>
                        </td>
                    </tr>`;
      });
      $("#newsTableBody").html(tableContent);
    },
    error: function (error) {
      console.error("Error fetching news:", error);
    },
  });
}

// Ensure fetchNews runs when the page loads
$(document).ready(function () {
  fetchNews();
});
