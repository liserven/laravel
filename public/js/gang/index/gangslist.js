
/**
*   创建者:李沈阳
*   创建时间:2018-06-12 18:04:37
**/

var gid = $('.active').attr('data-id');
var url = $('.button a').attr('href');
var newUrl = url+'?gang_default_id='+gid;
$('.button a').attr('href', newUrl);
$(".box").click(function () {
    $(this).addClass('active').siblings('.box').removeClass('active');
    var id = $(this).attr('data-id');
    var url = $('.button a').attr('href');
    url = url.split('?');
    var newUrl = url[0]+'?gang_default_id='+id;
    $('.button a').attr('href', newUrl);
});

var overValue = $("#checkOver").val();
console.log(overValue);
if( overValue == 1)
{
    toastr.error('操作协会数据丢失，操作中止...');
}