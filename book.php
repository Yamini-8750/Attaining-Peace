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
    <title>Attaining Peace | Book Reviews</title>
    <style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding-right: 5px;
  padding-left:5px;
}
</style>
  </head>
  <body><?php include "header.php"?>
  <br><br><br>
  <div class="container">
        <div class="col-md-12">
            <p style="font-family: 'Dancing Script', cursive;font-size:35px;"><b>#1. A Thousand Splendid Suns</b></p>
            <br>
            <img src="khaled.jpeg" height="500" width="400">
            <p style="font-size:10px"><em>A Thousand Splendid Suns is a classical narration of thirty years of Afghan history</em></p>
            <br>
            <p style="font-size:20px">
            <b>Author:</b> Khaled Hosseini</p>
            <br>
            <p style="font-size:20px; font-family: 'Source Sans Pro', sans-serif; text-align:justify">
            The novel is designed in a way in which the narrative throughout the storyline switches between Mariam and Laila in order to provide readers with a closer look
             towards their feelings and emotions all through the book. The purpose of the book is to explore the multifaceted difficulties Afghan women tend to face in their everyday
             lives, such as their lack of rights, their suffering from domestic violence, and their endurance of patriarchal issues.
            </p>
            <p id ="complete-blog" style="font-size:20px; font-family: 'Source Sans Pro', sans-serif; text-align:justify"></p><br>
            <button class="btn btn-outline-secondary my-2 my-sm-0 review" style="margin:40%;" onclick = "loadDoc()">Click here to Read Complete Review</button>
            <br>
            <button class="btn btn-outline-secondary my-2 my-sm-0 price" onclick = "loadPrice()">Click here to buy</button><br><br>
            <table id="buy" class="table table-striped table-hover table-sm"></table>
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
  xhttp.open("GET", "khaled.txt", true);
  xhttp.send();
}
function loadPrice() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      $(".price").hide();  
      myFunction(this);
    }
  };
  xhttp.open("GET", "price.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Platform</th><th>Link</th></tr>";
  var x = xmlDoc.getElementsByTagName("price");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("site")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("link")[0].childNodes[0].nodeValue +
    "</td></tr>"
  }
  document.getElementById("buy").innerHTML = table;
}
</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>