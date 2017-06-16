<?php
    include('constants.php');
    include('checkUserSession.php');

    if(isset($_REQUEST['message'])){
      echo $_REQUEST['message'];
    }

?>

<!doctype html>
<html>
    <head>
    <link type="text/css" rel="stylesheet" href="resources/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="resources/css/main.css">
   <!--  <script type="text/javascript" src="resources/js/ui-bootstrap-tpls-2.3.2.min.js"></script> -->
    <script type="text/javascript" src="resources/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="resources/js/materialize.min.js"></script>
    
    </head>
    <body onLoad="forceFullScreen();">
        <div class="web-box">
            <div id="" class="inline-box" style="width: 20%; height: 200px;">  </div>
            <div id="" class="inline-box" style="width: 80%; height: 200px; background-color: #76bdef; box-shadow: -1px 0px 0px 0px #888888;">
            <h3 style="color:#fff; padding-left: 10px; padding-top: 20px;"><i class="medium material-icons">add_location</i>&nbsp;Dr. Ric Lobaton Clinic</h3></div>
        </div>

        <div class="">
            <div id="" class="col s12 row z-depth-1" style="width: 40%; background: white none repeat scroll 0 0; border-radius: 10px; ">
                <div class="row" style="margin-top: 20px;">
                    <form class="col s12" id="login_form">
                        <div class="row">
                            <br>
                            <div class="row" style="margin-bottom: 0px;">
                                <div class="col s2 center" style="padding: 15px;">
                                  <i class="medium material-icons">person</i>
                                </div>
                                <div class="input-field col s10">
                                    <input id="u_name" name="username" type="text" class="validate"> 
                                    <label for="u_name">Login ID</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s2 center" style="padding: 15px;">
                                  <i class="medium material-icons">vpn_key</i>
                                </div> 
                                <div class="input-field col s10">
                                    <input id="u_pwd" name="password" type="password" class="validate">
                                    <label for="u_pwd">Password</label>
                                </div>
                                <div class="input-field col s12">
                                   <a class="waves-effect waves-light btn" onclick="return login_submit()"><i class="small material-icons">verified_user</i>&nbsp;Login</a> &nbsp; <a class="" href="#"><i class="material-icons">group_add</i>&nbsp;Create New User</a>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>       
            </div>
            <div id="" class="inline-box" style="width: 50%; height: 200px; background-color: #d5fbfb; box-shadow: -1px 0px 0px 0px #888888;"></div>
        </div>

        <div class="web-box">
            <div id="" class="inline-box" style="width: 20%; height: 100px;">  </div>
            <div id="" class="inline-box" style="width: 80%; height: 100px; background-color: #F0FFFF; box-shadow: -1px 1px 0px 0px #888888; border-radius: 10px"></div>
        </div>

        <div class="web-box">
            <div id="" class="inline-box" style="width: 50%; height: auto;">
                <div id="" class="inline-box" style="width: 33%;height: 77px;margin-top: -6%; margin-left: 27%;  background-color: #0095ff; opacity: 100;">
                </div>
            </div>
        
        </div>
    <script type="text/javascript" src="resources/js/click_manager.js"></script>   
    </body>

</html>