<?php
    $pageTitle = "Citadel Cafe | Coffee, Turkish Delight, and more!";
    $styleFile = "gallery.css";
?>

<?php include('inc/header.php') ?>
<div class="container">
    <div class="jumbotron">
        <h1><span><i class="fa fa-camera-retro"></i></span> Citadel Cafe: Quality and Authenticity</h1>
        <p>Some of the treats we work so hard to bring to you!</p>
    </div>
    <div id="inner-container" class="container">
        <div class="main-img">
            <img src="img/1.jpg" id="current" alt="">
        </div>
        <div class="button-container">
            <!-- Next and previous buttons -->
            <a class="prev">&#10094;</a>
            <a class="next">&#10095;</a>
            <br>
        </div>
        <!-- <div>
            <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div> -->
        <!-- <div class="imgs">
            <img src="img/1.jpg" alt="">
            <img src="img/2.jpg" alt="">
            <img src="img/3.jpg" alt="">
            <img src="img/4.jpg" alt="">
            <img src="img/5.jpg" alt="">
            <img src="img/6.jpg" alt="">
            <img src="img/7.jpg" alt="">
            <img src="img/8.jpg" alt="">
            <img src="img/9.jpg" alt="">
        </div> -->
    </div>

<!-- All Photos Licensed Under Creative Commons 2.0 -->
<!-- https://creativecommons.org/licenses/by/2.0/legalcode  -->
</div>


<script src="lib/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
