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

