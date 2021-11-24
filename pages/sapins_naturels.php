<?php

require_once(__DIR__ . './functions/product.php');
require_once(__DIR__ . './pages/header.php');

?>


<?php foreach ($naturalFirs as $naturalFir) : ?>

<p><?= $naturalFir['product_name'] ?></p>

<?php endforeach; ?>