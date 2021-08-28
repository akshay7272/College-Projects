<?php
require_once 'classes/Util.php';
require_once 'classes/Connect.php';
session_start();
$page = null;
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
    if(file_exists('pages/'.$page.'.php')){
        $pageName = $page;
    }
    else if($page == "logout"){
        session_destroy();
        header("Location: \?page=home");
        exit();
    }
    else {
        $pageName="404";
    }
}
else{
    header("Location: \?page=home");
    exit();
}
?>
<html>
    <head>
        <title><?= Util::$pageData[$pageName]["title"];?></title>
        <link rel="shortcut icon" href="favicon.ico" type="image/ico">
        <link rel="stylesheet" href="css\bootstrap\dist\css\bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome/css/all.css">
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <link rel="stylesheet" type="text/css" href="css/<?= Util::$pageData[$pageName]["css"];?>.css">
        <script src="js/jquery-3.5.0.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="css\bootstrap\dist\js\bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            var divHeight = ($(window).height())-60;
            $('.mainDiv').css('min-height', divHeight+'px');
        });
        window.onscroll = () => {
    	  nav = $('#navbar');
    	  if(this.scrollY <= 10) nav.removeClass('scroll'); else nav.addClass('scroll');
    	};
        </script>
    </head>
    <body>
    	<?php include_once 'pages/header.php';?>
    	<div class="container">
            <?php include_once 'pages/'.$pageName.'.php';?>
    	</div>
    	<?php include_once 'pages/footer.php';?>
    </body>
</html>