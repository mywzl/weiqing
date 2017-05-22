<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
	<title>产品详情</title>
	<link rel="stylesheet" href="resource/css/reset.css">
	<script src = 'resource/js/rem.js'></script>
	<style>
		.container{
            padding: 15px;
        }
        .opstion{
            font-size: 0.28rem;
            color: #666;
            padding: 20px 0;
        }
        .opstion a{
        	color: #666;
        }
        .opstion span{
            color: red;
        }
        .img{
        	height: 3rem;
        	overflow: hidden;
        }
        .img img{
        	width: 100%;
        }
        .content{
        	padding: 10px 0;
        }
        .content h5{
        	font-size: 0.32rem;
        	color: red;
        	padding: 10px 0;
        }
        .content ul{
        	padding-left: 15px;
        }
        .content li{
        	font-size: 0.26rem;
        	color: #666;
        	margin-bottom: 10px;
        	list-style-type:square; 
        }
	</style>
</head>
<body>
	<div class="container">
		<div class="opstion">
                
                <a class="home" title="首页" href="index.html" target="_self">首页</a> - <a href="product.html" title="" target="_self">产品中心</a> - <span>产品介绍</span>
            </div>
		<div class="img">
			<img src="resource/images/17sym0005rm.jpg" alt="">
		</div>
		<div class="content">
			<h5>产品名称</h5>
			<ul>
				<li>该产品的详细介绍</li>
				<li>该产品的详细介绍</li>
				<li>该产品的详细介绍</li>
				<li>该产品的详细介绍</li>
			</ul>
			
			
		</div>
	</div>
</body>
</html>