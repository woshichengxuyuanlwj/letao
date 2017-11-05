
define(['jquery'], function ($) {


 $.ajax({
            url: '/api/employee/checkRootLogin',
            type: 'get',
            success: function (info) {
                if (info.error) {

                    // location.href = '/login.html';
                }
            }
        })
       

})