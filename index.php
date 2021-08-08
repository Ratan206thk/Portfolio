<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./style.css">
  <title>Header</title>
</head>

<body>
  <div class="box">
    <nav class="navbar">
      <div class="container">
        <a class="navbar-brand">
          <img src="./images/Group 2536.png" alt="" width="90">
        </a>
        <a class="navbar-brand" onclick="opening()">
          <img src="./images/bx-menu-alt-right.svg" alt="" width="30">
        </a>
      </div>
    </nav>
    <div class='d-flex justify-content-around flex-md-row'>
      <div class='child'>
        <h1>Chintan Thakur</h1>
        <span>UX/UI Designer & Consultant</span>
        <hr size="7" width="70">
        <p>Hello. My name is Chintan, I'm skilled Web Designer with a wide range of expertise in UI and UX Design. I have good experience in creating web, mobile and tablet user interfaces and experiences from both, creative and analytical sides. I am able to plan, budget and manage an entire site or app creation process from start to finish.</p>
        <button>Work together</button>
      </div>
      <img class="img-fluid" src="./images/Avatar.png" width="42%" height="auto">
    </div>
    <div class="design d-flex justify-content-around flex-md-row">
        <div class='ui'>
            <h6>Innovate. Together.</h6>
            <h1>UX<span>Design</span></h1>
            <p>Together we investigate, we create, we approach, we test and innovate with the solution to that challenge you have with your digital products.</p>
            <div>
                <button>Let's create</button>
                <button class='get'>Get in touch</button>
            </div>
        </div>
        <img class="img-fluid" src="./images/Timeline Final.png" width="42%" height="auto">
    </div>
    <div class="designs d-flex justify-content-around flex-md-row">
        <img class="img-fluid" src="./images/Timeline Final.png" width="42%" height="auto">
        <div class='ui'>
            <h6>Understand. Together.</h6>
            <h1>Data<span>Visualization</span></h1>
            <p>Create personalized infographics to bring your data to a very friendly level so that anyone can understand it in the best way and without bias.</p>
            <div>
                <button>Get in touch</button>
                <button class='get'>Check example</button>
            </div>
        </div>
    </div>
  </div>
  <div class="hello box">
    <img src="./img4.png" onclick="closing();">
    <ul>About me</ul>
    <ul>Creation Process</ul>
    <ul>Portolio</ul>
    <ul>Testimonials</ul>
    <ul>Contact me</ul>
  </div>
</body>
<script src="./script.js"></script>
</html>