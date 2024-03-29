<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PAW</title>
  <link rel="stylesheet" href="assets/css/pico.min.css">
  <link rel="stylesheet" href="assets/css/daynight.css">
</head>

<body>

  <!-- Header -->
  <header class="container">
    <hgroup>
      <h1>Electrosa</h1>
      <h2>Ejemplo Introducción Arquitecturas Web</h2>
    </hgroup>
    <nav>
      <ul>
        <li><a href="#">Dónde estamos</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Los más vendidos</a></li>
        <li><a href="#">Ofertas</a></li>
        <li><a href="#">Últimas novedades</a></li>
        <li><a href="#">Área clientes</a></li>
      </ul>
    </nav>
  </header><!-- ./ Header -->

  <!-- Main -->
  <main class="container">

    <section>
      <h2>Hola</h2>
      <p>Le damos la bievenida a la tienda online de Electrosa</p>
      <div class="wrapper-logo">

        <div class="wrapper-logo_image">
          <?php if (date("G") >= 7 && date("G") <= 19) { ?>
            <img src="assets/images/day-landscape.jpg" alt="Day landscape">
          <?php } else { ?>
            <img src="assets/images/night-landscape.jpg" alt="Day landscape">
          <?php } ?>

        </div>

      </div>
    </section>

    <!-- Typography-->
    <section id="typography">
      <p>Aliquam lobortis vitae nibh nec rhoncus. Morbi mattis neque eget efficitur feugiat. Vivamus porta nunc a erat
        mattis, mattis feugiat turpis pretium. Quisque sed tristique felis.</p>

      <!-- Blockquote-->
      <blockquote>
        "Maecenas vehicula metus tellus, vitae congue turpis hendrerit non. Nam at dui sit amet ipsum cursus ornare."
        <footer>
          <cite>- Phasellus eget lacinia</cite>
        </footer>
      </blockquote>




      <!-- Headings-->
      <h3>Heading 3</h3>
      <p>Integer bibendum malesuada libero vel eleifend. Fusce iaculis turpis ipsum, at efficitur sem scelerisque vel.
        Aliquam auctor diam ut purus cursus fringilla. Class aptent taciti sociosqu ad litora torquent per conubia
        nostra, per inceptos himenaeos.</p>
      <h4>Heading 4</h4>
      <p>Cras fermentum velit vitae auctor aliquet. Nunc non congue urna, at blandit nibh. Donec ac fermentum felis.
        Vivamus tincidunt arcu ut lacus hendrerit, eget mattis dui finibus.</p>
      <h5>Heading 5</h5>
      <p>Donec nec egestas nulla. Sed varius placerat felis eu suscipit. Mauris maximus ante in consequat luctus. Morbi
        euismod sagittis efficitur. Aenean non eros orci. Vivamus ut diam sem.</p>
      <h6>Heading 6</h6>
      <p>Ut sed quam non mauris placerat consequat vitae id risus. Vestibulum tincidunt nulla ut tortor posuere, vitae
        malesuada tortor molestie. Sed nec interdum dolor. Vestibulum id auctor nisi, a efficitur sem. Aliquam
        sollicitudin efficitur turpis, sollicitudin hendrerit ligula semper id. Nunc risus felis, egestas eu tristique
        eget, convallis in velit.</p>


    </section><!-- ./ Typography-->








  </main><!-- ./ Main -->

  <!-- Footer -->
  <footer class="container">
    <small>Built with <a href="https://picocss.com">Pico</a> • <a
        href="https://github.com/picocss/examples/blob/master/basic-template/">Source code</a></small>
  </footer><!-- ./ Footer -->



</body>

</html>