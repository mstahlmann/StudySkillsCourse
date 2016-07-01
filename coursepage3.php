<?php
// Start the session
session_start();
$curpage = 3;
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
  <h2>Lesson 3 Organization and Time Management Skills</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#video">Video</a></li>
    <li><a data-toggle="tab" href="#pa">Processing Assignment</a></li>
    <li><a data-toggle="tab" href="#as">Application Assignment</a></li>
    <li><a data-toggle="tab" href="#sr">Master Plan Time Sheet</a></li>
  </ul>

  <div class="tab-content" style="padding-bottom:50px;">
    
      <div id="video" class="tab-pane fade in active">
        <h3>Video</h3>
        <div class="embed-responsive embed-responsive-4by3">
          <video width="320" height="240" controls>
            <source src="video/lesson3.mp4" type="video/mp4">
           </video>
        </div>
      </div>
    
    <div id="pa" class="tab-pane fade">
      <h3>Processing Assignment</h3>
        <p>1. In the lesson we talked about creating an effective study space and the tools you need to study well. List three things we mentioned that you may want to consider having handy to make yourself comfortable when studying. From the lesson, make a potential list of all the possible tools you may need to begin your study session. List at least eight items.
        <br>2. We talked about using small pockets of time and being ready for “on the go” studying. Go through the list we discussed, and write down at least six items you would want to have for “on the go” studying and what you could store them in.
        <br>3. In our lesson we gave you the two basic steps of organizing. What are they?
        <br>4. We talked about setting aside a day to get organized, as opposed to doing it slowly over time, as you may have heard some organizing consultants suggest. During your one-day process of getting organized, what two questions should you be asking yourself? And what question are you NOT supposed to ask yourself?
        <br>5. In the lesson, we gave you a specific order of operations for decluttering. What was that order?
        <br>6. List a few things discussed in the lesson that you should do to help prevent multitasking while studying.
        <br>7. Describe the best way to set up a binder, based on the lesson.
        <br>8. According to this week’s lesson, what is a good way to store papers, such as old tests, quizzes and homework, that you do not need on a daily basis? Also, how can you use post-it flags in your notebook?
        <br>9. We said the two most valuable tools for time management are a calendar and lists. Based on the lesson, how can you use these tools to become a more effective student?
        <br>10. List the five routines you should have in your day. Also, based on what you learned in the lesson, what would you do during a weekly meeting with yourself?
        </p>
    </div>
    <div id="as" class="tab-pane fade">
      <h3>Application Assignment</h3>
      <p>
        <br>1.Make a list of all the items you need to study effectively and to be comfortable. Have the list laminated and store it in your pencil case so that you pull it out whenever you need to prepare to study at home or on the go.
        <br>2.What things are distracting to you while you study? What can you do to alleviate the distractions?
        <br>3.How well do you know yourself? How often do you need a study break? What is something you can do on your break that will help you best focus for the next portion of your study session?
        <br>4.In the lesson, we talked about creating a blank calendar and blocking out your time, hour by hour. Print the calendar provided in your homework. Create a key at the top of the page using the color suggestions we gave in the video. Then fill in all of the blocks for the entire week, based on your schedule. Scan it or take a digital picture, and upload it with your assignment.
        <br>5.In the lesson, we named five routines you should have in your day. Personalize each routine for yourself. Be sure to include the things that were suggested.
        <br>6.Do you keep a phone near you when you study? Do you keep social media, YouTube or other entertaining sites open on your computer while you’re working? For one full day, track how many times you are tempted to multitask with a computer or phone.
        <br>7.Write five to seven goals you want to achieve by the end of this calendar year. Make a Squeeze List and begin a Someday List. Write a Weekly To Do List for this week, and write a Task List for this week.
        <br>8.Decide what you will use for a calendar and a way of tracking personal notes throughout the day. For at least two days, use both tools and assess whether or not you think they will work well. If not, find a different system.
        <br>9.Write out an agenda for a weekly meeting with yourself. Write a list of all the questions you will ask yourself and all the things you will assess.
        <br>10.Do you think a Foundations Book will work for you? If so, create one, and list everything you have put in your Project Pages sections. If not, explain why, and talk about an alternative system that you will use to help you manage your projects and your task list.
        <br>11.In the lesson, we talked about starting your day the night before. List the six things you need to do before you wrap up your current day, and personalize each one for YOU. Put it into practice for at least two days, and journal about how you felt on both mornings following these routines. Be sure to include the journal entries in your assignment.
    </div>
    <div id="sr" class="tab-pane fade">
      <h3>Master Plan Time Sheet</h3>
      <div>
        <div class='embed-responsive' style='padding-bottom:150%'>
          <object data="pdf/MasterPlanTimeSheet.pdf" type='application/pdf' width='100%' height='100%'></object>
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
