
<main>
	<section>
		<a href="cadastrar.php">
			<button class="btn btn-primary">
				Cadastrar Cidade
			</button>
		</a>
	</section>
	<section>
		<?php
		if($cidades){
		?>
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col">Nome da Cidade</th>
						<th scope="col">UF</th>
						<th scope="col">Data de Criação</th>
						<th scope="col" style="text-align: center">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($cidades as $cidade){
					?>
						<tr >
							<td><h4><?= $cidade->name?></h4></td>
							<td><h4><?= $cidade->uf?></h4></td>
							<td><h4><?= date('d/m/Y', strtotime($cidade->created_at))?></h4></td>
							<td style="text-align: center">
								<a href="editar.php?id=<?= $cidade->id?>">
									<button class="btn btn-primary">
										Editar
									</button>
								</a>
								<a href="excluir.php?id=<?= $cidade->id?>">
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
		}else{
			?>
			<h2 style="margin-top: 10px">Não há Cidades Cadastradas</h2>
		<?php
		}
		?>
	</section>
</main>