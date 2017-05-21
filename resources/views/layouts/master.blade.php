<!DOCTYPE html>

<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>@yield('title')</title>

		<meta name="_token" content="{{ csrf_token() }}">

		<!-- Bootstrap Core CSS CDN-->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		{{-- Font Awesome --}}
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

		{{-- <link rel='stylesheet' id='fl-builder-google-fonts-f6c81527deafa02fd41da0884889f47e-css'  href='//fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700&#038;ver=4.7.5' type='text/css' media='all' />
		<link rel='stylesheet' id='fl-builder-google-fonts-ffdd8564e5b1c7b25c22d62d30f5d288-css'  href='//fonts.googleapis.com/css?family=Lato%3A300&#038;ver=4.7.5' type='text/css' media='all' /> --}}
		<link rel='stylesheet' id='fl-builder-layout-173-css'  href='http://techstizo.com/wp-content/uploads/bb-plugin/cache/173-layout.css?ver=81b216c4e1c4c55a13aa86c1e5735f9d' type='text/css' media='all' />
		<link rel='stylesheet' id='font-awesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=1.9.4' type='text/css' media='all' />
		{{-- <link rel='stylesheet' id='mono-social-icons-css'  href='http://techstizo.com/wp-content/themes/bb-theme/css/mono-social-icons.css?ver=1.5.4' type='text/css' media='all' /> --}}
		<link rel='stylesheet' id='jquery-magnificpopup-css'  href='http://techstizo.com/wp-content/plugins/bb-plugin/css/jquery.magnificpopup.css?ver=1.9.4' type='text/css' media='all' />
		<link rel='stylesheet' id='bootstrap-css'  href='http://techstizo.com/wp-content/themes/bb-theme/css/bootstrap.min.css?ver=1.5.4' type='text/css' media='all' />
		<link rel='stylesheet' id='fl-automator-skin-css'  href='http://techstizo.com/wp-content/uploads/bb-theme/skin-5920faaf02199.css?ver=1.5.4' type='text/css' media='all' />
		<script type='text/javascript' src='http://techstizo.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
		<script type='text/javascript'>
/* <![CDATA[ */
        var wpAngularVars = {"site":"http:\/\/techstizo.com","nonce":"041e56cbf4","template_directory":{"list_detail":"http:\/\/techstizo.com\/wp-content\/plugins\/angularjs-for-wp\/angularjs-templates\/list-detail.html","single_detail":"http:\/\/techstizo.com\/wp-content\/plugins\/angularjs-for-wp\/angularjs-templates\/single-detail.html","new_post":"http:\/\/techstizo.com\/wp-content\/plugins\/angularjs-for-wp\/angularjs-templates\/new-post.html","post_content":"http:\/\/techstizo.com\/wp-content\/plugins\/angularjs-for-wp\/angularjs-templates\/post-content.html"},"base":"http:\/\/techstizo.com\/wp-json\/wp\/v2"};
/* ]]> */
		</script>
		<script type='text/javascript' src='http://techstizo.com/wp-content/plugins/angularjs-for-wp/js/angular.min.js'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-content/plugins/angularjs-for-wp/js/angular-sanitize.min.js'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-content/plugins/angularjs-for-wp/js/html-janitor.js'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-content/plugins/angularjs-for-wp/js/angular-app.js'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-content/plugins/angularjs-for-wp/js/angular-factories.js'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-content/plugins/angularjs-for-wp/js/angular-posts-directives.js'></script>
		<link rel='https://api.w.org/' href='http://techstizo.com/wp-json/' />
		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://techstizo.com/xmlrpc.php?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://techstizo.com/wp-includes/wlwmanifest.xml" /> 
		<meta name="generator" content="WordPress 4.7.5" />
		<link rel="canonical" href="http://techstizo.com/vivalavia/" />
		<link rel='shortlink' href='http://techstizo.com/?p=173' />
		<link rel="alternate" type="application/json+oembed" href="http://techstizo.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ftechstizo.com%2Fvivalavia%2F" />
		<link rel="alternate" type="text/xml+oembed" href="http://techstizo.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ftechstizo.com%2Fvivalavia%2F&#038;format=xml" />
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<link rel="icon" href="http://techstizo.com/wp-content/uploads/2017/05/via.png" sizes="32x32" />
		<link rel="icon" href="http://techstizo.com/wp-content/uploads/2017/05/via.png" sizes="192x192" />
		<link rel="apple-touch-icon-precomposed" href="http://techstizo.com/wp-content/uploads/2017/05/cropped-2-TECHSTIZO-1-180x180.png" />
		<meta name="msapplication-TileImage" content="http://techstizo.com/wp-content/uploads/2017/05/cropped-2-TECHSTIZO-1-270x270.png" />


		{{-- Custom View CSS --}}
		@yield('css')

		{{-- Custom Main CSS --}}
		<link rel="stylesheet" type="text/css" href="/assets/css/main.css">

		<!-- http://fontawesome.io/cdn/success/ -->
        <script src="https://use.fontawesome.com/37f2d2a99c.js"></script>

	</head>
	<body class="page-template-default page page-id-173 fl-builder fl-preset-bold fl-full-width fl-scroll-to-top" itemscope="itemscope" itemtype="http://schema.org/WebPage">
		

		@include('partials.navbar')
		@include('partials.content')

		@yield('content')
		

	</body>
		
		{{-- jQuery --}}
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		{{-- Bootstrap.js --}}
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script type="text/javascript">

		if(typeof jQuery == 'undefined' || typeof jQuery.fn.on == 'undefined') {
			document.write('<script src="http://techstizo.com/wp-content/plugins/bb-plugin/js/jquery.js"><\/script>');
			document.write('<script src="http://techstizo.com/wp-content/plugins/bb-plugin/js/jquery.migrate.min.js"><\/script>');
		}

		</script><a href="#" id="fl-to-top"><i class="fa fa-chevron-up"></i></a><link rel='stylesheet' id='mediaelement-css'  href='http://techstizo.com/wp-includes/js/mediaelement/mediaelementplayer.min.css?ver=2.22.0' type='text/css' media='all' />
		<link rel='stylesheet' id='wp-mediaelement-css'  href='http://techstizo.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=4.7.5' type='text/css' media='all' />
		<script type='text/javascript' src='http://techstizo.com/wp-content/plugins/bb-plugin/js/jquery.fitvids.js?ver=1.9.4'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-content/uploads/bb-plugin/cache/173-layout.js?ver=81b216c4e1c4c55a13aa86c1e5735f9d'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-content/themes/bb-theme/js/jquery.throttle.min.js?ver=1.5.4'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-content/plugins/bb-plugin/js/jquery.magnificpopup.min.js?ver=1.9.4'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-content/themes/bb-theme/js/bootstrap.min.js?ver=1.5.4'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-content/themes/bb-theme/js/theme.js?ver=1.5.4'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-includes/js/wp-embed.min.js?ver=4.7.5'></script>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Download File":"Download File","Download Video":"Download Video","Play":"Play","Pause":"Pause","Captions\/Subtitles":"Captions\/Subtitles","None":"None","Time Slider":"Time Slider","Skip back %1 seconds":"Skip back %1 seconds","Video Player":"Video Player","Audio Player":"Audio Player","Volume Slider":"Volume Slider","Mute Toggle":"Mute Toggle","Unmute":"Unmute","Mute":"Mute","Use Up\/Down Arrow keys to increase or decrease volume.":"Use Up\/Down Arrow keys to increase or decrease volume.","Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds."}};
		var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/"};
		/* ]]> */
		</script>
		<script type='text/javascript' src='http://techstizo.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=2.22.0'></script>
		<script type='text/javascript' src='http://techstizo.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=4.7.5'></script>

		{{-- Custom JS --}}
		@yield('js-script')
		@include('partials.footer')
</html>