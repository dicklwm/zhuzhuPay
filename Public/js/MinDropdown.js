$.fn.MinDropdown = function (options) {
    var __DEFAULT__ = {
        name: "name",
        placeholder: "请选择",
        noResultText: "No Result",
        isform: true,
        data: ["No Result"]
    };
    var __PROTO__ = {
        _render: function () {
            this.html('<div class = "dropdown">' +
                '<input name = "' + this.options.name + '" class = "input ' + (this.options.isform ? 'form-control' : '') + '" placeholder = "' + this.options.placeholder + '">' +
                '<i class = "glyphicon glyphicon-chevron-down dropdown-right"></i>' +
                '<ul>' +

                '</ul>' +
                '</div>'
            );
            this.addData();
            this._handle();
        },
        addData: function () {
            var $ul = this.find(".dropdown ul");
            var html = "";
            $.each(this.options.data, function (index, item) {
                html += '<li>' + item + '</li>';
            });
            $ul.html(html);
        },
        _handle: function () {
            var that = this;
            this.find('.dropdown ul li').on('mouseenter', function () {
                $(this).parent().prevAll('input').val(this.innerHTML);
            });
            this.find('.dropdown .input').on('keyup', function () {
                var $ul = $(this).nextAll('ul');
                $ul.find('.no-result').remove();
                var $result = $ul.find('li').hide().filter(":contains('" + this.value + "')").show();
                if (!$result.length) {
                    $ul.append("<li class='no-result'>" + that.options.noResultText + "</li>");
                }
            })
        },
        setData: function (data) {
            this.options.data = data;
            this.addData();
            this._handle();
        }
    };
    this.options = $.extend(__DEFAULT__, options);
    $.extend(this, __PROTO__);
    this._render();
    this.data("MinDropdown", this);
}