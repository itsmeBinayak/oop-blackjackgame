# oop-blackjackgame
Title: OOP: Blackjack

Learning objectives : OOP(object oriented programming)

Blackjack Rules
-Cards are between 1-11 points.
    -Faces are worth 10
    -Ace is always worth 11
-Getting more than 21 points, means that you lose.
-To win, you need to have more points than the dealer, but not more than 21.
-The dealer is obligated to keep taking cards until they have at least 15 points.
-We are not playing with blackjack rules on the first turn (having 21 on first turn) - we leave this up to you as a nice to have.

TO DO LIST

- create the base class : player.php

- add 2 private properties : cards(array) ,lost(bool,default = false) 

-add empty public methods : hit, surrender, getScore, hasLost

----------------------------------------------------
- create the base class : blackjack.php

- add 3 private properties : player(player), dealer(player for now), deck(deck)

-add public methods : getPlayer(returns the player object) , getDealer(return the dealer object), getDeck(returns the deck object)

in the constructor =
    -Instantiate the Player class twice, insert it into the player property and a dealer property.

    -Create a new deck object (code has already been written for you!).

    -Shuffle the cards with shuffle method on deck.

player class constructor = 
    - Make it expect the Deck object as a parameter.

    - Pass this Deck from the Blackjack constructor.

    -Now draw 2 cards for the player. You have to use an existing method for this from the Deck class.

player class empty methods = 
    - getScore loops over all the cards and return the total value of that player.

    - hasLost will return the bool of the lost property.

    - hit should add a card to the player. If this brings him above 21, set lost property to true. To count his score use the method getScore you wrote earlier. This method should expect the $deck variable as an argument from outside, to draw the card.

        - (optional) For bonus points make the number 21 a class constant: this is a magical value we want to avoid.

    - surrender should make you surrender the game. (Dealer wins.) This sets the property lost in the player instance to true.

    - stand does not have a method in the player class but will instead call hit on the dealer instance. (you have to do nothing here)

    ------------------------------------------------

    - create index.php file

    note : Require all the files with the classes you already created. Ideally you want a seperate file for each class.

    -Start the PHP session

    - If the session does not have a Blackjack variable yet:
        -Create a new Blackjack object.
        -Put the Blackjack object in the session

    -Use buttons or links to send to the index.php page what the player's action is. (i.e. hit/stand/surrender)