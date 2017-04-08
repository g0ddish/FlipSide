<!DOCTYPE html>
<html>
    <head>
        <title>The Flipside</title>

        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Mountains+of+Christmas" />
        <link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="./js/bootstrap.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            html, body {
                height: 100%;
              background-color: black;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Oswald';
            }



            .content {
                text-align: center;
                display: block;
            }

            .title {
                font-size: 45px;
               color:green;
            }

            .title-2 {
                    font-size: 25px;
                    color:red;
            }

            .youtube{
                margin-top:60px;
                position: relative;
                padding-bottom: 56.25%; /* 16:9 */
                height: 0;
            }

            .youtube iframe {
                margin: auto;
                position: absolute;
                top: 0; left: 0; bottom: 0; right: 0;
                width: 75%;
                height: 75%;
            }

            hr.style17 {
                width:75%;
                border-top: 1px solid darkgray;
                text-align: center;
            }
            hr.style17:after {
                font-family: "Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
                content: '\00a7';
                display: inline-block;
                position: relative;
                top: -14px;
                padding: 0 10px;
                color: #8c8b8b;
                font-size: 18px;
                -webkit-transform: rotate(60deg);
                -moz-transform: rotate(60deg);
                transform: rotate(60deg);
            }
            .navigation{
                margin-top:10px;
            }

            .navbar-default {
                background-color: black;
                border-color: #000;
            }
            .navbar-default .navbar-nav > .active a{
                color: #000;
                background: white;
            }
            .navbar-default .navbar-nav > li a{
                color: #000;
                background: white;
            }
            .navbar-default .navbar-nav > li a:hover, .navbar-default .navbar-nav > li a:focus{
                color: #000;
                background: #9C0000;
            }
            .thumb{
                padding:10px;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <div class="col-md-10 col-md-offset-1 navigation" style="">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#" style="padding:2px 0 5px 10px;"> <img style="width: 70%; " class="img-responsive" src="./img/lil.gif" />
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav pull-right">
                                <li class="" style=" "><a  style="padding:0 0 0 0; margin-top:7px;"  href="https://www.youtube.com/user/slapmedia">
                                        <img style="max-height: 50px; width:100px; " src="./img/youtubeicon.png" />
                                        <span class="sr-only">(current)</span></a></li>
                                <li style=""><a style="padding:0px 0 0px 0;"  href="https://www.instagram.com/lelandtilden/">   <img style="max-height: 50px; " src="./img/igicon.png" /></a></li>
                                <li style=""><a style="padding:0px 0 0px 0;"  href="https://www.facebook.com/gymnasty/">   <img style="max-height: 50px; " src="./img/facebookicon.png" /></a></li>

                                <li style=""><a style="padding:0px 0 0px 0;"  href="https://twitter.com/lelandtilden">   <img style="max-height: 50px; " src="./img/twittericon.png" /></a></li>

                            </ul>

                         <!--   <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Link</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </li>
                            </ul>-->
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <div class="col-md-4 col-md-offset-4">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
                </div>
        </div>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-41802731-1', 'auto');
            ga('send', 'pageview');

        </script>
    </body>
</html>
