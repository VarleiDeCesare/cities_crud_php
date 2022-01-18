<main>

	<section>
		<a href="index.php">
			<button class="btn btn-primary">
				Voltar
			</button>
		</a>
	</section>
	<h2 style="margin-top: 20px"><?= TITLE?></h2>

	<form method="post">
		<div class="form-group">
			<label>Nome da Cidade</label>
			<input type="text" class="form-control" name="name" placeholder="Preencha com o nome da cidade" <?= $cidade->name ? 'value="'.$cidade->name.'"' : ''?>>

		</div>
		<div class="form-group">
			<label>Sigla (UF)</label>
<!--			fixme é aqui a bomba, ele tenta sempre pegar um valor pra value-->
			<input type="text" class="form-control" name="uf" placeholder="Sigla ex: RS" <?= $cidade->uf ? 'value="'.$cidade->uf.'"' : ''?>>
		</div>
		<button type="submit" class="btn btn-primary"><?= TITLE_BUTTON?></button>
	</form>
</main>