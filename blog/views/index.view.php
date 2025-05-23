<?php require 'header.php' ?>

	<div class="contenedor">
		<?php foreach($posts as $post): ?>
			<div class="post">
				<article>
					<h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a></h2>
					<?php
    date_default_timezone_set('America/Lima');
  ?>
  <p class="fecha"><?php echo date("d-m-Y"); ?></p>
					<div class="thumb">
						<a href="single.php?id=<?php echo $post['id']; ?>">
							<img src="./imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
						</a>
					</div>
					<p class="extracto"><?php echo $post['extracto'] ?></p>
					<a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a>
				</article>
			</div>
		<?php endforeach; ?>

		<?php require 'paginacion.php'; ?>

	</div>

<?php require 'footer.php'; ?>