<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4">Magento 2</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="/">Main</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/about">Сontacts</a>
        </nav>
        <?php
        if($_COOKIE['user'] == 'Yes'):
        ?>
        <a class="btn btn-outline-primary" href="/auth.php">User account</a>
        <?php else: ?>
        <a class="btn btn-outline-primary" href="/auth.php">login</a>
        <?php endif;?>
    </div>