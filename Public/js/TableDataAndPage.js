/**
 * Created by Min on 2016-10-03.
 */

function RenderPage(count, page, url, isNeedclassif) {
    var html = "";
    var longmaoCount = 5;
    var $tablePagination = $('#table-pagination');
//在ul中登记当前页数是多少，每个a绑定同一事件，异步请求获取数据的接口，通过选中页数

//先插入左箭头
    html += '<li class = "disabled"><a href = "javascript:void(0);">&laquo;</a></li>';
//根据页数插入多少个li
    for (var i = 0; i < Math.ceil(count / page); i++) {
        html += '<li><a href = "javascript:void(0);">' + (i + 1) + '</a></li>';
    }

    html += '<li><a href = "javascript:void(0);">&raquo;</a></li>';
    $tablePagination.html(html);

    var $allPage = $tablePagination.children();

    changePage($tablePagination, $allPage, 1);

//先全部去掉Class，并绑定事件
    $allPage.on('click', function () {
        var index = $(this).index();
        var goPage = 1;
        if (index > 0 && index < $allPage.length - 1) {
            goPage = index;
        } else if (index == 0) {
            goPage = Number($tablePagination.attr('data-cur-page')) - 1;
        } else {
            goPage = Number($tablePagination.attr('data-cur-page')) + 1;
        }
        if (goPage < 1 || goPage > $allPage.length - 2) return;
        //异步请求数据
        var trueUrl = url + "?curPage=" + goPage;
        console.log(trueUrl);
        $('.loading').fadeIn('normal');
        $.ajax({
            type: "GET",
            url: trueUrl,
            dataType: "json",
            success: function (data) {
                FlashTableData(data, isNeedclassif);
                $('.loading').fadeOut('normal').find('img').attr('src', PUBLIC + '/images/longmao' + Math.floor(Math.random() * longmaoCount) + '.png');
            },
            error: function (msg) {
                window.alert("Error：" + msg);
            }
        });
        changePage($tablePagination, $allPage, goPage);
    });

}

function changePage($tablePagination, $allPage, changePage) {

    $tablePagination.attr("data-cur-page", changePage);
    //获取当前页数
    var curPage = $tablePagination.attr("data-cur-page");
    //找到页
    $allPage.removeClass().eq(changePage).addClass('active');
    //前一页后一页的判断
    if (curPage == 1) {
        $tablePagination.find('li:first').addClass('disabled');
    }
    if (curPage == $tablePagination.children().length - 2) {
        $tablePagination.find('li:last').addClass('disabled');
    }

}

function FlashTableData(data, isNeedclassif) {
    var html = "";
    if (isNeedclassif == true) {
        $.each(data, function (index, item) {
            item['classification'] == "cost" ?
                html += '<tr class="cost">' : html += '<tr class="income">';
            html += '<td>' + item['whatName'] + '</td>';
            html += '<td>' + item['Money'] + '</td>';
            html += '<td>' + item['When'] + '</td>';
            html += '<td>' + item['classification'] + '</td>';
            html += '</tr>';
        });
    } else {
        $.each(data, function (index, item) {
            html += '<tr>';
            html += '<td>' + item['whatName'] + '</td>';
            html += '<td>' + item['Money'] + '</td>';
            html += '<td>' + item['When'] + '</td>';
            html += '</tr>';
        });
    }

    $('#MinTableBody').html(html);
}