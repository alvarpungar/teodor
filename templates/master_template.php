<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?=BASE_URL?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="assets/ico/favicon.png">

	<title><?=PROJECT_NAME?></title>

	<!-- Bootstrap core CSS -->
	<link href="assets/components/bootstrap/3.3.4-spacelab/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="assets/css/custom/master_template.css">
    <link rel="stylesheet" href="assets/css/application.css"/>
    <link rel="stylesheet" href="assets/components/chosen/chosen.css"/>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
    <script src="assets/components/jquery/1.10.2/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" language="javascript" src="assets/js/picnet.table.filter.min.js"></script>
    <script src="assets/components/bootstrap/3.3.4-spacelab/js/bootstrap.min.js"></script>
    <!--select 2 -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/js/select2.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/css/select2.min.css" rel="stylesheet" />

</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="assets/img/teodor.png" alt="Teodor" height="20"/></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
                <!-- <li <?= $controller == 'tunniplaan' ? 'class="active"' : ''?>><a href="tunniplaan"><?__('Tunniplaan')?></a></li> -->
                <li <?= $controller == 'kursused' ? 'class="active"' : ''?>><a href="kursused"><?__('Kursused')?></a></li>
                <li <?= $controller == 'ülesanded' ? 'class="active"' : ''?>><a href="ülesanded"><?__('Ülesanded')?> <sup><span class="badge"><?=$badges['tasks']?></span></sup> </a></li>
                <!-- <li <?= $controller == 'kontrolltööd' ? 'class="active"' : ''?>><a href="kontrolltööd"><?__('Testid')?></a></li> -->
                <li <?= $controller == 'grupid' ? 'class="active"' : ''?>><a href="grupid"><?__('Grupid')?></a></li>
                <li <?= $controller == 'lõputööd' ? 'class="active"' : ''?>><a href="lõputööd"><?__('Lõputööd')?></a></li>
                <li <?= $controller == 'õppekavad' ? 'class="active"' : ''?>><a href="õppekavad"><?__('Õppekavad')?></a></li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
                <li><a href="<?=BASE_URL?><?= $auth->logged_in == true? 'logout' : 'login'?>"><?= $auth->logged_in == true? __('Logi välja') . " ({$this->auth->person_name})" : 'Login'?></a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>

<div class="container">

	<!-- Main component for a primary marketing message or call to action -->
	<? if( !file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/'. $controller . '/' .  $controller . '_' . $action . '.php</i> does not exist. Create that file.');?>
    <? require "views/$controller/{$controller}_$action.php"; ?>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- #getrekt360noscopeteebagshot -->
</body>
</html>
