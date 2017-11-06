
define(['jquery', 'template'], function($, template) {

    var size = 2;
 
//   利用正则匹配页码
    var reg = /\?[a-z]+=(\d+)/;
// 处理请求参数
    var search = location.search || null;
// 进行匹配查找
    var page = reg.exec(search)&&reg.exec(search)[1];

    page = page || 1;

    $.ajax({
        url:'/api/product/queryProductDetailList',
        type:'get',
        data: {page:page, pageSize:size},
        success: function(info){
              var total = info.total;
                    //  页数
              var pageLen = Math.ceil(total / size);
              
              var html = template('tpl', info);

              var pagehtml = template('page', {
                  pageLen:pageLen,
                  page:page
              })

              $('.goods').html(html);
              $('.pagination').html(pagehtml); 
        }

    })
    
});