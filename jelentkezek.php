<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Northern Shadows │ Jelentkezek</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./resources/css/style.css">
  <script src="./resources/js/jquery-sls.js"></script>

</head>
<style>
  @font-face {
    font-family: Agbalumo-Regular;
    src: url(./resources/Agbalumo-Regular.ttf);
  }
  @font-face {
    font-family: BebasNeue-Regular;
    src: url(./resources/BebasNeue-Regular.ttf);
  }
  @font-face {
    font-family: LibreBaskerville-Regular;
    src: url(./resources/LibreBaskerville-Regular.ttf);
  }
  @font-face {
    font-family: LibreBaskerville-Bold;
    src: url(./resources/LibreBaskerville-Bold.ttf);
  }
  h1 {
    font-family: BebasNeue-Regular;
  }
  p {
    font-family: LibreBaskerville-Regular;
  }
  body {
    font-family: Open Sans, sans-serif;
  }
  .hero{
    position: relative;
    overflow: hidden;
    height: 500px;
  }
  .hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
  }

  .hero-video video {
    object-fit: cover;
    width: 100%;
    height: 100%;
  }

    /* Adjust spacing and alignment as needed */

    video {
      object-fit: fill;
    }
    i {
  margin-right: 10px;
}
/*----------bootstrap-navbar-css------------*/
.navbar-logo {
  padding: 15px;
  color: #fff;
}
.navbar-mainbg {
  background-color: #a651ce;
  padding: 0px;
}
#navbarSupportedContent {
  overflow: hidden;
  position: relative;
}
#navbarSupportedContent ul {
  padding: 0px;
  margin: 0px;
}
#navbarSupportedContent ul li a i {
  margin-right: 10px;
}
#navbarSupportedContent li {
  list-style-type: none;
  float: left;
}
#navbarSupportedContent ul li a {
  color: rgba(255, 255, 255, 0.5);
  text-decoration: none;
  font-size: 15px;
  display: block;
  padding: 20px 20px;
  transition-duration: 0.6s;
  transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  position: relative;
}
#navbarSupportedContent > ul > li.active > a {
  color: #a651ce;
  background-color: transparent;
  transition: all 0.7s;
}
#navbarSupportedContent a:not(:only-child):after {
  content: "\f105";
  position: absolute;
  right: 20px;
  top: 10px;
  font-size: 14px;
  font-family: "Font Awesome 5 Free";
  display: inline-block;
  padding-right: 3px;
  vertical-align: middle;
  font-weight: 900;
  transition: 0.5s;
}
#navbarSupportedContent .active > a:not(:only-child):after {
  transform: rotate(90deg);
}
.hori-selector {
  display: inline-block;
  position: absolute;
  height: 100%;
  top: 0px;
  left: 0px;
  transition-duration: 0.6s;
  transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  background-color: #fff;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  margin-top: 10px;
}
.hori-selector .right,
.hori-selector .left {
  position: absolute;
  width: 25px;
  height: 25px;
  background-color: #fff;
  bottom: 10px;
}
.hori-selector .right {
  right: -25px;
}
.hori-selector .left {
  left: -25px;
}
.hori-selector .right:before,
.hori-selector .left:before {
  content: "";
  position: absolute;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: #a651ce;
}
.hori-selector .right:before {
  bottom: 0;
  right: -25px;
}
.hori-selector .left:before {
  bottom: 0;
  left: -25px;
}

@media (min-width: 992px) {
  .navbar-expand-custom {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-custom .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-custom .navbar-toggler {
    display: none;
  }
  .navbar-expand-custom .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
}

@media (max-width: 991px) {
  #navbarSupportedContent ul li a {
    padding: 12px 30px;
  }
  .hori-selector {
    margin-top: 0px;
    margin-left: 10px;
    border-radius: 0;
    border-top-left-radius: 25px;
    border-bottom-left-radius: 25px;
  }
  .hori-selector .left,
  .hori-selector .right {
    right: 10px;
  }
  .hori-selector .left {
    top: -25px;
    left: auto;
  }
  .hori-selector .right {
    bottom: -25px;
  }
  .hori-selector .left:before {
    left: -25px;
    top: -25px;
  }
  .hori-selector .right:before {
    bottom: -25px;
    left: -25px;
  }
}

  .btn-primary {
    --bs-btn-color: #fff;
    --bs-btn-bg: #a651ce;
    --bs-btn-border-color: #a651ce;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #4c1466;
    --bs-btn-hover-border-color: #4c1466;
    --bs-btn-focus-shadow-rgb: 49,132,253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #4c1466;
    --bs-btn-active-border-color: #4c1466;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #a651ce;
    --bs-btn-disabled-border-color: #a651ce;
}

</style>
<body lang="en">
<!-- Navigation -->
<nav class="navbar navbar-expand-custom navbar-mainbg">
  <a class="navbar-brand navbar-logo" href="#" style="font-family: Agbalumo-Regular;">Northern Shadows</a>
  <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <div class="hori-selector">
        <div class="left"></div>
        <div class="right"></div>
      </div>
      <li class="nav-item ">
        <a class="nav-link" href="#"><i class="fa-solid fa-house"></i>Kezdőlap</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="szett.html"><i class="fa-solid fa-shirt"></i>Szett</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="elnokok.html"><i class="fa-solid fa-person"></i>Elnökök</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kepek.html"><i class="fa-solid fa-image"></i>Képek</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="jelentkezek.html"><i class="fa-solid fa-check"></i>Jelentkezek</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero" style="padding-top: 20px; color:white; font-weight: 600; ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
         <h1 class="display-4" lang="en" style="font-weight:500" >Üdvözlünk Weboldalunkon!</h1>
        <p class="lead" lang="en">Ismerd meg kis családunkat, és csatlakozz még ma!</p>
        <a href="jelentkezek.html" class="btn btn-primary" lang="en">Jelentkezek</a>
      </div>
    </div>
  </div>
  <div class="hero-video">
    <video autoplay muted loop>
      <source src="./resources/img/vidbackground.mp4" type="video/mp4">
    </video>
  </div>
  
</section>
<br>
<div class="container">
<form action="feldolgozo.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Email cím</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mi a messenger neved és képed?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Hogyan becézhetünk?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
  <div class="form-group">
  <label class="form-label" for="typeNumber">Hány éves vagy?</label>
    <input type="number" id="typeNumber" class="form-control" />
</div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mik a hobbijaid?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mesélj kicsit magadról!(Minimum 7-8 mondat)</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mi az instagram neved? Már ha rendelkezel vele!</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Rendelkezel Discord fiókkal?</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Rendelkezek Discorddal</option>
      <option>Nem rendelkezem Discorddal</option>
      <option>Nem rendelkezem Discorddal, de tudok regisztrálni</option>
      <option>Nem rendelkezem Discorddal és nem szeretnék regisztrálni</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mi az sso neved?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Megvan neked a teamló/teamszett?</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Megvan a ló</option>
      <option>Megvan a szett</option>
      <option>Mindkettő megvan</option>
      <option>Egyik sincs meg</option>
      <option>Pár dolog megvan a szettből, de megvan a ló</option>
      <option>Pár dolog megvan a szettből és nincs meg a ló</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Elolvastál mindent és jól megfontoltad, hogy szeretnél csatlakozni köreinkbe?</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Igen elolvastam mindent és hosszútávra csatlakoznék</option>
      <option>Igen elolvastam mindent de nem hosszútávra csatlakoznék</option>
      <option>Nem, nem olvastam el mindent de szeretnék csatlakozni</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Valamint miért szeretnél csatlakozni köreinkbe?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
<br>
<!-- Products Section -->

<!-- Footer -->
<footer class="footer">
  <div class="container text-center">
    <p lang="en">&copy; 2023 Northern Shadows. Minden jog fenntartva.</p>
  </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/797cc076e5.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./resources/js/scripts.js"></script>
<script>// ---------Responsive-navbar-active-animation-----------
  function test() {
    var tabsNewAnim = $("#navbarSupportedContent");
    var selectorNewAnim = $("#navbarSupportedContent").find("li").length;
    var activeItemNewAnim = tabsNewAnim.find(".active");
    var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    var itemPosNewAnimTop = activeItemNewAnim.position();
    var itemPosNewAnimLeft = activeItemNewAnim.position();
    $(".hori-selector").css({
      top: itemPosNewAnimTop.top + "px",
      left: itemPosNewAnimLeft.left + "px",
      height: activeWidthNewAnimHeight + "px",
      width: activeWidthNewAnimWidth + "px"
    });
    $("#navbarSupportedContent").on("click", "li", function (e) {
      $("#navbarSupportedContent ul li").removeClass("active");
      $(this).addClass("active");
      var activeWidthNewAnimHeight = $(this).innerHeight();
      var activeWidthNewAnimWidth = $(this).innerWidth();
      var itemPosNewAnimTop = $(this).position();
      var itemPosNewAnimLeft = $(this).position();
      $(".hori-selector").css({
        top: itemPosNewAnimTop.top + "px",
        left: itemPosNewAnimLeft.left + "px",
        height: activeWidthNewAnimHeight + "px",
        width: activeWidthNewAnimWidth + "px"
      });
    });
  }
  $(document).ready(function () {
    setTimeout(function () {
      test();
    });
  });
  $(window).on("resize", function () {
    setTimeout(function () {
      test();
    }, 500);
  });
  $(".navbar-toggler").click(function () {
    $(".navbar-collapse").slideToggle(300);
    setTimeout(function () {
      test();
    });
  });
  

  </script>

</body>
</html>
