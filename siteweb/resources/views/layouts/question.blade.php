<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <link rel="stylesheet"  href="{{ asset('css.css')}}">
</head>
<body>
    {{-- <ul class="accordion">
    <li>
        <input type="radio" name="accordion" id="first" checked>
        <label for="first"> Où donner mon sang ?
        </label>
        <div class="content">
            <p>
                Pour donner votre sang, vous avez l'embarras du choix  le site  propose  plus de 55 centre de transfusion sanguine au Maroc. Rendez-vous sur notre carte interactive Où donner pour plus d’informations.

            </p>
        </div>
    </li>
    <li>
        <input type="radio" name="accordion" id="second">
        <label for="second"> Est-ce que donner son sang fait mal ?

        </label>
        <div class="content">
            <p>
                Personne n’aime les piqûres ! Mais rassurez-vous, le prélèvement est réalisé par un personnel médical qualifié, expérimenté et spécialement formé pour veiller à votre bien-être.

            </p>
        </div>
    </li>
    <li>

        <input type="radio" name="accordion" id="third">
        <label for="third"> Le don du sang va-t-il me fatigué ?
        </label>
        <div class="content">
            <p>
                Les personnes en bonne santé, le don n’entraine la plupart de temps aucun effort secondaire. L'organisme reconstitue rapidement le volume sanguin prélevé, Dans les heures qui suivent le don, il est néanmoins conseillé de ne pas pratiquer d’activités fatigantes ou à risques. Et pour mieux récupérer, hydratez-vous (eau ou jus) avant et après le don.

            </p>
        </div>
    </li>

    <li>
        <input type="radio" name="accordion" id="fourth">
        <label for="fourth"> Quelle quantité donne-t-on ?

        </label>
        <div class="content">
            <p>
                400 à 500 ml soit 7% du sang de l’organisme.
            </p>
        </div>
    </li>
    <li>
        <input type="radio" name="accordion" id="fifth">
        <label for="fifth"> Quels documents dois-je apporter pour effectuer mon don de sang ?

        </label>
        <div class="content">
            <p>
                Pour chaque don, vous devez présenter une pièce d'identité (carte nationale d’identité, passeport ou titre de séjour). Votre carnet de santé, il peut rester au chaud à la maison !


            </p>
        </div>
    </li>
    <li>
        <input type="radio" name="accordion" id="sixth">
        <label for="sixth"> Quel est le prix du sang ?
        </label>
        <div class="content">
            <p>
                Le sang est Gratuit. Le prix facturé permet de couvrir une partie des frais :<br>
                ⦁	De la poche triple, vide, stérile à usage unique <br> 
                ⦁	Des analyses <br>
                ⦁	Des imprimés techniques<br>
                ⦁	De la carte de groupage <br>
                ⦁	Des frais de séparation et de stockage


            </p>
        </div>
    </li>
</ul>
 --}}






<div class="row">
    <div class="col col-sm-12 col-12 col-lg-6">
      <div class="accordion accordion-sm" id="accordionExampleSmall">
        <div class="accordion-item ">
          <h2 class="accordion-header" id="headingOneSmall">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneSmall" aria-expanded="true" aria-controls="collapseOneSmall">
                Où donner mon sang :
            </button>
          </h2>
          <div id="collapseOneSmall" class="accordion-collapse collapse show" aria-labelledby="headingOneSmall" data-bs-parent="#accordionExampleSmall">
            <div class="accordion-body">
                Pour donner votre sang, vous avez l'embarras du choix  le site  propose  plus de 55 centre de transfusion sanguine au Maroc. Rendez-vous sur notre carte interactive Où donner pour plus d’informations.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwoSmall">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoSmall" aria-expanded="false" aria-controls="collapseTwoSmall">
                Est-ce que donner son sang fait mal ?
            </button>
          </h2>
          <div id="collapseTwoSmall" class="accordion-collapse collapse" aria-labelledby="headingTwoSmall" data-bs-parent="#accordionExampleSmall">
            <div class="accordion-body">
           
Personne n’aime les piqûres ! Mais rassurez-vous, le prélèvement est réalisé par un personnel médical qualifié, expérimenté et spécialement formé pour veiller à votre bien-être.

            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThreeSmall">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeSmall" aria-expanded="false" aria-controls="collapseThreeSmall">
                Le don du sang va-t-il me fatigué ?
            </button>
          </h2>
          <div id="collapseThreeSmall" class="accordion-collapse collapse" aria-labelledby="headingThreeSmall" data-bs-parent="#accordionExampleSmall">
            <div class="accordion-body">
                Les personnes en bonne santé, le don n’entraine la plupart de temps aucun effort secondaire. L'organisme reconstitue rapidement le volume sanguin prélevé, Dans les heures qui suivent le don, il est néanmoins conseillé de ne pas pratiquer d’activités fatigantes ou à risques. Et pour mieux récupérer, hydratez-vous (eau ou jus) avant et après le don.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-sm-12 col-12 col-lg-6">
      <div class="accordion accordion-lg" id="accordionExampleLarge">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOneLarge">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneLarge" aria-expanded="true" aria-controls="collapseOneLarge">
                Quelle quantité donne-t-on ?
            </button>
          </h2>
          <div id="collapseOneLarge" class="accordion-collapse collapse show" aria-labelledby="headingOneLarge" data-bs-parent="#accordionExampleLarge">
            <div class="accordion-body">
                400 à 500 ml soit 7% du sang de l’organisme.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwoLarge">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoLarge" aria-expanded="false" aria-controls="collapseTwoLarge">
                Quels documents dois-je apporter pour effectuer mon don de sang ?
            </button>
          </h2>
          <div id="collapseTwoLarge" class="accordion-collapse collapse" aria-labelledby="headingTwoLarge" data-bs-parent="#accordionExampleLarge">
            <div class="accordion-body">
                Pour chaque don, vous devez présenter une pièce d'identité (carte nationale d’identité, passeport ou titre de séjour). Votre carnet de santé, il peut rester au chaud à la maison !
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThreeLarge">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeLarge" aria-expanded="false" aria-controls="collapseThreeLarge">
                Quel est le prix du sang ?
            </button>
          </h2>
          <div id="collapseThreeLarge" class="accordion-collapse collapse" aria-labelledby="headingThreeLarge" data-bs-parent="#accordionExampleLarge">
            <div class="accordion-body">
                <p>
                    Le sang est Gratuit. Le prix facturé permet de couvrir une partie des frais :<br>
                    ⦁	De la poche triple, vide, stérile à usage unique <br> 
                    ⦁	Des analyses <br>
                    ⦁	Des imprimés techniques<br>
                    ⦁	De la carte de groupage <br>
                    ⦁	Des frais de séparation et de stockage
                </p>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>