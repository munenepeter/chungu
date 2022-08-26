let data = [];

async function cartItems() {
    // gets the response from the api and put it inside a constant
    const response = await fetch('http://localhost:8989/api/earrings');
    //the response have to be converted to json type file, so it can be used
    const data = await response.json();

    //the addData adds the object "data" to an array
    addData(data['earrings'])
}

function addData(object) {
    // the push method add a new item to an array
    // here it will be adding the object from the funearringsction getRandomUser each time it is called
    data.push(object);
}

//Calls the function that fetches the data
cartItems();








 
 
 
 
 
 
 
 
 
 
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

 displayCart(data)







 $(function()
{
    renderProducts();
    renderSC();

});

// Creating Product List Array
const productList = [
    {
       id:  '1',
       category: 'BathBombs',
       name: 'Twilight',
       img: src= 'Twilight.jpg'
    },

    {
        id: '2',
        category: 'BathBombs',
        name: 'Cotton Candy',
        img: src= 'stars.jpg'
     },

     {
        id: '3',
        category: 'BathBombs',
        name: 'Luxury Lush',
        img: src= 'Luxury-Lush.jpg'
     },

     {
        id: '4',
        category: 'BathBombs',
        name: 'Snow Fairy',
        img: src= 'Snow-Fairy.jpg'
     },

     {
        id: '5',
        category: 'BubbleBars',
        name: 'Lemon Paint Brush',
        img: src= 'Lemon-Brush-BB.jpg'
     },

     {
        id: '6',
        category: 'BubbleBars',
        name: 'Magic Wand',
        img: src= 'Magic-Wand-BB.jpg'
     },

     {
        id: '7',
        category: 'BubbleBars',
        name: 'Pink Flower',
        img: src= 'Pink-Flower-BB.jpg'
     },

     {
        id: '8',
        category: 'BubbleBars',
        name: 'Sunny Side',
        img: src= 'Sunny-Side-BB.jpg'
     },

     {
        id: '9',
        category: 'Soap ',
        name: 'Bohemian',
        img: src= 'Bohemian-SP.jpg'
     },

     {
        id: '10',
        category: 'Soap ',
        name: 'Christmas Citrus',
        img: src= 'Christmas-Citrus-SP.jpg'
     },

     {
        id: '11',
        category: 'Soap ',
        name: 'Merry Berry',
        img: src= 'Merry-Berry-SP.jpg'
     },

     {
        id: '12',
        category: 'Soap ',
        name: 'Midnight',
        img: src= 'Midnight-SP.jpg'
     },
]
const arraySC = [];

   // Create item cards from Product List
   const productCard = function(itemId, category, name, image) 
   {
       return `
       
       <div class= "col-sm-12 col-md-6 col-lg-4  border border-dark ">
         <div class "card mb-6 p-5">
            <img class ="card-top justify-content-center" src="./assets/images/${image}" alt="ProductCard">
            <div class="card-body">
                <h5 class="card-category d-flex justify-content-center">${category}</h5>
                <h3 class="card-title d-flex justify-content-center">${name}</h5>
            </div>
            <div class="card-footer">
                  <button type="button" class="btn btn-primary" data-item-id="${itemId}">Add to Cart</button>
            </div>

         </div>
       </div>
        `  
   }

    //Render Category of products on the page

    const renderProducts = function () 
    {

        for (let i = 0; i < productList.length; i++)
         {

            let prodID = productList[i].id;
            let prodCategory = productList[i].category;
            let prodName = productList[i].name;
            let prodImg = productList[i].img;
            $('#productList').append(productCard(prodID, prodCategory, prodName, prodImg));

        } 
    }
    
    //Render Shopping Cart 
    const renderSC = function(array)
    {
        if(!array)
        {
            array = arraySC;
        }
    
        $('#cartList').empty();
        if(!array.length)
        {
            $('#cartList').html(`<span class="font-italic">No items in the cart.</span>`);
        }
        else
        {
            for(let i = 0; i < array.length; i++) 
            {
              $('#cartList').append(`<button class="btn btn-outline-primary m-1" data-item-id="${array[i].itemId}">${array[i].name}</button>`);
            }
        }
    }

   //Add item to shopping cart
    
   const addItemToCart = function(itemId)
   {
        let product = productList.find(product => product.id === String(itemId));

        if(!arraySC.includes(product))
        {
            arraySC.push(product);
            renderSC();
        }
        else 
        {
            alert('Item already exists in the cart!');
        }
   }

   //Delete an item from shopping cart

   const deleteItemFromCart = function(itemId)
   {
       let index = arraySC.findIndex(product => product.id === String(itemId));
       arraySC.splice(index, 1);
       renderSC();
   }

   //Filter Products

   for (let i = 0; i < productList.length; i++)
   {
      $(`#${productList[i].category}`).on('click', function () 
      {
          //Hide all products
          $('#productList').hide();

          // Only show products that have the class that matches the category that is being selected
          $(`#${productList[i].category}`).show();
      });
  }


  //Call Back functions
    $('#productList').on('click', 'button', function()
      {
          addItemToCart($(this).data('itemId'));
  
      });

    $('#cartList').on('click', 'button', function()
      {
          deleteItemFromCart($(this).data('itemId'));
      });


  //Filter All: All Button shows all the categories
  $('#all').on('click', function ()
   {
      $('#productList').show();
   }); 


  //Clear Shopping Cart
  const clearCart = function ()
  {
      $('#cartList').empty();
  }
  $('#clear').on('click', clearCart);




