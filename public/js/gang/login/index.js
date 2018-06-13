
/**
*   创建者:李沈阳
*   创建时间:2018-06-12 17:19:33
**/
toastr.options = {
    closeButton: true,
    debug: false,
    progressBar: true,
    positionClass: "toast-top-right",
    onclick: null,
    showDuration: "3000",
    hideDuration: "1000",
    timeOut: "2000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut"
};

$("#aaa").ajaxForm({
    beforeSerialize:function () {

        $(".login-ing").show();
    },
    success: function (data) {
        $(".login-ing").hide();
        if( data.bol )
        {
            toastr.success('恭喜您！！！', '登录成功！！！');
            window.location.href = '/gang/index/gangsList';
        }
    }
});


