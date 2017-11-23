<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>生成二维码</title>

	<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }
    html, body {
        width: 100%;
        height: 100%;
		min-width: 386px;
    }

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #333333;
		color: #4F5155;
		overflow: hidden;
	}

	#container {
		width: 400px;
		height: 400px;
		margin: auto;
		font-size: 0;
		line-height: 400px;
		background: #fff;
		text-align: center;
	}

	#container i {
		display: inline-block;
		vertical-align:middle;
	}

	#code {
		display: inline-block;
		vertical-align:middle;
	}
	</style>
</head>
<body>

<div id="container">
	<div id="code"></div>
	<i> </i>
</div>

<script type="text/javascript" src="public/js/jquery.min.js"></script> 
<script type="text/javascript" src="public/js/jquery.qrcode.min.js"></script> 
<script type="text/javascript">
	$("#code").qrcode({
	    render: "table", //table方式 
	    width: 200, //宽度 
	    height:200, //高度 
	    text: "<?php echo $qrcode; ?>" //任意内容 
	}); 
</script>
</body>
</html>