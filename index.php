<?php
  $warning = true;
  $here = 'TV & Movies';
  include 'includes/header.php';
?>
    <div class="row breathe">
      <div id="tv-and-movies" class="col-xs-12">
        <h2 class="h1 page-title breathe">TV &amp; Movies</h2>
        <!-- <div class="breathe"> -->
          <p id="filter-label" class="sr-only">Filter:</p>
          <ul id="filters" class="list-inline filters" aria-labelledby="filter-label">
            <li>
              <div id="type" class="type-select dropdown ib">
                <button id="selected-type" class="btn dropdown-toggle" type="button" data-toggle="dropdown" data-display-pattern="{{selectLabel}}: {{selection}}" aria-expanded="false">
                  <span class="icon-label" data-null-text="Type">Type</span> 
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                </button>
                <ol class="dropdown-menu list-unstyled" role="listbox" tabindex="0" aria-labelledby="selected-type">
                  <li role="presentation">
                    <a id="type-any" role="option" aria-selected="true" href="#" data-display-pattern="{{selectLabel}}">Any</a>
                  </li>
                  <li role="presentation">
                    <a id="type-tv" data-filter-value="tv" role="option" aria-selected="false" href="#">TV Shows</a>
                  </li>
                  <li role="presentation">
                    <a id="type-movie" data-filter-value="movie" role="option" aria-selected="false" href="#">Movies</a>
                  </li>
                  <li role="presentation">
                    <a id="type-list" data-filter-value="list" role="option" aria-selected="false" href="#">Lists</a>
                  </li>
                </ol>
              </div>
            </li>
            <li>
              <div id="genre" class="genre-select dropdown ib">
                <button id="selected-genre" class="btn dropdown-toggle" type="button" data-toggle="dropdown" data-display-pattern="{{selectLabel}}: {{selection}}" aria-expanded="false">
                  <span class="icon-label" data-null-text="Genre">Genre</span> 
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                </button>
                <ol class="dropdown-menu list-unstyled" role="listbox" tabindex="0" aria-labelledby="selected-genre">
                  <li role="presentation">
                    <a id="genre-any" data-filter-value="*" role="option" aria-selected="true" href="#" data-display-pattern="{{selectLabel}}">Any</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-action" role="option" aria-selected="false" href="#">Action</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-animated" role="option" aria-selected="false" href="#">Animated</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-family" role="option" aria-selected="false" href="#">Family</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-comedy" role="option" aria-selected="false" href="#">Comedy</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-crime" role="option" aria-selected="false" href="#">Crime</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-documentary" role="option" aria-selected="false" href="#" aria-disabled="true">Documentary</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-drama" role="option" aria-selected="false" href="#">Drama</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-holidays" role="option" aria-selected="false" href="#">Holidays</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-horror" role="option" aria-selected="false" href="#" aria-disabled="true">Horror</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-music" role="option" aria-selected="false" href="#" aria-disabled="true">Music</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-mystery" role="option" aria-selected="false" href="#">Mystery</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-nature" role="option" aria-selected="false" href="#" aria-disabled="true">Nature</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-sci-fi" role="option" aria-selected="false" href="#">Sci-Fi</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-sports" role="option" aria-selected="false" href="#" aria-disabled="true">Sports</a>
                  </li>
                  <li role="presentation">
                    <a id="genre-western" role="option" aria-selected="false" href="#" aria-disabled="true">Western</a>
                  </li>
                </ol>
              </div>
              <!-- <a class="ib" data-action="clone" data-target="genre" href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <span class="icon-label">Add</span></a> -->
            </li>
            <li>
              <div id="price" class="price-select dropdown">
                <button id="selected-price" class="btn dropdown-toggle" type="button" data-toggle="dropdown" data-display-pattern="{{selectLabel}}: {{selection}}" aria-expanded="false">
                  <span class="icon-label" data-null-text="Price">Price</span> 
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                </button>
                <ol class="dropdown-menu list-unstyled" role="listbox" tabindex="0" aria-labelledby="selected-price">
                  <li role="presentation">
                    <a id="price-any" role="option" aria-selected="true" href="#" data-display-pattern="{{selectLabel}}">Any</a>
                  </li>
                  <li role="presentation">
                    <a id="price-free" role="option" aria-selected="false" href="#">Free</a>
                  </li>
                  <li role="presentation">
                    <a id="price-cheap" role="option" aria-selected="false" href="#">$5 or less</a>
                  </li>
                </ol>
              </div><!--/#price-->
            </li>
            <li>
              <div id="runtime" class="runtime-select dropdown">
                <button id="selected-runtime" class="btn dropdown-toggle" type="button" data-toggle="dropdown" data-display-pattern="{{selectLabel}}: {{selectionText}}" aria-expanded="false">
                  <span class="icon-label" data-null-text="Length">Length</span> 
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                </button>
                <ol class="dropdown-menu list-unstyled" role="listbox" tabindex="0" aria-labelledby="selected-runtime">
                  <li role="presentation">
                    <a id="runtime-any" role="option" aria-selected="true" href="#" data-display-pattern="{{selectLabel}}">Any</a>
                  </li>
                  <li role="presentation">
                    <a id="runtime-lte-15min" aria-label="Less than or equal to 15 minutes" role="option" aria-selected="false" href="#">≤ 15 min</a>
                  </li>
                  <li role="presentation">
                    <a id="runtime-30min" aria-label="Approximately 30 minutes" role="option" aria-selected="false" href="#">≈ 30 min</a>
                  </li>
                  <li role="presentation">
                    <a id="runtime-1hr" aria-label="Approximately 1 hour" role="option" aria-selected="false" href="#">≈ 1 hr</a>
                  </li>
                  <li role="presentation">
                    <a id="runtime-1.5hr" aria-label="Approximately 1 and a half hours" role="option" aria-selected="false" href="#">≈ 1.5 hrs</a>
                  </li>
                  <li role="presentation">
                    <a id="runtime-gte-2hr" aria-label="Greater than or equal to 2 hours" role="option" aria-selected="false" href="#">≥ 2 hrs</a>
                  </li>
                </ol>
              </div><!--/#runtime-->
            </li>
            <li>
              <div id="exclusivity" class="exclusivity-select dropdown">
                <button id="selected-exclusivity" class="btn dropdown-toggle" type="button" data-toggle="dropdown" data-display-pattern="{{selectLabel}}: {{selection}}" aria-expanded="false">
                  <span class="icon-label" data-null-text="Exclusivity">Exclusivity</span> 
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                </button>
                <ol class="dropdown-menu list-unstyled" role="listbox" tabindex="0" aria-labelledby="selected-exclusivity">
                  <li role="presentation">
                    <a id="exclusivity-any" role="option" aria-selected="true" href="#" data-display-pattern="{{selectLabel}}">Any</a>
                  </li>
                  <li role="presentation">
                    <a id="exclusivity-premium" role="option" aria-selected="false" href="#">Premium</a>
                  </li>
                </ol>
              </div><!--/#exclusivity-->
            </li>
            <li>
              <div id="sort-by" class="sort-by-select dropdown">
                <button id="selected-sort-by" class="btn dropdown-toggle" type="button" data-toggle="dropdown" data-display-pattern="{{selectLabel}}: {{selection}}" aria-expanded="false">
                  <span class="icon-label" data-null-text="Sort by">Sort by</span> 
                  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                </button>
                <ol class="dropdown-menu list-unstyled" role="listbox" tabindex="0" aria-labelledby="selected-sort-by">
                  <li role="presentation">
                    <a id="sort-by-default" role="option" aria-selected="true" href="#" data-display-pattern="{{selectLabel}}">Default</a>
                  </li>
                  <li role="presentation">
                    <a id="sort-by-popularity" role="option" aria-selected="false" href="#">Popularity</a>
                  </li>
                  <li role="presentation">
                    <a id="sort-by-title-a-z" role="option" aria-selected="false" href="#">Title A–Z</a>
                  </li>
                  <li role="presentation">
                    <a id="sort-by-title-z-a" role="option" aria-selected="false" href="#">Title Z–A</a>
                  </li>
                  <li role="presentation">
                    <a id="sort-by-newest" role="option" aria-selected="false" href="#" aria-disabled="true">Newest Release</a>
                  </li>
                  <li role="presentation">
                    <a id="sort-by-oldest" role="option" aria-selected="false" href="#" aria-disabled="true">Oldest Release</a>
                  </li>
                  <li role="presentation">
                    <a id="sort-by-ending-soonest" role="option" aria-selected="false" href="#" aria-disabled="true">Expiring Soon</a>
                  </li>
                </ol>
              </div><!--/#sort-by-->
            </li>
            <li>
              <a id="hd-only" data-filter-key="hd" href="#" role="checkbox" aria-checked="false" aria-labelledby="hd-only-label">
                <span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>
                <span id="hd-only-label" class="icon-label">HD only</span>
              </a>
            </li>
          </ul>
        <!-- </div> --><!--/.breathe-->
      </div><!--/col-->
    </div><!--/.row-->
    <div id="all-listings">
      <div class="row breathe">
        <div class="group col-xs-12">
          <?php
            $groupedListings = [];

            $groupedListings['december-picks'] = '
              {
                "title": "Holiday Moviethon",
                "poster": "/hughxfinity/img/holiday-moviethon-poster.jpg",
                "type": "movie list",
                "genre": "holidays animated family comedy",
                "runtime": "270",
                "popularity": "85"
              },
              {
                "title": "Winter Watchlist",
                "poster": "/hughxfinity/img/winter-watchlist-poster.jpg",
                "type": "tv movie list",
                "genre": "drama comedy",
                "popularity": "20"
              },
              {
                "title": "Dawn of the Planet of the Apes",
                "poster": "/hughxfinity/img/dawn-apes-poster.jpg",
                "type": "movie",
                "genre": "drama sci-fi action",
                "runtime": "130",
                "popularity": "70",
                "price": "5.99"
              },
              {
                "title": "State of Affairs",
                "poster": "/hughxfinity/img/state-of-affairs-poster.jpg",
                "type": "tv",
                "genre": "drama",
                "price": "$1.99 each",
                "popularity": "30"
              }
            ';

            $groupedListings['premium-content'] = '
              {
                "title": "Silicon Valley",
                "genre": "comedy",
                "href": "/hughxfinity/silicon-valley/s1/",
                "poster": "/hughxfinity/silicon-valley/poster.jpg",
                "type": "tv",
                "exclusivity": "premium",
                "popularity": "40"
              },
              {
                "title": "Game of Thrones",
                "genre": "drama",
                "poster": "/hughxfinity/img/game-of-thrones-poster.jpg",
                "type": "tv",
                "exclusivity": "premium",
                "runtime": "60",
                "popularity": "90"
              },
              {
                "title": "The Wire",
                "genre": "drama crime",
                "poster": "/hughxfinity/img/the-wire-poster.jpg",
                "type": "tv",
                "exclusivity": "premium",
                "hd": "false",
                "runtime": "60",
                "popularity": "95"
              },
              {
                "title": "Homeland",
                "genre": "drama crime mystery",
                "poster": "/hughxfinity/img/homeland-poster.jpg",
                "type": "tv",
                "exclusivity": "premium",
                "runtime": "60",
                "popularity": "80"
              }
            ';

            $groupedListings['popular'] = '
              {
                "title": "The Dark Knight",
                "type": "movie",
                "genre": "drama crime action",
                "poster": "/hughxfinity/img/the-dark-knight-poster.jpg",
                "price": "$8.99",
                "popularity": "100",
                "runtime": "153"
              },
              {
                "title": "Raging Bull",
                "genre": "drama",
                "poster": "/hughxfinity/img/raging-bull-poster.jpg",
                "price": "$6.99",
                "popularity": "90",
                "runtime": "129"
              },
              {
                "title": "Spring Breakers",
                "genre": "drama",
                "poster": "/hughxfinity/img/spring-breakers-poster.jpg",
                "price": "$4.99",
                "popularity": "75",
                "runtime": "94"
              },
              {
                "title": "Tommy Boy",
                "genre": "comedy",
                "poster": "/hughxfinity/img/tommy-boy-poster.jpg",
                "price": "$2.99",
                "hd": "false",
                "popularity": "85",
                "runtime": "97"
              }
            ';

            $listings = '[' . implode( ',', array( $groupedListings['december-picks'], $groupedListings['premium-content'], $groupedListings['popular'] ) ) . ']';
            include 'includes/listings.php'
          ?>
        </div><!--/.group-->
        <div id="no-results" class="col-xs-12">
          <p>No titles match the selected criteria.</p>
        </div><!--/#no-results-->
      </div><!--/.row-->
    </div><!--/#all-listings-->
    <?php /*
    <div id="grouped-listings" style="display: none;">
      <div class="row breathe">
        <div id="picks" class="group col-xs-12">
          <h3 class="breathe">December Picks</h3>
          <?php
            $listings = '[' . $groupedListings['december-picks'] . ']';
            include 'includes/listings.php';
          ?>
        </div>
      </div><!--/.row-->
      <div class="row breathe">
        <div id="premium-content" class="group col-xs-12">
          <h3 id="premium-content-label" class="breathe">Premium Content</h3>
          <?php
            $listings = '[' . $groupedListings['premium-content'] . ']';
            include 'includes/listings.php';
          ?>
        </div><!--/#premium-content-->
      </div><!--/.row-->
      <div class="row breathe">
        <div id="picks" class="group col-xs-12">
          <h3 class="breathe">Popular</h3>
          <?php
            $listings = '[' . $groupedListings['popular'] . ']';
            include 'includes/listings.php';
          ?>
        </div><!--/.col-->
      </div><!--/.row-->
    </div><!--/#grouped-listings-->
    */ ?>
<?php include 'includes/footer.php'; ?>