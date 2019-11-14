<?php
session_start();
error_reporting(0);
include("connect.php");
if(isset($_POST['login']))
{
    $emailId = $_POST['emailId'];
    $password = $_POST['password'];
    $check = "SELECT * FROM user WHERE emailId='$emailId' && password='$password'";
    $login= mysqli_query($connect,$check);
    $total = mysqli_num_rows($login);
    if($total==1)
        {
        $_SESSION['name']=$emailId;
         header('location:user_home.php', false, 303);
         exit();
        }
    else
        {
        $error ="Login Failed";
        }
    }
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Auditors</title>
        <style>
            body{
                margin: 0;
                height: 100%;
                width: auto;
            }
            
            #header{
                width: 100%;
                background: #030303;
                position: fixed;
                height: auto;
                top: 0;
                z-index: 1;
            }
            .header_text b{
                font-family: "calibri";
                font-size: 40px;
                color: white;
            }
            .header_text{
                margin: 10;
                margin-left: 25;
                height: 10%;
                text-align: center;
            }
            #footer{
                width: 100%;
                height: 50;
                background: #003030;
                bottom: 0;
                position: fixed;
            }
            .footer_text{
                    font-family: "calibri";
                    font-size: 15px;
                    color: white;
                    text-align: center;
                    bottom: 0;
                    margin: 0;
                }
            @media only screen and (max-width: 1080px) {
            body{
                margin: 0;
                height: 100%;
                width: auto;
            }
            
            #header{
                width: 100%;
                background: #030303;
                position: fixed;
                height: auto;
                top: 0;
                z-index: -1;
            }
            .header_text b{
                font-family: "calibri";
                font-size: 40px;
                color: white;
            }
            .header_text{
                margin: 10;
                height: 10%;
                text-align: center;
            }
                #main{
                    position: relative;
                    display: inline-block;
                    margin-top: 220px;
                    height: auto;
                    width: 100%;
                }
                .admin b{
                    font-family: "calibri";
                    font-size: 30px;
                    color: white;
                }
                .user b{
                    font-family: "calibri";
                    font-size: 30px;
                    color: white;
                }
                a{
                    text-decoration: none;
                }
                .admin{
                    margin: auto;
                    border-radius: 50px;
                    background: #030903;
                    padding: 25px; 
                    width: 55%;
                    height: auto;
                    text-align: center;
                }
                .space{
                    height: 5%;
                    width: auto;
                }
                .user{
                    margin: auto;
                    border-radius: 50px;
                    background: #030903;
                    padding: 25px; 
                    width: 55%;
                    height: auto;
                    text-align: center;
                }
                .card{
                    font-family: "calibri";
                    background: #cdcdcdcd;
                    height: auto;
                    width: 80%;
                    margin: auto;
                    border-radius: 25px;
                }
                .card_header{
                    font-size: 25px;
                    padding: 15px 20px;
                    font-weight: bold;
                    background: #030303;
                    border-radius: 25px 25px 0 0;
                    color: white;
                }
                .ctable{
                    height: auto;
                    width: 80%;
                }
                .ctable tr{
                    width: 100%;
                }
                hr{
                    width: auto;
                    margin: 0;
                }
                .card_main{
                    height: auto;
                    width: 80%;
                    margin: auto;
                    margin-top: 20px;
                }
                .lable{
                    font-size: 18px;
                    font-weight: bold;
                }
                .textbox{
                    height: 30px;
                    width: 240px;
                    border-radius: 5px;
                    border: none;
                }
                .button{
                    height: 45px;
                    width: 100px;
                    margin: auto;
                    background: #030303;
                    color: white;
                    border-radius: 25px;
                    font-weight: bold;
                    font-size: 18px;
                    border: none;
                }
                p.alert{
                    font-family: Arial;
                    text-align: center;
                    font-size: 10px;
                    color: red;
                }
                
            #footer{
                width: 100%;
                height: 7%;
                background: #030303;
                bottom: 0;
                position: fixed;
            }
                .footer_text{
                    font-family: "calibri";
                    font-size: 15px;
                    color: white;
                    text-align: center;
                    margin: 12;
                }
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div class="header_text">
                <b>Auditors</b>
            </div>
        </div>
        <div id="main">
            <div class="card">
                <div class="card_header">
                    Login
                </div>
                <hr>
                <div class="card_main">
                    <form method="post" action="">
                    <table class="ctable">
                        <tr>
                            <td class="lable">Email: </td>
                        </tr>
                        <tr>
                            <td><input type="text" name="emailId" class="textbox"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="lable">Password: </td>
                        </tr>
                        <tr>
                            <td><input type="password" name="password" class="textbox"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><center><input type="submit" name="login" class="button" value="Login"></center></td>
                        </tr>
                        <tr>
                            <td>
                                <p class="alert">
                                <?php
                                    echo '<br>';
                                    echo $error;
                                ?>
                                </p>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="footer_text">
                &copy; Avaneesh Kumar
            </div>
        </div>
    </body>
</html>