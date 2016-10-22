<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang = "zh-CN">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width,initial-scale=1.0">
    <link rel = "stylesheet" href = "/zhuzhuPay/Public/css/normalize.css">
    <link rel = "stylesheet" href = "/zhuzhuPay/Public/css/bootstrap.css">
    <link rel = "stylesheet" href = "/zhuzhuPay/Public/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "/zhuzhuPay/Public/css/app.css">
<title>Index</title>
</head>
<body>

<header>
    <nav class = "navbar navbar-default navbar-fixed-top" role = "navigation">
        <div class = "container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class = "navbar-header">
                <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse"
                        data-target = "#bs-example-navbar-collapse-1">
                    <span class = "sr-only">Toggle navigation</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                <a class = "navbar-brand" href = "<?php echo U('index/index');?>"><i class = "fa fa-slideshare"></i> 猪猪Money</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
                <ul class = "nav navbar-nav">
                    <li class="home-li"><a href = "<?php echo U('Index/index');?>"><i class = "fa fa-home"></i> Home</a></li>
                    <li class="income-li"><a href = "<?php echo U('Income/index');?>"><i class = "fa fa-rmb"></i> Income</a></li>
                    <li class="cost-li"><a href = "<?php echo U('Cost/index');?>"><i class = "fa fa-rmb"></i> Cost</a></li>
                    <li class="balance-li"><a href = "<?php echo U('Balance/index');?>"><i class = "fa fa-credit-card"></i> Balance</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<div class = "nav-bug"></div>

<article>
    <div class = "container">
        <div class = "jumbotron">
            <div class = "container text-center">
                <h1><?php echo date('Y-m-d');?></h1>
                <br>
                <p><?php echo ($saySomething); ?></p>

                <p><i class = "glyphicon glyphicon-heart"></i><span>By Your Honey</span></p>
                <p>
                    <a class = "btn btn-primary btn-lg"><i class = "glyphicon glyphicon-heart"></i></a>
                </p>
                <hr>
                <p><small>Lately Income：</small><span><?php echo ($LatelyIncome); ?></span></p>
                <p><small>Lately Cost：</small><span><?php echo ($LatelyCost); ?></span></p>
                <p><small>Balance：</small><span><?php echo ($balance); ?></span></p>

            </div>
        </div>
    </div>
</article>

<div class = "bottom-nav-bug"></div>
<footer>
    <div class = "bottom-nav">
        <ul class = "bottom-nav-ul">
            <li class="income-li"><a href = "<?php echo U('Income/index');?>"><i class = "fa fa-rmb"></i> Income</a></li>
            <li class="cost-li"><a href = "<?php echo U('Cost/index');?>"><i class = "fa fa-rmb"></i> Cost</a></li>
            <li class="balance-li"><a href = "<?php echo U('Balance/index');?>"><i class = "fa fa-credit-card"></i> Balance</a></li>
        </ul>
    </div>
</footer>

<script src = "/zhuzhuPay/Public/js/jquery.min.js"></script>
<script src = "/zhuzhuPay/Public/js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('.home-li').addClass('active');
    });
</script>

</body>
</html>