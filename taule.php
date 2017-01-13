<?php 

	require 'quadre.php';

	class Taule{
		private $nRows;
		private $nCols;
		private $peces=array();
		private $tipus;
		private $figuras=array();

		function __construct($nRows=null, $nCols=null,$tipus){
			$this->tipus = $tipus;
			$this->nRows = $nRows;
			$this->nCols = $nCols;
			
			
			switch ($this->tipus) {
				case 'escac': 
					$this->escac($nRows, $nCols,$tipus);
					

					break;
				
				case 'aleat': $this->aleat($nRows, $nCols,$tipus);
					break;
			}

		}

		function escac($nRows=null, $nCols=null,$tipus){
			$nRows = 8;
			$nCols= 8;
			$this->nRows = $nRows;
			$this->nCols = $nCols;
			$v = 0;
			$this->p_figuras();
			
			for($i=0; $i<$nRows;$i++)
			{	
				if($i == 0 || $i == 7){
					for($j=0; $j<$nCols;$j++)
					{
						if($v % 2 == 0)
						{
						$this->peces[$i][$j]=new Quadre('white',$this->figuras[$j]);
						}
						else
						{
						$this->peces[$i][$j]=new Quadre('black',$this->figuras[$j]);
						}
						$v++;
					}
				}
				else
				{
					if($i == 1 || $i == 6){
						for($j=0; $j<$nCols;$j++)
						{
							if($v % 2 == 0)
							{
							$this->peces[$i][$j]=new Quadre('white','peon');
							}
							else
							{
							$this->peces[$i][$j]=new Quadre('black','peon');
							}
							$v++;
						}
					}
					else
					{
						for($j=0; $j<$nCols;$j++)
						{
							if($v % 2 == 0)
							{
							$this->peces[$i][$j]=new Quadre('white');
							}
							else
							{
							$this->peces[$i][$j]=new Quadre('black');
							}
							$v++;
						}
					}
				}
				$v++;
			}

		}

		function p_figuras(){

			$this->figuras= array('torre','caballo','alfil','rey','reina', 'alfil', 'caballo', 'torre');
			
			

		}

		function aleat($nRows=null, $nCols=null,$tipus){
			
			for($i=0; $i<$nRows;$i++)
			{
				for($j=0; $j<$nCols;$j++)
				{
					$r = rand(1,2);
					
					if($r == 1)
					{
						
					$this->peces[$i][$j]=new Quadre('white');
					}
					else
					{
						
					$this->peces[$i][$j]=new Quadre('black');
					}
					
				}
			}

		}

		
		function show(){
			echo '<body style="background-color: tomato;">';
			echo '<table border=1>';
			for($i=0; $i<$this->nRows;$i++)
			{
				echo '<tr>';
				for($j=0; $j<$this->nCols;$j++)
				{
					$this->peces[$i][$j]->show();
				}
				echo '</tr>';
			}
			echo "</body>";
		}

	}