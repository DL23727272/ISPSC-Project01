$(document).ready(function () {
    // Fetch and display news
    function fetchNews() {
        $.ajax({
            url: "backend/fetch_news.php",
            type: "GET",
            success: function (response) {
                let newsList = $("#newsList");
                newsList.empty();

                let newsData = JSON.parse(response);
                newsData.forEach(news => {
                    let newsItem = `
                    <div class="list-group-item">
                        <h5>${news.title}</h5>
                        <p>${news.description}</p>
                        ${news.image ? `<img src="${news.image}" class="img-fluid rounded" alt="News Image">` : ''}
                        <small class="text-muted">Posted on ${news.created_at}</small>
                    </div>`;
                    newsList.append(newsItem);
                });
            }
        });
    }

    fetchNews();

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
            success: function (response) {
                let result = JSON.parse(response);
                if (result.success) {
                    $("#addNewsModal").modal("hide");
                    $("#newsForm")[0].reset();
                    fetchNews();
                } else {
                    alert("Error adding news: " + result.error);
                }
            }
        });
    });
});
