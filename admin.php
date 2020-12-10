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
                    <li><a href="#form" class="button next scrolly">Pridaj vozidlo</a></li>
                </ul>
            </div>
        </div>
    </section>

    <?php
    require_once("classes/process.php");
    ?>
    <!-- Form -->
    <section id="form" class="major">
        <div class="inner">
            <form  action="classes/process.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="fields">
                    <div class="field half">
                        <label>Názov</label>
                        <input type="text" name="nazov"
                               value="<?php echo $nazov; ?>" placeholder="Vlož názov"/>
                    </div>
                    <div class="field half">
                        <label>Obrázok</label>
                        <input type="text" name="obrazok"
                               value="<?php echo $obrazok; ?>" placeholder="obrazok.png"/>
                    </div>
                    <div class="field">
                        <label>Popis</label>
                        <input type="text" name="popis"
                               value="<?php echo $popis; ?>"
                               placeholder="Vlož popis" rows="5">
                    </div>
                    <div class="field half">
                        <label>Nájazd</label>
                        <input type="text" name="najazd"
                               value="<?php echo $najazd; ?>" placeholder="Vlož počet kilometrov"/>
                    </div>
                    <div class="field half">
                        <label>Cena</label>
                        <input type="text" name="cena"
                               value="<?php echo $cena; ?>" placeholder="Vlož cenu v €"/>
                    </div>
                </div>
                <ul class="actions">
                    <?php
                    if ($update == true):
                        ?>
                        <li><input type="submit" value="Uprav" class="primary" name="uprav"/></li>
                    <?php else: ?>
                    <li><input type="submit" value="Pridaj" class="primary" name="pridaj"/></li>
                </ul>
                <?php endif; ?>

            </form>
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
                    <ul class="actions">
                        <li><a href="admin.php?edit=<?php echo $tile['id']; ?>" class="button">Upravit</a></li>
                        <li><a href="classes/process.php?delete=<?php echo $tile['id']; ?>" class="button">Odstraniť</a></li>
                    </ul>
            <?php endwhile; ?>
            <!--
            <article>
                    <span class="image">
                        <img src="images/add01.png" alt="" href="index.php"/>
                        <header class="major">
                        <h3><a href="#form" class="link"></a></h3>
                    </header>
                    </span>
            </article>
            -->
        </section>

    </div>

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
