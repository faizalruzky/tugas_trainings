<?php 
class Player{
	private $name, $blood, $manna;
	function __construct($name){
		$this->$name = name;
		$this->$blood = 100;
		$this->$manna = 40;
 	}
 	public function attack(){
 		$this->manna = $this->manna-=10;
 	}
 	public function defend(){
 		$this->blood = $this->blood-=20;
 	}
	
	public function get_manna(){
		return $this->manna; 
	}	
	public function get_blood(){
		return $this->blood;
	}
}
	class Menu {
		private $player = [];
		function main(){
			echo "input new or start: ";
			fscanf(STDIN, "%s/n",$input);
			if($input=="new"){
				$this->add_player();
			} else if ($input == "start"){

			}else {
				echo "wrong input";
				$this->main();
			}
		}
	}

	function add_player($input){
		echo "Player Name: ";
		fscanf(STDIN, "%s/n",$input);
		if($input=="new"){
				$this->add_player();
		}
		// $this->players[$input] = new Player [$input];
		$this->main();
	}


$game = new Menu;
$game->main();
/*echo"# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
# Description: #
# 1 type "new" to create a character #
# 2. type "start" to begin the fight #
# ------------------------------------------------- ---- #
# Current Player: #
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #"*/
 ?>
