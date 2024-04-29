var feedback_btn = document.querySelector(".feedback_btn01");
var wrapper = document.querySelector(".wrapper01");
var close_btns = document.querySelectorAll(".close_btn01");
var li_items = document.querySelectorAll("ul li");

feedback_btn.addEventListener("click", function () {
  wrapper.classList.add("active01");
});

close_btns.forEach(function (btn) {
  btn.addEventListener("click", function () {
    wrapper.classList.remove("active01");
  });
});

li_items.forEach(function (item) {
  item.addEventListener("click", function () {
    li_items.forEach(function (item) {
      item.classList.remove("active01");
    });

    item.classList.add("active01");
  });
});