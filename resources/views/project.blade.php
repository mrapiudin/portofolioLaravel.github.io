@extends('parent')
@section('content')
<main id="empat.html">
        <h1>MEMORY</h1>
        <h3>GAMESS</h3>
        <div id="memory-game"></div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const cards = [
      '../img/1.jpg',
      '../img/1.jpg',
      '../img/2.jpg',
      '../img/2.jpg',
      '../img/3.jpg',
      '../img/3.jpg',
      '../img/4.jpg',
      '../img/4.jpg',
      '../img/5.jpg',
      '../img/5.jpg',
      '../img/6.jpg',
      '../img/6.jpg',
      '../img/7.jpg',
      '../img/7.jpg',
      '../img/8.jpg',
      '../img/8.jpg',
    ];
    let flippedCards = [];
    let matchedCards = [];

    const memoryGame = document.getElementById('memory-game');

    // Shuffle the cards
    cards.sort(() => Math.random() - 0.5);

    // Create card elements
    cards.forEach((card, index) => {
      const cardElement = document.createElement('div');
      cardElement.classList.add('card');
      cardElement.dataset.card = card;
      cardElement.dataset.index = index;

      const cardInner = document.createElement('div');
      cardInner.classList.add('card-inner');

      const cardFront = document.createElement('div');
      cardFront.classList.add('card-face', 'card-front');
      cardFront.textContent = ' ';

      const cardBack = document.createElement('div');
      cardBack.classList.add('card-face', 'card-back');
      cardBack.style.backgroundImage = `url('${card}')`;

      cardInner.appendChild(cardFront);
      cardInner.appendChild(cardBack);
      cardElement.appendChild(cardInner);

      cardElement.addEventListener('click', () => flipCard(cardElement));
      memoryGame.appendChild(cardElement);
    });

    function flipCard(card) {
      card.classList.toggle('flipped');
      flippedCards.push(card);

      if (flippedCards.length === 2) {
        setTimeout(checkMatch, 500);
      }
    }

    function checkMatch() {
      const [card1, card2] = flippedCards;

      if (card1.dataset.card === card2.dataset.card) {
        matchedCards.push(card1, card2);
        if (matchedCards.length === cards.length) {
          alert('Keren banget kamuu bebb.');
        }
      } else {
        card1.classList.remove('flipped');
        card2.classList.remove('flipped');
      }

      flippedCards = [];
    }
  });
</script>
    </main>
@endsection('content')