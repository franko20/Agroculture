<?php?>
<!DOCTYPE html>
<html>
    <head>
        <title>Agroculture.com</title>
        <style>
            body{
                margin:0;
                padding:0;
                font-family: Arial;
            }
            .top_nav{
                position: fixed;
                top: 0;
                left: 0;
                width:100%;
                height: 60px;
                padding: 10px 90px;
                box-sizing: border-box;
                background: rgba(0, 0, 0, 0.5);
            }
            .logo{
                padding: 5px 0px;
                height: 50px;
                float: left;
                font-size: 30px;
                font-weight: bold;
                letter-spacing: 5px;
                text-transform: uppercase;
                margin-left: 20px;
                color: rgb(255, 136, 0);
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: rgb(255, 141, 88);
            }
            .top_nav ul{
                list-style: none;
                float: right;
                margin: 0;
                padding: 0;
                display: flex;
            }
            .top_nav ul li a{
                line-height: 40px;
                color:#fff;
                cursor:pointer;
                padding: 8px 20px;
                text-decoration: none;
                text-transform: uppercase;
                font-size: 13px;
                letter-spacing: 3px;
                font-weight: bold;
            }
            .top_nav ul li a:hover{
                background: rgba(0,0,0,0.7);
                border-radius: 6px;
            }
            .top_nav ul li a.active{
                background: #e2472f;
                color:#fff;
                border-radius: 6px;
            }
            section{
                width: 100%;
                height: 100vh;
                background: url('heart.jpg');
                background-size: cover;
                background-position: bottom: 1px;
            }
            .h1{
                text-align: center;
	            color: rgb(138, 0, 156);
                font-size: 50px;
                padding-top:120px;
                font-family: 'Times New Roman', Times, serif;
                -webkit-text-stroke-width: 3px;
                -webkit-text-stroke-color: rgb(99, 1, 124);
                letter-spacing: 1px;
                cursor:pointer;
                transition: 0.1s;
            }
            .h1:hover{
                color: rgb(207, 0, 235);
                -webkit-text-stroke-width: 3px;
                -webkit-text-stroke-color: rgb(104, 0, 117);
                letter-spacing: 2px;
            }
            .h2{
                text-align: center;
	            color: rgb(165, 154, 1);
                font-size: 29px;
                font-family: 'Times New Roman', Times, serif;
                -webkit-text-stroke-width: 2px;
                -webkit-text-stroke-color:rgb(150, 123, 37);
                letter-spacing: 1px;
                cursor:pointer;
                transition: 0.1s;
            }
            .h2:hover{
                color: rgb(189, 176, 0);
                -webkit-text-stroke-width: 2px;
                -webkit-text-stroke-color: rgb(139, 107, 0);
                letter-spacing: 2px;
            }
            .bottom_nav{
                position: fixed;
                bottom: 0;
                left: 0;
                width:100%;
                height: 60px;
                padding: 10px 90px;
                box-sizing: border-box;
                background: rgba(0, 0, 0, 0.5);
            }
            .bottom_nav ul{
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
            }
            #button{
                font-size: 16px;
                position: relative;
                border-radius:10px;
                padding:5px 5px 5px 11px;
                background: rgb(114, 60, 25);
                color:wheat;
                margin-top: 6px;
                border-color: wheat;
                border-width: 2px;
                outline: none;
                letter-spacing: 6px;
                margin-left: 300px;
                cursor:pointer;
            }
            #button:hover{
                background: #5a220c;
	            color: wheat;
            }
            #buttonA{
                font-size: 16px;
                position: relative;
                border-radius:8px;
                padding:6px 4px 5px 11px;
                background: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)), transparent;
                color:rgb(179, 237, 245);
                margin-top: 3px;
                border-color: rgb(179, 237, 245);
                border-width: 2px;
                outline: none;
                letter-spacing: 6px;
                margin-top: 4px;
                margin-left: 300px;
                cursor:pointer;
            }
            #buttonA:hover{
                background: #0b3a5a;
	            color: rgb(179, 237, 245);
                border-color: rgb(179, 237, 245);
                border-width: 2px;
            }
            #button2{
                font-size: 14px;
                position: relative;
                border-radius:10px;
                padding:6px 8px 6px 10px;
                background:  rgb(41, 88, 41);
                color:rgb(187, 245, 179);
                margin-top: 6px;
                border-color: rgb(187, 245, 179);
                border-width: 2px;
                outline: none;
                letter-spacing: 1px;
                margin-left: 400px;
                cursor:pointer;
            }
            #button2:hover{
                background: #0c3d10;
	            color: rgb(187, 245, 179);
            }
        </style>
    </head>
    <body>
        <div class="wrap">
            <div class="top_nav">
                <div class="logo">WELCOME</div>
                <ul>
                    <li><a class="active" href="Index.php">Home</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Help.php">Help</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><a href="Feedback.php">Feedback</a></li>
                </ul>
            </div>
            <section>
                <div class="h1">
                    <h1>AGROCULTURE</h1>
                </div>
                <div class="h2">
                    <h2>Your Product Our Market</h2>
                </div>
                
                <div class="bottom_nav">
                    <ul>
                    <li><form action="login.php">
                        <input type="submit" value="LOGIN" id="button">
                    </form></li>
                    <li><form action="Register.php">
                        <input type="submit" value="REGISTER" id="button2">
                    </form></li>
                    </ul>
                </div>
            </section>
        </div>
    </body>
</html>