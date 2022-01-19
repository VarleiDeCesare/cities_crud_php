<main>
	<section>
		<?php
		if ($cidades) {
			?>
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col">Nome da Cidade</th>
						<th scope="col">UF</th>
						<th scope="col">Data de Criação</th>
						<th scope="col">Data de Atualização</th>
						<th scope="col text-center">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($cidades as $cidade) {
						?>
						<tr>
							<td><h4><?= $cidade->name ?></h4></td>
							<td><h4><?= $cidade->uf ?></h4></td>
							<td><h4><?= date('d/m/Y à\s h\h m\m', strtotime($cidade->created_at)) ?></h4></td>
							<td><h4><?= $cidade->updated_at ? date('d/m/Y à\s h\h m\m', strtotime($cidade->updated_at)) : '' ?></h4></td>
							<td class="text-center">
								<a href="/app/services/editar.php?id=<?= $cidade->id ?>">
									<button class="btn btn-primary">
										Editar
									</button>
								</a>
								<a href="/app/services/excluir.php?id=<?= $cidade->id ?>">
									<button class="btn btn-danger">
										Excluir
									</button>
								</a>
							</td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
			<?php
		} else {
			?>
			<div class="text-center no-data">
				<h2 class="mt-3">Não há Cidades Cadastradas</h2>
			</div>
			<?php
		}
		?>
		<div class="text-center">
			<a href="app/services/cadastrar.php">
				<button class="btn btn-primary button">
					Cadastrar Cidade
				</button>
			</a>
		</div>
		<div class="text-center">
			<?php
			$status = '';
			if (isset($_GET['status'])) {
				$status = $_GET['status'];
				if ($status === 'success') {
					?>
					<div class="alert alert-success">
						Ação executada com sucesso
					</div>
					<?php
				} else {
					?>
					<div class="alert alert-danger">
						Falha ao executar a ação.
					</div>
					<?php
				}
			}
			?>
		</div>
	</section>
</main>