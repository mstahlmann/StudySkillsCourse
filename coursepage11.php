<?php
// Start the session
session_start();
$curpage = 11;
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
  <h2>Lesson 11 The Mapping Method</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sr">Mapping Methods Example</a></li>
    <li><a data-toggle="tab" href="#video">Video</a></li>
    <li><a data-toggle="tab" href="#as">Application Assignment</a></li>
    
  </ul>

  <div class="tab-content" style="padding-bottom:50px;">
      <div id="sr" class="tab-pane fade in active">
      <h3>Mapping Methods Example</h3>
      <div>
        <div class='embed-responsive' style='padding-bottom:150%'>
          <object data="pdf/MappingExample.pdf" type='application/pdf' width='100%' height='100%'></object>
        </div>
      </div>
    </div>
      <div id="video" class="tab-pane fade">
        <h3>Video</h3>
        <div class="embed-responsive embed-responsive-4by3">
          <video width="320" height="240" controls>
            <source src="video/Lesson11.mp4" type="video/mp4">
           </video>
        </div>
      </div>
    <div id="as" class="tab-pane fade">
      <h3>Application Assignment</h3>
      <p>* Please note, there is no processing assignment for this lesson.
        <br>1.Finish processing your notes from the Lesson 11 Mock Lecture using the Mapping Method.
        <br>2.Take notes on the Lesson 11 Application Assignment Video using telegraphic sentences and shortcuts, and then process these notes using the Mapping Method.
    </div>
    <div id="video2" class="tab-pane fade">
        <h3>Application Assignment Video</h3>
        <div class="embed-responsive embed-responsive-4by3">
          <video width="320" height="240" controls>
            <source src="video/Lesson11AAV.mp4" type="video/mp4">
           </video>
        </div>
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
