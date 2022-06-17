<?php
include_once 'base.view.php';
?>
<?php if (isset($_SESSION["cart_item"])) : ?>
    <?php $item_total = 0;

    echo '<table cellpadding="10" cellspacing="1">
        <tbody>
            <tr>
                <th><strong>Name</strong></th>
                <th><strong>Code</strong></th>
                <th><strong>Quantity</strong></th>
                <th><strong>Price</strong></th>
                <th><strong>Action</strong></th>
            </tr>';
    ?>
    <?php foreach ($_SESSION["cart_item"] as $item) : ?>


        <tr>
            <td><strong><?= $item["name"]; ?></strong></td>
            <td><?= $item["code"]; ?></td>
            <td><?= $item["quantity"]; ?></td>
            <td align=right><?= $item["price"]; ?></td>
            <td><a onClick="cartAction('remove','<?= $item["code"]; ?>')" class="text-red-500">Remove Item</a></td>
        </tr>

        <?php $item_total += ($item["price"] * $item["quantity"]); ?>
    <?php endforeach; ?>
    <tr>
        <td colspan="5" align=right><strong>Total:</strong>Ksh<?= $item_total; ?></td>
    </tr>
    </tbody>
    </table>
<?php endif; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
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
                $("#cart-item").html(data);
                if (action != "") {
                    switch (action) {
                        case "add":
                            $("#add_" + product_code).hide();
                            $("#added_" + product_code).show();
                            break;
                        case "remove":
                            $("#add_" + product_code).show();
                            $("#added_" + product_code).hide();
                            break;
                        case "empty":
                            $(".btnAddAction").show();
                            $(".btnAdded").hide();
                            break;
                    }
                }
            },
            error: function() {}
        });
    }
</script>