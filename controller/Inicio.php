<?php
require_once('view/conteudo.php');

class Inicio
{
	public $conteudo;
	public function __construct() {
	
		
		
		$conteudo='
		  <form class="form-horizontal" action="?pag=restricoes" method="GET">
			<input type="hidden" name="pag" value="restricoes" />
			<fieldset>
		
			  <!-- Form Name -->
				<legend>Método Simplex - Insira os valores para calular o simplex.</legend>
		
			  <!-- Entrada de Texto -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="qtdevariaveis">Qual o número de variáveis?</label>  
				  <div class="col-md-4">
					<input id="qtdevariaveis" name="qtdevariaveis" type="number" step="1" placeholder="Digite o valor da variável" class="form-control input-md" required="">
				  </div>
				</div>
		
			  <!-- Entrada de Texto -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="qtderestricoes">E de restrições?</label>  
				  <div class="col-md-4">
					<input id="qtderestricoes" name="qtderestricoes" type="number" step="1" placeholder="Digite o valor de restrições" class="form-control input-md" required="">
				  </div>
				</div>
		
			  <!-- Seleção do Modo Max ou Min -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="objetivo">Qual é o objetivo da função?</label>
				  <div class="col-md-4">
					<select id="objetivo" name="objetivo" class="form-control">
					  <option value="max">Maximizar</option>
					  <option value="min">Minimizar</option>
					</select>
				  </div>
				</div>
		
			  <!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="submit"></label>
				  <div class="col-md-4">
					<button name="submit" class="btn btn-primary btn-lg btn-block">Prosseguir</button>
				  </div>
				</div>
			</fieldset>
		  </form>
		';
		
		$this->SetConteudo($conteudo);
	}
	public function SetConteudo($c)
	{
		$this->conteudo = $c;
	}
	public function GetConteudo()
	{
		return $this->conteudo ;
	}
	
}