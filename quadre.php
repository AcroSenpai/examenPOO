<?php 


	class Quadre{
		protected $color;
		protected $text;

		function __construct($color,$text=null){
			$this->color=$color;
			$this->text=$text;

		}

		function show(){

			if($this->color =="white")
			{
				echo '<td style = "padding-left:2px;text-align:center; background-color:'.$this->color.'">
				<div style="height: 60px; width:60px; overflow:hidden; display: flex; justify-content: center;align-content: center; flex-direction: column; ">'.$this->text.'</div>
				</td>';
			}
			else
			{
				echo '<td style = "padding-left:2px;color:white;text-align:center; background-color:'.$this->color.'">
				<div style="height: 60px; width:60px; overflow:hidden; display: flex; justify-content: center;align-content: center; flex-direction: column; ">'.$this->text.'</div>
				</td>';
			}
		}
	}