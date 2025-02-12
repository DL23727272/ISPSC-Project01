  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".ispsc-logo").forEach(function (element) {
      element.innerHTML = element.textContent
        .split(" ")
        .map(word => `<span>${word.charAt(0)}</span>${word.slice(1)}`)
        .join(" ");
    });
  });

