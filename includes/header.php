<?php
  session_start();
  if ( isset( $_REQUEST['nav'] ) ) {
    $nav = explode( ',', strtolower( $_REQUEST['nav'] ) );
  } else {
    $nav = array();
  }
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>hughxfinity Wireframe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/hughxfinity/style/menu.css" />
</head>
<body>
  <div class="container res-1080">
    <div id="alerts"></div><!--/#alerts-->
    <div id="modals">
    <?php include 'modal-protip.php';
      if ( $warning && !$_SESSION['seenProtip'] ) : $_SESSION['seenProtip'] = true; ?>
        <script>showProtip = true;</script>
      <?php endif; ?>
    </div>
    <header class="row breathe-deep" role="banner">
      <div class="col-xs-10">
        <h1 class="logo" aria-labelledby="logo-label">h<span>u</span>gh<span>x</span>finity</h1>
        <nav class="nav-primary">
          <ul class="list-inline">
            <?php /*<li<?php if ( $here === 'Browse' ): ?> class="here"<?php endif; ?>>
              <a href="/hughxfinity/">
                <!-- <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp; -->
                <span class="icon-label">Browse</span>
              </a>
            </li>*/ ?>
          <?php /*if ( in_array( 'movies', $nav ) ): ?>
            <li<?php if ( $here === 'Movies' ): ?> class="here"<?php endif; ?>>
              <a href="/hughxfinity/movies/">Movies</a>
            </li>
          <?php endif; ?>
          <?php if ( in_array( 'tv', $nav ) ): ?>
            <li<?php if ( $here === 'TV' ): ?> class="here"<?php endif; ?>>
              <a href="/hughxfinity/tv/">TV</a>
            </li>
          <?php endif; */?>
            <li<?php if ( $here === 'TV & Movies' ): ?> class="here"<?php endif; ?>>
              <a href="/hughxfinity/">TV &amp; Movies</a>
            </li>
            <li<?php if ( $here === 'Sports' ): ?> class="here"<?php endif; ?>>
              <a href="#">Sports</a>
            </li>
          <?php //if ( in_array( 'music', $nav ) ): ?>
            <li<?php if ( $here === 'Music' ): ?> class="here"<?php endif; ?>>
              <a href="#">Music</a>
            </li>
          <?php //endif; ?>
            <li<?php if ( $here === 'Watchlist' ): ?> class="here"<?php endif; ?>>
              <a href="#">Watchlist</a>
            </li>
            <li<?php if ( $here === 'Recently Viewed' ): ?> class="here"<?php endif; ?>>
              <a href="#">Recently Viewed</a>
            </li>
            <li<?php if ( $here === 'Search' ): ?> class="here"<?php endif; ?>>
              <a href="#">Search</a>
            </li>
            <li<?php if ( $here === 'Settings' ): ?> class="here"<?php endif; ?>>
              <a href="#">Settings</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-xs-2 text-right">
        <time id="the-time">12:00 AM</time>
      </div>
    </header>