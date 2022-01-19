<main>
	<h2 class="subtitulo"><?= TITLE?></h2>

	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-6">
				<form method="post">
					<div class="form-group">
						<label>Nome da Cidade</label>
						<input type="text" required class="form-control" name="name" placeholder="Preencha com o nome da cidade" <?= $cidade->name ? 'value="'.$cidade->name.'"' : ''?>>

					</div>
					<div class="form-group text-center ">
						<label>Sigla (UF)</label>
						<?php
							$estados = array(
								"AC" => "Acre",
								"AL" => "Alagoas",

								"AP" => "Amapá",
								"AM" => "Amazonas",
								"BA" => "Bahia",
								"CE" => "Ceará",
								"DF" => "Distrito Federal",
								"ES" => "Espírito Santo",
								"GO" => "Goiás",
								"MA" => "Maranhão",
								"MT" => "Mato Grosso",
								"MS" => "Mato Grosso do Sul",
								"MG" => "Minas Gerais",
								"PA" => "Pará",
								"PR" => "Paraná",
								"PE" => "Pernambuco",
								"PI" => "Piauí",
								"RJ" => "Rio de Janeiro",
								"RS" => "Rio Grande do Sul",
								"RN" => "Rio Grande do Norte",
								"RO" => "Rondônia",
								"RR" => "Roraima",
								"SC" => "Santa Catarina",
								"SP" => "São Paulo",
								"SE" => "Sergipe",
								"TO" => "Tocantins",
							)
						?>
						<select class="form-select select-estados" name="uf">
							<?php
								foreach ($estados as $s => $e){
									?>
									<option class="option" value="<?=$s?>" <?= ($cidade->uf == $s) ? "selected" : ''?>>
										<?=$e?>
									</option>
							<?php
								}
							?>
						</select>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary"><?= TITLE_BUTTON?></button>
					</div>
				</form>
				<div class="text-center botao-voltar">
					<a href="index.php" class="button-back">
						<button class="btn btn-primary">
							Voltar
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</main>