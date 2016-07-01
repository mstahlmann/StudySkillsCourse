<?php
// Start the session
session_start();
$curpage = 4;
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
    <script type="text/javascript" src="assets/js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.video-ui.js"></script>
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
  <h2>Lesson 4 Pre-Learning and Textbook Note Taking Skills</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sr">Goal Setting Textbook Chapter</a></li>
    <li><a data-toggle="tab" href="#video">Video</a></li>
    <li><a data-toggle="tab" href="#pa">Processing Assignment</a></li>
    <li><a data-toggle="tab" href="#as">Application Assignment</a></li>
    
  </ul>

  <div class="tab-content" style="padding-bottom:50px;">
     <div id="sr" class="tab-pane fade in active">
      <h3>Goal Setting Textbook Chapter</h3>
      <div>
        <div class='embed-responsive' style='padding-bottom:150%'>
          <object data="pdf/lesson1SR.pdf" type='application/pdf' width='100%' height='100%'></object>
        </div>
      </div>
    </div>
      <div id="video" class="tab-pane fade">
        <h3>Video</h3>
        <div class="embed-responsive embed-responsive-4by3">
          <!--<iframe class="embed-responsive-item" src="video/lesson4.mp4?autoPlay=false"></iframe>-->
          <video width="320" height="240" controls>
            <source src="video/lesson4.mp4" type="video/mp4">
           </video>
        </div>
      </div>
    
    <div id="pa" class="tab-pane fade">
      <h3>Processing Assignment</h3>
        <p>1. According to the lesson, what are the six things you should do in order to prepare for a class?
        <br>2. This lesson discussed surveying a textbook chapter. Explain the process in detail.
        <br>3. As you read each section of the chapter for the first time, what should you be writing down?
        <br>4. According to the lesson, if you have finished reading the entire chapter, and you still have unanswered questions on your sticky pad, what should you do?
        <br>5. As you take notes, what words should you include in your vocabulary list?
        <br>6. What is the Socratic Method of learning, and why is it helpful in the pre-learning process?
        <br>7. What are the three types of questions you will ask as you pre-learn?
        <br>8. Diagrams, charts and graphs are often used in textbooks. What three questions should you ask yourself as you look at each diagram, chart or graph? List at least two different ways you can use these to learn the material and study for tests.
        <br>9. Once you have taken notes, built a vocabulary list and manipulated the graphs and charts, what should you do if you can not answer the end of the chapter questions confidently without having to reference the chapter or your notes?
        <br>10. List the six things you should include in your binder as you prepare for class.
        </p>
    </div>
    <div id="as" class="tab-pane fade">
      <h3>Application Assignment</h3>
      <p>
        <br>1.In the lesson, we went through how to survey a textbook chapter. Using the same steps, survey the chapter on your own. For your assignment, you can simply let us know that you completed this step.
        <br>2.Decide how you are going to organize your notes. Read the chapter one section at a time and have a sticky pad available to you. Do not stop to take notes, but write any unfamiliar words or questions you have throughout each section of the chapter. When you are finished reading each section, don’t forget to look up unfamiliar words and reread the paragraph with your understanding of the word. Let us know if you jotted down any unfamiliar terms or questions.
        <br>3.When you are done reading one section, look for the big ideas. Summarize each idea into short statements, and then create bulleted lists of supporting points under the main idea. Attach your completed notes as a document to your assignment.
        <br>4.Begin building your vocabulary list according to the lesson. Be sure to look up a definition for each word. Attach your completed vocabulary list as a document to your assignment.
        <br>5.There are three types of questions you will ask yourself as you pre-learn. For each section of the text, write questions for each type of pre-learning question.
        <br>6.Test yourself. Without referring back to the text or your notes, answer the end of the chapter questions in the sample text. Create a separate page called STUDY QUESTIONS for any questions you could not answer. Include your answers and study questions in this assignment.
        <br>7.Gather the questions you jotted down throughout your note taking process. If your questions remain unanswered by the end of the chapter, Google them, and tell us what you found.
        <br>8.Survey a non-fiction book (in your home or library) that will give you further information about goal setting.
        <br>9.As you survey the non-fiction book, include new information on goal setting not found in your sample text. Be sure to  include an MLA citation at the top of your notes.
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

<script>
    $('#video').videoUI({
  'autoHide':false,
  'volumeMedia': 1
});
</script>
