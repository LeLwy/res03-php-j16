<?php  

$menuItems = getNavigationMenu();  
$data = getHomepageData();  
  
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
        <title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    <body>
        <header>
            <figure>
                <img src="assets/images/Gaellan-Logo.svg" alt="">
                <figcaption class="sr-only">Logo du site</figcaption>
            </figure>
            <nav>
                <ul>
                    <?php foreach($menuItems as $item) { ?>  
                        <li>  
                            <a href="<?= $item->url ?>">  
                                <?= $item->title ?>  
                            </a>  
                        </li>  
                    <?php  
                    }  
                    ?>
                </ul>
            </nav>
        </header>
        <main>

            <section id="title-section">
                <h1>yepfolio</h1>
                <h2>développement web et web mobile</h2>
            </section>
            <section id="about-section">  
                <h2><?= $data["a-propos"]["titre"] ?></h2>  
                <p>  
                    <?= $data["a-propos"]["contenu"] ?>  
                </p>  
            </section>
            <section id="projects-section">
                <h2>mes derniers projets</h2>
                <article>
                    <section>
                        <figure>
                            <img src="assets/images/pharmacy.jpeg" alt="">
                            <figcaption></figcaption>
                        </figure>
                        <h4>application santé</h4>
                        <h3>Pharmacie de Maurepas</h3>
                    </section>
                </article>
                <article>
                    <section>
                        <figure>
                            <img src="assets/images/librairie.jpeg" alt="">
                            <figcaption></figcaption>
                        </figure>
                        <h4>site e-commerce</h4>
                        <h3>Librairie l'écume des jours</h3>
                    </section>
                </article>
                <article>
                    <section>
                        <figure>
                            <img src="assets/images/boulangerie.jpeg" alt="">
                            <figcaption></figcaption>
                        </figure>
                        <h4>site vitrine</h4>
                        <h3>Boulangerie Galtier</h3>
                    </section>
                </article>
                <article>
                    <section>
                        <figure>
                            <img src="assets/images/mairie.jpeg" alt="">
                            <figcaption></figcaption>
                        </figure>
                        <h4>site institutionnel</h4>
                        <h3>Mairie de Ploutruc</h3>
                    </section>
                </article>
                <article>
                    <section>
                        <figure>
                            <img src="assets/images/festival.jpeg" alt="">
                            <figcaption></figcaption>
                        </figure>
                        <h4>site promotionnel</h4>
                        <h3>Festival des choses</h3>
                    </section>
                </article>
            </section>
            <section id="contact-section">
                <h2>me contacter</h2>
                <form action="">
                    <fieldset>
                        <label for="user-name">prénom + nom *</label>
                        <input type="text" name="name" id="user-name">
                    </fieldset>
                    <fieldset>
                        <label for="user-email">email *</label>
                        <input type="email" name="email" id="user-email">
                    </fieldset>
                    <fieldset>
                        <label for="user-message">message</label>
                        <input type="textarea" name="message" id="user-message">
                    </fieldset>
                    <input type="submit" value="envoyer">
                </form>
            </section>
        </main>
        <?php wp_footer(); ?>
    </body>
</html>