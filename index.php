<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITF - Thanawat</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: black;
        }

        h1 {
            color: white;
        }

        p {
            color: red;
        }

        .login_btn {
            padding: 20px 30px;
            width: 400px;
            height: 60px;
            text-align: center;
            line-height: 60px;
            color: #fff;
            font-size: 24px;
            text-transform: capitalize;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
            background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
            background-size: 400%;
            border-radius: 60px;
            z-index: 1;
        }

        .login_btn:hover {
            animation: animate 8s linear infinite;
        }

        @keyframes animate {
            0% {
                background-position: 0%;
            }

            100% {
                background-position: 400%;
            }
        }

        .login_btn:before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            z-index: -1;
            background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
            background-size: 400%;
            border-radius: 60px;
            opacity: 0;
            transition: 0.56s;
        }

        .login_btn:hover:before {
            filter: blur(20px);
            opacity: 1;
            animation: animate 8s linear infinite;
        }

        header.sticky .login_btn ul li a {
            color: #fff;

        }

        * {
            box-sizing: border-box
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }
    </style>
</head>

<body>
    <center>
        <h1 style="font-size: 80px;">
            ITF - Thanawat Jantawong</h1>
        <li><a class="login_btn" href="https://ejudge.it.kmitl.ac.th">Click to Ejudge</a></li><br><br>
        <h1 style="font-size: 20px;">
            ในร้านอาหารของคุณมีอยู่ 4โต๊ะ
            โต๊ะที่1 สั่งอาหาร โต๊ะที่2 จ่ายตังค์ โต๊ะที่3 นั่งรออาหาร โต๊ะที่ 4 เบี้ยว
            คุณจะทำอย่างไร?<br><br><br>
            ตอบ จัดโต๊ะที่4 ให้ตรง</h1>
        <br><br><br>
        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 2</div>
                <img src="img/pic1.png" style="width:30%">
                <div class="text">Pic 1 eiei</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 2</div>
                <img src="img/pic2.png" style="width:25%">
                <div class="text">Pic 2 eiei</div>
            </div>
            <!-- Next and previous buttons -->
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>
    </center>
</body>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 5000);
    }

</script>

</html>
