<style>
    /* Reset */
    .navigation-bar .navbox-tiles, .navbox-trigger, .navbox-tiles .tile, .navbox-tiles .tile .icon .fa, .navbox-tiles .tile .title {
        -webkit-transition: all .3s;
        transition: all .3s;
    }
    .navbox-tiles:after {
        content: '';
        display: table;
        clear: both;
    }
    /* Core Styles */
    .skin-blue .main-header .navba{
        z-index: 1000000;
    }
    .start {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .window {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-top: 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5), 0 1px 1px rgba(0, 0, 0, 0.1);
        filter: contrast(0.7) grayscale(0.5) brightness(1.3);
        transform: scale(0.995);
        transition: all 250ms, z-index 1ms;
        z-index: 0;
    }
    .navbox {
        visibility: hidden;
        opacity: 0;
        position: absolute;
        top: 100%;
        left: 0;
        -webkit-transform: translateX(00px);
        -ms-transform: translateX(00px);
        transform: translateY(00px);
        -webkit-transition: all .5s;
        transition: all .5s;
    }
    .navbox-tiles {
        -webkit-transform: translateY(-500px);
        -ms-transform: translateY(-500px);
        transform: translateY(-70px);
         -webkit-transition: all .5s;
        transition: all .8s;
       
    }
    navbox-open .navbox-trigger { background-color: #F44336; }
    navbox-open .navbox-trigger { background-color: #3c8dbc; }
    .navbox-open .navbox{        
        visibility: visible;
        opacity: 1;
        -webkit-transform: translateY(-500);
        -ms-transform: translateY(-500);
        transform: translateY(-500);
        -webkit-transition: opacity .1s, -webkit-transform .1s;
        transition: opacity .1s, transform .1s;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5), 0 1px 1px rgba(0, 0, 0, 0.1);
        max-height: 85vh;
        min-height: calc(128px * 3 - 8px);
        overflow-y: auto;
        overflow-x: hidden;
    }
    .start-screen-scroll {
        max-height: 85vh;
        min-height: calc(128px * 3 - 8px);
        overflow-y: auto;
        overflow-x: hidden;
        margin: -8px;
        padding: 4px;
        margin-left: 4px;
        transform: translate(-100%, 0);
        transition: transform 500ms,
            opacity 1000ms;
        opacity: 0;
    }
    .navbox-open .navbox-tiles {
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateX(0);
    }
    .navbox-trigger {
        background-color: transparent;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .navbox-trigger .fa {
        font-size: 20px;
        color: #fff;
    }
    .navbox-trigger:hover { background-color: #484747; }
    .navbox {
        background-color: #484747; 
        width: 100%;
        max-width: 780px;
        -webkit-backface-visibility: initial;
        backface-visibility: initial;
        background-color: rgba(0, 0, 0, 0.8);
        background-color: RGBA(9, 9, 9, 0.73);
    }
    .navbox-tiles {
        width: 50%;
        padding: 5px 25px 25px 25px;
        position: relative;
        float: left;
    }
    .tbg-blue{
        background-color: #3498db;
    }
    .navbox-tiles .tile {
        display: block;
        width: 32.3030303030303%;
        height: 0;
        padding-bottom: 29%;
        float: left;
        border: 2px solid transparent;
        color: #fff;
        position: relative;
    }
    .navbox-tiles .tile .icon {
        width: 100%;
        height: 100%;
        text-align: center;
        position: absolute;
        top: 0;
        left: 0;
    }
    .navbox-tiles .tile .icon .fa {
        font-size: 35px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-backface-visibility: initial;
        backface-visibility: initial;
    }
    .navbox-tiles .tile .title {
        padding: 5px;
        font-size: 12px;
        position: absolute;
        bottom: 0;
        left: 0;
    }
    .navbox-tiles .tile:hover {
        border-color: #fff;
        text-decoration: none;
    }
    .navbox-tiles .tile:not(:nth-child(3n+3)) {
        /*margin-right: 4.54545454545455%;*/
        margin-right: 0.54545454545455%;
    }
    .navbox-tiles .tile:nth-child(n+4) { margin-top: 2px; }
    @media screen and (max-width: 370px) {
        .navbox-tiles .tile .icon .fa { font-size: 25px; }
        .navbox-tiles .tile .title {
            padding: 3px;
            font-size: 11px;
        }
    }

</style>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="start" id="start"></div>
    <div class="wrapper">
        <header class="main-header">
            <nav class="navbar navbar-static-top" role="navigation">
                <ul class="nav navbar-nav">
                    <li>    
                        <a id="navbox-trigger" class=" btn btn-block bg-primary-gradient btn-flat pull-left"><i class="fa  fa-th"></i></a>
                    </li>
                </ul>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="../../index.php" type="button" class="btn btn-block bg-red-gradient btn-flat " > <i class="fa fa-power-off  "></i></a>
                        </li>
                    </ul>
                </div>
                <div id="navigation-bar" class="navigation-bar">
                    <div class="navbox ">
                        <div class="row col-md-12">
                            <div class="row col-md-12">
                                <br><br>
                            </div>
                            <div class="navbox-tiles">
                                <a class="btn   btn-flat  pull-left text-red" href="../../index.php" > <i class="fa fa-home"></i>Home </a>
                            </div>
                            <div class="navbox-tiles">
                                <a href="../../index.php" class="btn   btn-flat pull-right text-red"><i class="fa fa-power-off"></i><span class="title"> logout</span></a>
                            </div>
                        </div>
                        <div class="row col-md-6">
                            <h4 class="group text-gray" style="padding-left: 10%"> PHP Samples</h4> 
                        </div>
                        <div class="row col-md-6">
                            <h4 class="group text-gray" style="padding-left: 10%"> Test Area</h4> 
                        </div>
                        <div class="row col-md-12">
                            <div class="navbox-tiles">
                                <a href="../pages/table.php" class="tile tbg-blue"><div class="icon"><i class="fa fa-table"></i></div><span class="title">Digits Table</span></a>
                                <a href="../pages/windows.php" class="tile tbg-blue"><div class="icon"><i class="fa fa-windows"></i></div><span class="title">Calculator</span></a>
                                <a href="../pages/apple.php" class="tile tbg-blue"><div class="icon"><i class="fa fa-apple"></i></div><span class="title">Calculator</span></a>
                                <a href="../pages/arrays.php" class="tile tbg-blue"><div class="icon"><i class="fa fa-tasks"></i></div><span class="title">Arrays</span></a>
                            </div>
                            <div class="navbox-tiles">
                                <a href="../pages/test.php" class="tile tbg-blue"> <div class="icon"><i class="fa fa-terminal"></i></div><span class="title">Test code</span></a>                               
                            </div>
                        </div>
                        <div class="row col-md-6">
                            <!-- h4 class="group text-gray" style="padding-left: 10%">  Delete Inactive</h4 -->	 
                        </div>
                        <div class="row col-md-6">
                            <!-- h4 class="group text-gray" style="padding-left: 10%"> Account Views</h4 --> 
                        </div>
                        <div class="row col-md-12">
                            <div class="navbox-tiles">                                
                            </div>
                            <div class="navbox-tiles">                               
                            </div>
                        </div>
                    </div>
                </div>
                <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 
                <script>
                    (function () {
                        $(document).ready(function () {
                            $('#navbox-trigger').click(function (e) {
                                toggleStart(e);
                                return $('#navigation-bar').toggleClass('navbox-open');
                            });
                            return $('#start').on('click', function (e) {
                                var $target;
                                $target = $(e.target);
                                $('.start').fadeToggle(500);
                                if (!$target.closest('.navbox').length && !$target.closest('#navbox-trigger').length) {
                                    return $('#navigation-bar').removeClass('navbox-open');
                                }
                            });
                        });
                    }.call(this));
                    function toggleStart(e) {
                        $('.start').fadeToggle(500);
                    }
                    $(function () {
                        var a_p = "";
                        var d = new Date();
                        var curr_hour = d.getHours();
                        if (curr_hour < 12)
                        {
                            a_p = "AM";
                        } else
                        {
                            a_p = "PM";
                        }
                        if (curr_hour == 0)
                        {
                            curr_hour = 12;
                        }
                        if (curr_hour > 12)
                        {
                            curr_hour = curr_hour - 12;
                        }
                        var curr_min = d.getMinutes();
                        if (curr_min < 10) {
                            curr_min = '0' + curr_min;
                        }
                        $('.time').html(curr_hour + ':' + curr_min + ' ' + a_p);
                    });
                </script>
            </nav>
        </header>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-fluid" style="padding-left: 2%">
            <!-- Content Header (Page header) -->