{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/
-->*}
{strip}
<!DOCTYPE html>
<html>
	<head>
		<title>Vtiger login page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="libraries/bootstrap/css/loginPage.css">
        <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,500&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <script src="libraries/jquery/jquery.min.js"></script>
	</head>
	<body>
		<div class="container-fluid wrapper">
			<div class="row lgn_top">
                <div class="col-md-12">
                    <img class="logo pull-right" src="libraries/bootstrap/css/images/logo.png">
                </div>
            </div>
            <div class="row lgn">
                <div class="col-md-7">
                     <div class="lgn_hello">
                        <h2>Здравствуйте</h2>
                        <p>
                            Вы находитесь в 1 шаге <br>
                            от доступа к универсальным данным<br>
                            транспортной компании "Чартер"<br>
                        </p>
                     </div>
                </div>
                <div class="col-md-5">
                    <div class="login-area pull-right">
                        <div class="login-box" id="loginDiv">
                            <div class="">
                                <h3 class="login-header">Вход в CRM систему</h3>
                            </div>
                            <form class="login-form" style="margin:0;" action="index.php?module=Users&action=Login" method="POST">
                                {if isset($smarty.request.error)}
                                <div class="alert alert-error">
                                    <p>Invalid username or password.</p>
                                </div>
                                {/if}
                                {if isset($smarty.request.fpError)}
                                    <div class="alert alert-error">
                                        <p>Invalid Username or Email address.</p>
                                    </div>
                                {/if}
                                {if isset($smarty.request.status)}
                                    <div class="alert alert-success">
                                        <p>Mail has been sent to your inbox, please check your e-mail.</p>
                                    </div>
                                {/if}
                                {if isset($smarty.request.statusError)}
                                    <div class="alert alert-error">
                                        <p>Outgoing mail server was not configured.</p>
                                    </div>
                                {/if}
                                <div class="control-group">
                                    <label class="control-label" for="username"><b>Логин</b></label>
                                    <div class="controls">
                                        <input  type="text" class="form-control" id="username" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="password"><b>Пароль</b></label>
                                    <div class="controls">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="control-group signin-button">
                                    <div class="controls" id="forgotPassword">
                                        <button type="submit" class="btn btn-primary sbutton pull-right">Войти</button>
                                        <!--&nbsp;&nbsp;&nbsp;<a>Forgot Password ?</a>-->
                                    </div>
                                </div>
                                {* Retain this tracker to help us get usage details *}
                                <div class="login-subscript">
                                        <small> ©&nbsp;&nbsp;&nbsp;<a href="http://vk.com/wslapshin">wsLapshin</a>, <a href="http://7charter.ru">7Charter</a>, Powered by Vtiger</small>
                                    </div>
                            </form>
                            
                        </div>
                        <div class="login-box hide" id="forgotPasswordDiv">
                            <form class="form-horizontal login-form"  action="forgotPassword.php" method="POST">
                                <div class="">
                                    <h3 class="login-header">Forgot Password</h3>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="user_name"><b>User name</b></label>
                                    <div class="controls">
                                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Username">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="email"><b>Email</b></label>
                                    <div class="controls">
                                        <input type="text" class="form-control" id="emailId" name="emailId"  placeholder="Email">
                                    </div>
                                </div>
                                <div class="control-group signin-button">
                                    <div class="controls" id="backButton">
                                        <input type="submit" class="btn btn-primary sbutton" value="Submit" name="retrievePassword">
                                        &nbsp;&nbsp;&nbsp;<a>Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img class="pull-left gazel" src="libraries/bootstrap/css/images/gazel.jpg">
                </div>
            </div>
        </div>
        <div class="container-fluid footer">
            <div class="row lgn_bottom">
            </div>
        </div>
	</body>
	<script>
		jQuery(document).ready(function(){
			jQuery("#forgotPassword a").click(function() {
				jQuery("#loginDiv").hide();
				jQuery("#forgotPasswordDiv").show();
			});
			
			jQuery("#backButton a").click(function() {
				jQuery("#loginDiv").show();
				jQuery("#forgotPasswordDiv").hide();
			});
			
			jQuery("input[name='retrievePassword']").click(function (){
				var username = jQuery('#user_name').val();
				var email = jQuery('#emailId').val();
				
				var email1 = email.replace(/^\s+/,'').replace(/\s+$/,'');
				var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
				var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
				
				if(username == ''){
					alert('Please enter valid username');
					return false;
				} else if(!emailFilter.test(email1) || email == ''){
					alert('Please enater valid email address');
					return false;
				} else if(email.match(illegalChars)){
					alert( "The email address contains illegal characters.");
					return false;
				} else {
					return true;
				}
				
			});
		});
	</script>
</html>	
{/strip}
