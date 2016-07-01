<?php
// Start the session
session_start();
$curpage = 12;
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
  <h2>Lesson 12 Note Processing</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#video">Video</a></li>
    <li><a data-toggle="tab" href="#as">Application Assignment</a></li>
  </ul>

  <div class="tab-content" style="padding-bottom:50px;">
    
    <div id="video" class="tab-pane fade in active">
       <h3>Video</h3>
        <div class="embed-responsive embed-responsive-4by3">
          <video width="320" height="240" controls>
            <source src="video/Lesson12.mp4" type="video/mp4">
           </video>
        </div>
    </div>
    <div id="as" class="tab-pane fade">
      <h3>Application Assignment</h3>
      <p>
        <br>1.Using your current schedule, create a task list for yourself. Be sure to list when you will review your notes and when you will interact with your notes with the current classes you are taking. (If it is summer, use your schedule from the previous school year to create a hypothetical task list.)
        <br>2.In the beginning of this lesson, we listed five steps to begin processing your notes using the Cornell Method. Type out those five steps.
        <br>3.Using a lecture of your choice from this Study Skills class, use sticky notes, and write questions that require further research of the topic.
        <br>4.Research the questions from your sticky notes and take notes on what you learn.
        <br>5.Using the same lecture, process your notes using the Cornell Method following the five steps from the lecture. Remember to do this part by hand and not on the computer.
        <br>6.Begin to create a master study guide -- using the Outlining Method -- that includes all of the information from all sets of notes (including the Cornell Method notes you just created, the questions you asked and the research you found). Type the outline so that it’s always easier to add new information and manipulate the information for the next assignment.
        <br>7.Use the Mapping Method, create a basic concept map of your notes.
        <br>8.Use your Master Study Guide to reorganize, manipulate and rearrange the information using the Split Page and Charting Methods. Come up with three different ways to organize the information.
        <br>9.Create two different study tools from your Master Study Guide (i.e. concept cards, timeline, sketch notes, diagrams, etc.).
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
