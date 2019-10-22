          <div id="season" class="season-select dropdown<?php if ( $breathe ) { echo ' breathe'; } ?>">
            <button id="selected-season" class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
              <span class="icon-label">Season 1</span> 
              <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
            </button>
            <ol class="dropdown-menu list-unstyled" role="listbox" tabindex="0" aria-activedescendant="season-1" aria-labelledby="selected-season">
              <li role="presentation">
                <a id="season-1" role="option" aria-label="Season 1" aria-selected="true" href="/hughxfinity/silicon-valley/s1/">Season 1</a>
              </li>
            </ol>
          </div>
          <?php if ( $availability == true ): ?><p class="notice breathe">Available until 1/1/2016</p><?php endif; ?>