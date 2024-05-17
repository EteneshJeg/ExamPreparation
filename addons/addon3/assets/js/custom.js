$(".radio input").on("mouseenter", function () {
  var src = $(this).siblings("img").attr("src").replace(".png", ".gif");
  $(this).siblings("img").attr("src", src);
});
$(".radio input").on("mouseleave", function () {
  var src = $(this).siblings("img").attr("src").replace(".gif", ".png");
  $(this).siblings("img").attr("src", src);
});

$(".radio input").on("click", function () {
  $(".radio input").siblings("span").css({
    opacity: 1,
    top: "-5px",
  });
  $(".radio input").css("pointer-events", "none");
});
