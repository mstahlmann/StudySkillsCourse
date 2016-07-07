<?php
//test comment for new hook
//test comment for webhook
// Start the session
//test comment
//expanded test comment for github tutorial
session_start();
$curpage = 1;
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
  <h2>Lesson 1 The Making of an Excellent Student</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#video">Video</a></li>
    <li><a data-toggle="tab" href="#pa">Processing Assignment</a></li>
    <li><a data-toggle="tab" href="#as">Application Assignment</a></li>
    <li><a data-toggle="tab" href="#sr">Sample Rubric</a></li>
  </ul>

  <div class="tab-content" style="padding-bottom:50px;">
    
      <div id="video" class="tab-pane fade in active">
        <h3>Video</h3>
        <div class="embed-responsive embed-responsive-4by3">
          <video width="320" height="240" controls>
            <source src="video/Lesson1.mp4" type="video/mp4">
           </video>
        </div>
      </div>
    
    <div id="pa" class="tab-pane fade">
      <h3>Processing Assignment</h3>
        <p>1. In the past, have you taken responsibility for your education? If so, how? If not, who did you feel was responsible?
        <br>2. In the lesson video, we said that you are NOT a container that an instructor pours information into. Think of a word picture (analogy) to describe an Active Learner.
        <br>3. Explain how you can view yourself as CEO of your education. How would running your education like a business change the way you view school and studying?
        <br>4. If school and test preparation were like preparing for a theater performance, how would it affect the time you spend learning, studying and preparing for an exam?
        <br>5. Write out the formula for learning in your own words.
        <br>6. Explain what you think it means to have a Study Conversation and to ask questions of your textbook and your class notes.
        <br>7. Explain in your own words what it means to partner with your teacher?
        <br>8. List the different ways that a syllabus can help you be an excellent learner.
        <br>9. Describe how grading algorithms and rubrics are similar to business contracts?
        </p>
    </div>
    <div id="as" class="tab-pane fade">
      <h3>Application Assignment</h3>
      <p>
        <br>1.What changes will you make today and in the future to take full responsibility for your education and to CHOOSE to learn?
        <br>2.Why do you want to succeed?
        <br>3.How would your life change if you became a person who is excellent in every area?
        <br>4.Choose three highly successful companies and research their mission statements. Then, write a mission statement for your Learning Business.
        <br>5.What kind of return on investment do you want for the time you are spending in school?
        <br>6.Create a T-Chart by drawing a line down the center of a blank piece of lined paper. On the left side, list all of the steps you can think of to prepare for a great theater performance. Don’t forget to include things such as sets, costumes, props, music, acting, lighting, etc. For each item in the left column, write a similar step in the right column that a student would take to prepare to ace an exam.
        <br>7.If you were going to try to learn how a clock works, what questions would you ask? Think of as many questions as it would take to become a mini-expert on how a clock works.
        <br>8.Write a job description that explains your expectations of a teacher as a valuable member of your learning team.
        <br>9.Imagine that you are a history teacher. Write a rubric for a research paper on the Civil War. 
        <br>10.Write a scenario that might cause you to need to meet with your teacher, and write a script for how you would approach the teacher as a valuable member of your team.
    </div>
    <div id="sr" class="tab-pane fade">
      <h3>Sample Rubric</h3>
      <div>
        <div class='embed-responsive' style='padding-bottom:150%'>
          <object data="pdf/lesson1SR.pdf" type='application/pdf' width='100%' height='100%'></object>
        </div>
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
