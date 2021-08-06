<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <title>Header</title>
</head>

<body>
  <div class="box">
    <nav class="navbar navbar-light bg-light">
      <div class="container justiy-content-between">
        <a class="navbar-brand">
          <img src="./img1.png" alt="" width="100">
        </a>
        <a class="navbar-brand" onclick="opening()">
          <img src="./img2.png" alt="" width="80">
        </a>
      </div>
    </nav>
    <div id='container'>
      <div class='child'>
        <h1>Chintan Thakur</h1>
        <span>UX/UI Designer & Consultant</span>
        <hr size="7" width="70">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus commodi numquam quae atque. Eligendi
          cumque, optio ipsa totam amet excepturi, veritatis quod ut laboriosam autem eaque neque, similique reiciendis
          voluptate?</p>
        <button>Work together</button>
      </div>
      <div class="child">
        <img src="./img3.png">
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