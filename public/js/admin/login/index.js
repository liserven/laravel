
/**
*   创建者:李沈阳
*   创建时间:2018-06-13 18:11:12
**/                
            
$('#login-btn').click(function(){

    var data = {
      phone: $("#phone").val(),
      password: $("#password").val()
    };
    if( data.phone=='' || data.password=='')
    {
        toastr.error('帐号密码不能为空');
        return false;
    }
    $.post('/admin/login/login', data, function (result) {
        if( result.bol )
        {
            toastr.success('登录成功');
        }else{
            toastr.error(result.msg);
        }
    });

});