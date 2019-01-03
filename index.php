<link rel="stylesheet" href="main.css" />

<?php
$suits = ['H','S','C','D'];
$cards = ['A','2','3','4','5','6','7','8','9','10','J','Q','K'];
$deck = [];

foreach($suits as $suit)
{
	for($i=0;$i<count($cards);$i++)
	{
		switch($suit)
		{
			case "H": $suit = "&hearts;"; break;
			case "D": $suit = "&diams;"; break;
			case "S": $suit = "&spades;"; break;
			case "C": $suit = "&clubs;"; break;
		}

		$card = $cards[$i].",".$suit;
		shuffle($deck);
		array_push($deck, $card);
	}
}

//take top 3
$player_cards = [$deck[0],$deck[1], $deck[2]];

//remove top 3
$deck = array_slice($deck, 3);

/*
//remove one from hand
array_pop($player_cards);

//take one from deck
array_push($player_cards, $deck[0]);

//remove the card from the top of the deck
$deck = array_slice($deck, 1);
*/

//show player hand
foreach($player_cards as $cards)
{
	$card = explode(",", $cards);

	echo '<div class="card">
		<div class="top">
			<div class="suit">'.$card[1].'</div>
			<div class="number">'.$card[0].'</div>
		</div>

		<div class="bottom">
			<div class="suit">'.$card[1].'</div>
			<div class="suit">'.$card[0].'</div>
		</div>
	</div>';
}

//&diams;
//&hearts;
//&spades;
//&clubs;

?>