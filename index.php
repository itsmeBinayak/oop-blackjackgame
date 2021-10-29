<?php 
declare(strict_types=1);

require './code/Card.php';
require './code/Deck.php';
require './code/Suit.php';
require 'Blackjack.php';
require 'Player.php';
require 'Dealer.php';

session_start();
if(isset($_POST['restart'])){
    unset($blackjack);
    unset($_SESSION['blackjack']);
}

if (!isset($_SESSION['blackjack'])) {
    $blackjack=new Blackjack();
    $_SESSION['blackjack'] =  $blackjack ;
}else{
    $blackjack=$_SESSION['blackjack'];
}

if(isset($_POST['hit'])){
    $blackjack->getPlayer()->hit($blackjack->getDeck());  
    $_SESSION['blackjack']=$blackjack; 
}

if(isset($_POST['surrender'])){
    $blackjack->getPlayer()->surrender(); 
 }

 if(isset($_POST['stand'])){
    $blackjack->getDealer()->stand($blackjack->getDeck());
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack</title>
</head>

<body>

<h3>DEALER</h3> 

<?php
foreach($blackjack->getDealer()->getCards() AS $i=> $card){
?>
<?php
echo '<span class="card1">'. $card->getUnicodeCharacter(true).'</span>';
}
?>
<span class="score">Points:<?php echo $blackjack->getDealer()->getScore();?></span>



<?php
if($blackjack->getPlayer()->hasLost())
{
    echo "Dealer won the Game!!!";
}
?>
<!-- player -->

<h3>PLAYER</h3> 

<?php
foreach($blackjack->getPlayer()->getCards() AS $i => $card){
?>
<?php
echo '<span class="card1">'. $card->getUnicodeCharacter(true).'</span>';
}
?>
<span class="score">Points:<?php echo $blackjack->getPlayer()->getScore(); ?></span>


    <form method="post">
        <button type="submit" class="btn btn-primary" name="hit">Hit</button>
        <button type="submit" class="btn btn-primary" name="stand">Stand</button>
        <button type="submit" class="btn btn-primary" name="surrender">Surrender</button>
        <button type="submit" class="btn btn-primary" name="restart">Restart</button>

    </form>

</body>

</html>
<style>
    body{
        text-align: center;
    }
    .card1{
        font-size: 200px;
        
    }
    .score{
        font-size:30px;
        font-weight:bold;
        padding-left: 20px;
    }
    h3{
        font-size:30px;
        color:red;
    }
</style>
