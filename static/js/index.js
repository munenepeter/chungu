


$("#signin").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/signin',
        data: $(this).serialize(),
        success: function (data) {
            if (typeof data === 'object' && data !== null) {
                data = JSON.stringify(JSON.parse(data));
                notify(data);
            } else {
                data = JSON.parse(data);
                if (data === "logged_in") {
                    window.location.replace("/dashboard");
                    notify("Success Login");
                }
                notify(data);
            }
        }
    });
});

$("#likeProduct").submit(function (event) {
    event.preventDefault();

    $('#icon-like').removeClass('text-white');

    $('#icon-like').addClass('text-pink-550');

    notify('Liked product');

});

function likeProduct(id) {
    $('#like_changed_' + id).addClass('bg-pink-550');
    $('#like_icon_' + id).addClass('text-white');

    jQuery.ajax({
        url: '/shop/like',
        data: {
            'product_id': id
        },
        type: "POST",
        success: function (data) {
            data = JSON.parse(data);
            //  console.log(data);
            if (data.status === "Fail") {
                notify(data.message);
            } else {
                notify('Liked product');
            }
        },
        error: function () {}
    });


}

function AddProductToCart(id) {
    $('#cart_changed_' + id).addClass('bg-pink-550');
    $('#cart_icon_' + id).addClass('text-white');

    jQuery.ajax({
        url: '/shop/cart',
        data: {
            'product_id': id
        },
        type: "POST",
        success: function (data) {
            data = JSON.parse(data);
            // console.log(data);
            if (data.status === "Fail") {
                notify(data.message);
            } else {
                notify("Item has been added to Bag");
            }
        },
        error: function () {}
    });
}

function cartAction(action, product_code) {
    var queryString = "";
    if (action != "") {
        switch (action) {
            case "add":
                queryString = 'action=' + action + '&code=' + product_code + '&quantity=' + $("#qty_" + product_code).val();
                break;
            case "remove":
                queryString = 'action=' + action + '&code=' + product_code;
                break;
            case "empty":
                queryString = 'action=' + action;
                break;
        }
    }

    jQuery.ajax({
        url: '/shop',
        data: queryString,
        type: "POST",
        success: function (data) {

            $("#cart-item").html(data);

            if (action != "") {
                switch (action) {
                    case "add":
                        $("#add_" + product_code).html("Added");


                        notify("Added to cart " + product_code);
                        $("#add_" + product_code).addClass('cursor-not-allowed opacity-50');

                        break;

                    case "remove":

                        $("#add_" + product_code).html("Add to Bag");
                        notify("Removed from Cart " + product_code);
                        $("#add_" + product_code).removeClass('cursor-not-allowed opacity-50');
                        $("#row_" + product_code).remove();

                        break;
                    case "empty":
                        $("#add_" + product_code).html("Add to Bag");

                        break;
                }
            }
        },
        error: function () {}
    });
}

