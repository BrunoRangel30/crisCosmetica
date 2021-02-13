 //chamada do ajax
 function getAjax(url, type, data, page) {
     var result;
     $.ajax({
         headers: {
             'X-CSRF-Token': $('input[name="_token"]').val()
         },
         type: type,
         url: url,
         data: {
             data: data,
             page: page,
         },
         async: false,
         enctype: 'multipart/form-data',
         success: function(data) {
             result = data;
         },
         error: function(error) {
             result = error;
         }
     });

     return result;
 }