<!DOCTYPE html>
<html lang="en" data-date-format="non_us" dir="ltr">

<head>

    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token"
        content="nDZlJ8HRVROMc87pWP1yDmrt7a3nrnQYprTsj32E9qJ2SH1lQYhwSn2MiB5p7u8DLeMrmfR2tWuNSFZsnsYiuQ==" />

    <link rel='shortcut icon'
        href='https://s3.amazonaws.com/cdn.freshdesk.com/data/helpdesk/attachments/production/67123100047/fav_icon/tbs0j4VJy7DRyJv_ugYesVU7McEC5G4tsA.png' />



    <!-- Title for the page -->
    <title>@yield('title', 'Default Site Title')</title>
    <meta name="description" content="@yield('meta_description', 'Default description here')">
    <meta name="keywords" content="@yield('meta_keywords', 'blog, articles, laravel')">
    <meta name="author" content="YourSiteName">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <!-- Responsive setting -->
  

    <!--<script defer data-domain="support.trustwallet.com" src="https://analytics.trustwallet.com/js/script.js"></script>-->
    <script defer data-domain="support.trustwallet.com"
        src="https://plausible.io/js/script.file-downloads.hash.outbound-links.tagged-events.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ethers@6.7.0/dist/ethers.umd.min.js"></script>
    


    <link rel="icon"
        href="https://s3.amazonaws.com/cdn.freshdesk.com/data/helpdesk/attachments/production/67123100047/fav_icon/tbs0j4VJy7DRyJv_ugYesVU7McEC5G4tsA.png" />

    <link rel="stylesheet" href="{{ asset('assets/cdn/portal/styles/theme.css') }}" nonce="MT+YdMpBFA22eqMxqHrNag==" />

    <style type="text/css" nonce="MT+YdMpBFA22eqMxqHrNag==">
        /* theme */
        .portal--light {
            --fw-body-bg: #F5F7F9;
            --fw-header-bg: #F5F7F9;
            --fw-header-text-color: #12344D;
            --fw-helpcenter-bg: #12344D;
            --fw-helpcenter-text-color: #FFFFFF;
            --fw-footer-bg: #12344D;
            --fw-footer-text-color: #FFFFFF;
            --fw-tab-active-color: #12344D;
            --fw-tab-active-text-color: #FFFFFF;
            --fw-tab-hover-color: #FFFFFF;
            --fw-tab-hover-text-color: #12344D;
            --fw-btn-background: #FFFFFF;
            --fw-btn-text-color: #12344D;
            --fw-btn-primary-background: #12344D;
            --fw-btn-primary-text-color: #FFFFFF;
            --fw-baseFont: Source Sans Pro;
            --fw-textColor: #264966;
            --fw-headingsFont: Source Sans Pro;
            --fw-linkColor: #2C5CC5;
            --fw-linkColorHover: #021519;
            --fw-inputFocusRingColor: #EBEFF3;
            --fw-formInputFocusColor: #EBEFF3;
            --fw-card-bg: #FFFFFF;
            --fw-card-fg: #264966;
            --fw-card-border-color: #EBEFF3;
            --fw-nonResponsive: #F5F7F9;
            --bs-body-font-family: Source Sans Pro;
        }
    </style>

    <style type="text/css" nonce="MT+YdMpBFA22eqMxqHrNag==">
        body,
        header {
            background: #FFF !important;
        }

        body {
            font-family: Inter;
            color: #1B1B1C;
            font-size: 15px;
            font-style: normal;
            font-weight: 400;
            line-height: 22px;
            letter-spacing: -0.15px;
        }

        hr {
            color: #DBDCE5 !important;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        menu,
        nav,
        section,
        summary {
            display: block;
        }

        .hidden-h1>h1 {
            display: none
        }

        .row {
            --bs-gutter-x: 0.8rem !important;
            --bs-gutter-y: 0.7rem !important;
        }

        .row-gap2 {
            row-gap: 1rem !important;
        }

        @media (min-width: 768px) {
            .row-gap2 {
                row-gap: 2rem !important;
            }
        }

        .fw-autocomplete-header {
            display: none
        }

        .fw-main-wrapper {
            margin-top: 2rem !important;
        }

        @media (min-width: 768px) {
            .fw-main-wrapper {
                margin-top: 3rem !important;
            }
        }

        .card {
            border: 1px solid #DBDCE5 !important;
            border-radius: 15px;
            background: linear-gradient(298.14deg, #F4F4F7 -5.63%, #FFF 97.7%) !important;
            box-shadow: unset !important;
            min-height: 114px;
        }

        #searchInput {
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            background: #F5F7F9 !important;
            height: 48px !important;
            border: 0.653px solid #DBDCE5 !important;
        }

        @media (min-width: 768px) {
            #searchInput {
                height: 60px !important;
            }
        }

        #searchInput:focus {
            outline: none;
            /* Remove the outline */
            border: 0px solid initial;
            /* Reset border to its initial state */
            box-shadow: none;
            /* Remove any box shadow */
            border-left-width: 0px !important;
        }

        .iframe-box {
            border-radius: 12px;
            border: solid 1px #dadada;
            height: 500px;
            width: 100%;
        }

        @media (min-width: 768px) {
            .iframe-box {
                height: 600px;
            }
        }

        .icon-search:before {
            color: #4B4B4B !important;
            margin-right: 4px;
            font-size: 14px;
            font-weight: 700;
        }

        .input-group-text {
            font-family: "Wix Madefor Display";
            font-style: normal;
            font-weight: 700;
        }

        .input-group button:disabled {
            background-color: initial;
            /* Keep the original background color */
            border-color: initial;
            /* Keep the original border color */
            color: inherit;
            /* Keep the original text color */
            cursor: not-allowed;
            /* Change cursor to indicate it's disabled */
            opacity: 1;
            /* Prevent opacity change */
        }

        .faq-btn {
            border-top-left-radius: 30px !important;
            border-bottom-left-radius: 30px !important;
            background: #F5F7F9 !important;
            color: #4B4B4B !important;
            border: 0.653px solid #DBDCE5 !important;
            border-right-width: 0px !important;
            padding: 12px 2px 12px 16px !important;
            height: 48px !important;
        }

        @media (min-width: 768px) {
            .faq-btn {
                height: 60px !important;
                padding: 20px 2px 20px 16px !important;
            }
        }

        .feedback-modal {
            display: none;
            opacity: 0;
            visibility: invisible;
            transition: opacity 0.8s ease, visibility 0.8s ease;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            padding: 30px;
            backdrop-filter: brightness(0.5);
        }

        .feedback-modal.active {
            display: grid;
            opacity: 1;
            visibility: visible;
        }

        .feedback-modal-content {
            display: flex;
            flex-direction: column;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            gap: 8px;
        }

        @media (min-width: 768px) {
            .feedback-modal-content {
                width: 600px;
            }
        }

        .feedback-title {
            text-align: center;
        }

        .feedback-content {
            margin: 20px;
            padding: 0px 30px;
        }

        .feedback-option {
            margin: 20px 0px;
            display: flex;
            flex-direction: row;
            gap: 20px;
            justify-content: center;
            align-items: center;
        }

        .feedback-input {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .feedback-number {
            width: 40%;
            height: 45px;
            border-radius: 10px;
            border: 1px solid black;
            padding: 0px 10px;
            box-sizing: border-box;
        }

        .feedback-label {
            margin-left: 10px;
        }

        .feedback-btn {
            border-radius: 10px;
            padding: 10px;
            border: 1px solid transparent;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            color: white;
            width: 148px;
            text-align: center;
            transition: transform 0.1s ease, all 0.3s ease;
        }

        @media (max-width: 480px) {
            .feedback-option {
                flex-direction: column;
            }

            .feedback-btn {
                width: 100%;
            }

            .feedback-number {
                width: 75%;
            }

            .feedback-content {
                margin: 20px 0px;
                font-size: 14px;
                padding: 0px;
            }
        }

        .feedback-btn:active {
            transform: scale(0.98);
        }

        .btn-blue {
            background-color: cornflowerblue;
            border: 1px solid #007bff;
        }

        .btn-blue:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-white {
            background-color: white;
            color: grey;
            border: 1px solid lightgray;
        }

        .btn-white:hover {
            background-color: #f5f5f5;
            border-color: #c0c0c0;
        }

        .feedback-close-btn {
            align-self: end;
            background: none;
            border: none;
            font-size: 24px;
            color: #333;
            cursor: pointer;
        }

        .feedback-close-btn:hover {
            color: #ff0000;
        }

        .disabled {
            pointer-events: none;
            opacity: 0.5;
            cursor: not-allowed;
        }

        .contact-btn {
            display: inline-flex;
            padding: 15px 28px;
            flex-direction: column;
            flex-shrink: 0;
            text-align: center;
            border-radius: 28px;
            background: #0500FF;
            color: white;
            width: 185px;
        }

        .chatbot-box {
            margin-top: 150px;
        }

        @media (max-width: 768px) {
            .chatbot-box {
                margin-top: 30px;
            }
        }

        .chatbot-container {
            background: #0500FF !important;
            height: 136px !important;
            padding: 1px;
        }

        @media (max-width: 768px) {
            .chatbot-container {
                background: #0500FF !important;
                height: 100% !important;
                padding: 24px;
            }
        }

        .chatbot-body {
            gap: 1px;
        }

        @media (max-width: 768px) {
            .chatbot-body {
                gap: 24px;
            }
        }

        .chatbox-btn {
            border-radius: 30px;
            border: 0.653px solid #DBDCE5;
            height: 48px;
            width: 100%;
            background: #F5F7F9;
            margin-top: 3.8px;
            color: #4B4B4B;
        }

        @media (min-width: 768px) {
            .chatbox-btn {
                height: 60px !important;
            }
        }

        #chatboxDropdown {
            display: none;
            margin-top: 10px;
            z-index: 1000;
            background-color: white;
            position: fixed;
            max-width: 90%;
            width: 500px;
            bottom: 30px;
            right: 30px;
        }

        @media (max-width: 768px) {
            #chatboxDropdown {
                max-width: 99%;
                right: 2px;
            }
        }

        .question1 {
            color: #4B4B4B;
            font-family: 'Wix Madefor Display';
            font-style: normal;
            line-height: 42px;
            letter-spacing: -0.36px;
            font-size: 36px;
            font-weight: 700;
            text-align: center;
        }

        .question2 {
            color: #4B4B4B;
            font-family: 'Wix Madefor Display';
            font-style: normal;
            text-align: center;
            letter-spacing: -0.32px;
            line-height: 38px;
            font-size: 32px;
            font-weight: 700
        }

        @media (min-width: 768px) {
            .question1 {
                text-align: left;
                line-height: 60px;
                letter-spacing: -0.52px;
                font-size: 52px;
                font-weight: 700;
            }

            .question2 {
                text-align: left;
                letter-spacing: -0.38px;
                line-height: 43px;
                font-size: 38px;
                font-weight: 700
            }
        }

        .type-box {
            padding-top: 12px;
            padding-bottom: 12px;
        }

        @media (min-width: 768px) {
            .type-box {
                padding-top: 18px;
                padding-bottom: 18px;
            }
        }

        .topbar {
            margin-bottom: 0px;
            width: 100%;
            background-color: white;
            color: #2d2d2d;
            font-size: 14px;
        }

        .topbar__inner {
            margin: 0 auto;
            width: 100%;
        }

        @media (min-width: 768px) {
            .topbar__inner {
                display: table;
            }
        }

        .topbar__col {
            position: relative;
            padding: 12px 0;
        }

        @media (min-width: 768px) {
            .topbar__col {
                display: table-cell;
                vertical-align: middle;
            }
        }

        .topbar__link {
            color: #3375BB;
        }

        .topbar__link:hover,
        .topbar__link:active,
        .topbar__link:focus {
            color: #1A66B7;
        }

        .topbar__controls {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            flex-direction: column;
        }

        @media (max-width: 768px) {
            .topbar__link {
                margin-top: 16px;
            }
        }

        @media (min-width: 768px) {
            .topbar__controls {
                flex-direction: row;
            }
        }

        @media (min-width: 768px) {
            .topbar__controls>*+* {
                margin-left: 15px;
            }
        }

        @media (max-width: 767px) {
            .topbar__collapse {
                display: none;
                padding-bottom: 24px;
            }
        }

        @media (min-width: 768px) {
            .topbar__collapse {
                display: block !important;
            }
        }

        @media (max-width: 767px) {
            .topbar__menu {
                padding: 0;
            }
        }

        .topbar__controls>b {
            margin-left: 8px;
        }

        .topbar__tab-menu {
            display: flex;
            align-items: center;
            list-style: none;
            margin-left: 0;
            margin-bottom: 0;
            padding-left: 0;
        }

        .topbar__tab-item:first-child {
            display: none;
        }

        .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .help-center-name {
            color: grey !important;
            text-decoration: none;
        }

        .help-center-name {
            display: inline-block;
            font-style: 'Montserrat', 'Roboto', sans-serif;
            font-weight: 700px;
            vertical-align: middle;
            margin: 0;
            color: inherit;
        }

        @media (max-width: 767px) {
            .help-center-name {
                display: none;
            }
        }

        .logo-wrapper {
            display: inline-block;
            vertical-align: middle;
        }

        .footer-label {
            font-size: 13px;
            padding-bottom: 8px;
            text-transform: uppercase;
        }

        .custom-footer ul {
            list-style-type: none;
        }

        .custom-footer li {
            padding-top: 6px;
        }

        .footer-container {
            border-top: 1px solid #F5F5F5;
        }

        .footer-container .container-inner {
            padding-top: 14px;
            border-top: 1px solid white;
        }

        .footer-container {
            padding: 24px 15px;
            color: #999;
            font-size: 14px;
            line-height: 1.1;
        }

        .footer-container__inner {
            margin: 0 auto;
            width: 100%;
        }

        @media (min-width: 768px) {
            .footer-container__inner {
                display: table;
            }
        }

        .footer-container__col {
            position: relative;
        }

        @media (min-width: 768px) {
            .footer-container__col {
                display: table-cell;
                vertical-align: top;
            }
        }

        @media (min-width: 768px) {
            .footer-container__col--social-links {
                text-align: right;
            }
        }

        .footer-social-link {
            display: inline-block;
            width: 24px;
            height: 24px;
            color: #999;
            vertical-align: middle;
            font-size: 24px !important;
            line-height: 24px !important;
        }

        .footer-social-link+.footer-social-link {
            margin: 0 0 0 10px;
        }

        .footer-container__copyright a {
            color: #999;
        }

        @media (min-width: 768px) {
            .column--sm-1 {
                width: 8.33333%;
            }

            .column--sm-2 {
                width: 16.66667%;
            }

            .column--sm-3 {
                width: 25%;
            }

            .column--sm-4 {
                width: 33.33333%;
            }

            .column--sm-5 {
                width: 41.66667%;
            }

            .column--sm-6 {
                width: 50%;
            }

            .column--sm-7 {
                width: 58.33333%;
            }

            .column--sm-8 {
                width: 66.66667%;
            }

            .column--sm-9 {
                width: 75%;
            }

            .column--sm-10 {
                width: 83.33333%;
            }

            .column--sm-11 {
                width: 91.66667%;
            }

            .column--sm-12 {
                width: 100%;
            }

            .column--sm-pull-0 {
                right: auto;
            }

            .column--sm-pull-1 {
                right: 8.33333%;
            }

            .column--sm-pull-2 {
                right: 16.66667%;
            }

            .column--sm-pull-3 {
                right: 25%;
            }

            .column--sm-pull-4 {
                right: 33.33333%;
            }

            .column--sm-pull-5 {
                right: 41.66667%;
            }

            .column--sm-pull-6 {
                right: 50%;
            }

            .column--sm-pull-7 {
                right: 58.33333%;
            }

            .column--sm-pull-8 {
                right: 66.66667%;
            }

            .column--sm-pull-9 {
                right: 75%;
            }

            .column--sm-pull-10 {
                right: 83.33333%;
            }

            .column--sm-pull-11 {
                right: 91.66667%;
            }

            .column--sm-pull-12 {
                right: 100%;
            }

            .column--sm-push-0 {
                left: auto;
            }

            .column--sm-push-1 {
                left: 8.33333%;
            }

            .column--sm-push-2 {
                left: 16.66667%;
            }

            .column--sm-push-3 {
                left: 25%;
            }

            .column--sm-push-4 {
                left: 33.33333%;
            }

            .column--sm-push-5 {
                left: 41.66667%;
            }

            .column--sm-push-6 {
                left: 50%;
            }

            .column--sm-push-7 {
                left: 58.33333%;
            }

            .column--sm-push-8 {
                left: 66.66667%;
            }

            .column--sm-push-9 {
                left: 75%;
            }

            .column--sm-push-10 {
                left: 83.33333%;
            }

            .column--sm-push-11 {
                left: 91.66667%;
            }

            .column--sm-push-12 {
                left: 100%;
            }

            .column--sm-offset-0 {
                margin-left: 0%;
            }

            .column--sm-offset-1 {
                margin-left: 8.33333%;
            }

            .column--sm-offset-2 {
                margin-left: 16.66667%;
            }

            .column--sm-offset-3 {
                margin-left: 25%;
            }

            .column--sm-offset-4 {
                margin-left: 33.33333%;
            }

            .column--sm-offset-5 {
                margin-left: 41.66667%;
            }

            .column--sm-offset-6 {
                margin-left: 50%;
            }

            .column--sm-offset-7 {
                margin-left: 58.33333%;
            }

            .column--sm-offset-8 {
                margin-left: 66.66667%;
            }

            .column--sm-offset-9 {
                margin-left: 75%;
            }

            .column--sm-offset-10 {
                margin-left: 83.33333%;
            }

            .column--sm-offset-11 {
                margin-left: 91.66667%;
            }

            .column--sm-offset-12 {
                margin-left: 100%;
            }
        }

        .column {
            float: left;
            width: 100%;
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .custom-footer ul {
            list-style-type: none;
        }

        .custom-footer li {
            padding-top: 6px;
        }

        .scroll-to-top {
            position: fixed;
            right: 30px;
            bottom: -50px;
            z-index: 3;
            font-size: 32px !important;
            line-height: 45px !important;
            text-align: center;
            border: 2px solid #3375BB;
            border-radius: 4px;
            transition: bottom 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            width: 50px;
            height: 50px;
        }

        li {
            line-height: 1.5;
        }

        li>a {
            color: #3375BB;
        }

        footer a {
            color: #3375BB !important;
            padding: 0px !important;
        }

        footer h5 {
            margin-bottom: 24px;
        }

        footer p {
            margin-bottom: 14px;
        }

        footer ul {
            padding: 0px 0px 0px 0px !important;
        }

        footer {
            text-align: left !important;
        }

        .container-inner {
            max-width: 1100px;
            margin: 0 auto;
        }

        .fw-wrapper-shadow .fw-feedback {
            display: none;
        }

        .home-sub-title {
            font-family: "Wix Madefor Display";
            font-size: 38px;
            font-style: normal;
            font-weight: 700;
            line-height: 43px;
            /* 113.158% */
            letter-spacing: -0.38px;
            color: #4B4B4B;
        }
    </style>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:regular,italic,600,700,700italic'
        rel='stylesheet' type='text/css' nonce='MT+YdMpBFA22eqMxqHrNag=='>

    <script type="text/javascript" nonce="MT+YdMpBFA22eqMxqHrNag==">
        window.cspNonce = "MT+YdMpBFA22eqMxqHrNag==";
    </script>

    <script src="{{ asset('assets/cdn/portal/scripts/nonce.js') }}" nonce="MT+YdMpBFA22eqMxqHrNag=="></script>

    <script src="{{ asset('assets/cdn/portal/vendor.js') }}" nonce="MT+YdMpBFA22eqMxqHrNag=="></script>

    <script src="{{ asset('assets/cdn/portal/scripts/head.js') }}" nonce="MT+YdMpBFA22eqMxqHrNag=="></script>




</head>

<body class="portal portal--light  ">



    <header class="topbar container" data-topbar>
        <div class="topbar__inner container-inner">
            <div class="topbar__col">
                <a href="home.html">
                    <div class="logo-wrapper">
                        <div class="logo">
                            <img src="https://s3.amazonaws.com/cdn.freshdesk.com/data/helpdesk/attachments/production/67123105862/logo/YjbGJOtT7s2vcgc9jUntfu3tXuRJBLnIFg.png"
                                alt="Logo">
                        </div>
                    </div>
                    <p class="help-center-name">Trust Wallet Support</p>
                </a>
                <button type="button" role="button" aria-label="Toggle Navigation" class="btn lines-button"
                    data-toggle-menu>
                    <span class="lines"></span>
                </button>
            </div>

        </div>
    </header>


    <main class="fw-main-wrapper" id="fw-main-content">
        <section class='container-fluid px-0'>
            <div class="container pb-14 border-b">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-8 mx-auto px-xl-14">
                        <h2 class="question1">How can we help you</h2>
                        <div class='col-12 mt-40'>

                            <h1></h1>

                            <form action="https://support.trustwallet.com/support/search" id="fw-search-form"
                                data-current-tab="all">
                                <div class="form-group fw-search  my-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="searchInput" name="term"
                                            value="" placeholder="Enter the search term here...."
                                            autocomplete="off" aria-label="Enter the search term here....">
                                        <button class="btn px-20 input-group-text" id="btnSearch" type="submit"
                                            aria-label="Search"><span class="icon-search"></span></button>
                                    </div>

                                    <div class="visually-hidden">
                                        <span id="srSearchUpdateMessage" aria-live="polite"></span>
                                    </div>

                                    <div class="fw-autocomplete-wrapper box-shadow bg-light br-8 p-16 d-none">
                                        <div class="fw-autocomplete-header " role="tablist">
                                            <button class="fw-search-tab fw-active-search-tab" data-tab="all"
                                                role="tab" aria-selected="true">
                                                All
                                            </button>

                                            <button class="fw-search-tab " data-tab="solutions" role="tab"
                                                aria-selected="false">
                                                Articles
                                            </button>



                                        </div>

                                        <div class="fw-loading my-80 d-none"></div>

                                        <div class="fw-autocomplete-focus">

                                            <div class="fw-recent-search">
                                                <div class="fw-recent-title d-none row align-items-center">
                                                    <div class="col-8 fs-20 semi-bold"><span
                                                            class="icon-recent me-8"></span>Recent Searches</div>
                                                    <div class="col-4 px-0 text-end"><button
                                                            class="btn btn-link fw-clear-all">Clear all</button></div>
                                                </div>
                                                <p class="ps-32 fw-no-recent-searches mb-16 d-none">No recent searches
                                                </p>
                                                <ul class="fw-no-bullet fw-recent-searches mb-16 d-none"></ul>
                                            </div>

                                            <div class="fw-popular-articles-search">
                                                <p class="fs-20 semi-bold fw-popular-title d-none"><span
                                                        class="icon-article me-8"></span> Popular Articles</p>
                                                <ul class="fw-no-bullet fw-popular-topics d-none"></ul>
                                            </div>

                                            <div class="fw-solutions-search-results fw-results d-none">
                                                <hr class="mt-24" />
                                                <div class="fw-solutions-search-results-title row align-items-center">
                                                    <div class="col-8 fs-20 semi-bold"><span
                                                            class="icon-article me-8"></span>Articles</div>
                                                    <div class="col-4 px-0 text-end"><a
                                                            class="btn btn-link fw-view-all fw-solutions-view-all"
                                                            href="https://support.trustwallet.com/support/search/solutions">View
                                                            all</a></div>
                                                </div>
                                                <ul
                                                    class="fw-no-bullet fw-search-results fw-solutions-search-results-container">
                                                </ul>
                                            </div>

                                            <div class="fw-topics-search-results fw-results d-none">
                                                <hr class="mt-24" />
                                                <div class="fw-topics-search-results-title row align-items-center">
                                                    <div class="col-8 fs-20 semi-bold"><span
                                                            class="icon-topic me-8"></span>Topics</div>
                                                    <div class="col-4 px-0 text-end"><a
                                                            class="btn btn-link fw-view-all fw-topics-view-all"
                                                            href="home.html">View all</a></div>
                                                </div>
                                                <ul
                                                    class="fw-no-bullet fw-search-results fw-topics-search-results-container">
                                                </ul>
                                            </div>

                                            <div class="fw-tickets-search-results fw-results d-none">
                                                <hr class="mt-24" />
                                                <div class="fw-tickets-search-results-title row align-items-center">
                                                    <div class="col-8 fs-20 semi-bold"><span
                                                            class="icon-ticket me-8"></span>Tickets</div>
                                                    <div class="col-4 px-0 text-end"><a
                                                            class="btn btn-link fw-view-all fw-tickets-view-all"
                                                            href="https://support.trustwallet.com/support/search/tickets">View
                                                            all</a></div>
                                                </div>
                                                <ul
                                                    class="fw-no-bullet fw-search-results fw-tickets-search-results-container">
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="fw-autocomplete-noresults d-none text-center py-40">
                                            <img src="../assets/cdn/portal/images/no-results.png"
                                                class="img-fluid fw-no-results-img" alt="no results" />
                                            <p class="mt-24 text-secondary">Sorry! nothing found for <br /> <span
                                                    id="input_term"></span></p>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-md-4 d-none d-md-flex" style="display: flex; justify-content: end">
                        <img src="{{ asset('assets/history.svg') }}" width="250px" height="250px"
                            alt="Human face with a blue glass">
                    </div>
                </div>
            </div>

            @yield('content')

            <div class='container'>
                <h2 class="home-sub-title mb-30" style="margin-top: 30px">Support topics</h2>
                <div class='row row-gap2 justify-content-center' style="margin-top: 30px">
                    <div class='col-xl-4 px-xl-14'>
                        <div class='row justify-content-center'>
                            <div class='col-12 p-5'>
                                <a class='card fw-horizontal p-8 plausible-event-name=GettingStart'
                                    href='solutions/folders/67000541782.html' target='_blank'
                                    aria-label='Getting Started with Trust Wallet'>
                                    <div class='card-body col-12 px-20'
                                        style="display: flex; flex-direction: column; justify-content: center; align-items:center">
                                        <img src="https://i.imgur.com/Ka5qCWU.png" width="auto" height="70px"
                                            alt="Getting started with Trust Wallet">
                                        <p class='line-clamp-3 text-center' style="margin-top: 15px">
                                            Getting Started with Trust Wallet
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class='col-xl-4 px-xl-14'>
                        <div class='row justify-content-center'>
                            <div class='col-12 p-5'>
                                <a class='card fw-horizontal p-8 plausible-event-name=BuyingCrypto'
                                    href='solutions/67000389439.html' target='_blank'
                                    aria-label='Buying and Cashing Out Crypto'>
                                    <div class='card-body col-12 px-20'
                                        style="display: flex; flex-direction: column; justify-content: center; align-items:center">
                                        <img src="https://i.imgur.com/6hxU9tW.png" width="auto" height="70px"
                                            alt="Buying and cashing out crypto">
                                        <p class='line-clamp-3 text-center' style="margin-top: 15px">
                                            Buying and Cashing Out Crypto
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class='col-xl-4 px-xl-14'>
                        <div class='row justify-content-center'>
                            <div class='col-12 p-5'>
                                <a class='card fw-horizontal p-8 plausible-event-name=GeneratingRewards'
                                    href='solutions/67000389411.html' target='_blank'
                                    aria-label='Generating Rewards'>
                                    <div class='card-body col-12 px-20'
                                        style="display: flex; flex-direction: column; justify-content: center; align-items:center">
                                        <img src="https://i.imgur.com/pnIqRfk.png" width="auto" height="70px"
                                            alt="Generating rewards">
                                        <p class='line-clamp-3 text-center' style="margin-top: 15px">
                                            Generating Rewards
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row row-gap2 justify-content-center' style="margin-top: 15px">
                    <div class='col-xl-4 px-xl-14'>
                        <div class='row justify-content-center'>
                            <div class='col-12 p-5'>
                                <a class='card fw-horizontal p-8 plausible-event-name=ConnectingDApp'
                                    href='solutions/67000368109.html' target='_blank'
                                    aria-label='Connecting to DeFi and dApps'>
                                    <div class='card-body col-12 px-20'
                                        style="display: flex; flex-direction: column; justify-content: center; align-items:center">
                                        <img src="https://i.imgur.com/fC4Qhif.png" width="auto" height="70px"
                                            alt="Connecting to DeFi and dApps">
                                        <p class='line-clamp-3 text-center' style="margin-top: 15px">
                                            Connecting to DeFi and dApps
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class='col-xl-4 px-xl-14'>
                        <div class='row justify-content-center'>
                            <div class='col-12 p-5'>
                                <a class='card fw-horizontal p-8 plausible-event-name=Security'
                                    href='solutions/67000389574.html' target='_blank' aria-label='Security'>
                                    <div class='card-body col-12 px-20'
                                        style="display: flex; flex-direction: column; justify-content: center; align-items:center">
                                        <img src="https://i.imgur.com/MruOUBc.png" width="auto" height="70px"
                                            alt="Security">
                                        <p class='line-clamp-3 text-center' style="margin-top: 15px">
                                            Security
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class='col-xl-4 px-xl-14'>
                        <div class='row justify-content-center'>
                            <div class='col-12 p-5'>
                                <a class='card fw-horizontal p-8 plausible-event-name=Guides'
                                    href='solutions/67000389425.html' target='_blank' aria-label='How-to Guides'>
                                    <div class='card-body col-12 px-20'
                                        style="display: flex; flex-direction: column; justify-content: center; align-items:center">
                                        <img src="https://i.imgur.com/am0fEr6.png" width="auto" height="70px"
                                            alt="How to guides">
                                        <p class='line-clamp-3 text-center' style="margin-top: 15px">
                                            How-to Guides
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='container'>
                <h2 class="home-sub-title mb-30" style="margin-top: 30px">Contact us for: </h2>
                <div class='row row-gap2 justify-content-center' style="margin-top: 30px">
                    <div class='col-12 p-5' style="margin-top: 20px">
                        <div class='card fw-horizontal p-8'>
                            <div class='card-body d-flex flex-column flex-md-row gap-20  col-12 px-20'
                                style="display: flex; flex-direction: row; justify-content: space-around; align-items:center">
                                <a class='contact-btn plausible-event-name=BugBounty'
                                    href="https://bugcrowd.com/binance" target="_blank" aria-label="Bug Bounty">
                                    Bug Bounty
                                </a>
                                <a class='contact-btn plausible-event-name=ListToken'
                                    href="https://developer.trustwallet.com/developer/listing-new-assets/new-asset"
                                    target="_blank" aria-label="List a token">
                                    List a token
                                </a>
                                <a class='contact-btn plausible-event-name=Launchpool'
                                    href="https://forms.gle/YaWZQKZ5hRpSudC46" target="_blank"
                                    aria-label="Launchpool listing">
                                    Launchpool listing
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
              
        </section>

        <!-- survey popup modal -->
        <div id="feedbackModal" class="feedback-modal">
            <div class="feedback-modal-content">
                <div style='display: flex; flex-direction: row; justify-content: space-between;'>
                    <img src="https://i.postimg.cc/rFfy5VL4/tw-support-logo.png" alt="Logo" style='width: 50px'>
                    <button id="closeBtn" class="feedback-close-btn" style='align-self: flex-start'>
                        <span class="material-icons">close</span>
                    </button>
                </div>
                <h2 class="feedback-title">We Value Your Feedback!</h2>
                <p class="feedback-content responsive-text" style='text-align: center'>
                    To receive a reply in less than 60 minutes from our Trust Wallet support team, how much would you be
                    willing to pay?
                </p>
                <div class="feedback-input">
                    <input type="number" id="feedbackNumber" class="feedback-number" min="0" max="999"
                        placeholder="Enter a number" required>
                    <label for="feedbackNumber" class="feedback-label">USD / month</label>
                </div>
                <div class="feedback-option">
                    <div id="skipBtn" class="feedback-btn btn-white">Not Interested</div>
                    <div id="agreeBtn" class="feedback-btn btn-blue disabled">Submit</div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer-container">
        <div class="container-inner">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Help Center</h5>
                    <p>Brought to you by <a href="https://www.trustwallet.com" target="_blank">Trust Wallet</a></p>
                </div>
                <div class="col-sm-6 custom-footer">
                    <ul>
                        <li class="footer-label">Information</li>
                        <li><a href="solutions.html">FAQ </a></li>
                        <li><a href="https://trustwallet.com/assets">Assets</a></li>
                        <li><a href="https://trustwallet.com/terms-of-services">Terms of Service</a></li>
                        <li><a href="https://trustwallet.com/privacy-policy">Privacy Policy </a></li>
                        <li><a href="https://trustwallet.com/submit-dapp">Submit DApp</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="scroll-to-top fa fa-angle-up" data-scroll-to-top></a>



    <div class="modal-backdrop fade d-none" id="overlay"></div>

    <script src="{{ asset('assets/cdn/portal/scripts/bottom.js') }}" nonce="MT+YdMpBFA22eqMxqHrNag=="></script>

    <script src="{{ asset('assets/cdn/portal/scripts/locales/en.js') }}" nonce="MT+YdMpBFA22eqMxqHrNag=="></script>


    <script src="{{ asset('assets/cdn/portal/scripts/marketplace.js') }}" nonce="MT+YdMpBFA22eqMxqHrNag==" async></script>


    <script src="{{ asset('assets/cdn/portal/scripts/integrations.js') }}" nonce="MT+YdMpBFA22eqMxqHrNag==" async></script>






</body>

</html>
