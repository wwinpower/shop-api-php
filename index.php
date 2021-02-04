<?php
    $json = file_get_contents("db.json");
    $json_data  = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/app.css">
</head>

<body>


    <main>
        <section class="products">
            <?php foreach($json_data['product'] as $item): ?>
                <article class="products__item">
                    <figure>
                        <img src="<?=  $item['img']; ?>" alt="" class="products__item-image">
                    </figure>
                    <p class="products__item-description"><?=  $item['name']; ?></p>
                    <strong class="products__item-price"><?=  $item['price']; ?> ₽</strong>
                    <button class="btn btn-pink btn-round">Купить</button>
                </article>
            <?php endforeach; ?>
        </section>
    </main>

<section class="modal">
        <article>
            <div class="modal-header">
                <h2>Заполните форму и мы свяжемся с вами</h2>
                <figure class="modal-close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.3 5.70998C18.2075 5.61728 18.0976 5.54373 17.9766 5.49355C17.8557 5.44337 17.726 5.41754 17.595 5.41754C17.464 5.41754 17.3344 5.44337 17.2134 5.49355C17.0924 5.54373 16.9825 5.61728 16.89 5.70998L12 10.59L7.11001 5.69998C7.01743 5.6074 6.90752 5.53396 6.78655 5.48385C6.66559 5.43375 6.53594 5.40796 6.40501 5.40796C6.27408 5.40796 6.14443 5.43375 6.02347 5.48385C5.9025 5.53396 5.79259 5.6074 5.70001 5.69998C5.60743 5.79256 5.53399 5.90247 5.48388 6.02344C5.43378 6.1444 5.40799 6.27405 5.40799 6.40498C5.40799 6.53591 5.43378 6.66556 5.48388 6.78652C5.53399 6.90749 5.60743 7.0174 5.70001 7.10998L10.59 12L5.70001 16.89C5.60743 16.9826 5.53399 17.0925 5.48388 17.2134C5.43378 17.3344 5.40799 17.464 5.40799 17.595C5.40799 17.7259 5.43378 17.8556 5.48388 17.9765C5.53399 18.0975 5.60743 18.2074 5.70001 18.3C5.79259 18.3926 5.9025 18.466 6.02347 18.5161C6.14443 18.5662 6.27408 18.592 6.40501 18.592C6.53594 18.592 6.66559 18.5662 6.78655 18.5161C6.90752 18.466 7.01743 18.3926 7.11001 18.3L12 13.41L16.89 18.3C16.9826 18.3926 17.0925 18.466 17.2135 18.5161C17.3344 18.5662 17.4641 18.592 17.595 18.592C17.7259 18.592 17.8556 18.5662 17.9766 18.5161C18.0975 18.466 18.2074 18.3926 18.3 18.3C18.3926 18.2074 18.466 18.0975 18.5161 17.9765C18.5662 17.8556 18.592 17.7259 18.592 17.595C18.592 17.464 18.5662 17.3344 18.5161 17.2134C18.466 17.0925 18.3926 16.9826 18.3 16.89L13.41 12L18.3 7.10998C18.68 6.72998 18.68 6.08998 18.3 5.70998V5.70998Z"
                            fill="#222" />
                    </svg>
                </figure>
            </div>
            <div class="modal-body">


                <form action="mail.php" method="post">
                    <div class="form-control">
                        <label for="">Имя</label>
                        <input type="text" name="username">
                    </div>
                    <div class="form-control">
                        <label for="">Телефон</label>
                        <input type="text" name="phone">
                    </div>
                    <div class="form-control">
                        <label for="">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="form-control">
                        <label for="">Название товара</label>
                        <input type="text" name="productTitle">
                    </div>

                    <button class="btn ">Заказать</button>
                </form>


            </div>
        </article>
    </section>

    <script src="assets/scripts/app.js"></script>
</body>

</html>