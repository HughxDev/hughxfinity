<?php include '../../includes/header.php'; ?>
    <div class="row">
      <?php include '../../includes/poster.php'; ?>
      <div class="col-xs-8">
        <h1 class="breathe"><cite class="show-title">Silicon Valley</cite> <span class="release-date">(2014)</span></h1>
        <?php
          $breathe = true;
          $availability = true;
          include '../../includes/season-select.php';
          $availability = false;
          $breathe = false; ?>
        <div class="dropdown open">
          <ol class="dropdown-menu dropdown-menu--detached breathe">
            <li>
              <a id="episode-1" aria-label="Episode 1" href="e1/">
                <span id="episode-1-title">Minimum Viable Product</span>
                <?php include 'e1/data.php'; ?>
                <div class="progress progress--dropdown-menu">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $completedPercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completedPercent; ?>%;">
                    <span class="sr-only"><?php echo $completedPercent; ?>% Complete</span>
                  </div>
                </div><!--/.progress-->
              </a>
            </li>
            <li>
              <a id="episode-2" aria-label="Episode 2" href="e2/">
                <span>The Cap Table</span>
                <?php include 'e2/data.php'; ?>
                <div class="progress progress--dropdown-menu">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $completedPercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completedPercent; ?>%;">
                    <span class="sr-only"><?php echo $completedPercent; ?>% Complete</span>
                  </div>
                </div><!--/.progress-->
              </a>
            </li>
            <li>
              <a id="episode-3" aria-label="Episode 3" href="e3/">
                <span>Articles of Incorporation</span>
                <?php include 'e3/data.php'; ?>
                <div class="progress progress--dropdown-menu">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $completedPercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completedPercent; ?>%;">
                    <span class="sr-only"><?php echo $completedPercent; ?>% Complete</span>
                  </div>
                </div><!--/.progress-->
              </a>
            </li>
            <li>
              <a id="episode-4"  aria-label="Episode 4" href="e4/">
                <span>Fiduciary Duties</span>
                <?php include 'e4/data.php'; ?>
                <div class="progress progress--dropdown-menu">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $completedPercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completedPercent; ?>%;">
                    <span class="sr-only"><?php echo $completedPercent; ?>% Complete</span>
                  </div>
                </div><!--/.progress-->
              </a>
            </li>
            <li>
              <a id="episode-5" aria-label="Episode 5" href="e5/">
                <span>Signaling Risk</span>
                <?php include 'e5/data.php'; ?>
                <div class="progress progress--dropdown-menu">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $completedPercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completedPercent; ?>%;">
                    <span class="sr-only"><?php echo $completedPercent; ?>% Complete</span>
                  </div>
                </div><!--/.progress-->
              </a>
            </li>
            <li>
              <a id="episode-6" aria-label="Episode 6" href="e6/">
                <span>Third Party Insourcing</span>
                <?php include 'e6/data.php'; ?>
                <div class="progress progress--dropdown-menu">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $completedPercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completedPercent; ?>%;">
                    <span class="sr-only"><?php echo $completedPercent; ?>% Complete</span>
                  </div>
                </div><!--/.progress-->
              </a>
            </li>
            <li>
              <a id="episode-7" aria-label="Episode 7" href="e7/">
                <span>Proof of Concept</span>
                <?php include 'e7/data.php'; ?>
                <div class="progress progress--dropdown-menu">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $completedPercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completedPercent; ?>%;">
                    <span class="sr-only"><?php echo $completedPercent; ?>% Complete</span>
                  </div>
                </div><!--/.progress-->
              </a>
            </li>
            <li>
              <a id="episode-8" aria-label="Episode 8" href="e8/">
                <span>Optimal Tip-to-Tip Efficiency</span>
                <?php include 'e8/data.php'; ?>
                <div class="progress progress--dropdown-menu">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $completedPercent; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $completedPercent; ?>%;">
                    <span class="sr-only"><?php echo $completedPercent; ?>% Complete</span>
                  </div>
                </div><!--/.progress-->
              </a>
            </li>
          </ol>
        </div><!--/.dropdown-->
      </div><!--/col-->
    </div><!--/.row-->
    <div class="row">
      <div class="col-xs-8 col-xs-offset-4">
        <ul class="actions list-inline">
          <li>
            <button id="play" class="btn">
              <span class="glyphicon glyphicon-play" aria-hidden="true"></span>&nbsp;<span class="icon-label">Play All</span>
            </button>
          </li>
          <li>
            <button id="preview" class="btn">
              <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp;<span class="icon-label">Preview</span>
            </button>
          </li>
          <li>
            <button id="watchlist" class="btn">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;<span class="icon-label">Add All to Wachlist</span>
            </button>
          </li>
          <li>
            <button id="lock" class="btn">
              <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;<span class="icon-label">Lock</span>
            </button>
          </li>
        </ul>
      </div>
    </div>
<?php include '../../includes/footer.php'; ?>