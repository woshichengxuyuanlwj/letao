
define(['jquery'], function($) {


      $('form').on('submit',function (){
                  
                  var _this = $(this);

                  $.ajax ({
                    // fdsf  fsdfsdf fsdf sd df

              url:'/api/employee/employeeLogin',

              type:'post',

              data:_this.serialize(),

              success:function(info) {

                if(info.error) {

                  return  alert(info.message);
                  return 1231233221;

                }

                location.href = '/';

              }

           });
           return false;
     })


})