document.getElementById("page1").addEventListener("click", function () {
  showPage("page1-content");
});

document.getElementById("page2").addEventListener("click", function () {
  showPage("page2-content");
});

// Функция для отображения выбранной страницы и скрытия остальных
function showPage(pageId) {
  // Получаем все элементы с классом "page-content"
  var pages = document.getElementsByClassName("page-content");
  // Проходимся по каждому элементу и скрываем его
  for (var i = 0; i < pages.length; i++) {
    pages[i].classList.remove("active");
  }
  // Отображаем выбранную страницу
  document.getElementById(pageId).classList.add("active");
}
