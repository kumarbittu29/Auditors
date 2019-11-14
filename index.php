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
                height: 10%;
            }
            .header_text b{
                font-family: "calibri";
                font-size: 40px;
                color: white;
            }
            .header_text{
                margin: 10;
                text-align: center;
            }
                #main{
                    position: relative;
                    display: inline-block;
                    margin-top: 250px;
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
            <a href="admin_login.php">
            <div class="admin">
                <b>Admin</b>
            </div>
            </a>
            <div class="space"></div>
            <a href="user_login.php">
            <div class="user">
                <b>User</b>
            </div>
            </a>
        </div>
        <div id="footer">
            <div class="footer_text">
                &copy; Avaneesh Kumar
            </div>
        </div>
    </body>
</html>