<?php
// Start the session
session_start();
$curpage = 15;
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
  <h2>Lesson 15 Essay Tests Part 1</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#video">Video</a></li>
    <li><a data-toggle="tab" href="#pa">Processing Assignment</a></li>
    <li><a data-toggle="tab" href="#as">Application Assignment</a></li>
  </ul>

  <div class="tab-content" style="padding-bottom:50px;">
    
      <div id="video" class="tab-pane fade in active">
        <h3>Video</h3>
        <div class="embed-responsive embed-responsive-4by3">
          <video width="320" height="240" controls>
            <source src="video/Lesson15.mp4" type="video/mp4">
           </video>
        </div>
      </div>
    
    <div id="pa" class="tab-pane fade">
      <h3>Processing Assignment</h3>
        <p>1. What is a definition essay, and what are the keywords to look for that can help you figure out if a question is asking for a definition essay?
        <br>2. Write a sample definition essay question, along with a thesis statement that would answer your question.
        <br>3. What is an analysis essay, and what are the keywords to look for that can help you figure out if a question is asking for an analysis essay?
        <br>4. Write a sample analysis essay question, along with a thesis statement that would answer your question.
        <br>5. What is a process analysis essay, and what are the keywords to look for that can help you figure out if a question is asking for a process analysis essay?
        <br>6. Write a sample process analysis essay question, along with a thesis statement that would answer your question.
        <br>7. What is a compare/contrast essay, and what are the keywords to look for that can help you figure out if a question is asking for a compare/contrast essay?
        <br>8. Write a sample compare/contrast essay question, along with a thesis statement that would answer your question.
        <br>9. What is a cause/effect essay, and what are the keywords to look for that can help you figure out if a question is asking for a cause/effect essay?
        <br>10. Write a sample cause/effect essay question, along with a thesis statement that would answer your question.
        <br>11. What is a thesis support essay, and what are the keywords to look for that can help you figure out if a question is asking for a thesis support essay?
        <br>12. Write a sample thesis support essay question, along with a thesis statement that would answer your question.
        <br>13. Describe the three parts of a Baker Keyhole Essay.
        <br>14. Describe how to write a thesis statement.
        <br>15. Describe how to write an introduction.
        <br>16. Describe how to write a conclusion.
        <br>17. Describe how to write a body paragraph.
        </p>
    </div>
    <div id="as" class="tab-pane fade">
      <h3>Application Assignment</h3>
      <p>
          PART I

            <br><br>Using the Lesson 6 Application Assignment video, Awaken the Giant Within, describe how the principles discussed in the lecture can help you translate your dreams into reality.

            <br><br>First, indicate what type of essay this question is asking for. Then, write a thesis statement, introduction and conclusion for the essay. Lastly, outline the three body paragraphs (you do not need to write the paragraphs in detail -- simple provide an outline of your key points, plus a list of details you would include to support each point).


      <p>
          PART II
          
          <br><br>Below are different essay questions. Name the essay type that each question is asking for. Remember that some essay questions include more than one essay type.
        <br><br>1.Explain why Henry Ford is credited by most for inventing the first automobile and how the Model T transformed America.
                    <br>&emsp; a.cause/effect
                    <br>&emsp; b.process analysis
        <br>2.What were the causes of WWI and how do they differ from WWII?
                    <br>&emsp; a.cause/effect
                    <br>&emsp; b.compare/contrast
        <br>3.Explain the process of photosynthesis and how plants can grow at night.
                    <br>&emsp; a.process analysis
        <br>4.Define socialism and its effects on a society.
                    <br>&emsp; a.definition
                    <br>&emsp; b.cause/effect
        <br>5.What is Marxism, socialism and communism and how do they differ?
                    <br>&emsp; a.definition
                    <br>&emsp; b.compare/contrast
        <br>6.In your opinion, should prayer be allowed in public school?
                    <br>&emsp; a.Thesis support
        <br>7.What are the different branches of our government and what are their responsibilities?
                    <br>&emsp; a.definition
                    <br>&emsp; b.analysis (process analysis?)
        <br>8.Who is Aung San Suu Kyi and how has she left an imprint on her country?
                    <br>&emsp; a.definition
                    <br>&emsp; b.analysis
        <br>9.Explain the stages of cellular respiration.
                    <br>&emsp; a.process analysis
        <br>10.Summarize the Effects of the crusades.
                    <br>&emsp; a.cause/effect
        <br>11.Do you agree that if someone had access to a DNA profile in a database, they could construct a sample of DNA to match that profile without obtaining any tissue from that person and “engineer a crime scene” to make a non-guilty person look guilty? Explain why you agree or disagree.
                    <br>&emsp; a.thesis support
                    <br>&emsp; b.analysis
        <br>12.Summarize the development of atomic theory and how it impacts us today.
                    <br>&emsp; a.process analysis
                    <br>&emsp; b.cause/effect
        <br>13.Explain the pros and cons to owning your own home and renting and which you would choose and why.
                    <br>&emsp; a.compare/contrast
                    <br>&emsp; b.thesis support
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
