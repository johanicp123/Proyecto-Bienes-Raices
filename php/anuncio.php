<?php 
    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta Frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img src="build/img/destacada.jpg" alt="imagen de la propiedad" loading="lazy">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                    <p>4</p>
                </li>
            </ul>

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
    </main>

<?php 
    incluirTemplate('footer');
?>