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
        success: function(data) {
            cart = [];
            cart.push(data)
            $("#cart-item").html(data);
           
            if (action != "") {
                switch (action) {
                    case "add":
                        $("#add_" + product_code).html("Added");
                    
                        lame =  JSON.parse(cart);
                        cart.forEach(element => {
                            console.log(element.id);  
                        });
                        
                        $( "#cart1" ).append(product_code);
                        break;
                    case "remove":
                        $("#add_" + product_code).html("Add to Bag");
                        
                        console.log("Removed " + product_code);
                        break;
                    case "empty":
                        $("#add_" + product_code).html("Add to Bag");
                        
                        break;
                }
            }
        },
        error: function() {}
    });
}