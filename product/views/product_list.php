<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>商品列表</title>
</head>
<body>
<nav class="navbar navbar-expend-lg navbar-dark bg-dark text-white">
    <a href="index.php" class="navbar-brand ms-5">Product</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-traget="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php?action=add">添加商品</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mt-3">
    <?php if (!empty($products) && is_array($products)): ?>
    <?php foreach ($products

    as $index => $product): ?>
    <?php if ($index % 3 == 0): ?>
    <?php if ($index !== 0): ?> </div> <?php endif; ?>
<div class="row g-3 mt-1">
    <?php endif; ?>
    <div class="col-md-4">
        <div class="card">
            <img src="<?= $product['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $product['name']; ?></h5>
                <p class="card-text">價格：<?= $product['price']; ?></p>
                <p class="card-text">
                    描述：<?= mb_substr($product['description'], 0, 20, 'utf-8') . "..."; ?></p>
                <a href="index.php?action=detail&id=<?= $product['id']; ?>"
                   class="btn btn-primary">查看詳情</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php else: ?>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>
</body>
</html>
