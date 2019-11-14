<?php
session_start();
error_reporting(0);
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
                #main{
                    position: relative;
                    display: inline-block;
                    margin-top: 120px;
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
                    background: #030903;
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
                    height: auto;
                    width: 75%;
                    margin: auto;
                    background: #cdcdcd;
                    border-radius: 20px;
                    box-shadow: -8px 8px 16px 0px rgba(0,0,0,0.1);
                }
                .view{
                    padding:20px;
                    color: #030303;
                    font-family: "calibri";
                    font-size: 18px;
                    text-align: center;
                    font-weight: bold;
                }
                .view_image{
                    margin: auto;
                    padding: 20px;
                }
                .view_text{
                    margin: auto;
                }
                .enter_header{
                    padding: 10px;
                    color: #030303;
                    font-family: "calibri";
                    font-size: 22px;
                    text-align: center;
                    font-weight: bold;
                }
                .enter_header img{
                    padding: 10;
                }
                .location{
                    padding: 10px;
                    color: #030303;
                    font-family: "calibri";
                    font-size: 18px;
                    text-align: center;
                    font-weight: bold;
                }
                .drop{
                    height:35px;
                    width: 190px;
                    border-radius: 8px;
                }
                .add{
                    height: 35px;
                    width: 130px;
                    border-radius: 25px;
                    border: none;
                    color: white;
                    background: #030303;
                    
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
            .view:hover{
                background: #adadad;
                border-radius: 25px 25px 0 0;
            }
            hr{
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <div class="header_text">
                <b>Auditors</b>
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
                <a href="user_view_data.php" class="link"><div class="view">
                    <div class="view_image">
                        <img src="image/view.png" height="150px" width="150px">
                    </div>
                    <div class="view_text">
                        View Previous Data
                    </div>
                </div>
                </a>
                <hr>
                <div class="enter">
                    <div class="enter_header">
                        Enter a new data<br>
                            <img src="image/loc.png" height="60px" width="60px">
                        <div class="loaction_header">
                            Select the city
                        </div>
                    </div>
                    <div class="location">
                        <div class="location_data">
                            <form method="post" action="#">
                                <center>
                                    <table>
                                    <tr>
                                        <td>
                                            <select name="location" class="drop">
                                                <?php
                                                $location = "SELECT * from location ORDER BY pincode";
                                                $loc_conn = mysqli_query($connect,$location);
                                                while($loc_fetch = mysqli_fetch_assoc($loc_conn)){
                                                    echo '<option>'.$loc_fetch['location'].'</option>';
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><center><input type="submit" name="submit" value="Add Data" class="add"/></center></td>
                                    </tr>
                                </table>
                                </center>
                                <?php
                                date_default_timezone_set("Asia/Kolkata");
                                $sel_loc = $_POST['location'];
                                $filename = $result['name'].'_'.$sel_loc.'_'.date('d').date('m').date('Y');
                                if($_POST['submit']){
                                    $file = 'SELECT * FROM filename WHERE filename="'.$filename.'"';
                                    $file_query = mysqli_query($connect,$file);
                                    $file_total = mysqli_num_rows($file_query);
                                    $mail = $result['emailId'];
                                    if($file_total==1){
                                        echo "Data already present. ";
                                        echo "<a href='redirect.php'>Edit</a>";
                                    }
                                    else{
                                        $create = "INSERT INTO filename VALUES('".$filename."','".$mail."','".date('d')."','".date('m')."','".date('Y')."','".$sel_loc."')";
                                        $create_query = mysqli_query($connect,$create);
                                        if($create_query){
                                            $_SESSION['filename'] = $filename;
                                            header('location:user_form_1.php');
                                            ob_end_flush();
                                        }
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
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