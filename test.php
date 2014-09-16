<?php 

/*-------------- Configuration settings --------------*/

//If no number is submitted with the form, this will be the default number of words
$defaultWords = 4;

//Websites with the words lists
$animalsPage = "http://www.manythings.org/vocabulary/lists/a/words.php?f=animals_1";
$clothesPage = "http://www.manythings.org/vocabulary/lists/a/words.php?f=clothes_1";
$fruitsPage = "http://www.manythings.org/vocabulary/lists/a/words.php?f=fruit_1";
$toolsPage = "http://www.manythings.org/vocabulary/lists/a/words.php?f=tools_1";

/*-------------- Application **DO NOT EDIT BELOW THIS POINT UNLESS YOU KNOW WHAT YOU'RE DOING** --------------*/

//It's necesary to intialize the array in case Animals is unchecked
$allArray = [];

//Array of animals
if(isset($_POST['animalsCheck'])){
	$animalsPageContent = file_get_contents($animalsPage);
	preg_match_all('{<li>(.*?)</li>}i', $animalsPageContent,$animals);
	$allArray = array_merge($animals[1]);
}

//Array of clothes
if(isset($_POST['clothesCheck'])){
	$clothesPageContent = file_get_contents($clothesPage);
	preg_match_all('{<li>(.*?)</li>}i', $clothesPageContent,$clothes);
	$allArray = array_merge($clothes[1],$allArray);
}

//Array of fruits
if(isset($_POST['fruitsCheck'])){
	$fruitsPageContent = file_get_contents($fruitsPage);
	preg_match_all('{<li>(.*?)</li>}i', $fruitsPageContent,$fruits);
	$allArray = array_merge($fruits[1],$allArray);
}

//Array of tools
if(isset($_POST['toolsCheck'])){
	$toolsPageContent = file_get_contents($toolsPage);
	preg_match_all('{<li>(.*?)</li>}i', $toolsPageContent,$tools);
	$allArray = array_merge($tools[1],$allArray);
}


//The amount of words to display
if(isset($_POST['numberOfWords'])){
  $numberOfWords = $_POST['numberOfWords'];
}else{
  $numberOfWords = $defaultWords;
}

for ($i = 0; $i < $numberOfWords; $i++) {
	$answer = $answer." ".$allArray[array_rand($allArray)];
}

?>

<!-- //State to be evaluated when form is loaded. Hidden input provides a variable value of "no" to check for state when unchecked. -->

<div><p><?php echo $answer; ?></p></div>

<form name="form" action="test.php" method="post">
	<div>Number of words to display: </div> 
	<select name="numberOfWords">
  		<option value="1" <?php if($numberOfWords == 1){ echo "selected"; } ?> >1</option>
  		<option value="2" <?php if($numberOfWords == 2){ echo "selected"; } ?> >2</option>
  		<option value="3" <?php if($numberOfWords == 3){ echo "selected"; } ?> >3</option>
  		<option value="4" <?php if($numberOfWords == 4){ echo "selected"; } ?> >4</option>
  		<option value="5" <?php if($numberOfWords == 5){ echo "selected"; } ?> >5</option>
  		<option value="6" <?php if($numberOfWords == 6){ echo "selected"; } ?> >6</option>
  		<option value="7" <?php if($numberOfWords == 7){ echo "selected"; } ?> >7</option>
  		<option value="8" <?php if($numberOfWords == 8){ echo "selected"; } ?> >8</option>
  		<option value="9" <?php if($numberOfWords == 9){ echo "selected"; } ?> >9</option>
	</select>
	
	<p>Select the items you will like to use for the words (words from all selected items will be displayed at random):</p>

   	<input type="hidden" name="animalsCheck" value="no"><input type="checkbox" name="animalsCheck" value="yes" <?php if(!isset($_POST['animalsCheck']) || $_POST['animalsCheck'] == "yes"){ echo "checked"; } ?> />Animals<br />
   	<input type="hidden" name="clothesCheck" value="no"><input type="checkbox" name="clothesCheck" value="yes" <?php if(!isset($_POST['clothesCheck']) || $_POST['clothesCheck'] == "yes"){ echo "checked"; } ?> />Clothes<br />
   	<input type="hidden" name="fruitsCheck" value="no"><input type="checkbox" name="fruitsCheck" value="yes" <?php if(!isset($_POST['fruitsCheck']) || $_POST['fruitsCheck'] == "yes"){ echo "checked"; } ?> />Fruits<br />
   	<input type="hidden" name="toolsCheck" value="no"><input type="checkbox" name="toolsCheck" value="yes" <?php if(!isset($_POST['toolsCheck']) || $_POST['toolsCheck'] == "yes"){ echo "checked"; } ?> />Tools<br />
   	<input type="submit" value="SUBMIT" />
</form>

<?php

