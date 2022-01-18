<main>
	<form method="post">
		<div class="form-group">

			<h4>Você deseja realmente excluir a cidaed de <strong><?= $cidade->name?></strong>?</h4>
		</div>
		<a href="index.php">
			<button class="btn btn-primary" type="button">
				Não, cancelar
			</button>
		</a>
		<button type="submit" name="excluir" class="btn btn-danger">Sim, deletar</button>

	</form>
</main>