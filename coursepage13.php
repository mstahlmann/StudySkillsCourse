<?php
// Start the session
session_start();
$curpage = 13;
if ($curpage == 1){
    $prevpage = 1;
  }
  else{
    $prevpage = $curpage - 1;
  }
  if ($curpage == 16){
    $nextpage = 16;
  }
  else{
    $nextpage = $curpage + 1;
  }
$prevlink = "coursepage" . $prevpage . ".php";
$nextlink = "coursepage" . $nextpage . ".php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/style2.css">
  </head>
<body>

<div class="container" style="height:150px;">
    <img src="/images/webHeader.png" class="img-responsive">
  </div>
 <div class="container" class="text-center">
    <!--***include for navigation bar.***-->
    <?php include 'navigation.php';?>
 </div>
 <?php
//echo "Session login = " . $_SESSION["login"];
if ($_SESSION["login"] == 1){
    //echo "You can see the course!";
?>
<div class="container text-center">
  <?php include 'lessonnav.php';?>
</div>
<div class="container" style="height:1200px">
  <h2>Lesson 13 Test Prep and Group Study Skills</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#video">Video</a></li>
    <li><a data-toggle="tab" href="#as">Application Assignment</a></li>
  </ul>

  <div class="tab-content" style="padding-bottom:50px;">
    
    <div id="video" class="tab-pane fade in active">
       <h3>Video</h3>
        <div class="embed-responsive embed-responsive-4by3">
          <video width="320" height="240" controls>
            <source src="video/Lesson13.mp4" type="video/mp4">
           </video>
        </div>
    </div>
    <div id="as" class="tab-pane fade">
      <h3>Application Assignment</h3>
      <p>
        <br>1.Go back through lesson 13 and write out the 7 Steps of Pre-Testing.
        <br>2.The lesson talked about pre-testing yourself in a few different places. List three different places you could pre-test yourself.
        <br>3.Choose one of the mock lectures from a previous lesson and create a Story Association from some of the information in the lecture.
        <br>4.With a test you have coming up in one of your classes, do the following:
            <br>&emsp; * Create a Story Association
            <br>&emsp; * Write a speech and record yourself
            <br>&emsp; * Create any graphs or pictures from your study material
            <br>&emsp; * Create a timeline to learn and memorize the information from now until test time. Write out what you will learn or memorize each day.
            <br>&emsp; * Come up with a different place to study each day. Write that on your timeline.
        <br>5.List the four things to look for in a good study partner.
        <br>6.List the five things to avoid when looking for a study partner.
        <br>7.With a test you have coming up in one of your classes, do the following:
            <br>&emsp; * Create a study group (go back through the lesson for help)
            <br>&emsp; * Write out the three basic goals of a study group
            <br>&emsp; * Set an agenda (go back through the lesson for help)
            <br>&emsp; * Make sure everyone comes prepared (go back through the lesson for help)
            <br>&emsp; * Set three dates for study sessions:
            <br>&emsp; i.Information Sharing Session
            <br>&emsp; ii.Clarity Session
            <br>&emsp; iii.Pre-Testing session
        <br>8.Using the information from the lesson, create a timeline for yourself to set yourself up for success that starts the night before your test.
        <br>9.Using the information from the lesson, write out some pointers for yourself that you could use during your exam.
     </div>
  </div>
</div>


<?php
}else{
?>
 <div class="container text-center">
    <h3>Go Away Loser!</h3>
</div>
<?php
}
?>
<div class="container">
  <!--***Removed login box code to clean up page. Not sure if it will go here or on its own login page. Modal jquery script went with it.***-->
  <?php include 'loginbox.php';?>
</div>
</body>
</html>
