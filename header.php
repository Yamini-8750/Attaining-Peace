<nav class="navbar navbar-expand-lg navbar-light bg-light"  style="box-shadow: 0px 0px 13px steelblue;
           -moz-box-shadow: 0px 0px 13px steelblue;
           -webkit-box-shadow: 0px 0px 13px steelblue;">
  <a class="navbar-brand" href="index.php" style="font-family: 'Marck Script', cursive;font-size:45px;"><img src="logo.png" 
  height="60" width="60"><b> Attaining Peace</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item home">
        <a class="nav-link" href="index.php" style="font-family: 'Dancing Script', cursive;font-size:20px;" onclick = "navactive1()"><b>Home</b> <span class="sr-only">
        (current)</span></a>
      </li>
      <li class="nav-item blog ">
        <a class="nav-link" href="blog.php" style="font-family: 'Dancing Script', cursive;font-size:20px;" onclick = "navactive2()"><b>Blog</b></a>
      </li><li class="nav-item movie ">
        <a class="nav-link" href="movie.php" style="font-family: 'Dancing Script', cursive;font-size:20px;" onclick = "navactiv4()"><b>Movie Reviews</b></a>
      </li><li class="nav-item book ">
        <a class="nav-link" href="book.php" style="font-family: 'Dancing Script', cursive;font-size:20px;" onclick = "navactive6()"><b>Book Reviews</b></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline-dark my-2 my-sm-0" type="submit" href="login.php">Login</a>
    </form>
  </div>
</nav>
<script>
  function navactive1(){
    $(".home").addClass("active");
    $(".blog").removeClass("active");
    $(".music").removeClass("active");
    $(".movie").removeClass("active");
    $(".podcast").removeClass("active");
    $(".book").removeClass("active");
  }
  function navactive2(){
    $(".home").removeClass("active");
    $(".blog").addClass("active");
    $(".music").removeClass("active");
    $(".movie").removeClass("active");
    $(".podcast").removeClass("active");
    $(".book").removeClass("active");
  }
  
  function navactive4(){
    $(".home").removeClass("active");
    $(".blog").removeClass("active");
    $(".music").removeClass("active");
    $(".movie").addClass("active");
    $(".podcast").removeClass("active");
    $(".book").removeClass("active");
  }
  function navactive6(){
    $(".home").removeClass("active");
    $(".blog").removeClass("active");
    $(".music").removeClass("active");
    $(".movie").removeClass("active");
    $(".podcast").removeClass("active");
    $(".book").addClass("active");
  }
</script>