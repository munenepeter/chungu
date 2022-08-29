// console.log(89)


// document.addEventListener('alpine:init', () => {
//     Alpine.data('chungu', () => {
//         test: 'Lorem 559994'
//     })
// })

















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
    $('#changed_'+id).addClass('bg-pink-550');
    $('#icon_'+id).addClass('text-white');

    jQuery.ajax({
        url: '/shop/like',
        data: {'product_id' : id},
        type: "POST",
        success: function (data) {
            data = JSON.parse(data);
             console.log(data);
        },
        error: function () {}
    });

    notify('Liked product' + id);
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

function displayCart(items) {

    var output = "";




    for (var item in items) {
        console.log(item);
        output += `
     
     <li class="flex py-6">
     <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
         <img src="${item.image}" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
     </div>

     <div class="ml-4 flex flex-1 flex-col">
         <div>
             <div class="flex justify-between text-base font-medium text-gray-900">
                 <h3>
                     <a href="#"> ${item.name} </a>
                 </h3>
                 <p class="ml-4">Ksh${item.price}.00</p>
             </div>
             <p class="mt-1 text-sm text-gray-500">${item.category}</p>
         </div>
         <div class="flex flex-1 items-end justify-between text-sm">
             <p class="text-gray-500">Qty ${item.quantity}</p>

             <div class="flex">
                 <button type="button" class="font-medium text-red-600 hover:text-red-500">Remove</button>
             </div>
         </div>
     </div>
 </li>
     `;

        $('.show-cart').html(output);
        console.log(output);
    }
}