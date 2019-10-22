<?php include 'header.php'; ?>
    <div class="row">
      <?php include 'poster.php'; ?>
      <div class="col-xs-8">
        <h1 class="breathe"><cite class="show-title">Silicon Valley</cite> <span class="release-date">(2014)</span></h1>
        <nav class="season-episode breathe-shallow">
          <?php
            $availability = false;
            include 'season-select.php';
          ?>
          <div id="episode" class="episode-select dropdown">
            <button id="selected-episode" class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" class="btn">
              <span class="icon-label">Episode <?php echo $episode ?></span> 
              <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
            </button>
            <ol class="dropdown-menu" role="listbox" tabindex="0" aria-activedescendant="episode-1" aria-labelledby="selected-episode">
              <li role="presentation">
                <a id="episode-1" role="option" aria-label="Episode 1" aria-selected="<?php var_export( $episode == 1 ); ?>" href="../e1/">Minimum Viable Product</a>
              </li>
              <li role="presentation">
                <a id="episode-2" role="option" aria-label="Episode 2" aria-selected="<?php var_export( $episode == 2 ); ?>" href="../e2/">The Cap Table</a>
              </li>
              <li role="presentation">
                <a id="episode-3" role="option" aria-label="Episode 3" aria-selected="<?php var_export( $episode == 3 ); ?>" href="../e3/">Articles of Incorporation</a>
              </li>
              <li role="presentation">
                <a id="episode-4" role="option" aria-label="Episode 4" aria-selected="<?php var_export( $episode == 4 ); ?>" href="../e4/">Fiduciary Duties</a>
              </li>
              <li role="presentation">
                <a id="episode-5" role="option" aria-label="Episode 5" aria-selected="<?php var_export( $episode == 5 ); ?>" href="../e5/">Signaling Risk</a>
              </li>
              <li role="presentation">
                <a id="episode-6" role="option" aria-label="Episode 6" aria-selected="<?php var_export( $episode == 6 ); ?>" href="../e6/">Third Party Insourcing</a>
              </li>
              <li role="presentation">
                <a id="episode-7" role="option" aria-label="Episode 7" aria-selected="<?php var_export( $episode == 7 ); ?>" href="../e7/">Proof of Concept</a>
              </li>
              <li role="presentation">
                <a id="episode-8" role="option" aria-label="Episode 8" aria-selected="<?php var_export( $episode == 8 ); ?>" href="../e8/">Optimal Tip-to-Tip Efficiency</a>
              </li>
            </ol>
          </div>
          <?php if ( $episode == 1 ) : ?><a class="prev disabled"><?php else: ?><a class="prev" href="../e<?php echo $episode - 1; ?>/"><?php endif; echo "\n"; ?>
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
            <span class="icon-label">Prev</span>
          </a>
          <?php if ( $episode == 8 ) : ?><a class="next disabled"><?php else: ?><a class="next" href="../e<?php echo $episode + 1; ?>/"><?php endif; echo "\n"; ?>
            <span class="icon-label">Next</span> 
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          </a>
        </nav>
        <dl id="attributes" class="attributes breathe">
          <dt class="price sr-only">Price</dt>
          <dd>Free</dd>
          <dt class="runtime sr-only">Runtime</dt>
          <dd>30 <abbr title="minutes">min</abbr></dd>
          <dt class="closed-captions sr-only">Closed Captions</dt>
          <dd>
            <span class="sr-only">Yes</span>
            <img class="attribute-icon" src="/hughxfinity/img/closed-captioning-white.png" alt=" " />
          </dd>
          <dt class="audio sr-only">Audio</dt>
          <dd><img class="attribute-icon" src="/hughxfinity/img/dolby-digital-white.png" alt="Dolby Digital" /></dd>
          <dt class="content-rating sr-only">Content Rating</dt>
          <dd><img class="attribute-icon" src="/hughxfinity/img/tvma.png" alt="TVMA" /></dd>
        </dl>
        <h2><cite id="episode-title" class="episode-title"><?php echo $title; ?></cite></h2>
        <p class="description"><?php echo $description; ?></p>
        <p class="notice breathe">You last watched this title on Wednesday</p>
        <dl class="dl-multiline breathe">
          <dt>Starring</dt>
          <dd><a href="#">Thomas Middleditch</a>, <a href="#">Josh Brener</a></dd>
          <dt>Directed by</dt>
          <dd><a href="#"><?php echo $directedBy; ?></a></dd>
          <dt>Original air date</dt>
          <dd><?php echo $airDate; ?></dd>
        </dl>
        <div class="breathe">
          <p>
            <a href="#" role="checkbox" aria-checked="true" aria-labelledby="marathon-mode-label">
              <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
              <span id="marathon-mode-label" class="icon-label">Marathon Mode</span>
            </a>
            <span> – Keep playing next episodes</span>
          </p>
          <p>
            <a href="#" role="checkbox" aria-checked="true" aria-labelledby="hd-mode-label">
              <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
              <span id="hd-mode-label" class="icon-label">Play HD</span>
            </a>
            <span> – Your connection speed supports high definition (XXX mbps)</span>
          </p>
        </div><!--/.breathe-->
      </div><!--/.col-->
    </div><!--/.row-->
    <div class="row">
      <div class="col-xs-4">
        <p id="progress-label" class="progress-label text-left">Watched: <?php echo round ( ( $completedPercent / 100 ) * 30 ); ?> min of 30 min</p>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $completedPercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completedPercent; ?>%;" aria-labelledby="progress-label">
            <span class="sr-only"><?php echo $completedPercent; ?> % Complete</span>
          </div>
        </div><!--/.progress-->
      </div><!--/.col-->
      <div class="col-xs-8">
        <ul class="actions list-inline">
          <li>
            <button id="play" class="btn">
              <span class="glyphicon glyphicon-play" aria-hidden="true"></span>&nbsp;<span class="icon-label">Play</span>
            </button>
          </li>
          <li>
            <button id="restart" class="btn">
              <span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span>&nbsp;<span class="icon-label">Restart</span>
            </button>
          </li>
          <li>
            <button id="preview" class="btn">
              <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;<span class="icon-label">Preview</span>
            </button>
          </li>
          <li>
            <button id="watchlist" class="btn">
              <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>&nbsp;<span class="icon-label"><span class="sr-only">Add to </span>Watchlist</span>
            </button>
          </li>
          <li>
            <button id="lock" class="btn">
              <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;<span class="icon-label">Lock</span>
            </button>
          </li>
        </ul>
      </div><!--/.col-->
    </div><!--/.row-->
<?php include 'footer.php'; ?>