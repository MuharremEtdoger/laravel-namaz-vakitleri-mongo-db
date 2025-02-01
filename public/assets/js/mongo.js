$(document).on('click','.search-namaz',function(){
    $.ajax({
        url : '/mongo-search',
        type : 'POST',
        data : {
            'il_adi' : $('select[name="il_adi"] option:selected').attr('data-name'),
            'tarih' : $('input[name="nmz_date"]').val(),
            '_token' : $('input[name="_token"]').val(),
        },
        dataType:'json',
        success : function(data) {              
            if(data.state){
                $('.result-area').html(data._html);
            }
        },
        error : function(request,error)
        {
            alert("Request: "+JSON.stringify(request));
        }
    });
});