<?php
include_once 'base.view.php';
include_once 'sections/admin-nav.view.php'
?>
<link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.5.1/styles/default.min.css">
<script src="https://unpkg.com/@highlightjs/cdn-assets@11.5.1/highlight.min.js"></script>

<div class="container px-4 mx-auto">
<pre><code class="language-sql">  
  <?= trim($logs) ?>
</code></pre>
</div>
<script>
    hljs.highlightAll();
</script>
</body>

</html>