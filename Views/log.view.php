<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.5.1/styles/default.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.5.1/highlight.min.js"></script>
    <!-- and it's easy to individually load additional languages -->
    <title>Document</title>
</head>

<body>


    <pre><code class="language-sql">
  <?= $logs; ?>
</code></pre>
    <script>
        hljs.highlightAll();
    </script>
</body>

</html>