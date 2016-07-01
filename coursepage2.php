<?php
// Start the session
session_start();
$curpage = 2;
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
  <h2>Lesson 2 Preparing Yourself and Your Space</h2>
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
            <source src="video/lesson2.mp4" type="video/mp4">
           </video>
        </div>
      </div>
    
    <div id="pa" class="tab-pane fade">
      <h3>Processing Assignment</h3>
        <p>1. Explain four different ways that food affects brain function, based on what you learned in this lesson.
        <br>2. How is hydration important to learning?
        <br>3. List three negative attributes of sports drinks?
        <br>4. What is the formula for figuring out how many ounces of water you need to drink each day (without sweating)? How many ounces of water should YOU be drinking each day? How many 16oz. water bottles is that?
        <br>5. List three negative effects of sleep deprivation that you learned in the lesson.
        <br>6. Choose one new tip for improving your sleep that you found interesting or surprising, and find an article that supports the information that we gave you in the lesson.
        <br>7. In the lesson, you were given ten things that you could do to help prevent sleep deprivation. List and explain five things you can do to enhance your sleep.
        <br>8. From the information given in the lesson, explain the correlation between antioxidants and brain function. Also, list the three major antioxidants discussed and four food sources for each antioxidant.
        <br>9. The lesson discussed macronutrients and micronutrients. List three macronutrients and three kinds of micronutrients that your body needs for proper functioning.
        <br>10. In the lesson we talked about the importance of having a comfortable study space. List four things that you need to consider when choosing your space.
        </p>
    </div>
    <div id="as" class="tab-pane fade">
      <h3>Application Assignment</h3>
      <p>
        <br>1.Write a paragraph evaluating your sleep habits. Below are some prompts to jumpstart your thinking. Feel free to add more information.
            <br>&emsp; * What do you typically do two hours leading up to bedtime?
            <br>&emsp; * What type of environment do you sleep in?
            <br>&emsp; * Is it cluttered/uncluttered?
            <br>&emsp; * Are you comfortable when you sleep?
            <br>&emsp; * Are you hot, cold or the right temperature?
            <br>&emsp; * Do you get thirsty during the night?  
            <br>&emsp; * Are your pajamas comfortable?
            <br>&emsp; * Do you need music while you sleep?
            <br>&emsp; * Do you fall asleep with the TV on? Do you sleep through the night with the TV on?
            <br>&emsp; * Do you sleep with a light on? Do you sleep in complete darkness?  
        <br>2.Write a solution for each response in the paragraph above that was not conducive to a healthy sleep pattern. Brainstorm a resolve based on what you learned in the lesson. Be sure to think about and include in your writing how your solutions will make your sleep experience more pleasurable and restful.
        <br>3.Considering the list below, what are some you improve your habits to set yourself up for success?
            <br>&emsp; * sleep
            <br>&emsp; * nutrition
            <br>&emsp; * hydration
            <br>&emsp; * exercise
            <br>&emsp; * routines
            <br>&emsp; * use of screens
            <br>&emsp; * caffeine
        <br>4.If you were to guess, how many grams of sugar do you think you eat/drink each day? Pick a day this week (before the lesson is due) and carry a piece of paper with you wherever you go. Keep track of every gram of sugar you eat/drink for the entire day. Did it match your guess? Were you surprised by the results? If so, why?
        <br>5.A diet high in fruits and vegetables is very important. Currently, the recommendation is 5-9 servings each day. In order to get that many servings into your diet every day, you will probably need to be purposeful. Google a list of different types of fruit. (Wikipedia has a good one.) List any fruits that you have never tasted. Do the same for vegetables. Create a plan to try some of the fruits and veggies that you have never tasted. You will probably need to consult with your parents to figure out how you can get them.
        <br>6.How many cups is one serving of fruit? How many cups is one serving of vegetables? How do you plan to get the recommended amount of fruits and veggies into your diet each day?
        <br>7.In the lesson, we talked about the importance of feeding your body the right types of fuel. Create a menu for yourself for one week which includes complex carbohydrates, healthy fats and proteins but is low in sugar and trans and saturated fats. Be sure to include all meals and snacks. Don’t forget to take into account your schedule. You may need to pack your lunch accordingly. While you are creating your menu, look for recipes that include good food choices. (Pinterest is a good place to find healthy recipes.)
        <br>8.As you create your menu, start a recipe “book” for yourself of the recipes you find that you think you will enjoy. You could make it in a Google Doc, print the recipes and create your own recipe binder or purchase recipe cards and put them in an index card box.
        <br>9.Write out the perfect scenario for YOU when it comes to your study space. Be sure to think about the clothing you wear, lighting, where and how you would like to sit. Think about drinks, snacks, music, a cluttered or uncluttered space and the location.
        <br>10.Make a list of everything you have in your pencil case for writing, correction and studying. What are you missing?
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
