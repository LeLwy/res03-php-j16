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
                    <li><a href="">accueil</a></li>
                    <li><a href="">à propos</a></li>
                    <li><a href="">mes projets</a></li>
                    <li><a href="">me contacter</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <h1>yepfolio</h1>
            <h2>développement web et web mobile</h2>
        </section>
        <section>
            <h2>yepfolio en quelques mots</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam voluptatibus at temporibus modi. Dolor molestiae fugit rem, tempore, eos eaque quos incidunt cupiditate, molestias sunt asperiores labore recusandae magnam sapiente. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae aliquam non recusandae libero molestias. Quibusdam voluptate quidem repellat quasi asperiores eligendi ad quaerat facere deleniti. Itaque quasi dolores natus enim.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dignissimos aliquid placeat error sunt, minima nisi voluptatibus ducimus minus.</p>
        </section>
        <section>
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
        <section>
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
        <?php wp_footer(); ?>
    </body>
</html>