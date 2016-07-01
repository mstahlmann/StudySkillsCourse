<?php
// Start the session
session_start();
$curpage = 5;
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
  <h2>Lesson 5 Note Taking Overview</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#video">Video</a></li>
    <li><a data-toggle="tab" href="#pa">Processing Assignment</a></li>
    
  </ul>

  <div class="tab-content" style="padding-bottom:50px;">
    
      <div id="video" class="tab-pane fade in active">
        <h3>Video</h3>
        <div class="embed-responsive embed-responsive-4by3">
          <video width="320" height="240" controls>
            <source src="video/lesson5.mp4" type="video/mp4">
           </video>
        </div>
      </div>
    
    <div id="pa" class="tab-pane fade">
      <h3>Processing Assignment</h3>
        <p>1. In the lesson, there are six tips for being an active listener. List them and explain what each one means.
        <br>2. How does taking notes help you in a lecture?
        <br>3. The goal of taking notes from the textbook and from the lecture are different. Explain the difference.
        <br>4. In the lesson, we discussed a study done at UCLA Anderson School of Management concerning taking notes on a laptop vs. a notebook and pen. Briefly explain the study and the outcome.
        <br>5. What should you do with sticky notes during a lecture?
        <br>6. How long are most people’s attention spans during a lecture? List eight tools or techniques for staying focused during a lecture.
        <br>7. List three possible pitfalls of using a recording device.
        <br>8. If you have a question during a lecture and are unable to ask it, what should you do?
        <br>9. If the instructor opens up the class for questions, what are the seven ways to vet your question before asking?
        <br>10. Explain the process you would use to create a unique set of class notes from a collection of notes borrowed from a few trusted classmates.
        </p>
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
