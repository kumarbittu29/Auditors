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
            body{
                margin: 0;
                height: 100%;
                width: auto;
            }
            
            #header{
                width: 100%;
                background: #003030;
                position: fixed;
                height: auto;
            }
            .header_text{
                text-decoration-color: white;
                margin: 20;
                
            }
            #footer{
                width: 100%;
                height: 10%;
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
                z-index: 1;
            }
            .header_text b{
                font-family: "calibri";
                font-size: 40px;
                color: white;
            }
            .header_text{
                position: relative;
                display: inline-block;
                margin: 10;
                margin-left: 25;
                height: 10%;
            }
                #main{
                    height: auto;
                    width: 100%;
                }
                .space{
                    height: 10px;
                    width: 100%;
                }
                .scroll{
                    margin-top: 69px;
                    overflow:auto;
                    position: sticky;
                    height: auto;
                    width: auto;
                }
                .tab{
                    height: 45;
                    width: 1200px;
                    background: #bdbdbd;
                }
                .tab a{
                    text-decoration: none;
                    display: inline;
                    float: left;
                }
                .icon{
                    font-family: "calibri";
                    font-size: 20px;
                    color: #030303;
                    padding: 10px;
                }
                .form::-webkit-scrollbar{
                    display: none;
                }
                .scroll::-webkit-scrollbar{
                    display: none;
                }
                .data::-webkit-scrollbar{
                    display: none;
                }
                .content{
                    height: 100%;
                    width: 100%;
                }
                .form{
                    margin-top: 15px;
                    overflow-y: scroll;
                    margin-left: 5%;
                }
                .icon:hover{
                    font-family: "calibri";
                    font-size: 20px;
                    background: #616161;
                    color: white;
                    padding: 10px;
                    
                }
                .selected{
                    font-weight: bold;
                    font-family: "calibri";
                    font-size: 20px;
                    background: #616161;
                    color: white;
                    padding: 10px;
                }
            #footer{
                width: 100%;
                height: 45px;
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
            sup{
                color: red;
            }
            .fill{
                font-family: "calibri";
                font-size: 18px;
                font-weight: bold;
            }
            .data{
                position: sticky;
                overflow:auto;
            }
            .data table{
                width: 1000px;
                height: auto;
            }
            .data table tr td{
                padding: 5px;
            }
            .input{
                border-style: ridge;
                border-radius: 5px;
                height: 30px;
                width: 90%;
            }
            .input_big{
                border-style: ridge;
                border-radius: 5px;
                height: 70px;
                width: 90%;
            }
            .button{
                height: 40px;
                width: 180px;
                background: #bdbdbd;
                border-radius: 25px;
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
            .header_text a{
                text-decoration: none;
                color: white;
            }
                .dropdown-content a:hover {background-color: #f1f1f1;}
                .profile:hover .drpdwn {display: block;}
            .view_header{
                font-family: "calibri";
                font-weight: bold;
                border: 2px solid black;
            }
            .view_updated{
                font-family: "calibri";
                padding: 20px;
            }
            .tdata{
                border: 2px solid black;
                border-collapse: collapse;
                width: 150px;
                text-align: left;
            }
            .tdata th{
                padding: 15px;
            }
            .tdata tr:nth-child(even) {background-color: #f2f2f2;}
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
        <div class="scroll">
        <div class="tab">
                    <a href="user_form_2"><div class="selected">Projector Room</div></a>
                    <a href="user_form_2"><div class="icon">Back Office</div></a>
                    <a href="user_form_2"><div class="icon">Audi</div></a>
                    <a href="user_form_2"><div class="icon">Candy</div></a>
                    <a href="user_form_2"><div class="icon">Box Office</div></a>
                    <a href="user_form_2"><div class="icon">Gate Security</div></a>
                    <a href="user_form_2"><div class="icon">Lobby</div></a>
                    <a href="user_form_2"><div class="icon">Store</div></a>
                    <a href="user_form_2"><div class="icon">Washroom</div></a>
                    <a href="user_form_2"><div class="icon">Accounts</div></a>
                    <a href="user_form_2"><div class="icon">Sales</div></a>
                    <a href="user_form_2"><div class="icon">Other</div></a>
                </div>
        </div>
        <div id="main">
            <div class="space">
            </div>
            <div class="content">
                <div class="form">
                    <form method="post" action="">
                        <?php
                            error_reporting(0);
                            $one = $_POST['1_1'];
                            $two = $_POST['1_2'];
                            $three = $_POST['1_3'];
                            $four = $_POST['1_4'];
                            $five = $_POST['1_5'];
                            $six = $_POST['1_6'];
                            $seven = $_POST['1_7'];
                            $eight = $_POST['1_8'];
                            $nine = $_POST['1_9'];
                        
                            
                                $check = "SELECT * FROM projector_room WHERE filename='".$_SESSION['filename']."'";
                                $check_query = mysqli_query($connect,$check);
                                $check_total = mysqli_num_rows($check_query);
                                $sno = $check_total+1;
                            if($one=='Select...'||$one==''||$two=='Select...'||$two==''||$three=='Select...'||$three==''||$four=='Select...'||$four==''||$seven==''||$eight==''){
                            }
                            else{
                        
                                $add = "INSERT INTO projector_room VALUES ('".$_SESSION['filename']."','".$sno."','".$one."','".$two."','".$three."','".$four."','".$five."','".$six."','".$seven."','".$eight."','".$nine."')";
                                $add_query = mysqli_query($connect,$add);
                                if($add_query){
                                    echo "Data Inserted";
                                    header('location:user_form_1.php');
                                }
                                else{
                                    $error = "echo";
                                }
                            }
                                echo '<div class="data"><table class="tdata">';
                                    if($check_total>0){
                                        $abbr = "SELECT * FROM abbr ORDER BY no";
                                        $abbr_query = mysqli_query($connect,$abbr);
                                        $abbr_total = mysqli_num_rows($abbr_query);
                                        echo '<tr class="view_header"><th nowrap>S. No.</th>';
                                        while($abbr_total = mysqli_fetch_assoc($abbr_query)){
                                            echo '<th nowrap>'.$abbr_total['name'].'</th>';
                                        }
                                        echo '<th nowrap>Delete</th></tr>';
                                    }
                                    while($check_fetch = mysqli_fetch_assoc($check_query)){
                                        echo '<tr class="view_updated"><td>'.$check_fetch['sno'].'</td>';
                                        echo '<td>'.$check_fetch['buss_act'].'</td>';
                                        echo '<td>'.$check_fetch['sub_act'].'</td>';
                                        echo '<td>'.$check_fetch['area'].'</td>';
                                        echo '<td>'.$check_fetch['pts_check'].'</td>';
                                        echo '<td>'.$check_fetch['crtl_obj'].'</td>';
                                        echo '<td>'.$check_fetch['act_desc'].'</td>';
                                        echo '<td>'.$check_fetch['max_marks'].'</td>';
                                        echo '<td>'.$check_fetch['marks_obt'].'</td>';
                                        echo '<td>'.$check_fetch['remark'].'</td>';
                                        echo '<td><a href="delete.php?sno='.$check_fetch['sno'].'">Delete</a></td></tr>';
                                    }
                                echo '</table><br><br></div>';
                        ?>
                        <table class="fill">
                            <tr><td>Business Activity<sup>*</sup></td>
                            </tr>
                            <tr>
                                <td>
                                <select class="input" name="1_1">
                                    <option>Select...</option>
                                    <option>Fire and Safety</option>
                                    <option>Operations</option>
                                </select>
                                </td></tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr><td>Sub Activity<sup>*</sup></td>
                            </tr>
                            <tr>
                                <td>
                                <select class="input" name="1_2">
                                    <option>Select...</option>
                                    <option>Projection Room</option>
                                    <option>Operation</option>
                                </td></tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr><td>Area<sup>*</sup></td>
                            </tr>
                            <tr>
                                <td>
                                <select class="input" name="1_3">
                                    <option>Select...</option>
                                    <option>Process</option>
                                </select>
                                </td></tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr><td>Points To Be Checked<sup>*</sup></td>
                            </tr>
                            <tr>
                                <td>
                                <select class="input" name="1_4">
                                    <option>Select...</option>
                                    <option>First Aid & Artificial Respiration method chart (In Hindi & English) available in Projection room</option>
                                    <option>Is Fire Blankets in ok condition?</option>
                                    <option>Co2 fire extinguisher provided in Projection Area?</option>
                                    <option>Is phone in working condition?</option>
                                    <option>No extra material kept in the projection room</option>
                                    <option>Software time match with actual projection/tms server time</option>
                                    <option>Updation of Movie condition report & Playlist check format.</option>
                                    <option>Projection Area neat & clean</option>
                                </select>
                                </td></tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                Control Objective
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea name="1_5" class="input_big" rows="10" cols="30"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                Activity Description
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="1_6" value="Yes" checked> Yes /
                                    <input type="radio" name="1_6" value="No"> No
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                Max. Marks
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="number" name="1_7" class="input"/>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                Marks Obtained
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="number" name="1_8" class="input"/>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                Remarks
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea name="1_9" class="input_big" rows="10" cols="30"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="button">
                                        <input type="submit" class="button" value="Add New Entry">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="button">
                                        <input type="submit" class="button" value="Move to Next Section">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><?php echo $error; ?></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
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
<?php
ob_end_flush();
?>