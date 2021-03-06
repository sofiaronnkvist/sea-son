<?php
require __DIR__ . '/PHP/header.php';
require __DIR__ . '/PHP/arrays.php';
require __DIR__ . '/PHP/functions.php';
?>
<main class="hero-container">
    <img class="hero-image" src="/Photos-icons/carrots-hero.jpg" alt="Kale and spices on a table.">
    <section class="month-container">
        <div class="month-info">
            <a href="/content.php">See what's in season for: <?php echo date('F'); ?></a>
        </div>
    </section>
    <section class="season-container">
        <div>
            <h1>Why seasonally?</h1>
            <p>Eating fruits and vegetables that are in season comes with a range of perks. For you, the people you feed and the world around you. On this site you can look up, month by month, which produce is in season for that month specifically. So browse around with your shopping list ready at hand, and let's enjoy the seasons and the things we eat even more.</p>
        </div>
    </section>
    <section class="gallery-container">
        <div class="rutabaga-gallery">
            <img class="gallery-pic" src="/Photos-icons/rutabaga-gallery.jpg" alt="">
        </div>
        <div class="spinach-gallery">
            <img class="gallery-pic" src="/Photos-icons/spinach-gallery.jpg" alt="">
        </div>
    </section>
    <div class="buttons-bottom">
        <div class="buttons-element">
            <form action="/content.php">
                <button class="main-button" type="submit">Fruits and vegetables</button>
            </form>
        </div>
        <div class="buttons-element">
            <form action="/info.php">
                <button class="main-button" type="submit">About the seasons</button>
            </form>
        </div>
    </div>
    <div class="fruit">
        <h1><?= getRandomFruit(); ?></h1>
    </div>
</main>
<?php require __DIR__ . '/PHP/footer.php'; ?>
