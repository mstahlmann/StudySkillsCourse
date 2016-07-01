<?php
// Start the session
session_start();
$curpage = 6;
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
  <h2>Lesson 6 Telegraphic Sentences</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#pdf1">Sample Shortcuts for Notetaking</a></li>
    <li><a data-toggle="tab" href="#video">Video</a></li>
    <li><a data-toggle="tab" href="#pa">Processing Assignment</a></li>
    <li><a data-toggle="tab" href="#pdf2">Mock Lecture Transcript</a></li>
    <li><a data-toggle="tab" href="#video2">Application Assignment Video</a></li>
    <li><a data-toggle="tab" href="#as">Application Assignment</a></li>
  </ul>

  <div class="tab-content" style="padding-bottom:50px;">
      <div id="pdf1" class="tab-pane fade in active">
      <h3>Sample Shortcuts for Notetaking</h3>
      <div>
        <div class='embed-responsive' style='padding-bottom:150%'>
          <object data="pdf/SampleShortcuts.pdf" type='application/pdf' width='100%' height='100%'></object>
        </div>
      </div>
    </div>
      <div id="video" class="tab-pane fade">
        <h3>Video</h3>
        <div class="embed-responsive embed-responsive-4by3">
          <video width="320" height="240" controls>
            <source src="video/lesson6.mp4" type="video/mp4">
           </video>
        </div>
      </div>
    
    <div id="pa" class="tab-pane fade">
      <h3>Processing Assignment</h3>
        <p>1. Explain what a telegraphic sentence is and where the concept came from?
        <br>2. What are some specific steps to creating telegraphic sentences when note taking?
        <br>3. The lesson stated eight things to look for that could signify an idea or key point. What are they?
        <br>4. The lesson talked about key lecture patterns. Name the six patterns and describe each one.
        <br>5. What’s the purpose of using shortcuts and how can you become familiar with a workable system?
        </p>
    </div>
    <div id="pdf2" class="tab-pane fade in active">
      <h3>Mock Lecture Transcript</h3>
      <div>
        <div class='embed-responsive' style='padding-bottom:150%'>
          <object data="pdf/Lesson6MockLectureTranscript.pdf" type='application/pdf' width='100%' height='100%'></object>
        </div>
      </div>
    </div>
    <div id="video2" class="tab-pane fade">
        <h3>Video</h3>
        <div class="embed-responsive embed-responsive-4by3">
          <video width="320" height="240" controls>
            <source src="video/Lesson6AAL.mp4" type="video/mp4">
           </video>
        </div>
      </div>
    <div id="as" class="tab-pane fade">
      <h3>Application Assignment</h3>
      <p>
        <br>1.Take notes on the Lesson 6 Application Assignment Video using telegraphic sentences and shortcuts.
        <br>2.Transcribe the Lesson 6 Mock Lecture Script, replacing any words from the Sample Short Cuts Handout with their corresponding short cuts. You may use your own short cuts for any words that are not listed in the handout, but you may not replace the short cuts listed with your own. If you choose to add your own short cuts, include a key so that your parent or facilitator will understand the short cut.
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
