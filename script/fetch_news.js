// Define fetchNews globally
window.fetchNews = function () {
  $.ajax({
    url: "backend/fetch_news.php",
    method: "GET",
    dataType: "json",
    success: function (news) {
      let newsContainer = $("#news-container");
      newsContainer.empty();

      if (news.length > 0) {
        news.forEach(function (item) {
          let newsItem = ` <div class="my-3" style="
                position: relative;
                border-radius: 8px;
                overflow: hidden;
                background: #1c1c1c;
                transition: box-shadow 0.5s ease-in-out;
            ">
            

              <img src="${item.image}" alt="${item.title}" style="
                  width: 100%;
                  height: 250px;
                  object-fit: cover;
                  >

              <div style="
                  position: relative;
                  z-index: 2;
                  
                  
              ">
              
              
                  <div class="p-3">

                  <h1 class="fst-italic fs-6" style="color: #ffc107"><i class="fa-solid fa-bullhorn" style="color: #ffc107"></i> Announcement</h1>

                  <div class="gap-2 d-flex">
                  
                  <img src="img/ispsc.png" width="50" height="50"/>
                  <div>

                <a style="color: #ffc107; font-weight: bold;" href="view_news.php?id=${item.id}">${item.title}</a>

                  
                    <p style="color: #d3d3d3; font-size: 0.85rem;"><i class="fa-solid fa-calendar"></i>   ${item.date_posted}</p>
                  </div>

                  </div>
                  </div>


                  
                  
             
                 
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
    },
  });
};

// Run fetchNews when the page loads
$(document).ready(fetchNews);
