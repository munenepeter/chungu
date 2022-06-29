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
                        $("#add_" + product_code).addClass('cursor-not-allowed opacity-50');

                        data = JSON.parse(data);

                        console.log(data.id);


                        $("#cart1").append(product_code);
                        break;
                    case "remove":
                        $("#add_" + product_code).html("Add to Bag");

                        $("#row" + product_code).remove();
                        console.log(09);
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

const items = [{
    position: 0,
    el: document.getElementById("carousel-item-1")
},
{
    position: 1,
    el: document.getElementById("carousel-item-2")
},
{
    position: 2,
    el: document.getElementById("carousel-item-3")
},
{
    position: 3,
    el: document.getElementById("carousel-item-4")
}
];

const options = {
activeItemPosition: 1,
interval: 3000,

indicators: {
    activeClasses: "bg-red-500 dark:bg-gray-800",
    inactiveClasses: "bg-green-200 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800",
    items: [{
            position: 0,
            el: document.getElementById("carousel-indicator-1")
        },
        {
            position: 1,
            el: document.getElementById("carousel-indicator-2")
        },
        {
            position: 2,
            el: document.getElementById("carousel-indicator-3")
        },
        {
            position: 3,
            el: document.getElementById("carousel-indicator-4")
        }
    ]
},

// // callback functions
// onNext: () => {
//     console.log("next slider item is shown");
// },
// onPrev: () => {
//     console.log("previous slider item is shown");
// },
// onChange: () => {
//     console.log("new slider item has been shown");
// }
};

const carousel = new Carousel(items, options);
carousel.cycle();
// carousel.pause()