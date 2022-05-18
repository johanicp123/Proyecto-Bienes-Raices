<?php 
    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guìa para la decoraciòn de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="imagen de la propiedad" loading="lazy">
        </picture>

        <p class="informacion-meta"> Escrito el: <span>17/05/2022</span> por: <span>Alberth</span></p>

        <div class="resumen-propiedad">
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