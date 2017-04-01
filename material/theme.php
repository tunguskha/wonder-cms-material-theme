<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=wCMS::get('config','siteTitle')?> - <?=wCMS::page('title')?></title>
	<meta name="description" content="<?=wCMS::page('description')?>">
	<meta name="keywords" content="<?=wCMS::page('keywords')?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=wCMS::asset('css/style.css')?>">
	<?=wCMS::css()?>

</head>
<body>
	<?=wCMS::alerts()?>
	<div class="settings-margin"><?=wCMS::settings()?></div>

	<nav class="navbar navbar-default navbar-fixed-top" style="background: white">
		<div class="container">
		<div style="padding: 0 20px">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
					<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?=wCMS::url()?>">
					<?=wCMS::get('config','siteTitle')?>

				</a>
			</div>
			<div class="collapse navbar-collapse" id="menu-collapse">
				<ul class="nav navbar-nav navbar-right">
					<?=wCMS::menu()?>

				</ul>
			</div>
		</div>
		</div>
	</nav>
	
	<header class="blueBackground whiteFont">
   <h1 class="title-page"><?=wCMS::$currentPage?></h1>
	</header>


 <div class="container padding40">
  <div class="contentBackground">
   <?=wCMS::page('content')?>
   </div>
 </div>

  
	<div class="container-fluid redBackground whiteFont">
		<div class="row">
			<div class="col-lg-12 text-center padding40">
				<?=wCMS::block('subside')?>
			</div>
		</div>
	</div>


	<footer class="container-fluid">
	 <div class="container">
	  	<div class="text-right padding20">
			  <?=wCMS::footer()?>
		  </div>
  </div>
	</footer>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.autosize/3.0.17/autosize.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?=wCMS::js()?>

</body>
</html>