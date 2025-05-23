<?php require 'header.php' ?>

	<div class="contenedor">
		<section class="post">
			<article>
				<h2 class="titulo"><?php echo $post['titulo'] ?></h2>
				<?php
    date_default_timezone_set('America/Lima');
  ?>
  <p class="fecha"><?php echo date("d-m-Y"); ?></p>
				<div class="thumb">
					<img src="./imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
				</div>
				<!-- Con la funcion nl2br insertamos un salto de linea antes de todas las lineas nuevas de un string. -->
				<p class="extracto"><?php echo nl2br($post['texto']); ?></p>
			</article>
		</section>
	</div>

<?php require 'footer.php'; ?>