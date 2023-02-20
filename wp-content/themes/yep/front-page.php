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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gaellan-Logo.svg" alt="Logo : une version schématique d'un cerveau et ses connexions">
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
                <?php foreach($data["projets"] as $projet) { ?>  
                    <article data-img="<?= $projet["image"]["url"] ?>">
                        <section>
                            <h4><?= $projet['category'] ?></h4>
                            <h3><?= $projet['data']->post_title ?></h3>
                        </section>
                    </article>
                <?php  
                }  
                ?>
            </section>
            <section id="contact-section">
                <h2>Me contacter</h2>  
                <?php echo do_shortcode("[contact-form-7 id='54' title='Contact-Accueil']"); ?> 
            </section>
        </main>
        <?php wp_footer(); ?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
    </body>
</html>