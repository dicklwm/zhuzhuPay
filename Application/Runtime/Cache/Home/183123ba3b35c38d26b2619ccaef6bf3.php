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
<title>cost</title>
<link rel = "stylesheet" href = "/zhuzhuPay/Public/css/table.css">
<link rel="stylesheet" href="/zhuzhuPay/Public/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="/zhuzhuPay/Public/css/MinDropdown.min.css">
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

<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="btn-group text-center" style="margin:10px 0;">
      <button type="button" class="btn btn-primary">Day</button>
      <button type="button" class="btn btn-primary">Week</button>
      <button type="button" class="btn btn-primary">Month</button>
      <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-cog
"></i>Setting
      </button>
    </div>

    <div class="row">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">New Cost</h3>
        </div>
        <div class="panel-body">

          <form role="form" action="<?php echo U('cost/savaData');?>" method="post">
            <div class="form-group">
              <label for="what">What：</label>
              <div id="what"></div>
            </div>
            <div class="form-group">
              <label for="money">How Much：</label>
              <input type="number" class="form-control" id="money" placeholder="How Much"
                     name="money">
            </div>

            <div class="input-append date form_datetime form-group">
              <label for="date">When：</label>
              <input type="text" value="" id="date" class="form-control" readonly name="date">
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <button type="submit" class="btn btn-success form-control">Submit</button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <button type="reset" class="btn btn-danger form-control">Rewrite</button>
            </div>
          </form>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">All Your Costs</h3>
        </div>
        <div class="panel-body">

          <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped">
              <thead>
              <tr>
                <th>What</th>
                <th>How Much</th>
                <th>When</th>
              </tr>
              </thead>
              <tbody id="MinTableBody">
              <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                  <td><?php echo ($vo["whatName"]); ?></td>
                  <td><?php echo ($vo["Money"]); ?></td>
                  <td><?php echo ($vo["When"]); ?></td>
                </tr><?php endforeach; endif; ?>
              </tbody>
            </table>
          </div>

          <nav class="text-center">
            <ul class="pagination" id="table-pagination" data-cur-page="1">
            </ul>
          </nav>

        </div>
      </div>
    </div>

  </div>

</div>
<div class="loading">
  <img src="/zhuzhuPay/Public/images/longmao0.png">
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

<script src="/zhuzhuPay/Public/js/bootstrap-datetimepicker.min.js"></script>
<script src="/zhuzhuPay/Public/js/MinDropdown.min.js"></script>
<script>
  var PUBLIC='/zhuzhuPay/Public';
</script>
<script src="/zhuzhuPay/Public/js/TableDataAndPage.js"></script>
<script>
  $(function () {
    $('.cost-li').addClass('active');
    $('#date').datetimepicker({
      format: "yyyy-mm-dd",
      language: 'en',
      autoclose: true,
      todayBtn: true,
      startDate: "2016-01-01",
      todayHighlight: true,
      minView: 2,
      maxView: 2
    });
    //设置默认日期为当前日
    $('#date').datetimepicker('setDate', new Date());

    $('#what').MinDropdown({
      name: "what",
      placeholder: "Choose What You Cost Way"
    });
    //收入下拉，加载后台的
    $('#what').data('MinDropdown').setData(<?php echo ($class); ?>);
    //有多少页
    var count=<?php echo ($count); ?>;
    //一页多少记录
    var page=<?php echo ($page); ?>;
    var url="<?php echo U('cost/getCostData','','');?>";
    RenderPage(count, page, url);
  });
</script>

</body>
</html>