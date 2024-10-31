// var keyword = document.getElementById("keyword");
// var tombolCari = document.getElementById("tombol-cari");
// var content = document.getElementById("content");

// keyword.addEventListener("keyup", function () {
//   //   console.log(keyword.value);
//   // buat objek ajax

//   var xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function () {
//     if (this.readyState == 4 && this.status == 200) {
//       content.innerHTML = this.responseText;
//     }
//   };
//   xhr.open("GET", "ajax/student.php?cari=" + keyword.value, true);
//   xhr.send();
// });
$(document).ready(function () {
  $("#keyword").on("keyup", function () {
    $("#content").load("search/Category.php?cari=" + $("#keyword").val());
  });
});
