$(document).on("scroll", function () {
  const windowHeight = $(window).height();
  const scrollValue = $(this).scrollTop();

  const $webl = $(".web.l");
  const weblFromTop = $webl.offset().top;
  const weblHeight = $webl.outerHeight();

  const $webll = $(".web.ll");
  const webllFromTop = $webll.offset().top;
  const webllHeight = $webll.outerHeight();

  const $webp = $(".web.p");
  const webpFromTop = $webp.offset().top;
  const webpHeight = $webp.outerHeight();

  const $webpp = $(".web.pp");
  const webppFromTop = $webpp.offset().top;
  const webppHeight = $webpp.outerHeight();

  const $aboutp = $(".about.p");
  const aboutpFromTop = $aboutp.offset().top;
  const aboutpHeight = $aboutp.outerHeight();

  const $aboutpp = $(".about.pp");
  const aboutppFromTop = $aboutpp.offset().top;
  const aboutppHeight = $aboutpp.outerHeight();

  const $aboutl = $(".about.l");
  const aboutlFromTop = $aboutl.offset().top;
  const aboutlHeight = $aboutl.outerHeight();

  const $aboutll = $(".about.ll");
  const aboutllFromTop = $aboutll.offset().top;
  const aboutllHeight = $aboutll.outerHeight();

  const $aboutfive = $(".about.five");
  const aboutfiveFromTop = $aboutfive.offset().top;
  const aboutfiveHeight = $aboutfive.outerHeight();

  const $webfive = $(".web.five");
  const webfiveFromTop = $webfive.offset().top;
  const webfiveHeight = $webfive.outerHeight();

  if (scrollValue > aboutfiveFromTop + webfiveHeight - windowHeight) {
    $aboutfive.addClass("active");
  }
  if (scrollValue > webfiveFromTop + webfiveHeight - windowHeight) {
    $webfive.addClass("active");
  }

  if (scrollValue > weblFromTop + weblHeight - windowHeight) {
    $webl.addClass("active");
  }
  if (scrollValue > webllFromTop + webllHeight - windowHeight) {
    $webll.addClass("active");
  }
  if (scrollValue > webpFromTop + webpHeight - windowHeight) {
    $webp.addClass("active");
  }
  if (scrollValue > webppFromTop + webppHeight - windowHeight) {
    $webpp.addClass("active");
  }
  if (scrollValue > aboutpFromTop + weblHeight - windowHeight) {
    $aboutp.addClass("active");
  }
  if (scrollValue > aboutppFromTop + webllHeight - windowHeight) {
    $aboutpp.addClass("active");
  }
  if (scrollValue > aboutlFromTop + webpHeight - windowHeight) {
    $aboutl.addClass("active");
  }
  if (scrollValue > aboutllFromTop + webppHeight - windowHeight) {
    $aboutll.addClass("active");
  }

  if (scrollValue < 100) {
    $("div").removeClass("active");
  }
});

$(".nav0").on("click", function () {
  $("body, html").animate(
    {
      scrollTop: $("header").offset().top,
    },
    2000
  );
  $(".fas, nav").toggleClass("off");
});
$(".nav1").on("click", function () {
  $("body, html").animate(
    {
      scrollTop: $(".features").offset().top,
    },
    2000
  );
  $(".fas, nav").toggleClass("off");
});
$(".nav2").on("click", function () {
  $("body, html").animate(
    {
      scrollTop: $(".portfolio").offset().top,
    },
    2000
  );
  $(".fas, nav").toggleClass("off");
});
$(".tutaj").on("click", function () {
  $("body, html").animate(
    {
      scrollTop: $(".portfolio").offset().top,
    },
    2000
  );
});
$(".nav3").on("click", function () {
  $("body, html").animate(
    {
      scrollTop: $(".slogan").offset().top + 18,
    },
    1500
  );
  $(".fas, nav").toggleClass("off");
});
$(".nav4").on("click", function () {
  $("body, html").animate(
    {
      scrollTop: $(".hobby").offset().top + 25,
    },
    1000
  );
  $(".fas, nav").toggleClass("off");
});
$(".nav5").on("click", function () {
  $("body, html").animate(
    {
      scrollTop: $(".contact").offset().top,
    },
    1000
  );
  $(".fas, nav").toggleClass("off");
});

$(".burger").on("click", function () {
  $(".fas, nav").toggleClass("off");
});

$(".moreProject").on("click", function () {
  $(".xxx, .more").toggleClass("less");
});

const status = document.querySelector(".status");
const statusBar = () => {
  currentScroll = Math.round(
    (window.scrollY /
      (document.documentElement.offsetHeight - window.innerHeight)) *
      100
  );
  status.style.width = currentScroll + "%";
};

window.addEventListener("scroll", statusBar);
