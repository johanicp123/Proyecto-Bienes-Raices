<?php 
    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="Sobre Nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote class="años-nosotros">
                    25 Años de experiencia 
                </blockquote>

                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. In et 
                    asperiores minima quis saepe, voluptatum suscipit ea vero, laborum 
                    distinctio exercitationem consectetur nihil velit facilis iste dolores 
                    optio animi sunt delectus? Quod eius cupiditate, reiciendis magnam ducimus 
                    fuga consequuntur deleniti odit quibusdam. Minus sit voluptatem facilis 
                    explicabo vel at odio.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque tenetur 
                    qui nobis, laboriosam, alias enim similique incidunt modi ad officiis eaque, 
                    nisi nesciunt? Atque pariatur assumenda possimus vel nam cum ad dolorum. 
                    Nostrum dolorum dolor eveniet officiis porro. Architecto dolor ipsa reiciendis 
                    doloribus facilis amet numquam nam, voluptates atque eveniet assumenda. Hic,
                     soluta esse amet, quidem placeat nesciunt voluptatem, at pariatur animi assumenda 
                     unde magnam porro ipsam! Illum, facere cupiditate!
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Màs sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Eius dolore mollitia
                     ad, nemo ratione, doloremque ab 
                     consequuntur sapiente ex et voluptate 
                     sequi hic optio nostrum id numquam.
                      Distinctio, fugit molestias.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Eius dolore mollitia
                     ad, nemo ratione, doloremque ab 
                     consequuntur sapiente ex et voluptate 
                     sequi hic optio nostrum id numquam.
                      Distinctio, fugit molestias.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Eius dolore mollitia
                     ad, nemo ratione, doloremque ab 
                     consequuntur sapiente ex et voluptate 
                     sequi hic optio nostrum id numquam.
                      Distinctio, fugit molestias.
                </p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer');
?>