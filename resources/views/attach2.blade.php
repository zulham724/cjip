<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Central Java Investment Business Forum & Central Java Business Expo 2019</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <link href="{{asset('mail/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('mail/style.css')}}" rel="stylesheet">
    <link href="{{asset('mail/responsive.css')}}" rel="stylesheet">

    <style>
        body {
            background: #fbfbfb;
        }



        .wrapper header.header .blue {
            bottom: -65px;
            height: 525px;
            overflow: hidden;
            position: absolute;
            width: 100%;
        }

        .wrapper header.header .container {
            position: relative
        }

        .wrapper header.header img.shepe1 {
            left: 200px;
            position: absolute;
            top: 60px;
            width: 40px;
            height: 40px;
        }

        .wrapper header.header img.shepe2 {
            height: 75px;
            left: 72px;
            position: absolute;
            top: 125px;
            transform: rotate(180deg);
            width: 75px;
        }

        .wrapper header.header img.shepe3 {
            height: 75px;
            left: 160px;
            position: absolute;
            top: 200px;
            transform: rotate(180deg);
            width: 75px;
        }

        .wrapper header.header img.shepe4 {
            height: 50px;
            left: 290px;
            position: absolute;
            top: 130px;
            width: 50px;
        }

        .wrapper header.header img.shepe5 {
            height: 50px;
            left: 590px;
            position: absolute;
            top: 100px;
            width: 50px;
        }

        .wrapper header.header img.shepe6 {
            height: 75px;
            left: 800px;
            position: absolute;
            top: 90px;
            width: 75px;
        }

        .wrapper header.header .white img,
        .wrapper header.header .blue img {
            width: 100%;
        }

        .wrapper header.header .white {
            bottom: -105px;
            height: 525px;
            overflow: hidden;
            position: absolute;
            width: 100%;
        }

        .wrapper header.header .logo h2 {
            margin: 0;
            padding: 0
        }

        .wrapper header.header .logo h2 a {
            font-family: 'Croissant One', cursive;
            font-size: 21px;
            font-weight: 400;
            text-decoration: none;
            color: #fff;
        }

        .wrapper header.header ul.nav.navbar-nav li a {
            font-family: 'Raleway', sans-serif;
            font-size: 15px;
            font-weight: 500;
            color: #fff;
            text-transform: uppercase;
        }

        .wrapper header.header ul.nav.navbar-nav {
            float: right;
        }

        .wrapper header.header ul.nav.navbar-nav li :hover {
            background: transparent
        }

        .wrapper header.header .header-text {
            margin: 0 auto;
            padding-top: 130px;
            text-align: center;
            width: 770px;
        }

        .wrapper header.header .header-text h1 {
            color: #fff;
            font-family: "Raleway", sans-serif;
            font-size: 65px;
            font-weight: 600;
            margin-bottom: 25px;
            padding-bottom: 20px;
            position: relative;
        }

        .wrapper header.header .header-text h1::before {
            background: #fff none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 3px;
            left: 130px;
            position: absolute;
            width: 500px;
        }

        .wrapper header.header .header-text p {
            color: #fff;
            font-family: "Raleway", sans-serif;
            font-size: 20px;
            font-weight: 600;
            line-height: 30px;
            margin-bottom: 57px;
        }

        .wrapper header.header .header-text button {
            background: transparent none repeat scroll 0 0;
            border: 2px solid #fff;
            border-radius: 60px / 61px;
            color: #fff;
            font-family: "Raleway", sans-serif;
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 170px;
            margin-right: 27px;
            padding: 14px 50px;
        }

        .wrapper header.header .header-text button:hover {
            background: #fff;
            color: #11bdd7;
        }

        .wrapper header.header .another-text h3 {
            color: #455a64;
            font-family: "Raleway", sans-serif;
            font-size: 40px;
            font-weight: 700;
            padding-bottom: 17px;
            position: relative;
            margin-top: 40px;
        }

        .wrapper header.header .another-text h3::before {
            background: #455a64 none repeat scroll 0 0;
            content: "";
            height: 2px;
            left: 0;
            position: absolute;
            bottom: 0px;
            width: 70px;
        }

        .wrapper header.header .another-text p {
            color: #78909c;
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 500;
            line-height: 32px;
            margin-top: 15px;
        }

        .wrapper section.development {
            padding-bottom: 30px;
            padding-top: 100px;
            position: relative;
        }
        .wrapper section.development2 {
            padding-bottom: 20px;
            padding-top: 10px;
            position: relative;
        }

        .wrapper section.development .blue {
            bottom: 0px;
            height: 225px;
            position: absolute;
            width: 100%;
            overflow: hidden;
        }

        .wrapper section.development .white {
            bottom: -22px;
            height: 225px;
            overflow: hidden;
            position: absolute;
            width: 100%;
        }

        .wrapper section.development .white img,
        .wrapper section.development .blue img {
            width: 100%;
        }

        .wrapper section.development .design-development {
            text-align: center;
            padding-top: 50px
        }

        .wrapper section.development .design-development i {
            font-size: 41px;
            background: #f48fb1;
            color: #fff;
            padding: 30px;
            border-radius: 50%;
            position: relative;
        }

        .wrapper section.development .design-development i::after {
            border: 1px solid #f48fb1;
            content: "";
            height: 120px;
            left: -10px;
            position: absolute;
            top: -10px;
            width: 120px;
            border-radius: 50%;
        }

        .wrapper section.development .design-development i::before {
            border: 1px solid #f48fb1;
            content: "";
            height: 140px;
            left: -20px;
            position: absolute;
            top: -20px;
            width: 140px;
            border-radius: 50%;
        }

        .wrapper section.development .design-development.one i {
            background: #0ceac5;
        }

        .wrapper section.development .design-development.one i::after,
        .wrapper section.development .design-development.one i::before {
            border: 1px solid #0ceac5;
        }

        .wrapper section.development .design-development.three i {
            background: #82b1ff;
        }

        .wrapper section.development .design-development.three i::after,
        .wrapper section.development .design-development.three i::before {
            border: 1px solid #82b1ff;
        }

        .wrapper section.development .design-development h2 {
            position: relative;
            color: #455a64;
            font-family: "Raleway", sans-serif;
            font-size: 25px;
            font-weight: 700;
            margin: 55px auto 25px;
            width: fit-content;
            width: -moz-fit-content;
        }

        .wrapper section.development .design-development h2::before {
            border: 1px solid #455a64;
            bottom: -15px;
            content: "";
            position: absolute;
            width: 100%;
        }

        .wrapper section.development .design-development p {
            color: #455a64;
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 400;
            line-height: 30px;
        }

        .wrapper section.works {
            margin-top: 70px;
        }

        .wrapper section.works .work-images {
            position: relative;
            height: 400px;
            overflow: hidden;
        }

        .wrapper section.works .work-images img {
            height: 100%;
            width: 100%;
        }

        .wrapper section.works .work-text-full {
            display: table;
            height: 400px;
            margin-left: 80px;
        }

        .wrapper section.works .work-text {
            display: table-cell;
            height: auto;
            vertical-align: middle;
            margin-left: 30px;
        }

        .wrapper section.works .work-text h2 {
            color: #455a64;
            font-family: "Raleway", sans-serif;
            font-size: 40px;
            font-weight: 700;
            margin-top: 0;
            padding-bottom: 25px;
            position: relative;
        }

        .wrapper section.works .work-text h2::before {
            border: 2px solid #455a64;
            bottom: 5px;
            content: "";
            position: absolute;
            width: 75px;
        }

        .wrapper section.works .work-text p {
            color: #899ea9;
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 400;
            line-height: 30px;
        }

        .wrapper section.works .work-images .overlay-text {
            background: rgba(24, 234, 199, 0.95) none repeat scroll 0 0;
            height: 100%;
            padding-top: 155px;
            position: absolute;
            text-align: center;
            top: 0;
            width: 100%;
        }

        .wrapper section.works .work-images .overlay-text i {
            background: transparent none repeat scroll 0 0;
            border: 1px solid #fff;
            border-radius: 50%;
            color: #fff;
            font-size: 80px;
            padding: 2px;
            position: relative;
        }

        .wrapper section.works .work-images .overlay-text i::after {
            border: 1px solid #fff;
            content: "";
            height: 104px;
            left: -10px;
            position: absolute;
            top: -10px;
            width: 104px;
            border-radius: 50%;
        }

        .wrapper section.works .work-images .overlay-text i::before {
            border: 1px solid #fff;
            content: "";
            height: 124px;
            left: -20px;
            position: absolute;
            top: -20px;
            width: 124px;
            border-radius: 50%;
        }

        .wrapper section.portfolia {
            margin-top: 122px;
        }

        .wrapper section.portfolia .port-text h2 {
            color: #455a64;
            font-family: "Raleway", sans-serif;
            font-size: 40px;
            font-weight: 700;
            margin-bottom: 35px;
            position: relative
        }

        .wrapper section.portfolia .port-text h2::before {
            border: 1px solid #455a64;
            bottom: -20px;
            content: "";
            position: absolute;
            width: 75px;
        }

        .wrapper section.portfolia .port-text p {
            color: #738d99;
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 400;
            line-height: 30px;
        }

        .wrapper section.portfolia .portfolio-part {
            border-radius: 5px;
            height: 330px;
            margin: 55px 10px 0;
            overflow: hidden;
            position: relative;
        }

        .wrapper section.portfolia .portfolio-part img {
            width: 100%;
        }

        .wrapper section.portfolia .portfolio-part .overlay-slide {
            position: absolute;
            background: rgba(24, 234, 199, 0.95) none repeat scroll 0 0;
            width: 100%;
            height: 100%;
            top: 0;
            padding: 20px 40px;
            opacity: 0;
        }

        .wrapper section.portfolia .portfolio-part:hover>.overlay-slide {
            opacity: 1;
        }

        .wrapper section.portfolia .portfolio-part .overlay-slide h2 {
            color: #fff;
            font-family: "Raleway", sans-serif;
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 30px;
            margin-top: 150px;
            position: relative;
        }

        .wrapper section.portfolia .portfolio-part .overlay-slide h2::before {
            border: 1px solid #fff;
            bottom: -15px;
            content: "";
            position: absolute;
            width: 335px;
        }

        .wrapper section.portfolia .portfolio-part .overlay-slide p {
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 500;
            color: #fff;
        }

        div.wrapper section.portfolia div.penination p {
            background: #0ceac5 none repeat scroll 0 0;
            color: #fff;
            font-family: "Raleway", sans-serif;
            font-size: 18px;
            font-weight: 700;
            margin: 55px auto;
            padding: 12px 40px;
            position: relative;
            text-align: center;
            width: -moz-fit-content;
            border-radius: 30px/30px;
        }
        div.wrapper section.portfolia div.penination a{
            text-decoration: none;
            color: #fff;
        }

        .wrapper section.our-team {
            margin-bottom: 50px;
        }

        .wrapper section.our-team .team-text {
            margin-bottom: 75px;
        }

        .wrapper section.our-team .team-text h2 {
            color: #455a64;
            font-family: "Raleway", sans-serif;
            font-size: 40px;
            font-weight: 700;
            margin: 0 auto;
            position: relative;
            width: -moz-fit-content;
            padding-bottom: 25px;
        }

        .wrapper section.our-team .team-text h2::before {
            background: #455a64 none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 2px;
            left: 65px;
            position: absolute;
            width: 75px;
        }

        .wrapper section.our-team .team-text p {
            color: #bec9cf;
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 400;
            line-height: 30px;
            margin: 0 auto;
            padding-top: 10px;
            width: -moz-fit-content;
        }

        .wrapper section.our-team .my-claint {
            height: 350px;
            position: relative;
        }

        .wrapper section.our-team .my-claint .item {
            text-align: center;
        }

        .wrapper section.our-team .my-claint .item img {
            width: 155px;
            margin: 0 auto;
            opacity: 0.3;
        }

        .wrapper section.our-team .my-claint .item .item-text {
            opacity: 0;
        }

        .wrapper section.our-team .my-claint .item .item-text h3 {
            color: #455a64;
            font-family: "Raleway", sans-serif;
            font-size: 35px;
            font-weight: 400;
            margin-bottom: 0;
            margin-top: 30px;
        }

        .wrapper section.our-team .my-claint .item .item-text h4 {
            color: #455a64;
            font-family: "Raleway", sans-serif;
            font-size: 18px;
            font-weight: 300;
            margin-bottom: 32px;
        }

        .wrapper section.our-team .my-claint .item .item-text i {
            color: #cfd8dc;
            font-size: 20px;
            padding: 0 17px;
        }

        .wrapper section.our-team .my-claint .owl-item.active.center .item img {
            width: 200px;
            opacity: 1;
        }

        .wrapper section.our-team .my-claint .owl-item.active.center .item>.item-text {
            opacity: 1
        }

        .wrapper section.our-team .owl-prev,
        .wrapper section.our-team .owl-next {
            position: absolute;
            top: 35px;
            background: #fff;
        }

        .wrapper section.our-team .owl-prev {
            left: 0;
        }

        .wrapper section.our-team .owl-next {
            right: 0;
        }

        .wrapper section.our-team .owl-prev i,
        .wrapper section.our-team .owl-next i {
            font-size: 60px;
            color: #cfd8dc;
            background: transparent;
        }

        .wrapper section.our-team .owl-prev,
        .wrapper section.our-team .owl-next {
            background: transparent;
        }

        .wrapper section.our-team .owl-prev:hover,
        .wrapper section.our-team .owl-next:hover {
            background: transparent;
        }

        .wrapper section.our-team .owl-dots {
            display: none;
        }

        .wrapper section.contact {
            height: auto;
            overflow: hidden;
            padding: 50px 0;
            position: relative;
        }

        .wrapper section.contact .blue {
            bottom: 116px;
            height: 390px;
            position: absolute;
            width: 100%;
        }

        .wrapper section.contact .blue img,
        .wrapper section.contact .white img {
            width: 100%;
        }

        .wrapper section.contact .white {
            bottom: 88px;
            height: 335px;
            position: absolute;
            width: 100%;
        }

        .wrapper section.contact .contact-text {
            margin-top: 100px;
        }

        .wrapper section.contact .contact-text h2 {
            color: #455a64;
            font-family: "Raleway", sans-serif;
            font-size: 40px;
            font-weight: 700;
            padding-bottom: 20px;
            position: relative;
        }

        .wrapper section.contact .contact-text h2::before {
            background: #455a64 none repeat scroll 0 0;
            bottom: 0;
            content: "";
            height: 2px;
            left: 0px;
            position: absolute;
            width: 75px;
        }

        .wrapper section.contact .contact-text p {
            color: #92a5af;
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 600;
            padding-top: 5px;
        }

        .wrapper section.contact .contact-form {
            background: #fff none repeat scroll 0 0;
            margin-left: 135px;
            margin-top: 50px;
            padding: 40px 35px 35px;
            box-shadow: -9px 1px 15px rgba(0, 0, 0, 0.1);
            border-radius: 7px;
        }

        .wrapper section.contact .contact-form .first {
            margin-right: 10%;
            float: left;
        }

        .wrapper section.contact .contact-form .last {
            float: right;
        }

        .wrapper section.contact .contact-form .first,
        .wrapper section.contact .contact-form .last {
            padding-top: 8px;
            width: 45%;
        }

        .wrapper section.contact .contact-form input {}

        .wrapper section.contact .contact-form input[type="text"] {
            background: transparent none repeat scroll 0 0;
            border-image: none;
            border-style: none none solid;
            border-width: medium medium 1px;
            color: #404548;
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 600;
            padding-bottom: 5px;
            width: 100%;
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
        }

        .wrapper section.contact .contact-form input[type="email"] {
            background: transparent none repeat scroll 0 0;
            border-image: none;
            border-style: none none solid;
            border-width: medium medium 1px;
            color: #404548;
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 600;
            padding-top: 47px;
            padding-bottom: 5px;
            width: 100%;
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
        }

        .wrapper section.contact .contact-form .message textarea {
            background: transparent none repeat scroll 0 0;
            border-image: none;
            border-style: none none solid;
            border-width: medium medium 1px;
            color: #404548;
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 600;
            height: 145px;
            padding-bottom: 5px;
            padding-top: 46px;
            width: 100%;
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
        }

        .wrapper section.contact .contact-form .checkbox {
            float: left;
            margin-left: 17px;
            padding-top: 30px;
            width: 200px;
            color: #8197a3;
            font-family: "Raleway", sans-serif;
            font-size: 14px;
            font-weight: 600;
        }

        .wrapper section.contact .contact-form .submit {
            float: right;
            padding-top: 25px;
        }

        .wrapper section.contact .contact-form input[type="submit"] {
            background: #0ceac5 none repeat scroll 0 0;
            border: medium none;
            border-radius: 25px / 30px;
            color: #fff;
            font-family: "Raleway", sans-serif;
            font-size: 18px;
            font-weight: 600;
            padding: 11px 65px;
        }

        .wrapper section.contact .contact-form .checkbox-submit {
            padding-bottom: 70px;
        }


        .wrapper footer.footer .footer-icon h2 {
            color: #fff;
            font-family: "Croissant One", cursive;
            font-size: 30px;
            font-weight: 400;
            margin-bottom: 40px;
            position: relative;
        }

        .wrapper footer.footer .footer-icon h2::before {
            background: #455a64 none repeat scroll 0 0;
            bottom: -17px;
            content: "";
            height: 2px;
            left: 0;
            position: absolute;
            width: 310px;
        }

        .wrapper footer.footer .footer-icon h5 {
            color: #4c797d;
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 600;
            margin-top: 35px;
        }

        .wrapper footer.footer .footer-icon i {
            color: #fff;
            font-size: 25px;
            padding: 0 44px 0 0;
        }

        .wrapper footer.footer .footer-text .footer-text-single h3 {
            font-family: "Raleway", sans-serif;
            font-size: 20px;
            font-weight: 400;
            color: #fff;
        }

        .wrapper footer.footer .footer-text .footer-text-single p a {
            font-family: "Raleway", sans-serif;
            font-size: 15px;
            font-weight: 600;
            color: #4c797d;
            text-decoration: none;
        }
    </style>
    <style>
        @media (min-width: 1440px) and (max-width: 1745px) {
            .wrapper header.header .white {
                bottom: -110px;
            }
            .wrapper header.header .blue {
                bottom: -80px;
            }
            .wrapper header.header .another-text {
                margin-left: 100px;
            }
            .wrapper section.contact .white {
                bottom: 40px;
            }
            .wrapper section.contact .blue {
                bottom: 40px;
            }
        }

        @media (min-width: 1200px) and (max-width: 1439px) {
            .wrapper header.header {
                background-size: 100% auto;
                height: auto;
            }
            .wrapper header.header .header-text {
                padding-top: 45px;
            }
            .wrapper header.header .blue {
                bottom: -178px;
            }
            .wrapper header.header .white {
                bottom: -205px;
            }
            .wrapper header.header .header-text button {
                margin-bottom: 80px;
            }
            .wrapper section.development {
                padding-bottom: 205px;
            }
            .wrapper section.development .white {
                bottom: -83px;
            }
            .wrapper section.development .blue {
                bottom: -60px;
            }
            .wrapper section.development {
                height: 600px;
                overflow: hidden;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide h2 {
                margin-top: 75px;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide h2::before {
                width: 265px;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide {
                height: 281px;
            }
            .wrapper section.contact .blue {
                bottom: -20px;
            }
            .wrapper section.contact .white {
                bottom: -16px;
            }
            .wrapper section.contact {
                height: 590px;
                padding: 50px 0;
            }
            .wrapper footer.footer {
                margin-top: 50px;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .wrapper header.header {
                height: auto;
            }
            .wrapper header.header .blue {
                height: 365px;
            }
            .wrapper header.header .white {
                bottom: 0;
                height: 275px;
            }
            .wrapper header.header .header-text {
                margin: 0 auto;
                padding-top: 20px;
            }
            .wrapper header.header .another-text {
                margin-top: 150px;
            }
            .wrapper header.header .header-text h1 {
                font-size: 40px;
                margin-bottom: 8px;
                padding-bottom: 10px;
            }
            .wrapper header.header .header-text p {
                line-height: 25px;
                margin-bottom: 20px;
            }
            .wrapper header.header .header-text button {
                margin-bottom: -15px;
            }
            .wrapper section.development {
                height: auto;
                overflow: hidden;
            }
            .wrapper section.development .white {
                bottom: -100px;
            }
            .wrapper section.development .blue {
                bottom: -80px;
            }
            .wrapper section.works .work-text {
                margin-left: 20px;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide {
                padding: 15px;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide h2 {
                font-size: 32px;
                margin-top: 35px;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide h2::before {
                width: 240px;
            }
            .wrapper section.portfolia .portfolio-part {
                height: 225px;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide p {
                line-height: 18px;
            }
            .wrapper section.contact {
                height: 600px;
                padding: 50px 0;
            }
            .wrapper section.contact .blue {
                bottom: -75px;
            }
            .wrapper section.contact .white {
                bottom: -70px;
            }
            .wrapper footer.footer {
                margin-top: 50px;
            }
            .wrapper footer.footer .footer-text .footer-text-single p a {
                font-size: 13px;
            }
            .wrapper footer.footer .footer-icon i {
                padding: 0 30px 0 0;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .wrapper header.header .header-text {
                width: 100%;
                padding-top: 20px;
            }
            .wrapper header.header .header-text h1 {
                font-size: 40px;
                margin-bottom: 10px;
                padding-bottom: 10px;
                margin-top: 0;
            }
            .wrapper header.header .header-text p {
                font-size: 18px;
                line-height: 25px;
                margin-bottom: 15px;
            }
            .wrapper header.header .header-text p br {
                display: none;
            }
            .wrapper header.header {
                height: auto;
            }
            .wrapper header.header .blue {
                bottom: -285px;
            }
            .wrapper header.header .white {
                bottom: -305px;
            }
            .wrapper header.header .another-text h3 {
                font-size: 33px;
                padding-bottom: 3px;
            }
            .wrapper header.header .another-text p {
                line-height: 20px;
                margin-top: 4px;
            }
            .wrapper header.header .header-text button {
                margin-bottom: 62px;
                font-size: 16px;
                padding: 10px 35px;
            }
            .wrapper section.development {
                margin-top: 30px;
            }
            .wrapper section.development {
                height: auto;
                overflow: hidden;
            }
            .wrapper section.development .white {
                bottom: -100px;
            }
            .wrapper section.development .blue {
                bottom: -90px;
            }
            .wrapper section.works .work-text {
                margin-left: 0px;
            }
            .wrapper section.portfolia .portfolio-part {
                height: 260px;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide {
                padding: 15px;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide h2 {
                margin-top: 65px;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide h2::before {
                width: 270px;
            }
            .wrapper section.contact {
                height: auto;
                overflow: hidden;
                padding: 50px 0;
            }
            .wrapper section.contact .contact-form {
                margin-left: 0;
            }
            .wrapper section.contact .contact-text {
                margin-top: 0px;
            }
            .wrapper section.contact .blue {
                bottom: -155px;
            }
            .wrapper section.contact .white {
                bottom: -135px;
            }
            .wrapper footer.footer {
                height: auto;
            }
            .wrapper footer.footer .footer-icon {}
        }

        @media (min-width: 550px) and (max-width: 767px) {
            .wrapper header.header .logo {
                text-align: center;
            }
            .wrapper header.header ul.nav.navbar-nav {
                height: 90px;
                width: 100%;
                text-align: center;
            }
            .wrapper header.header ul.nav.navbar-nav>li {
                display: inline-block;
            }
            .wrapper header.header .header-text {
                width: 100%;
            }
            .wrapper header.header .header-text h1 {
                font-size: 40px;
            }
            .wrapper header.header .header-text h1::before {
                left: 0;
                width: 100%;
            }
            .wrapper header.header .header-text p br {
                display: none;
            }
            .wrapper header.header {
                height: auto;
                background-size: 100% auto;
            }
            .wrapper header.header .blue {
                bottom: -45px;
                height: 210px;
            }
            .wrapper header.header .white {
                bottom: -40px;
                height: 192px;
            }
            .wrapper header.header .header-text {
                padding-top: 50px;
            }
            .wrapper header.header .header-text button {
                margin-bottom: 0;
            }
            .wrapper header.header .another-text {
                margin-bottom: 200px;
            }
            .wrapper header.header .another-text p br {
                display: none;
            }
            .wrapper section.development {
                padding-bottom: 100px;
                height: auto;
            }
            .wrapper section.works .work-text {
                margin-left: 0px;
            }
            .wrapper section.development .blue {
                height: 65px;
            }
            .wrapper section.development .white {
                bottom: 0;
                height: 57px;
            }
            .wrapper section.portfolia .portfolio-part {
                margin: 55px auto 0;
                width: 500px;
            }
            .wrapper section.portfolia .port-text {
                margin: 0 auto;
                width: -moz-fit-content;
            }
            .wrapper section.contact {
                height: auto;
            }
            .wrapper section.contact .contact-form {
                margin-left: 0;
            }
            .wrapper footer.footer {
                background-size: 100% auto;
                height: auto;
                padding-top: 50px;
                padding-bottom: 50px;
            }
            .wrapper section.contact .contact-form {
                width: 525px;
                margin: 70px auto 0;
            }
            .wrapper section.contact .contact-text {
                width: 525px;
                margin: 100px auto 0;
            }
        }

        @media only screen and (max-width: 549px) {
            .wrapper header.header .white,
            .wrapper header.header .blue,
            .wrapper section .blue,
            .wrapper section .white {
                display: none;
            }
            .wrapper header.header .header-text {
                padding-top: 0;
                width: 100%;
            }
            .wrapper header.header .header-text h1::before {
                display: none;
            }
            .wrapper header.header .header-text h1 {
                font-size: 22px;
                margin-bottom: 0;
            }
            .wrapper header.header .header-text p br {
                display: none;
            }
            .wrapper header.header .header-text p {
                font-size: 15px;
                line-height: 20px;
                margin-bottom: 23px;
            }
            .wrapper header.header .header-text button {
                display: block;
                font-size: 18px;
                margin: 20px auto 0;
                padding: 14px 50px;
                width: auto;
            }
            .wrapper section.development {
                padding-bottom: 50px;
                padding-top: 50px;
            }
            .wrapper section.works .work-text {
                margin-left: 0px;
            }
            .wrapper section.works .work-text h2 {
                font-size: 30px;
            }
            .wrapper section.portfolia .port-text h2 {
                font-size: 30px;
            }
            .wrapper section.portfolia .portfolio-part {
                height: auto;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide {
                padding: 5px;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide h2 {
                font-size: 30px;
                margin-bottom: 20px;
                margin-top: 20px;
            }
            .wrapper section.portfolia .portfolio-part .overlay-slide h2::before {
                display: none;
            }
            div.wrapper section.portfolia div.penination p {
                font-size: 15px;
                padding: 8px 19px;
            }
            div.wrapper section.portfolia div.penination p::before {
                font-size: 14px;
                height: 35px;
                left: -48px;
                line-height: 35px;
                top: 3px;
                width: 35px;
            }
            div.wrapper section.portfolia div.penination p::after {
                font-size: 14px;
                height: 35px;
                right: -48px;
                line-height: 35px;
                top: 3px;
                width: 35px;
            }
            .wrapper section.our-team .team-text p br {
                display: none;
            }
            .wrapper section.our-team .my-claint .item img {
                width: 90px;
            }
            .wrapper section.our-team .my-claint .item:hover>img {
                width: 110px;
            }
            .wrapper section.our-team .owl-prev,
            .wrapper section.our-team .owl-next {
                display: none;
            }
            .wrapper section.our-team .my-claint .item .item-text h3 {
                font-size: 20px;
            }
            .wrapper section.our-team .my-claint .item .item-text h4 {
                font-size: 14px;
                margin-bottom: 10px;
            }
            .wrapper section.our-team .my-claint .item .item-text i {
                font-size: 15px;
                padding: 0 3px;
            }
            .wrapper section.our-team .my-claint {
                height: 200px;
            }
            .wrapper section.contact .contact-text {
                margin-top: 0;
            }
            .wrapper section.contact .contact-form {
                margin-left: 0;
            }
            .wrapper section.contact .contact-form .first,
            .wrapper section.contact .contact-form .last {
                width: 100%;
            }
            .wrapper section.contact .contact-form input[type="email"] {
                padding-top: 10px;
            }
            .wrapper section.contact .contact-form .message textarea {
                height: 100px;
                padding-top: 10px;
            }
            .wrapper section.contact .contact-form .checkbox {
                float: none;
                padding-top: 10px;
                width: 100%;
            }
            .wrapper section.contact .contact-form .submit {
                float: none;
                padding-top: 5px;
            }
            .wrapper section.contact .contact-form .checkbox-submit {
                padding-bottom: 0;
            }
            .wrapper footer.footer {
                height: auto;
                margin-top: 0;
            }
            .wrapper footer.footer .footer-icon h2::before {
                width: 100px;
            }
            .wrapper footer.footer .footer-icon i {
                font-size: 22px;
                padding: 0 20px 0 0;
            }
            .wrapper section.works .work-images {
                height: 300px;
            }
            .wrapper section.works .work-images .overlay-text {
                padding-top: 108px;
            }
            .wrapper header.header ul.nav.navbar-nav {
                width: 200px;
            }
        }

        @media only screen and (max-width: 365px) {
            .wrapper footer.footer .footer-text .footer-text-single p a {
                font-size: 10px;
                font-weight: 800;
            }
        }
    </style>
    <style type="text/css">
        @page {
            margin: 180px 50px;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }


        .screen {
            width: 100%;
            height: 20px;
            background: #1fc8db;
            background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
            color: #fff;
            line-height: 20px;
            font-size: 15px;
            text-align: center;
            margin-right: auto;
            margin-left: auto;
            padding-bottom: 20px;
        }

        .inner-seat {
            width: 10px;
            height: 10px;
            border-radius: 100px;
            top: 50%;
            left: 50%;
            margin: -35px 0px 0px -35px;
            background: #D8D8D8;
            position: absolute;
        }

        #div-inline {
            float: left;
        }


        #div-inline:hover .inner-seat {
            background: #3366CC;
        }

        .clearBoth {
            clear: both;
        }

        .selected-innerColor {
            background-color: #3366CC;
        }
        .page_break { page-break-before: always; }
    </style>
</head>

<body>

<main class="container" role="main">
    <div class="wrapper">
        <div style="background-size: 100% auto;height: auto;padding-top: 20px;padding-bottom: 100px; position: relative;">
            <img alt="" src="http://cjip.jatengprov.go.id/storage/additional/header_2.png" style="height: 200px;position: absolute;width: 100%;">
        </div>
        <section class="development">
            <div class="container" >
                <div class="row" style="padding-left: 30px;padding-right: 30px;">
                    <div class="col-md-12 col-sm-12" style="padding-top: 90px; ">
                        <h2 style="color: #455a64;font-family: 'Raleway', sans-serif;font-size: 40px;font-weight: 700;padding-bottom: 20px;margin: 0;
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      -ms-transform: translate(-50%, -50%);
                      transform: translate(-50%, -50%); width: 900px;text-align: center;">
                            Thank You for Join Us
                        </h2>
                    </div>
                    <div class="col-md-12 col-sm-12" style="padding-top: 0;padding-bottom: 100px">
                        <h2 style="color: #455a64;font-family: 'Raleway', sans-serif;font-size: 30px;font-weight: 700;padding-bottom: 20px;margin: 0;
                      position: absolute;
                      top: 50%;
                      left: 50%;
                      -ms-transform: translate(-50%, -50%);
                      transform: translate(-50%, -50%); width: 800px;text-align: center;" >
                            Central Java Investment Business Forum & Central Java Business Expo 2019
                        </h2>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="row" style="border-left: 6px solid #2178b3;margin-left: -3px;top: 0;">
                            <div class="contact-text">
                                <h2 style="color: #455a64;font-family: 'Raleway', sans-serif;font-size: 30px;font-weight: 100;padding-bottom: 10px;margin: 0;text-align: left;padding-left: 10px">
                                    Name
                                </h2>
                                <p style="color: #66849a;font-family: 'Raleway', sans-serif;font-size: 20px;font-weight: 100;padding-bottom: 10px;margin: 0;text-align: left;padding-left: 10px">
                                    <i>Nama</i>
                                </p>
                                <h2 style="color: #455a64;font-family: 'Raleway', sans-serif;font-size: 50px;font-weight: 300;padding-bottom: 10px;margin: 0;text-align: left;padding-left: 10px">
                                    {{$send->nama_investor}}
                                </h2>
                            </div>
                        </div>
                        <div class="row" style="border-left: 6px solid #2fc6d3;margin-left: -3px;top: 0;">
                            <div class="contact-text">
                                <h2 style="color: #455a64;font-family: 'Raleway', sans-serif;font-size: 30px;font-weight: 100;padding-bottom: 10px;margin: 0;text-align: left;padding-left: 10px">
                                    Interested in
                                </h2>
                                <p style="color: #66849a;font-family: 'Raleway', sans-serif;font-size: 20px;font-weight: 100;padding-bottom: 10px;margin: 0;text-align: left;padding-left: 10px">
                                    <i>Berminat di</i>
                                </p>
                                <h2 style="color: #455a64;font-family: 'Raleway', sans-serif;font-size: 50px;font-weight: 300;padding-bottom: 10px;margin: 0;text-align: left;padding-left: 10px">
                                    {{$send->minat_sektor}}, {{$send->minat_kabkota}}
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="row" style="border-left: 6px solid #2178b3;margin-left: -3px;top: 0;">
                            <div class="contact-text">
                                <h2 style="color: #455a64;font-family: 'Raleway', sans-serif;font-size: 50px;font-weight: 300;padding-bottom: 10px;margin: 0;text-align: left;padding-left: 10px">
                                    Hotel Bidakara Jakarta
                                </h2>
                                <h2 style="color: #455a64;font-family: 'Raleway', sans-serif;font-size: 30px;font-weight: 100;padding-bottom: 10px;margin: 0;text-align: left;padding-left: 10px">
                                    Birawa Assembly Hall, Hotel Bidakara Jakarta, Jl. Gatot Subroto No.Kav. 71-73, Jakarta
                                </h2>
                            </div>
                        </div>
                        <div class="row" style="border-left: 6px solid #2fc6d3;margin-left: -3px;top: 0;">
                            <div class="contact-text">
                                <h2 style="color: #455a64;font-family: 'Raleway', sans-serif;font-size: 50px;font-weight: 300;padding-bottom: 10px;margin: 0;text-align: left;padding-left: 10px">
                                    Event Started On
                                </h2>
                                <h2 style="color: #455a64;font-family: 'Raleway', sans-serif;font-size: 30px;font-weight: 100;padding-bottom: 10px;margin: 0;text-align: left;padding-left: 10px">
                                    November, 5th 2019
                                </h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <hr style="display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: wave;
  border-width: 3px;">
        <section class="development">
            <div class="container" >
                <div class="row" style="background-image: url('{{asset('mail/img/bg-2.png')}}');background-position: center center;
                        background-repeat:  no-repeat;">
                    {{--<div class="col-md-12 col-sm-12" style="padding-top: 20px">
                        <img src="data:image/png;base64, {!! base64_encode($send->qr) !!}" alt="">
                    </div>--}}
                    {{--<div class="page_break"></div>--}}
                    <div class="col-md-12 col-sm-12" style="padding-top: 20px">
                            <table id="seatsBlock" style="margin-left:auto; margin-right:auto;min-width: 800px;min-height: 600px;">
                                <tr style="padding-top:20px;padding-bottom:20px;padding-right:20px;">
                                    <td colspan="{{count($send->col)+1}}" style="align-content: center; padding-top:20px;padding-bottom:20px;padding-right:20px; ">
                                        <div class="screen">SCREEN</div>
                                    </td>
                                </tr>
                                @foreach($send->row as $row1)
                                    <tr>
                                        <td>{{$row1->row}}</td>
                                        @foreach($send->col as $col)
                                            <td>
                                                @foreach($send->mejas as $meja)

                                                    @if((($row1->row).($col->col)) == ($meja->kode_meja))
                                                        @if($send->meja == (($row1->row).($col->col)))

                                                            <img src="http://cjip.jatengprov.go.id/storage/additional/seated.png"
                                                                 style="width: 50px" alt="">

                                                        @else
                                                            <img src="http://cjip.jatengprov.go.id/storage/additional/seat.png"
                                                                 style="width: 50px" alt="">
                                                        @endif
                                                    @endif

                                                @endforeach
                                            </td>

                                        @endforeach
                                    </tr>
                                @endforeach
                            </table>

                    </div>
                </div>
            </div>
        </section>
        <div style="background-size: 100% auto;height: auto;padding-top: 20px;padding-bottom: 100px; position: relative;">
            <img alt="" src="{{asset('mail/img/footer.png')}}" style=" height: 250px;position: absolute;width: 100%;">
        </div>
    </div>
</main>

<script src="{{asset('mail/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('mail/js/bootstrap.min.js')}}"></script>
</body>

</html>
