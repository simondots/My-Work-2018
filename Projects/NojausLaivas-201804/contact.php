<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Page</title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="css/contactMaster.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>
    <body>
      <header>
            <video autoplay loop muted class="video-background" plays-inline>
                <source src="../newbackupwithoutLIB/img/hero-bg.mp4" type="video/mp4">
            </video>
        <div class="contact-title">
                <h1>Contact us anytime!</h1>
                <h2>Response comes just in 15 minutes</h2>
        </div>
        <!-- <?php
            if ($_POST) {

            }
        ?> -->
          <div class="contact-form">
              <form id="form" action="contact-form-mail.php" method="post" >
                  <input type="text" name="name" class="form-control" value="" placeholder="Jūsų Vardas Pavardė" required>
                  <br />
                  <input type="email" name="email" class="form-control" value="" placeholder="Jūsų El.paštas" required>
                  <br />
                      <textarea name="message" class="form-control" value="" placeholder="Jūsų Žinutė" row="6" required>
                      </textarea> <br>
                      <input type="submit" class="form-control submit" value="Siūsti Užklausą">

              </form>
          </div>
</header>

        <!-- bootstrap4 -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <!-- !!! jQuery "slim" yra nepilna versija ir jQuery kai kurios komandos neveikia, reiktu isisdeti kita jQuery  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas visada zemiausias -->
        <script type="text/javascript" src="main.js"> </script>
    </body>
</html>
