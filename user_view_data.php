<?php
session_start();
ob_start();
include("connect.php");
$s_username = $_SESSION['name'];
$get = "SELECT * FROM user WHERE emailId ="."'".$s_username."'";
$display = mysqli_query($connect,$get);
$result = mysqli_fetch_assoc($display);
if($s_username==true){
    
}
else
{
    header('location:index.php');
}
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Auditors</title>
        <style>
            @media only screen and (min-width: 1080px){
            body{
                margin: 0;
                height: 100%;
                width: auto;
            }
            
            #header{
                width: 100%;
                background: #0303aa;
                position: fixed;
                height: auto;
                top: 0;
            }
            .header_text b{
                font-family: "calibri";
                font-size: 40px;
                color: white;
            }
            .header_text{
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
                    bottom: 0;
                    margin: 0;
                }
            }
            @media only screen and (max-width: 1080px) {
            body{
                margin: 0;
                height: 100%;
                width: auto;
            }
            
            #header{
                width: 100%;
                position: fixed;
                height: auto;
                background: #030303;
            }
            .header_text b{
                font-family: "calibri";
                font-size: 40px;
                color: white;
            }
            .header_text{
                position: relative;
                display: inline-block;
                margin: 10px 20px;
                height: 10%;
            }
            .header_text a{
                text-decoration: none;
                color: white;
            }
                #main{
                    position: relative;
                    display: inline-block;
                    margin-top: 80px;
                    height: auto;
                    width: 100%;
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
                    background: #030303;
                    padding: 25px; 
                    width: 55%;
                    height: auto;
                    text-align: center;
                }
                .name{
                    position: relative;
                    display: inline-block;
                    color: white;
                    font-family: "calibri";
                    font-size: 18px;
                    float: right;
                    margin-top: 25;
                }
                .profile{
                    position: relative;
                    display: inline-block;
                    float: right;
                    margin: 15;
                }
                .content{
                    width: 90%;
                    height: 100%;
                    margin: auto;
                }
                .card{
                    height: auto;
                    width: 100%;
                    background: #dddddd;
                    border-radius: 15px;
                    margin-top: 20px;
                    box-shadow: 0px 3px 6px 0px rgba(0,0,0,0.2);
                }
                .card:hover{
                    background: #bdbdbd;
                    border-radius: 15px;
                }
                .card_text{
                    padding: 20px;
                    color: #030303;
                    font-size: 20px;
                    font-family: "calibri";
                    font-weight: bold;
                }
                .card_date{
                    position: relative;
                    display: inline-block;
                    float: right;
                    padding: 20px;
                    color: #030303;
                    font-size: 20px;
                    font-family: "calibri";
                }
            #footer{
                width: 100%;
                height: 7%;
                bottom: 0;
                position: fixed;
                background: #030303;
            }
                .footer_text{
                    font-family: "calibri";
                    font-size: 15px;
                    color: white;
                    text-align: center;
                    margin: 12;
                }
                .drpdwn {
                    display: none;
                    position: absolute;
                    right: 0;
                    background-color: #f9f9f9;
                    min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    z-index: 1;
                    border-radius: 5px;
                    font-family: "calibri";
                }

                .drpdwn a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                .dropdown-content a:hover {background-color: #f1f1f1;}
                .profile:hover .drpdwn {display: block;}
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div class="header_text">
                <b><a href="user_home.php">Auditors</a></b>
            </div>
                <div class="profile">
                    <img src="image/user.png" height="38.8px" width="50px">
                    <div class="drpdwn">
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
                <div class="name">
                    Hi, 
                    <?php
                    echo $result['name'];
                    ?>
                </div>
            </div>
        <div id="main">
            <div class="content">
                <?php
                $fetch = "SELECT * FROM filename WHERE created_by='".$_SESSION['name']."' ORDER BY date DESC, month DESC, year DESC, location DESC";
                $fetch_query = mysqli_query($connect,$fetch);
                while($fetch_fetch = mysqli_fetch_assoc($fetch_query)){
                echo '<div class="card"><a href="user_result.php?filename='.$fetch_fetch['filename'].'">';
                    echo '<div class="card_date">';
                        echo $fetch_fetch['date']."/".$fetch_fetch['month']."/".$fetch_fetch['year'];
                    echo '</div>';
                    echo '<div class="card_text">';
                        echo '<img src="image/view.png" height="20px" width="20px">&nbsp;&nbsp;';
                            echo $fetch_fetch['location'];
                    echo '</div>';
                echo '</a></div>';
                }
                ?>
            </div>
        </div>
        <div id="footer">
            <div class="footer_text">
                &copy; Avaneesh Kumar
            </div>
        </div>
    </body>
</html>