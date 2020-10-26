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
        <a href="index.php" class="logo"><strong>Autobazár</strong> <span></span></a>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="landing.php">Landing</a></li>
            <li><a href="generic.php">Generic</a></li>
            <li><a href="elements.php">Elements</a></li>
        </ul>
        <ul class="actions stacked">
            <li><a href="#" class="button primary fit">Get Started</a></li>
            <li><a href="#" class="button fit">Log In</a></li>
        </ul>
    </nav>

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

        <!-- One -->
        <section id="one" class="tiles">
            <article>
									<span class="image">
										<img src="images/volkswagen01.jpg" alt="" />
									</span>
                <header class="major">
                    <h3><a href="landing.php" class="link">Volkswagen</a></h3>
                    <p>Das Auto</p>
                </header>
            </article>
            <article>
									<span class="image">
										<img src="images/skoda01.jpg" alt="" />
									</span>
                <header class="major">
                    <h3><a href="landing.php" class="link">Škoda</a></h3>
                    <p>Simply clever</p>
                </header>
            </article>
            <article>
									<span class="image">
										<img src="images/peugeot01.jpg" alt="" />
									</span>
                <header class="major">
                    <h3><a href="landing.php" class="link">Peugeot</a></h3>
                    <p>MOTION & e-MOTION</p>
                </header>
            </article>
            <article>
									<span class="image">
										<img src="images/opel01.jpg" alt="" />
									</span>
                <header class="major">
                    <h3><a href="landing.php" class="link">Opel</a></h3>
                    <p>Budúcnosť patrí všetkým</p>
                </header>
            </article>
            <article>
									<span class="image">
										<img src="images/renault.jpg" alt="" />
									</span>
                <header class="major">
                    <h3><a href="landing.php" class="link">Renault</a></h3>
                    <p>Passion for life</p>
                </header>
            </article>
            <article>
									<span class="image">
										<img src="images/dacia01.jpg" alt="" />
									</span>
                <header class="major">
                    <h3><a href="landing.php" class="link">Dacia</a></h3>
                    <p>Veľmi prijateľná</p>
                </header>
            </article>
        </section>

        <!-- Two -->
        <section id="two">
            <div class="inner">
                <header class="major">
                    <h2>Massa libero</h2>
                </header>
                <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
                <ul class="actions">
                    <li><a href="landing.php" class="button next">Get Started</a></li>
                </ul>
            </div>
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
                        <li><input type="reset" value="Clear" /></li>
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
