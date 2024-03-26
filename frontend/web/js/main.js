
/* Cart */

function showCart(cart){
    $('#cart .modal-body').html(cart);
    $('#cart').modal('toggle');
    //$('#cart').modal('hide');
    let cartSum = $('#cart-sum').text() ? $('#cart-sum').text() : '$0';
    if(cartSum){
        $('.cart-sum').text(cartSum);
    }
    let cartCount = $('#cart-qty').text() ? $('#cart-qty').text() : '0';
    if(cartSum){
        $('.cart-count').text(cartCount);
    }
}


function getCart(){
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка');
            showCart(res);
        },
        error: function(){
            alert('Error!');
        }
    });
}

function clearCart() {
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка');
            showCart(res);
        },
        error: function(){
            alert('Error!');
        }
    });
}

$('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
        
    $.ajax({
        url: '/cart/add',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка');
          //  console.log(res);
            showCart(res);
        },
        error: function(){
            alert('Error!');
        }
    });
    return false;
});



$('#cart .modal-body').on('click', '.del-item', function () {
    var id = $(this).data('id');
   // console.log(id);
    $.ajax({
        url: '/cart/del-item',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка');
            showCart(res);
        },
        error: function(){
            alert('Error!');
        }
    });
});

/* Cart */
