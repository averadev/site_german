<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>German Arzate | Newsletter</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%; 
        }
        body {
        background-color: #f6f6f6;
        font-family: "Crimson Text";
        -webkit-font-smoothing: antialiased;
        font-size: 14px;
        line-height: 1.4;
        margin: 0;
        padding: 0; 
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%; 
        }
        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; 
        }
        table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top; 
        }
        .body {
            background-color: #f6f6f6;
            width: 100%; 
        }
        .container {
            display: block;
            margin: 0 auto !important;
            max-width: 630px;
            padding: 10px;
            width: 630px; 
        }
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 630px;
            padding: 10px; 
        }
        .main {
            background: #fff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .ga-newsletter {
            background: url("{{ URL::asset('/../media/img/bg-boletin.png') }}");
            width: 630px;
            height: 425px;
        }

        .footer {
            clear: both;
            padding-top: 10px;
            text-align: center;
            width: 100%;
        }
        .footer td,
        .footer p,
        .footer span,
        .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: "Crimson Text", sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
        }
        p,
        ul,
        ol {
            font-family: "Crimson Text", sans-serif;
            font-size: 16px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }
        p li,
        ul li,
        ol li {
            list-style-position: inside;
            margin-left: 5px;
        }
        a {
            color: #3498db;
            text-decoration: underline;
        }

        .btn {
            box-sizing: border-box;
            width: 100%; 
        }
        .btn > tbody > tr > td {
            
        }
        .btn table {
            width: auto;
        }
        .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }
        .btn a {
            background-color: #ffffff;
            border: solid 1px #3498db;
            border-radius: 5px;
            box-sizing: border-box;
            color: #3498db;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize;
        }
        .btn-primary table td {
            background-color: #3498db;
        }
        .btn-primary a {
            background-color: #424242;
            border-color: #424242;
            color: #ffffff;
        }
        .last {
            margin-bottom: 0;
        }
        .first {
            margin-top: 0;
        }
        .align-center {
            text-align: center;
        }
        .align-right {
            text-align: right;
        }
        .align-left {
            text-align: left;
        }
        .clear {
            clear: both;
        }
        .mt0 {
            margin-top: 0;
        }
        .mb0 {
            margin-bottom: 0;
        }
        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }
        .powered-by a {
            text-decoration: none;
        }
        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }
        .social-button {
            margin-bottom: 0.6em;
            cursor: pointer;
            margin-left: 13px;
            width: 25px;
        }

        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
                font-size: 28px !important;
                margin-bottom: 10px !important;
            }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
                font-size: 16px !important;
            }
            table[class=body] .wrapper,
            table[class=body] .article {
                padding: 10px !important;
            }
            table[class=body] .content {
                padding: 0 !important; }
            table[class=body] .container {
                padding: 0 !important;
                width: 100% !important;
            }
            table[class=body] .main {
                border-left-width: 0 !important;
                border-radius: 0 !important;
                border-right-width: 0 !important;
            }
            table[class=body] .btn table {
                width: 100% !important;
            }
            table[class=body] .btn a {
                width: 100% !important;
            }
            table[class=body] .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
        }

        @media all {
            .ExternalClass {
                width: 100%;
            }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: 100%;
            }
            .apple-link a {
                color: inherit !important;
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                text-decoration: none !important;
            } 
            .btn-primary table td:hover {
                background-color: #34495e !important;
            }
            .btn-primary a:hover {
                background-color: #34495e !important;
                border-color: #34495e !important;
            }
        }
    </style>
  </head>
    <body class="">
        <table border="0" cellpadding="0" cellspacing="0" class="body">
            <tr>
                <td>&nbsp;</td>
                <td class="container">
                    <div class="content">
                        <span class="preheader"></span>
                        <table class="main">
                        <tr>
                            <td class="wrapper ga-newsletter">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr style="background-color: #40423F !important;">
                            <td style="background-color: #40423F !important; float: right; padding: 12px;">
                                <p style="color: #fff; font-size: 14px; margin-right: 30px; float: left">SÍGUEME:</p> 
                                <a href="https://www.facebook.com/GermanArzateSculptor/" target="_blank"><img class="social-button" alt="facebook" id="goface" src="{{ URL::asset('../media/img/home/fb.png') }}"></a>
                                <a href="https://www.instagram.com/germanarzatesculptor/" target="_blank"><img class="social-button" alt="instagram" id="goinsta" src="{{ URL::asset('../media/img/home/insta.png') }}"></a>
                            </td>
                        </tr>
                        </table>
                        <div class="footer" style="padding-top: 0px !important;">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr style="background-color: #40423F !important;">
                                    <td class="content-block" style="padding: 12px;">
                                        <span class="apple-link" style="color: #fff;">Has recibido este correo porque eres suscriptor de esta página web. <br> Si crees que has recibido este mensaje por error o deseas cancelar tu suscripción, haz <a href="#!" id="" class="" style="color: #fff; text-decoration: underline !important;">click aquí.</a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block powered-by"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </body>
</html>