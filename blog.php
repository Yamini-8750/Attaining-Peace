<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
   <link rel="icon" href="logo.png">
    <title>Attaining Peace | Blog</title>
  </head>
  <body><?php include "header.php"?>
  <br><br><br>
  <div class="container">
        <div class="col-md-12">
            <p style="font-family: 'Dancing Script', cursive;font-size:35px;"><b>#1. Its Okay to Talk- Depression</b></p>
            <br>
            <img src="depression.jpeg" height="500" width="700">
            <p style="font-size:10px"><em>Depression is Common!</em></p>
            <p style="font-family: 'Dancing Script', cursive;font-size:25px;"></p><br>
            <p style="font-family: 'Dancing Script', cursive;font-size:25px;"><b>What is Depression?</b></p>
            <p style="font-size:20px; font-family: 'Source Sans Pro', sans-serif; text-align:justify">
            Depression (major depressive disorder) is a common and serious medical illness that negatively affects how you feel, the way you think and how you act. 
            Fortunately, it is also treatable. Depression causes feelings of sadness and/or a loss of interest in activities you once enjoyed.
             It can lead to a variety of emotional and physical problems and can decrease your ability to function at work and at home.
            <br>
            Depression symptoms can vary from mild to severe and can include:
            <br>
            </p>
            <ul style="font-size:20px; font-family: 'Source Sans Pro', sans-serif; text-align:justify">
            <li>Feeling sad or having a depressed mood</li>
            <li>Loss of interest or pleasure in activities once enjoyed</li>
            <li>Changes in appetite — weight loss or gain unrelated to dieting</li>
            <li>Trouble sleeping or sleeping too much</li>
            <li>Loss of energy or increased fatigue</li>
            <li>Increase in purposeless physical activity (e.g., inability to sit still, pacing, handwringing) or slowed movements or speech (these actions must be severe enough to be observable by others)</li>
            <li>Feeling worthless or guilty</li>
            <li>Difficulty thinking, concentrating or making decisions</li>
            <li>Thoughts of death or suicide</li>
            </ul>
            <p id ="complete-blog" style="font-size:20px; font-family: 'Source Sans Pro', sans-serif; text-align:justify"></p><br>
            <button class="btn btn-outline-secondary my-2 my-sm-0 review" style="margin:40%;" onclick = "loadDoc()">Click here to Read Complete Review</button>
            <br>
            <br>
            
        </div>
    </div>
<?php include "footer.php"?>    
    <script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("complete-blog").innerHTML +=
      this.responseText;
      $(".review").hide();
    }
  };
  xhttp.open("GET", "depress.txt", true);
  xhttp.send();
}
</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>