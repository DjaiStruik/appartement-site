<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Omgeving</title>
  <link rel="stylesheet" href="style/stylesheet.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <?php include('header.php'); ?>

  <section class="text-center container-fluid">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Omgeving</h1>
        <p class="lead text-muted">Estepona is gelegen in het zuiden van Andalusia, 50 minuten rijden vanaf Malaga airport. Je kan het Estepona bereiken per openbaar vervoer, taxi of (huur)auto.
          Vanuit Esptepona kan je verschillende dagtochten maken o.a.:<br />
        </p>
        <ul class="lijst">
          <li> Costa del Sol, zowel links als rechts is er een uitgestrekt wandel/fietspad.</li>
          <li>Natuurgebied Sierra Bermeja, achter het appartement bevindt zich een uitgestrekt natuurgebied waar je kunt wandelen.</li>
          <li>Caminito del Rey, het koningspad welke je na 1,5 uur rijden bereikt.</li>
          <li>Ronda, het prachtige dorp aan de klif, 1 uur rijden.</li>
          <li>Gibraltar, het stukje England in Spanje, 40 minuten rijden.</li>
          <li>Cadiz, de oudste Romaanse stat, ongeveer 2uur rijden</li>
          <li>Sevilla, een prachtige stad met het Nazarin Paleis, ongeveer 1,5 uur rijden</li>
        </ul>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <img class="card-img-top image-popup" src="img/Costa-del-Sol.jpg" alt="" id="image-popup">
              <div class="overlay">
                <div class="text">Costa del Sol</div>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <img class="card-img-top image-popup" src="img/Sierra-Bermeja.jpeg" alt="" id="image-popup">
              <div class="overlay">
                <div class="text">Sierra Bermeja</div>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text">.</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <img class="card-img-top image-popup" src="img/Caminto-del-rey.jpg" alt="" id="image-popup">
              <div class="overlay">
                <div class="text" id="zoom-in-text-1">Caminito del Rey</div>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <img class="card-img-top image-popup" src="img/Ronda.jpg" alt="" id="image-popup">
              <div class="overlay">
                <div class="text">Ronda</div>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <img class="card-img-top image-popup" src="img/gibraltar.jpg" alt="" id="image-popup">
              <div class="overlay">
                <div class="text">Gibraltar</div>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <img class="card-img-top image-popup" src="img/Cadiz.jpg" alt="" id="image-popup">
              <div class="overlay">
                <div class="text">Cadiz</div>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <img class="card-img-top image-popup" src="img/Sevilla.jpg" alt="" id="image-popup">
              <div class="overlay">
                <div class="text">Sevilla</div>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <!--  <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <img class="card-img-top image-popup" src="img/" alt="" id="image-popup">
              <div class="overlay">
                <div class="text">Zoom in</div>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="image-container">
              <img class="card-img-top image-popup" src="img/" alt="" id="image-popup">
              <div class="overlay">
                <div class="text">Zoom in</div>
              </div>
            </div>
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>-->


      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      const zoomInTexts = $('.text');
      const popupContainer = $('<div id="popup-container"></div>');
      const popupImage = $('<img id="popup-image">');
      popupContainer.append(popupImage);
      $('body').append(popupContainer);

      function openPopup() {
        const clickedZoomInText = $(this);
        const clickedImage = clickedZoomInText.parent().parent().find('.image-popup');
        popupImage.attr('src', clickedImage.attr('src'));
        popupContainer.css('display', 'flex');

        $(document).off('click');
        setTimeout(function() {
          $(document).on('click', function(event) {
            if (!$(event.target).closest('#popup-container').length) {
              popupContainer.css('display', 'none');
            }
          });
          popupContainer.on('click', function(event) {
            event.stopPropagation();
            $(document).off('click');
          });
        }, 100);
      }


      zoomInTexts.on('click', openPopup);

      popupContainer.on('click', function(event) {
        event.stopPropagation();
      });

      $(document).on('click', function() {
        popupContainer.css('display', 'none');
      });

      $(document).on('click', function(event) {
        if (!$(event.target).closest('#popup-container').length) {
          popupContainer.css('display', 'none');
        }
      });
    });
  </script>
</body>

</html>