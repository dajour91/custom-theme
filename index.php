<?php get_header(); ?>

    <header>



<div class="header_left">
  <h1>Dajour profilo</h1>
</div>

<div class="header_right">
  <img src="./assets/logo 2.jpg" alt="">
</div>

    </header>
    <nav>
      <ul class="navbar">
        <li><a href="#">home</a></li>
        <li><a href="./career.html">profilo</a></li>
        <li><a href="./about.html">about</a></li>
        <li><a href="#">contact</a></li>
      </ul>
    </nav>
    <main>
      <section class="">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active d-flex justify-content-center">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/dajourdrawn.jpeg" class="d-block w-75  p-3" alt="...">
    </div>
    <div class="carousel-item d-flex justify-content-center">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/dajourposeatconerstore.jpeg" class="d-block w-75 p-3" alt="...">
    </div>
    <div class="carousel-item d-flex justify-content-center">
      <img src="..." class="d-block w-75 p-3" alt="...">
    </div>
  </div>
 <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

      </section>
      <section class="section_row">
        <div class="example_container">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/scarydavi.jpeg" alt="">
          <div class="example_text">
            <p>This phot contain three key elements. the orginal photo. custom background. And also contains a custom font for the lettering that match the over all theme of the project.</p>
          </div>
        </div>
        <div class="example_container">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/shyinocean.jpeg" alt="">
          <div class="example_text">
            <p>This photo was a background and a photo of the subject put togther through an custom photo editting process.</p>
          </div>
        </div>
        <div class="example_container">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/cardi.jpg" alt="">
          <div class="example_text">
            <p>this is an photo edit done with a picture a celebrity to show an example a effect we offer as a custom desighn.</p>
          </div>
        </div>
      </section>

        </section>
        <section class="section_row">
          <div class="example_container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/nene kiss.jpg" alt="">
            <div class="example_text">
              <p>This phot contain three key elements. the orginal photo. custom background. And also contains a custom font for the lettering that match the over all theme of the project.</p>
            </div>
          </div>
          <div class="example_container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/dashaphoneix.jpeg" alt="">
            <div class="example_text">
              <p>This photo was a background and a photo of the subject put togther through an custom photo editting process.</p>
            </div>
          </div>
          <div class="example_container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/wandaanddaughter.jpeg" alt="">
            <div class="example_text">
              <p>this was created by combing a photo witho to pictures one being a heart the other bing a background and bringing them togther into a custom photo.</p>
            </div>




      </section>
    </main>









    <div class="container">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
          <h2>Checkout form</h2>

        </div>

        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Your cart</span>
              <span class="badge bg-primary rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Product name</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$12</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Second product</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$8</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Third item</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Promo code</h6>
                  <small>EXAMPLECODE</small>
                </div>
                <span class="text-success">−$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong>$20</strong>
              </li>
            </ul>

            <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </form>
          </div>
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>

                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                  <div class="invalid-feedback">
                    Valid last name is required.
                  </div>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                  <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>

                <div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <select class="form-select" id="country" required>
                    <option value="">Choose...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select class="form-select" id="state" required>
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
              </div>

              <hr class="my-4">

              <h4 class="mb-3">Payment</h4>

              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="paypal">PayPal</label>
                </div>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
            </form>
          </div>
        </div>
      </main>


  </div>
  <div class="youtubevideo">
<iframe width="560" height="315" src="https://www.youtube.com/embed/cPCtU1adFh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>
  <div class="soundcloud">
    <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1069925284&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/dajour-phillips-332258422" title="Younggodoflyrics" target="_blank" style="color: #cccccc; text-decoration: none;">Younggodoflyrics</a> · <a href="https://soundcloud.com/dajour-phillips-332258422/sets/mending-a-broken-heart" title="mending a broken heart" target="_blank" style="color: #cccccc; text-decoration: none;">mending a broken heart</a></div>

  </div>



<?php

// checks if there are any posts that match the query
if (have_posts()) :

  // If there are posts matching the query then start the loop
  while ( have_posts() ) : the_post();

    // the code between the while loop will be repeated for each post
    ?>

    <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

    <p class="date-author">Posted: <?php the_date(); ?> by <?php the_author(); ?></p>

    <?php the_content(); ?>

    <p class="postmetadata">Filed in: <?php the_category(); ?> | Tagged: <?php the_tags(); ?> | <a href="<?php comments_link(); ?>" title="Leave a comment">Comments</a></p>

    <?php

    // Stop the loop when all posts are displayed
 endwhile;

// If no posts were found
else :
?>
<p>Sorry no posts matched your criteria.</p>
<?php
endif;
?>
<?php get_footer(); ?>
