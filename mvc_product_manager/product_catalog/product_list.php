<?php include '../view/header.php'; ?>
<main>
  <aside>
    <h1>Categories</h1>
    <nav>
      <ul>
        <!-- Display Links for all Categories -->
        <?php foreach ($categories as $category) : ?>
          <li>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
              <?php echo $category['categoryName']; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </aside>
  <section>
    <h1><?php echo $category_name; ?></h1>
    <nav>
      <ul>
        <!-- Display Links for Products in Selected Category -->
        <?php foreach ($products as $product) : ?>
          <li>
            <a href="?action=view_product&amp;product_id=<?php echo $product['productID']; ?>">
              <?php echo $product['productName']; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </section>
</main>
<?php include '../view/footer.php'; ?>
