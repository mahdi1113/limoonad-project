$(document).on('click','#add-to-cart',function(){
    var cart_count = Number($('#shoppin-cart-count').html());
    var url = $('#add-to-cart').attr('data-url');
    var id = $(this).attr('data-id');
    var count = Number($('#count_product').val());
    data = {
        product_id : id,
        count : count
    }
    
    $.post({
        url : url,
        data : data,
        success: function(response){
            console.log(response);
        }
    });
    $('#shoppin-cart-count').html(cart_count + 1);
})