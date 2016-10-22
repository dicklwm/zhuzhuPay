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
<link rel = "stylesheet" href = "/zhuzhuPay/Public/css/table.css">
<title>balance</title>
<style>
    .cost { background-color: #FF9999 !important; }

    .income { background-color:#CCFF66 !important; }
</style>
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

<div class = "container">
    <div class = "container text-center">
        <h2>Your Balance</h2>
        <h3><i class = "fa fa-dollar"><b><?php echo ($balance); ?></b></i></h3>
    </div>

    <div class = "row">
        <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class = "panel panel-primary">
                <div class = "panel-heading">
                    <h3 class = "panel-title">All Money</h3>
                </div>
                <div class = "panel-body table-panel-need-loading">
                    <div class = "table-responsive">
                            <table class = "table table-hover table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>What</th>
                                    <th>How Much</th>
                                    <th>When</th>
                                    <th>category</th>
                                </tr>
                                </thead>
                                <tbody id = "MinTableBody">
                                    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr class="<?php echo ($vo['classification']=='cost'?'cost':'income'); ?>">
                                            <td><?php echo ($vo["whatName"]); ?></td>
                                            <td><?php echo ($vo["Money"]); ?></td>
                                            <td><?php echo ($vo["When"]); ?></td>
                                            <td><?php echo ($vo["classification"]); ?></td>
                                        </tr><?php endforeach; endif; ?>
                                </tbody>
                            </table>

                        <nav class = "text-center">
                            <ul class = "pagination" id = "table-pagination" data-cur-page = "1">
                            </ul>
                        </nav>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="loading">
    <img src = "/zhuzhuPay/Public/images/longmao0.png">
</div>

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
    var PUBLIC = "/zhuzhuPay/Public";
</script>
<script src = "/zhuzhuPay/Public/js/TableDataAndPage.js"></script>
<script>
    $(function () {
        $('.balance-li').addClass('active');
        //有多少页  
        var count = <?php echo ($count); ?>;
        //一页多少记录
        var page = <?php echo ($page); ?>;
        var url = "<?php echo U('Balance/getAllMoney','','');?>";
        RenderPage(count,page, url, true);

//        $('#table-pagination').find('li:eq(1)').trigger('click');
    });

</script>

</body>
</html>