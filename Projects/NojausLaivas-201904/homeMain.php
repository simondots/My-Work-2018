          <!-- home body -->

          <section class="home-nojauslaivas">
            <div class="container">
            <h1 class="title">Welcome♥
            <span>DON'T BE SHY,LOOK AROUND</span>
            </h1>
            <a href="" class="button button-accent">Our Heaven</a>
            </div>
          </section>

          <div class="container">
          <section class="home-about">
            <div class="home-about-textbox parallax--box">
            <h1>Who we are</h1>
            <p><strong>Pas mus</strong> Voluptas eaque ratione illum consequatur non eligendi labore, inventore nulla, reiciendis totam, quae aliquam deserunt. Ipsum dicta officia architecto, neque accusantium sapiente.</p>
            <p>"Nojaus Laivas" - Geriausia vieta Jūsų poilsiui, nes čia: Natūrali gamta. Maksimalus komfortas ir svetingi šeimininkai! Poilsio centras "Nojaus Laivas" laukia Jūsų visus metus!</p>
            </div>

          </section>
          </div>

          <section class="portfolio">
            <h2>Choose your Path</h2>
            <figure class="port-item">
              <img src="img/nj20.jpeg" alt="portfolio item">
              <figcaption class="port-desc">
                <p>Survivor Villa</p>
                <?php
                    require_once('./villa_functions.php');
                 ?>

                <p>
                    <strong>Villa Price from</strong> 

                    <?php
                        $villa1 = getPrice(1); // grizo array
                        echo $villa1['price'];
                     ?>
                </p>
                <a href="" class="button button-accent button-small">DETAILS</a>
              </figcaption>
            </figure>
            <!-- portfolio item 01  -->
            <figure class="port-item">
              <img src="img/nj24.jpeg" alt="portfolio item">
              <figcaption class="port-desc">
                <p>Paradise Villa</p>
                <a href="" class="button button-accent button-small">DETAILS</a>
              </figcaption>
            </figure>
            <!-- portfolio item 02  -->
            <figure class="port-item">
              <img src="img/nj30.jpg" alt="portfolio item">
              <figcaption class="port-desc">
                <p>Me,Myself & I Villa</p>
                <a href="" class="button button-accent button-small">DETAILS</a>
              </figcaption>
            </figure>
            <!-- portfolio item 03  -->
            <figure class="port-item">
              <img src="img/nj32.jpeg" alt="portfolio item">
              <figcaption class="port-desc">
                <p>Colleagues Villa</p>
                <a href="" class="button button-accent button-small">DETAILS</a>
              </figcaption>
            </figure>
            <figure class="port-item">
              <img src="img/nj36.jpeg" alt="portfolio item">
              <figcaption class="port-desc">
                <p>Family Villa</p>
                <a href="" class="button button-accent button-small">DETAILS</a>
              </figcaption>
            </figure>
            <!-- portfolio item 05  -->
            <figure class="port-item">
              <img src="img/nj40.jpeg" alt="portfolio item">
              <figcaption class="port-desc">
                <p>F.R.I.E.N.D.S Villa</p>
                <a href="" class="button button-accent button-small">DETAILS</a>
              </figcaption>
            </figure>
            <!-- portfolio item 06  -->
          </section>
