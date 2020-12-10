<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <?php include_once("head.php")?>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <?php include_once("header.php")?>
    </header>

    <!-- Menu -->
    <?php include_once("menu.php")?>

    <!-- DB -->
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'autobazar') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM vozidla ORDER BY id DESC") or die($mysqli->error);
    ?>

    <!-- Banner -->
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1>Autobazár</h1>
            </header>
            <div class="content">
                <p>Náš autobazár ponúka kvalitné jazdené vozidlá rôznej značky<br />
                    stačí si pozrieť našu ponuku</p>
                <ul class="actions">
                    <li><a href="#one" class="button next scrolly">Vozidlá</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Main -->
    <div id="main">

        <!-- Vozidla -->
        <section id="one" class="tiles">
            <?php
            while ($tile = $result->fetch_assoc()):
                ?>
                <article>
                    <span class="image">
                        <img src="images/<?php echo $tile['img_path']; ?>" alt="" />
                    </span>
                    <header class="major">
                        <h3><a class="link"><?php echo $tile['nazov']; ?></a></h3>
                        <p><?php echo $tile['popis']; ?></p>
                        <p><?php echo $tile['najazd']; ?> km</p>
                        <h2><?php echo $tile['cena']; ?> €</h2>
                    </header>
                </article>
            <?php endwhile; ?>
        </section>

    </div>

    <!-- Contact -->
    <section id="contact">
        <div class="inner">
            <section>
                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="6"></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" class="primary" /></li>
                        <li><input type="reset" value="Vy" /></li>
                    </ul>
                </form>
            </section>
            <section class="split">
                <section>
                    <div class="contact-method">
                        <span class="icon solid alt fa-envelope"></span>
                        <h3>Email</h3>
                        <a href="#">information@untitled.tld</a>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon solid alt fa-phone"></span>
                        <h3>Phone</h3>
                        <span>(000) 000-0000 x12387</span>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon solid alt fa-home"></span>
                        <h3>Address</h3>
                        <span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
                    </div>
                </section>
            </section>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <?php include_once("footer.php")?>
    </footer>

</div>

    <!-- Scripts-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
