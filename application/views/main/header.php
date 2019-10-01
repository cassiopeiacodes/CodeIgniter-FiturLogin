<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>.:: Login User ::.</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<!-- Font-Awesome Master -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css') ?>">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/register-styler.css') ?>">
</head>
<body>
	<header class="col-auto py-3">
		<nav class="navbar navbar-expand-lg navbar-light my-auto">
			<a class="navbar-brand" href="<?php echo base_url() ?>">ILog</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="mainmenu">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo base_url($url) ?>" ><?php echo $head_page ?> <span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
