$(document).ready(function () {
    $.ajax({
      url: "backend/fetch_news.php", // PHP script to fetch news
      method: "GET",
      dataType: "json",
      success: function (news) {
        let newsContainer = $("#news-container");
        newsContainer.empty(); // Clear existing content
  
        if (news.length > 0) {
          news.forEach(function (item) {
            let newsItem = `
              <div class="card mb-3">
                <img src="${item.image}" class="card-img-top" alt="${item.title}">
                <div class="card-body">
                  <h5 class="card-title">${item.title}</h5>
                  <p class="card-text">${item.content}</p>
                  <p class="text-muted">${item.date_posted}</p>
                </div>
              </div>`;
            newsContainer.append(newsItem);
          });
        } else {
          newsContainer.html("<p>No news available.</p>");
        }
      },
      error: function () {
        $("#news-container").html("<p>Error loading news.</p>");
      }
    });
  });
  