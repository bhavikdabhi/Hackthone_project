<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>HireHive - Job Portal</title>
    <meta name="description" content="Online Job Management / Job Portal" />
    <meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
    <meta name="author" content="BwireSoft">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="http://<?php echo "$actual_link"; ?>/image		s/banner.jpg" />
      <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
      <meta property="og:image:type" content="image/jpeg" />
      <meta property="og:image:width" content="500" />
      <meta property="og:image:height" content="300" />
      <meta property="og:image:alt" content="HireHive" />
      <meta property="og:description" content="Online Job Management / Job Portal" />
  
    <link rel="shortcut icon" href="images/ico/favicon.png">
  
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/component.css" rel="stylesheet">
    <link rel="stylesheet" href="css/chatbot.css" />
    <link rel="stylesheet" href="icons/linearicons/style.css">
    <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="icons/rivolicons/style.css">
    <link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
    <link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
    <link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
    <link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">
    <link href="css/style.css" rel="stylesheet">

  </head>  
  <body>
<body>
  <div class="sugge">
    <h4> This qustions you can ask to us </h4>
    <div class="alli">
      
    </div>

  </div>
  <div class="card">
    <div id="header">
      <h1>Chat with us..!</h1>
    </div>
    <div id="message-section">
      <div class="message" id="bot"><span id="bot-response">Hello.. I'm listening! Go on..</span></div>
    </div>
    <div id="input-section">
      <input id="input" type="text" placeholder="Type a message" autocomplete="off" autofocus="autofocus"/>
      <button class="send" onclick="sendMessage()">
        <div class="circle"><i class="zmdi zmdi-mail-send"></i></div>
      </button>
    </div>
  </div>
  <script src="js/chatbot.js"></script>
</body>
</html>