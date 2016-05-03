<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jQuery/jquery-2.1.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/format.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="shortcut icon" href="images/bc.ico"/>
    <script>
    $(document).ready(function() {
        $('#navigation').fadeIn(1000);
        $('#me').delay(100).fadeIn(1000);
        $('#name').delay(600).fadeIn(1000);
        $('#about').delay(700).fadeIn(1000);
    });

    </script>

    <title>Welcome!</title>
</head>



<body>
<div class="container-fluid">
  <div class="row" id="navigation">
    <div class="col-md-3 col-sm-5 col-xs-5">
      <p id="name">Brandon Cao</p>
    </div>
    <div class="col-md-7 col-sm-1 col-xs-1"></div>
    <div class="col-md-1 col-sm-3 col-xs-3">
      <p id="linkedIn"> LinkedIn</p>
    </div>
    <div class="col-md-1 col-sm-3 col-xs-3">
      <p id="gitHub">gitHub</p>
    </div>
  </div>
</div>

<!--ABOUT ME-->
<div id="about">
  <div class="container">
  <div class="row" style="padding-bottom:5%; padding-top:4%">
    <div class="col-md-2 "></div>
      <div class="col-md-4 col-xs-12 col-sm-12 top-space" style="margin-top: 100px" align="center">
        <img src="images/headshot.jpg" id="me" class="img-circle" height="70%" width="70%">
      </div>
       <div class="col-md-5 col-xs-12 col-sm-12 top-space" style="margin-top: 100px">

            <p style="font-size: 200%">About Me </p>
            <div style="font-size:120%">
            <p>Student at the University of Oregon, majoring in Computer Science with a minor in Business.</p>
            <p>Currently working as a Software Engineer/Web developer for the Daily Emerald.
            <img src="images/emerald.png" width="5%" height="5%"></p>
              <p>I have a passion for technology, business, and for as weird as it may sound, creative problem solving.</p>
     <p> Outside of programming, I enjoy sports, meeting new people, photography, exercising, and spending time with my family and friends.</p>
     <p>For more details, feel free to contact me at: <div style="color:#0b436d;">BrandonNhatCao@gmail.com</div>
          </div>
       </div>
       <div class="col-md-1"></div>
    </div>
    </div>
</div>
    <!--END ROW-->

<!--PROJECTS-->
    <div class="container">
      <div class="row blueTop" style="padding-bottom:5%;">
        <div class="col-md-1 "></div>
           <div class="col-md-9 col-xs-12 col-sm-12 top-space" style="margin-top: 100px">
             <div style="font-size: 200%; padding-bottom:2%"><u>Projects:</u></div>

             <div class="project">
                <a href="https://github.com/BrandonCao/pnmImageManipulator">PNM Image Manipulator</a>
             </div>
             <div class="des">
               <li>Image manipulator pipeline containing a collection of filters for PNM image manipulation.</li>
               <li>C++ project</li>

             </div>

             <div class="project">
                <a href="https://github.com/BrandonCao/mcp/blob/master/mcp.c">Master Control Processor (MCP)</a>
             </div>
             <div class="des">
               <li>C project</li>
               <li>MCP will read a list of programs (with arguments) to run from a file, start up and run the programs as processes. Program will then schedule the processes to run concurrently in a time-sliced manner.</li>
               <li>MCP monitors the processes, keeping track of how the processes are using system resources</li>
             </div>

              <div style="font-size: 200%; padding-bottom:2%;padding-top:2%"><u>Web:</u></div>
              <div class="project">
                 <a href="http://dailyemerald.github.io/Is-Weezer-Cool-Again/">Is Weezer Cool Again?</a>
                <div style="padding-left:2%;font-size:50%;">
                  Story about Weezer written by my friend Craig Wright. This was a cover story for the Daily Emerald so I helped him create
                  a website to provide a better visualization for his story.
              </div>
           </div>


           <div class="project" style="padding-top:2%">
              <a href="http://dailyemerald.github.io/Campus-Crime-Heat-Map/">Campus Crime Heat Map</a>
             <div style="padding-left:2%;font-size:50%;">
               Inspired/written by my friends Kyle Wizner and Noah McGraw. A story/heat map about campus crimes happening near the
               University of Oregon.
           </div>
        </div>


           <div class="col-md-1"></div>
      </div>
        </div>
        <!--END ROW-->




<!--PROGRAMING LANGUAGES / SKILLS-->
    <div class="container">
    <div class="row blueTop">
    <div class="col-md-1 default-top-space"></div>
      <div class="col-md-5 col-xs-12 col-sm-12">
        <p class="info" align="center" style="margin-top:80px"> <u style="font-size: 180%">Languages + Framework</u> </p>
        <p >
          <ul style="font-size:120%;padding-bottom:4%;">
            <li>Python</li>
            <li>Java</li>
            <li>C/C++</li>
            <li>Swift</li>
            <li>Web Development</li>
            <li>Cloud Development (AWS)</li>
            <li>C#</li>
            </ul>
          </p>
      </div>
      <!--SKILLS-->
      <div class="col-md-5 col-xs-12 col-sm-12" >
        <p class="info" style="margin-top:80px" align="center"><u style="font-size:180%">Other Skills:</u> </p>
          <ul style="font-size:120%; padding-bottom:4%;">
            <li>Consulting</li>
            <li>Git</li>
            <li>UNIX/OS/Windows</li>
            <li>WordPress Management</li>
            <li>Project Management</li>
            <li>Time Management</li>
            <li>Creative thinking</li>
            <li>Problem Solving</li>
          </ul>
      </div>
      <div class="col-md-1 col-xs-1 col-sm-1" style="margin-top:80px"></div>
    </div>
  </div>
  <!--END ROW-->

</div>

 </body>




 </html>
