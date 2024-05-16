<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>The Stock</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
    <style type="text/css">
        .customA {
            display: inline-block;
            width: auto;
            padding: 10px;
            text-decoration: none;
            color: #fff !important;
            background-color: #d94226;
            font-size: 17px;
            border-radius: 0.5rem;
        }
        .customText{
            color: #000;
            font-size: 17px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<!-- Wrapper/Container Table: Use a wrapper table to control the width and the background color consistently of your email. Use this approach instead of setting attributes on the body tag. -->
<table cellpadding="0" width="100%" cellspacing="0" border="0" id="backgroundTable" class='bgBody' style="text-align:center">
    <tr style="padding-bottom:20px;padding-right:30px;padding-left:30px;text-align:{{$alignItem}}">
        <td>
            <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo">
        </td>
    </tr>
    <tr>
        <td>
            <p dir="rtl" class="customText">{{$text}} :</p>
        </td>
    </tr>
    <tr>
        <td>
            <p>{{$code}}</a>
        </td>
    </tr>
    <tr>
        <td>
            {{-- <img src="{{asset('email_images/resetPassword.png')}}" alt="resetPassword" style="width:80%;height:auto;"> --}}
        </td>
    </tr>
</table>
<!-- End of wrapper table -->
</body>
</html>
