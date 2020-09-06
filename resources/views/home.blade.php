<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}"
        }

    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>Laravel</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <!-- Styles -->
    <style>
        html,
        body {
            background: transparent url('images/Rectangle_3.png') 0% 0% no-repeat padding-box;
            font-family: 'Montserrat';
        }

        li,
        ul {
            list-style-type: none;
        }

        .header-logo {
            margin-left: 95px;
            margin-top: 80px;
            width: 10em;
            min-width: 5em;
        }

        .hero-image {
            background-image: url({{ url('images/hero-river@2x.png')}});
            height: 960px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            /* color: white; */
            /* text-align: left; */
            font-size: 1em;
            letter-spacing: 9.8px;
            color: #FFFFFF;
            text-shadow: 0px 3px 6px #00000029;
            opacity: 1;
        }

        .hero-text h1 {
            font-size: 2em;
            font-weight: bold;
        }

        .hero-text button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 10px 25px;
            color: black;
            background-color: #ddd;
            text-align: center;
            cursor: pointer;
        }

        .hero-text button:hover {
            background-color: #555;
            color: #FFFFFF;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        #main-block {
            background-image: url({{ url('images/Group_3@2x.png')}});
            background-repeat: no-repeat;
            background-position: 95% 95%;
            background-size: 20em;
        }

        .sub-block {
            padding-top: 10em;
            max-height: max-content
        }

        .sub-block h6 {
            font-size: 16px;
            color: #9A9A9A;
        }

        .sub-block h3 {
            font-weight: bold;
            padding-bottom: 1em;
        }

        .sub-block h4 {
            padding-bottom: 0.5em;
        }

        .sub-block p {
            padding-left: initial;
        }

        .sub-block button {
            /* margin-right: 15px;
            margin-left: 15px; */
        }

        #footer-block {
            color: #FFFFFF;
            background-color: #000000;
            font-size: 14px;
            padding-bottom: 5em;
        }

        #footer-block .container {
            padding-top: 87px;
        }

        #footer-block img {
            padding: 0 0 3em 0;
        }

        #footer-block p {
            margin-right: 10em;
            margin-bottom: 1em;
        }
        
        #footer-block a {
            display: inline-block;
            font-size: 1.5em;
            border-bottom: 1px solid #fff;
            padding-bottom: 0.5em;
            color: #fff;
        }

        #footer-block .li-header {
            font-size: 21px;
            padding-bottom: 1em;
        }
        
        #footer-block a:active {
            text-decoration: none;
        }

        #copyright-block {
            background-color: #000000;
            padding-top: 1em;
            padding-bottom: 5em;
            color: #fff;
        }

        @media only screen and (min-width: 600px) {
            .hero-text h1 {
                font-size: 6em;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        {{-- <navbar></navbar> --}}
        <headerblock></headerblock>
        <mainblock></mainblock>
        <footerblock></footerblock>
        <copyrightblock></copyrightblock>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>
