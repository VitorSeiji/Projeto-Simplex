<?php  

// Aqui nós configuramos os SET e GET. 
// Fazemos a chamada para o Bootstrap

class conteudo
{
	public $title;
	public $content;
	public $projectName;
	public $table;
	public function __construct($title,$projectName) {
		$this->SetTitle($title);
		$this->SetProjectName($projectName);
	}
	
	public function SetTitle($t)
	{
		$this->title = $t;
	}

	public function GetTitle()
	{
		return $this->title;
	}

	public function SetContent($c)
	{
		$this->content = $c;
	}

	public function GetContent()
	{
		return $this->content;
	}

	public function SetProjectName($p)
	{
		$this->projectName = $p;
	}

    public function GetProjectName()
    {
		return $this->projectName;
	}

	public function ShowTemplate()
	{
	  ?>
			<!DOCTYPE html>
			<html lang="pt-br">
				<head>
			    	<meta charset="utf-8">
				    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			    	<meta name="viewport" content="width=device-width, initial-scale=1">
			 	   	<title><?=$this->GetTitle()?></title>
			    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
					<style>
						.padding5{
							padding: 10px;
						}
					</style>
				</head>
                

			  	<body style="width:100%;">
			  		<!--menu-->
                    	
						 
					<div class="container">
						<h1><?=$this->GetProjectName()?></h1>
                    </div>    
				    	<br>
					    <br>
					    <br>
				    	<br>
					    <br>
					<!--menu-->
					
					<div class="container">
			    		<div class="row">
			    			<div class="center">
			   					<?=$this->GetContent()?>
			  				</div>
			    		</div><!--row-->
					</div><!--container theme-showcase-->
                    <?php
					if($_REQUEST['pag']=='resultado'){
					?>
                    <?php
					}
					?>
				
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>	
				</body>
			</html>
	  	<?php
	}
}
?>