
<html xmlns:z-index="http://www.w3.org/1999/xhtml">
<head>

    <link rel="stylesheet" type="text/css" href="css/w3.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <script src="js/bootstrap.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="css/bootstrap.css"></script>
    <script src="css/w3.css"></script>
    <style>

        body {
            align-items: center;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: "Lucida Grande", Lucida, Verdana, sans-serif;
            background-color: transparent;

            /*nos posicionamos en el centro del navegador*/

            top:50%;

            left:50%;

            /*determinamos una anchura*/

            width:400px;

            /*indicamos que el margen izquierdo, es la mitad de la anchura*/

            margin-left:-200px;

            /*determinamos una altura*/

            height:300px;

            /*indicamos que el margen superior, es la mitad de la altura*/

            margin-top:-150px;

            border:none;

            padding:5px;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 24px 40px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 20%;
            border-radius: 50%;
            mso-border-shadow: yes;
            background-repeat: no-repeat;
            content: 'center fixed';
        }

        .container {
            padding: 16px;
            height: auto;
            width: auto;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 3; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.39); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            font-family: "Arial Rounded MT Bold";
            font-style: normal;
            color: snow;
            font-size: 14px;
            margin: 8% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 50%;
            background: rgba(255, 255, 255, 0.15);/* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #ffffff;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }


        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.8s;
            animation: animatezoom 0.8s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .mySlides {

                height: 100% !important;;
            }
            .cancelbtn {
                width: 100%;
            }
        }

        html { height: 100%; }



        .txt {
            outline: none;
        }

        /* Box ------------------------------------------------------ */

        .box {
            padding: 50px;
            align-content: center;
            font-weight: normal;
            cursor: auto;
        }


        /* txt ------------------------------------------------------ */

        .txt {
            font-size: 36px;
            font-family: PROMETHEUS;
            color: hsl(0, 0%, 80%);
            text-shadow: #dcdcdc 0 0 70px;
            transition: text-shadow 2s cubic-bezier(0, 1, 0, 1);
        }
        @-moz-document url-prefix() { .txt { text-shadow: #e2e2e2 0 0 30px; } } /* FF fix */

        .box:hover .txt {
            text-shadow: #000000 0 0 19px;
            transition: text-shadow 10s cubic-bezier(0, 0.105, 0, 5);
        }


        /* ♥ ------------------------------------------------------ */

        /* FF fix */

        * {
            box-sizing: border-box;

        }

        .background-image {
            background-image: url('img/pro-login2.jpg');
           height: 100%;
            background-size:100% auto;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            display: block;
            filter: blur(4px);
            -webkit-filter: blur(4px);
            left: 0;
            position: fixed;
            right: 0;
            z-index: 1;
        }



        .content {
            width: auto;
            height: auto;
            background: rgba(255, 255, 255, 0.35);
            border-radius: 3px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 16px;
            color: snow;
            margin-left: 20px;
            margin-right: 20px;
            right: 0;
            z-index: 2;


        }
        .mySlides {display:none;}
    </style>

</head>
<body>
<!----------------------------------------------------------------------------------------->


<div class="background-image">
    <img class="w3-animate-right mySlides background-image" src="img/pro-login.png" style="width:100% ">
    <img class="w3-animate-left mySlides background-image" src="img/pro-login1.jpg" style="width:100%">
    <img class="w3-animate-right mySlides background-image" src="img/pro-login2.jpg" style="width:100% ">
    <img class="w3-animate-left mySlides background-image" src="img/pro-login1.jpg" style="width:100%">
</div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 5000); // Change image everys seconds
    }



</script>




<!----------------------------------------------------------------------------------------->

<div class="content animate " id="id00">
    <div class="box" >
        <span class="txt">Bienvenido a</span>
        <span class="?"><img src="img/intelligent3.png"> </span>
        <span class="txt">INTELLIGENT</span>

    </div>
    <button onclick="document.getElementById('id00').style.display = 'none',document.getElementById('id01').style.display='block' " style="width:auto;">INICIAR SESION</button>
</div>

<div id="id01" class="modal">

    <form class="modal-content animate w3-animate-zoom" method="post" action="php/accion.php">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none',document.getElementById('id00').style.display='block' " class="close" title="Close Modal">&times;</span>
            <img src="img/user-6.png" alt="Avatar" class="avatar">
        </div>

        <div class="container" >

            <label for="user"><b>Nombre de Usuario</b></label>
            <input class="content" type="text" placeholder="Usuario" id="user" method="post" value="" name="user" required>

            <label for="pass"><b>Password</b></label>
            <input class="content" type="password" placeholder="Password" id="pass" method="post" value="" name="password" required>

            <button  type="submit" class="btn-submit" onclick='msg()'; name="submit">Iniciar Sesion</button>
            <span id="resultado"> </span>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Recordarme
            </label>


        </div>

    </form>


</div>
<script>
    // Get the modal
    var modal = document.getElementById('id01');
    var inicio = document.getElementById('id00');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            inicio.style.display = "block";
        }
    }
</script>
</body>
</html>
<?php wef?>