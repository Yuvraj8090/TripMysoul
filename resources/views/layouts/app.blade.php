<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://127.0.0.1:8000/storage/settings/May2024/ltRrzHBzDzUYYzve9tCk.png"
        type="image/png">

    <title>{{ config('app.name', 'Trip My Soul (TMS)') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dongle&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Vite for Laravel assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .hero-image-slide,
        .leadercontent,
        .simpletext {
            margin-top: 0 !important
        }

        .parent,
        .pomtcontainer,
        .pomtgrid {
            grid-gap: 20px;
            display: grid
        }

        .main.button:focus::before,
        ul.tabs li.current::after {
            content: "";
            content: "";
            content: "";
            content: "";
            position: absolute
        }

        .current .tabicon,
        .tabicon {
            transition-duration: .15s !important;
            transition-property: marginRight, maxWidth, opacity, -ms-transform, -webkit-transform, transform !important;
            transition-timing-function: linear, linear, linear, cubic-bezier(0, 0, 0.1, 1) !important
        }

        ul.tabs,
        ul.tabs li {
            display: -webkit-box;
            display: -ms-flexbox
        }

        .per_person,
        p.eye-icon,
        ul.tabs li {
            white-space: nowrap
        }

        .geluxehp .main:hover,
        .geluxehp a:hover {
            text-decoration: none !important
        }

        .content-main .text {
            margin-bottom: 0
        }

        #footer {
            margin-top: 0
        }

        #footer .footer-usp,
        .hypersearchform.search-container legend,
        div#breadcrumbs {
            display: none
        }

        .button.ghost a {
            color: #313041 padding: 12px 0
        }

        a:focus,
        a:hover {
            color: #c7c7c7;
            text-decoration: none
        }

        .brand h1,
        .button.main a,
        .content-top .hypersearchform .btn:focus,
        .expedition_content .button.main a,
        .retravel-section-bg .promo-intro,
        .retravel-section-bg .promo-intro h3 {
            color: #fff
        }

        .content-top .hypersearchform .btn:ative,
        .main:active {
            background: #210a53
        }

        .main.button:focus::before {
            pointer-events: none;
            box-sizing: content-box;
            border: 4px solid #dad9ff;
            border-radius: 1rem;
            inset: -0.175rem
        }

        .ghost {
            padding: .5rem 0
        }

        .ghost a:hover {
            border-bottom: 2px solid #af9feb
        }

        .ghost:active {
            box-shadow: none !important
        }

        .ghost a:focus {
            background: rgba(235, 234, 255, .1);
            border: 2px dashed #af9feb;
            border-radius: 4px
        }

        .content-top section {
            position: relative;
            margin-bottom: 0;
            overflow: hidden
        }

        .bg-image-and-search {
            display: -ms-grid;
            display: grid;
            -align-items: center
        }

        .brand h1 {
            text-transform: none;
            font-size: 48px;
            line-height: 1
        }

        form.hypersearchform.search-container {
            margin-left: 0;
            padding: 0;
            float: none;
            margin-top: 0;
            background: 0 0;
            margin-bottom: 0
        }

        .hero-image-slide {
            z-index: -1
        }

        .hero-image-slide .image img {
            width: 100%;
            min-height: 505px;
            max-height: 505px;
            -o-object-fit: cover;
            object-fit: cover;
            z-index: -1
        }

        video {
            max-width: 100%;
            width: auto\9;
            height: auto;
            vertical-align: middle;
            border: 0;
            -ms-interpolation-mode: bicubic;
        }

        .hero-image-slide .image video {
            width: 100%;
            min-height: 505px;
            max-height: 505px;
            -o-object-fit: cover;
            object-fit: cover;
            z-index: -1
        }

        .content-top .hypersearchform .btn:hover {
            background: #313041;
            -webkit-transition: .2s ease-out;
            -o-transition: .2s ease-out;
            transition: .2s ease-out;
            box-shadow: rgb(36 34 57 / 22%) 0 .125rem 1.5rem
        }

        .hero-search {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .hero-search .brand h1 {
            text-align: center
        }

        .search-items {
            grid-area: 2/3/3/11;
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            align-self: center
        }

        .advanced-search {
            display: none !important
        }

        .hypersearchform.search-container fieldset {
            width: 100%;
            background: #fff;
            border-radius: 18px;
            padding: 12px 10px 12px 15px;
            margin: 20px auto 0;
            display: flex;
            box-sizing: border-box
        }

        #homepage-refactored-h1-header-trip-finder .hypersearchform.search-container input {
            border: 0;
            box-shadow: none;
            background-color: unset;
            margin: 0;
            font-size: 16px;
            font-style: normal;
            width: 100%;
            padding: 25px 15px
        }

        .content-top .hypersearchform .btn {
            border-radius: 60px;
            height: 50px;
            font-size: 16px;
            letter-spacing: .5px;
            font-weight: 500;
            padding: 16px 34px;
            background: #313041;
            display: flex;
            align-items: center;
            align-content: center
        }

        form.hypersearchform fieldset button:before {
            content: '';
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/flatpages/Search-icon.svg);
            width: 24px;
            height: 24px;
            display: inline-block;
            margin-right: 12px;
            vertical-align: text-top;
            background-repeat: no-repeat;
            background-size: contain
        }

        .content-container {
            margin: -94px auto 0;
            box-sizing: border-box
        }

        .parent {
            grid-template-columns: calc(50% - -10px) calc(50% - 30px);
            padding: 0;
            border-radius: 16px;
            background: #f6f6fa
        }

        .tabicon,
        .wheretohpimg {
            background-repeat: no-repeat
        }

        .wheretohpdes {
            padding: 60px 0 90px 60px
        }

        .content-container .why-g-intro p,
        .wheretohpdes p {
            font-size: 16px
        }

        .wheretohpimg {
            background-image: url(../media.gadventures.com/media-server/dynamic/admin/content_pages/wheretohpimg1.jpg);
            border-radius: 0 16px 16px 0;
            background-size: cover;
            background-position: center
        }

        @media (max-width:1080px) {
            .content-container ul.tabs {
                white-space: nowrap;
                margin-left: -40px;
                margin-right: -40px;
                padding-left: 40px;
                padding-right: 40px
            }
        }

        @media (max-width:768px) {
            .content-top section {
                margin-top: -60px
            }

            .content-container {
                margin: 60px auto 0;
                padding: 0 24px
            }

            .content-container ul.tabs {
                margin-left: -32px;
                margin-right: -24px;
                padding-left: 24px;
                padding-right: 24px
            }

            .tab-section.tour-recos {
                margin-right: -24px
            }
        }

        p.eye-icon {
            padding: 0 !important
        }

        p.trip-title {
            padding-top: 0 !important
        }

        .tour-sale {
            position: relative
        }

        .tour-sale .recos-container {
            text-decoration: none;
            display: block;
            position: relative;
            margin-left: 0 !important;
            list-style: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            overflow-x: auto !important;
            overflow-y: hidden !important;
            margin-block-end: 1em
        }

        .tour-sale .tile-image-container {
            border-radius: 15px
        }

        .content-container .promo-intro {
            width: 65%
        }

        .pomtcontainer {
            padding: 40px 35px 25px;
            align-self: normal;
            border-radius: 16px;
            text-align: left;
            grid-template-columns: calc(80% - 26px) calc(30% - 45px)
        }

        .pomtcontainer.wtg {
            background-color: #e4f6f1
        }

        .pomtcontainer.bwc {
            background-color: #f6f6fa
        }

        .pomtcontainer.twc {
            background-color: #fdf9e5
        }

        .pomtgrid {
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: 1fr;
            grid-column-gap: 0;
            grid-row-gap: 0;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0
        }

        .pomttopicon {
            background-color: #fff;
            height: 70px;
            box-shadow: 0 0 4px rgba(81, 51, 148, .2);
            border-radius: 100px;
            width: 70px
        }

        .pomttopicon img {
            margin: 11px 12px;
            width: 50px
        }

        .pomtgrid p {
            font-size: 16px;
            line-height: 1.5;
            margin: 0 0 24px !important
        }

        .pomtgrid p a {
            text-decoration: underline;
            color: #fff !important
        }

        @media only screen and (min-width:961px) and (max-width:1149px) {
            .pomtcontainer {
                padding: 40px 24px 25px
            }

            .pomttopicon {
                height: 56px;
                width: 56px
            }

            .pomttopicon img {
                width: 32px
            }

            .promcontent h3 {
                font-size: 24px
            }

            .pomtgrid p {
                margin: 0 -50% 24px 0 !important
            }
        }

        .retravel-section-bg {
            background: -webkit-linear-gradient(90deg, #fff 45%, #210a53 12%);
            margin-bottom: 0;
            margin-top: 90px
        }

        .retravel-section-bg .content-container,
        .why-g-block .content-container {
            padding-top: 90px
        }

        .why-g-block {
            background-color: #f6f6fa;
            margin-bottom: 0;
            margin-top: 90px
        }

        .content-container .why-g-intro {
            width: 60%
        }

        .reasons-items-block {
            display: grid;
            -ms-grid-columns: 25% 15px 1fr 15px 1fr 15px 1fr;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 24px;
            margin-top: 48px;
            margin-bottom: 90px
        }

        .reason-item {
            display: flex;
            flex-direction: column;
            row-gap: 24px;
            align-items: flex-start;
            padding: 24px;
            background: #fff;
            border-radius: 16px
        }

        .content-container p.eye-icon,
        .reason-item p {
            padding-top: 0
        }

        .reason-item .card-header {
            display: flex;
            flex-direction: row;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            grid-gap: 12px;
            margin-bottom: 0
        }

        .reason-item .card-header img {
            max-width: 60px
        }

        .reason-item .card-header h6 {
            font-size: 18px;
            line-height: 1.45;
            color: #242239;
            margin: 0
        }

        @media (max-width:1199px) {
            ul.tabs li {
                margin-right: 15px
            }

            .pomtcontainer {
                width: unset
            }

            .pomtgrid {
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: start
            }

            .pomtgrid h2 {
                font-size: 2.8em;
                text-align: center !important
            }
        }

        @media (max-width:1080px) {
            .content-container ul.tabs {
                overflow-x: auto;
                white-space: nowrap;
                margin-left: -40px;
                margin-right: -40px;
                padding-left: 40px;
                padding-right: 40px
            }

            .pomtcontainer {
                padding: 20px 20px 14px;
                grid-template-columns: calc(80% - 30px) calc(30% - 45px);
                grid-gap: 15px
            }
        }

        @media (max-width:979px) {
            .pomtgrid h2 {
                font-size: 2.4em;
                padding: 0;
                text-align: center !important
            }

            ul.tabs li {
                margin-right: 15px
            }

            .parent {
                grid-template-columns: 54% auto;
                grid-gap: 10px
            }

            .hero-container {
                padding: 0 0 0 24px
            }
        }

        @media (max-width:960px) {
            .pomtgrid {
                -ms-grid-columns: auto;
                grid-template-columns: auto;
                grid-gap: 20px
            }

            .pomtcontainer {
                padding: 32px
            }
        }

        @media (max-width:768px) {
            .content-top .hypersearchform {
                display: block
            }

            .content-container .promo-intro {
                width: 80%
            }

            #pomtpromo-terms h3,
            .content-container h3 {
                padding: 0
            }

            .pomtblue,
            .pomtpurple {
                padding: 20px
            }

            .pomtgrid h2 {
                text-align: center !important
            }

            .parent {
                grid-template-columns: auto;
                grid-gap: 10px
            }

            .wheretohpdes {
                padding: 60px 30px 0
            }

            .wheretohpimg {
                height: 220px;
                border-radius: 0 0 16px 16px
            }

            .content-container {
                margin: 60px auto 0;
                padding: 0 24px
            }

            .content-container ul.tabs {
                margin-left: -24px;
                margin-right: -24px;
                padding-left: 24px;
                padding-right: 24px
            }

            #dy_Summer_sale_Central_America_-_uk,
            .tab-section.tour-recos {
                margin-right: -24px
            }

            .reasons-items-block {
                grid-template-columns: repeat(2, 1fr)
            }

            .geluxehp {
                background-image: none;
                margin: 0 24px
            }

            .geluxehpcontent {
                margin: 0
            }

            .geluxehp .bigp,
            .geluxehp .headingoverline,
            .geluxehp h2 {
                color: #242239 !important;
                padding: 0 !important
            }

            .geluxehp h2 {
                font-size: 32px;
                line-height: 40px
            }

            .geluxehp .main {
                color: #fff;
                background-color: #313041
            }

            .geluxemobileimage {
                background-image: url(../media.gadventures.com/media-server/dynamic/admin/content_pages/geluxehpM.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 320px;
                display: inherit;
                border-radius: 16px;
                margin-top: 24px
            }
        }

        @media (max-width:640px) {

            .hero,
            .hero-container {
                padding: 0 !important
            }

            .hero-container {
                margin-top: 0
            }

            .hero-search {
                margin: 0 24px;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                transform: none
            }

            .brand h1 {
                font-size: 32px;
                line-height: 40px
            }

            .search-items {
                grid-area: 2/1/2/13;
                margin-bottom: 60px
            }

            form.hypersearchform.search-container {
                display: block
            }

            .content-top .hypersearchform .btn {
                height: 44px;
                font-size: 0px;
                padding: 14px;
                display: block
            }

            .hypersearchform.search-container fieldset {
                padding: 7px 10px 7px 20px
            }

            #homepage-refactored-h1-header-trip-finder .hypersearchform.search-container input {
                padding: 20px 0
            }

            form.hypersearchform fieldset button:before {
                width: 16px;
                height: 16px;
                margin-right: 0
            }

            .content-container h3 {
                padding: 0;
                font-size: 24px
            }

            .wheretohpdes {
                padding: 60px 30px 30px
            }

            .pomtgrid {
                grid-gap: 20px
            }

            .pomtcontainer {
                padding: 40px 24px
            }

            .promo-intro p {
                font-size: 16px
            }

            .pomttopicon {
                height: 60px;
                width: 60px
            }

            .pomttopicon img {
                width: 36px !important;
                margin: 12px !important
            }

            .retravel-section-bg {
                background: -webkit-linear-gradient(90deg, #fff 40%, #210a53 12%);
                margin-bottom: 0;
                margin-top: 60px
            }

            .promo-intro,
            .why-g-intro {
                width: 100% !important
            }

            .why-g-block {
                margin: 60px auto 0
            }

            .retravel-section-bg .promo-intro h3,
            .why-g-block .why-g-intro h3 {
                padding-top: 0
            }

            .reasons-items-block {
                grid-template-columns: repeat(1, 1fr);
                grid-auto-rows: 1fr
            }
        }

        .expedition_content .trip-card {
            flex-grow: 1
        }

        ul.tabs li.current::after {
            bottom: -.1em;
            left: 8px;
            right: 0;
            background: #313041;
            border-radius: 10px;
            height: 4px;
            width: calc(100% - 16px)
        }

        section.tour-sale {
            margin-bottom: 5em;
            padding-top: 10em
        }

        .head_line h3,
        .promo-intro h3 {
            font-size: 32px
        }

        .promo-intro p {
            font-size: 16px;
            line-height: 1.5;
            padding-top: 24px
        }

        .tab-section .tab-content,
        ul.tabs {
            width: auto;
            margin: 0 auto
        }

        .expedition_content .date-range span:last-child,
        ul.tabs {
            margin-right: 0
        }

        .tab-section .tab-content {
            display: none;
            z-index: 10
        }

        .tab-content.current {
            display: block;
            position: relative;
            overflow: visible
        }

        .tabicon {
            height: 24px;
            width: 24px;
            background-position: center;
            background-size: contain;
            margin-right: 0 !important;
            max-width: 0 !important;
            opacity: 0 !important;
            transform: translateX(0) scale(0) !important
        }

        .geluxehp .main,
        .main {
            width: -webkit-fit-content;
            width: -moz-fit-content;
            padding: 12px 24px
        }

        .expedition_content .trip-card,
        .expeditionlast {
            background-repeat: no-repeat;
            background-size: cover;
            position: relative
        }

        .current .tabicon {
            margin-right: 8px !important;
            max-width: 25px !important;
            opacity: 1 !important;
            transform: translateX(0) scale(1) !important
        }

        .tabasiaicon {
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/tabasiaicon.png)
        }

        .tabcaicon {
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/tabcaicon.png)
        }

        .tabeuropeicon {
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/tabeuropeicon.png)
        }

        .tabmeicon {
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/tabmeicon.png)
        }

        .taboceaniaicon {
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/taboceaniaicon.png)
        }

        .tabsaicon {
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/tabsaicon.png)
        }

        .tabafricaicon {
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/tabafricaicon.png)
        }

        .tabnaicon {
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/tabnaicon.png)
        }

        .tabantaicon {
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/tabantaicon.png)
        }

        ul.tabs {
            list-style: none;
            display: flex;
            overflow: overlay;
            overflow-x: auto;
            -webkit-box-pack: left;
            -ms-flex-pack: left;
            justify-content: flex-start;
            padding: 10px 0 24px;
            margin-left: 0
        }

        ul.tabs::-webkit-scrollbar {
            display: none
        }

        ul.tabs li {
            background: #fff;
            cursor: pointer;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: left;
            color: #4c4f56;
            font-size: 16px;
            font-weight: 400;
            margin-right: 16px;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            line-height: 1.2;
            width: fit-content;
            float: left;
            padding: 16px 8px;
            position: relative;
            box-sizing: border-box
        }

        ul.tabs li.current {
            color: #242239;
            -webkit-font-smoothing: auto
        }

        ul.tabs li:hover {
            background: #f6f6fa;
            border-radius: 8px
        }

        .main {
            background-color: #313041 position: relative;
            width: fit-content;
            border-radius: 1rem;
            color: #fff;
            background-color: #313041;
            position: relative
        }

        .expedition_content .main:hover,
        .main:hover {
            -webkit-transition: .2s ease-out;
            -o-transition: .2s ease-out;
            transition: .2s ease-out;
            box-shadow: rgb(36 34 57 / 22%) 0 .125rem 1.5rem
        }

        .button,
        .expedition_content .button,
        .geluxehp .button {
            margin-top: 24px;
            font-weight: 700;
            font-size: 16px;
            line-height: 1.5;
            letter-spacing: .5px;
            border: none
        }

        .expedition_content a,
        a {
            text-decoration: none
        }

        .btn_terms_ghost {
            color: #4c4f56;
            text-decoration: underline
        }

        .modal-header {
            border-bottom: none !important
        }

        .modal-body {
            margin: 0 0 0 0px
        }

        .geluxehpcontent {
            margin: 56px 70% 88px 0
        }

        .geluxehp h2 {
            ext-transform: none !important;
            color: #fff !important;
            font-family: 'DM Sans';
            font-style: normal;
            font-weight: 700;
            font-size: 48px;
            line-height: 56px;
            margin: 8px 0 16px
        }

        .geluxehp .headingoverline {
            color: #fff;
            font-family: Merriweather;
            font-size: 14px;
            font-style: italic;
            font-weight: 400;
            line-height: 20px
        }

        .geluxehp .bigp {
            color: #fff;
            font-family: DM Sans;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 30px
        }

        .geluxehp .main {
            width: fit-content;
            border-radius: 1rem;
            color: #313041;
            background-color: #fff;
            position: relative
        }

        .geluxehp .main:hover {
            background-color: #ebeaff
        }

        .EUcontent,
        .UKcontent,
        .australia,
        .canada,
        .euro,
        .geluxemobileimage,
        .localization-australia .canada,
        .localization-australia .euro,
        .localization-australia .new-zealand,
        .localization-australia .noAUScontent,
        .localization-australia .outside,
        .localization-australia .uk,
        .localization-australia .usa,
        .localization-canada .australia,
        .localization-canada .euro,
        .localization-canada .new-zealand,
        .localization-canada .outside,
        .localization-canada .uk,
        .localization-canada .usa,
        .localization-deutschland .outside,
        .localization-germany .australia,
        .localization-germany .canada,
        .localization-germany .new-zealand,
        .localization-germany .outside,
        .localization-germany .uk,
        .localization-germany .usa,
        .localization-ireland .australia,
        .localization-ireland .canada,
        .localization-ireland .new-zealand,
        .localization-ireland .outside,
        .localization-ireland .uk,
        .localization-ireland .usa,
        .localization-new-zealand .australia,
        .localization-new-zealand .canada,
        .localization-new-zealand .euro,
        .localization-new-zealand .noNZcontent,
        .localization-new-zealand .outside,
        .localization-new-zealand .uk,
        .localization-new-zealand .usa,
        .localization-united-kingdom .australia,
        .localization-united-kingdom .canada,
        .localization-united-kingdom .euro,
        .localization-united-kingdom .new-zealand,
        .localization-united-kingdom .outside,
        .localization-united-kingdom .usa,
        .localization-united-states .australia,
        .localization-united-states .canada,
        .localization-united-states .euro,
        .localization-united-states .new-zealand,
        .localization-united-states .outside,
        .localization-united-states .uk,
        .new-zealand,
        .uk,
        .usa,
        AUScontent,
        CAcontent,
        NZcontent {
            display: none
        }

        @media (max-width:1199px) {
            .geluxehpcontent {
                margin: 56px 63% 88px 0
            }
        }

        @media (max-width:979px) {
            .geluxehp {
                background-position: left
            }

            .geluxehpcontent {
                margin: 56px 58% 88px 0
            }
        }

        @media (max-width:768px) {
            section.tour-sale {
                padding-top: 60px
            }

            .monthly-promo-intro {
                width: 100%
            }



            .modal-body h4,
            .promo-intro h3 {
                padding: 0 !important
            }

            .monthlypromo-subtitle {
                margin: 12px 0 0 !important
            }

            .geluxehp {
                background-image: none;
                margin: 0 24px
            }

            .geluxehpcontent {
                margin: 0
            }

            .geluxehp .bigp,
            .geluxehp .headingoverline,
            .geluxehp h2 {
                color: #242239 !important;
                padding: 0 !important
            }

            .geluxehp h2 {
                font-size: 32px;
                line-height: 40px
            }

            .geluxehp .main {
                color: #fff;
                background-color: #513394
            }

            .geluxemobileimage {
                background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/geluxehpM.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 320px;
                display: inherit;
                border-radius: 16px;
                margin-top: 24px
            }
        }

        .promo-intro p {
            margin: 0 0 40px !important
        }

        .promo-intro h3 {
            margin-bottom: 0 !important
        }

        .localization-andorra .EUcontent,
        .localization-australia .AUScontent,
        .localization-austria .EUcontent,
        .localization-belarus .EUcontent,
        .localization-belgium .EUcontent,
        .localization-bosnia-and-herzegovina .EUcontent,
        .localization-bulgaria .EUcontent,
        .localization-canada .CAcontent,
        .localization-croatia .EUcontent,
        .localization-czech-republic .EUcontent,
        .localization-denmark .EUcontent,
        .localization-estonia .EUcontent,
        .localization-finland .EUcontent,
        .localization-france .EUcontent,
        .localization-germany .EUcontent,
        .localization-greece .EUcontent,
        .localization-hungary .EUcontent,
        .localization-iceland .EUcontent,
        .localization-ireland .EUcontent,
        .localization-italy .EUcontent,
        .localization-latvia .EUcontent,
        .localization-liechtenstein .EUcontent,
        .localization-lithuania .EUcontent,
        .localization-luxembourg .EUcontent,
        .localization-malta .EUcontent,
        .localization-moldova .EUcontent,
        .localization-monaco .EUcontent,
        .localization-montenegro .EUcontent,
        .localization-netherlands .EUcontent,
        .localization-new-zealand .NZcontent,
        .localization-north-macedonia .EUcontent,
        .localization-norway .EUcontent,
        .localization-poland .EUcontent,
        .localization-portugal .EUcontent,
        .localization-romania .EUcontent,
        .localization-russia .EUcontent,
        .localization-san-marino .EUcontent,
        .localization-serbia .EUcontent,
        .localization-slovakia .EUcontent,
        .localization-slovenia .EUcontent,
        .localization-spain .EUcontent,
        .localization-sweden .EUcontent,
        .localization-switzerland .EUcontent,
        .localization-ualbania .EUcontent,
        .localization-ukraine .EUcontent,
        .localization-united-kingdom .UKcontent,
        .localization-united-states .UScontent {
            display: block
        }

        .localization-australia .australia,
        .localization-deutschland .euro,
        .localization-germany .euro,
        .localization-ireland .euro,
        .localization-new-zealand .new-zealand,
        .localization-united-kingdom .uk,
        .localization-united-states .usa,
        .outside {
            display: inline-block
        }

        .expeditionlast {
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/expedition_bg.jpg);
            background-position: 25% 100%;
            padding: 72px 0
        }

        .expedition_content {
            display: grid;
            grid-template-columns: 33% 65%;
            grid-gap: 2%
        }

        .expedition_content .trip-card {
            background-image: url(https://media.gadventures.com/media-server/dynamic/admin/content_pages/antarctica_bg.jpeg);
            flex-grow: 1;
            border-radius: 16px;
            text-decoration: none;
            display: block;
            height: 420px;
            background-position: center
        }

        .expedition_content .trip-text-container {
            padding: 12px 16px;
            margin: 8px;
            position: absolute;
            bottom: 0;
            border-radius: 12px;
            background: #fff;
            width: -moz-available;
            width: -webkit-fill-available;
            width: fill-available;
            max-width: 368px
        }

        .expedition_content p.trip-title {
            font-size: 16px;
            line-height: 1.3;
            color: #414042;
            margin: 8px 0;
            font-weight: 700;
            font-family: "Helvetica Neue", Arial, sans-serif
        }

        .expedition_content .date-range {
            display: flex;
            margin-bottom: 16px
        }

        .expedition_content .sale-badge {
            background: #fceeee;
            border-radius: 8px;
            color: #e55353;
            padding: 4px 8px;
            font-weight: 700;
            font-size: 12px
        }

        .expedition_content .duration-salebadge {
            display: flex;
            align-items: center;
            justify-content: space-between
        }

        .expedition_content .departure-date p {
            margin-bottom: 4px
        }

        .expedition_content .date-range span {
            background: #f6f6fa;
            border: 1px solid #ebeaff;
            border-radius: 12px;
            padding: 4px 8px;
            margin-right: 8px;
            color: #242239;
            line-height: 1.3
        }

        .expedition_content .main {
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            padding: 12px 24px;
            border-radius: 1rem;
            color: #fff;
            background-color: #313041;
            position: relative
        }

        @media (max-width:820px) {
            .expedition_content {
                grid-template-columns: calc(50% - 24px) auto
            }

            .expedition_content .expeditionlast .container {
                padding: 0 40px
            }

            .expedition_content .head_line h3 {
                padding: 0
            }

            .date-range span {
                padding: 4px;
                font-size: 12px
            }
        }

        @media (max-width:680px) {
            .expeditionlast {
                background-size: 300%;
                padding: 72px 0 208px;
                background-color: rgba(208, 243, 250, .25)
            }

            .expedition_content {
                display: flex;
                flex-direction: column
            }
        }

        .expeditionlast .container {
            padding: 0 24px
        }

        @media (min-width:1280px) {
            .dy-widget-tile-item-17356018 {
                max-width: 44%;
                flex: 0 0 44%
            }
        }
    </style>
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div id='container'>
        <x-navigation-menu />
        <div id='c-inner'>
            <div id="content">
                <div class='page-position section-navigation clearfix' data-position="section-navigation"></div>
                {{ $slot }}
            </div>
        </div>
        <x-footer />
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Your custom scripts -->
    <script type="text/javascript">
        $(document).ready(function () {
            // Tabs functionality
            $('ul.tabs li').click(function () {
                var tab_id = $(this).attr('data-tab');

                $(this).siblings('ul.tabs li').removeClass('current');
                $(this).parents().siblings(".tab-section").children('.tab-content').removeClass('current');

                $(this).addClass('current');
                $(this).parents().siblings(".tab-section").children("#" + tab_id).addClass('current');
            });

            // Smart objects initialization
            const smartObjects = [
                "Homepage kedarnath tours",
                "Hompage Asia tours",
                "Homepage Africa tours",
                "Homepage Middle East tours",
                "Homepage Central America & The Caribbean",
                "Homepage South America tours",
                "Homepage north america tours",
                // "Homepage Antarctica tours",
                "Homepage Aus/NZ tours"
            ];

            smartObjects.forEach(function (obj) {
                DYO.smartObject(obj, { target: "dy_" + obj.replace(/ /g, "_"), inline: true });
            });
        });
    </script>

    @livewireScripts


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</html>