<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- TITLE -->
        <title></title>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">  
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">          
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <style>
            body{
                margin: 0;
                font-family: 'Nunito', sans-serif;
            }
            .wrapper{
                width: 768px;
                margin: 0 auto;
                background-color: #f7f7f7;
                padding: 30px 50px;
            }

            .email_content{
                background: #fff;
                padding: 0px 30px;
            }
            .email_content{}
            .dl_p{
                width: 171px;
                height: 25px;
                color: #ffffff;
                font-size: 18px;
                font-weight: 600;
                text-align: center;
                display: inline-block;
                display: block;
                width: 232px;
                height: 39px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26), 0 2px 10px rgba(0, 0, 0, 0.16);
                border-radius: 3px;
                background-color: #f6b253;
                margin: 0 auto;
                line-height: 39px;
                text-decoration: none;
                margin-bottom: 30px;
            }
            .text-center{
                text-align: center;
            }
            .footer{
                width: 100%;
                height: 50px;
                background-color: #fdedd6;
                text-align: center;
                line-height: 53px;
                margin-top: 30px;
            }
            .link {
                display: block;
                color: #f5a73e;
                margin: 0px 0px;
            }
            .email_content_text > h2{
                color: #808080;
                font-size: 18px;
                font-size: 24px;
                margin-bottom: 0;
            }
            .email_content_text > p{
                font-size: 18px;
                font-weight: 500;
                color: #808080;
            }
            table{
                background: #fff;
                position: relative;
                width: 768px;
                margin: 0px auto;
            }
            table tr:first-child{
                position: relative;
                padding-top: 20px
            }
            table tr:first-child:after{
                position: absolute;
                top: 0;
                left: 0;
                border-top:7px solid #f6b253;
                width: 100%;
                content: "";
                border-radius: 5px 5px 0px 0px;
                margin-bottom: 20px;
            }
            table tr td{
                padding-left: 15px;
                padding-right: 15px;
            }
             table tr:first-child td{
                padding-top: 25px;
            }
        </style>
    </head>
    <body>
        <div class="wrapper clearfix">
            <table style="border-top: 7px solid #f6b253; border-radius: 5px 5px 0px 0px;margin-bottom: 20px">
                
                <tr>
                    <td colspan="2"><p style="margin-bottom: 30px;color: #808080;">You are receiving this email because we received a password reset request for your account.</p>

                    <h2 style="color: #808080; font-weight: normal;">Ecco la copia della sua richiesta.</h2> 
                    <p style="margin-top:0px; margin-bottom:25px; color: #808080;">If you did not request a password reset, no further action is required.
                    </p></td>
                </tr>
                <tr>
                    <td colspan="2"><a style="width: 171px;
                                                height: 25px;
                                                color: #ffffff;
                                                font-size: 18px;
                                                font-weight: 600;
                                                text-align: center;
                                                display: inline-block;
                                                display: block;
                                                width: 232px;
                                                height: 39px;
                                                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26), 0 2px 10px rgba(0, 0, 0, 0.16);
                                                border-radius: 3px;
                                                background-color: #f6b253;
                                                margin: 0 auto;
                                                line-height: 39px;
                                                text-decoration: none;
                                                margin-bottom: 30px;" 
                                                href="{{ $reset_url }}">Password Reset Link</a></td>
                </tr>
                
            </table>
        </div>           
    </body>
</html>