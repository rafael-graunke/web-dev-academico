var collapse = document.getElementById("sidebar-collapse");

collapse.onclick = function () {
    var sidebar = document.getElementById("sidebar");
    var caret = document.getElementById("caret");
    sidebar.classList.toggle("active");
    caret.classList.toggle("active");
}