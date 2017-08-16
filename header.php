<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<title><?php bloginfo('name') ?></title>

	<!-- Wordpress default meta tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Meta tags for SEO -->
	<meta name='description' content='<?php bloginfo('description') ?>'>
	<meta name='keywords' content='<?php bloginfo('keywords') ?>'>
	<meta name='robots' content='<?php bloginfo('robots') ?>'>

	<!-- jQuery, probablemente no es necesario -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>

	<!-- Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>

		// Get Url Params
  		function getAllUrlParams(){var r=window.location.search.slice(1),e={};if(r)for(var i=(r=r.split("#")[0]).split("&"),o=0;o<i.length;o++){var t=i[o].split("="),l=void 0,s=t[0].replace(/\[\d*\]/,function(r){return l=r.slice(1,-1),""}),a=void 0===t[1]||t[1];s=s.toLowerCase(),a=a.toLowerCase(),e[s]?("string"==typeof e[s]&&(e[s]=[e[s]]),void 0===l?e[s].push(a):e[s][l]=a):e[s]=a}return e}
  		// ¿Podría ser más efectivo instanciar getAllUrlParams en lugar de llamarlo cada vez?
		var urlParams = getAllUrlParams();
		for (var key in ['source','medium','campaign','content','keyword']) {document.cookie = 'utm_' + key + urlParams['utm_' + key] + "; path=/; domain=ivoy.mx"; }

/*		var utm_source = getAllUrlParams().utm_source;
		var utm_medium = getAllUrlParams().utm_medium;
		var utm_campaign = getAllUrlParams().utm_campaign;
		var utm_content = getAllUrlParams().utm_content;
		var utm_keyword = getAllUrlParams().utm_keyword;
		document.cookie = "utm_source="+ urlParams.utm_source +"; path=/; domain=ivoy.mx";
		document.cookie = "utm_medium="+ urlParams.utm_medium +"; path=/; domain=ivoy.mx";
		document.cookie = "utm_campaign="+ urlParams.utm_campaign +"; path=/; domain=ivoy.mx";
		document.cookie = "utm_content="+ urlParams.utm_content +"; path=/; domain=ivoy.mx";
		document.cookie = "utm_keyword="+ urlParams.utm_keyword +"; path=/; domain=ivoy.mx";*/
		// Change to button's link params PENDING

	</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id='content' class="site-content">
