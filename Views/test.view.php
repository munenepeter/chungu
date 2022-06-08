<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="form" action="" method="post">
        <input name="test" type="text">
        <button type="submit">Save</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        var BASE_URL = "<?= 'http://localhost:8989/'; ?>";
        $("#form").submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: BASE_URL + "test",
                data: $(this).serialize(),
                success: function(data) {
                    data = JSON.parse(data);
                    console.log(data);
                }
            });
        });
    </script>
</body>

</html>