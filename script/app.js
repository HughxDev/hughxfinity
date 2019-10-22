$( document ).ready(function jQueryDocumentReady() {
  "use strict";

  function titleSort( itemElem ) {
    var title = $( itemElem ).find( 'cite' ).text();

    return title.replace( /^[tT]he\s/, '' );
  }

  var $dropdownEntries = $('.dropdown-menu:not(.dropdown-menu--detached) > li');
  var $alerts = $('#alerts');
  var $modals = $('#modals');
  var $modalProtip = $('#protip-1');
  var $allListings = $('#all-listings');
  var $groupedListings = $('#grouped-listings');
  var $dummyLinks = $('[href="#"]');
  var $disabledLinks = $('[aria-disabled="true"]');
  var $filters = $('#filters');
  var isotopeSortData = {
    "type": "[data-type]",
    "genre": "[data-genre]",
    "price": "[data-price]",
    "length": "[data-length]",
    "exclusivity": "[data-exclusivity]",
    "popularity": "[data-popularity] parseInt",
    "title-a-z": titleSort,
    "title-z-a": titleSort,
    "newest": function () {},
    "oldest": function () {},
    "expiring-soon": "[data-expiring]",
  };
  var isotopeSortOrder = {
    "sortAscending": {
      "popularity": false,
      "title-z-a": false
    }
  };
  var $noResultsMessage = $('#no-results').hide();

  // $.ajax('/hughxfinity/includes/modal-protip.php?modal-id=protip-1')
  //   .done(function protipModalLoaded( data ) {
  //     $modalProtip = $( data );

  //     $modals.append( $modalProtip );

  //     initProtipModalEvents();
  //   })
  // ;

  // $('.dropdown-toggle > icon-label:eq(0)').each(function eachDropdownLabel( event ) {
  //   var $label = $(this);

  //   $label.attr( 'data-null-text', $label.text() );
  // });

  function displayProtipModal( event ) {
    $modalProtip.modal('show');

    event.preventDefault();

    window.location.hash = 'protip-1';
  }

  if ( showProtip ) {
    $modalProtip.modal('show');
  }

  // $groupedListings.find('li').each(function(index, el) {
  //   $allListings.append( el.outerHTML );
  // });

  $allListings.isotope({
    "itemSelector": ".listing",
    "layoutMode": "fitRows",
    "getSortData": isotopeSortData,
  });

  $modalProtip.on('hide.bs.modal', function onProtipModalHide( event ) {
    window.location.hash = '';
  });

  $dummyLinks.on('click', displayProtipModal);
  $disabledLinks.off('click', displayProtipModal).on('click', function ( event ) {
    event.preventDefault();
    event.stopPropagation();
  });
  
  $dropdownEntries.children('a:not([aria-disabled="true"])')
    .on('click', function onOptionClick( event ) {
      var $menuItem = $(this);
      var $parent = $menuItem.parent();
      var $neighbors = $parent.siblings().children('a');
      var pos = $dropdownEntries.index( $parent );
      var newLabel;
      var $dropdownMenu = $menuItem.closest('.dropdown-menu');
      var $dropdownToggle = $( '#' + $dropdownMenu.attr('aria-labelledby') );
      var $dropdownToggleLabel = $dropdownToggle.children('.icon-label:eq(0)');
      var dropdownToggleLabelNullText = $dropdownToggleLabel.attr('data-null-text');
      var id = $menuItem.attr('id');
      var displayPattern = $menuItem.attr('data-display-pattern') || $dropdownToggle.attr('data-display-pattern');
      var selectionText = $menuItem.text();
      var selection = $menuItem.attr('aria-label') || $menuItem.attr('title') || selectionText;
      var href = $menuItem.attr('href');

      if ( displayPattern ) {
        newLabel = displayPattern
          .replace( '{{selectLabel}}', dropdownToggleLabelNullText )
          .replace( '{{selection}}', selection )
          .replace( '{{selectionText}}', selectionText )
        ;
      } else {
        newLabel = selection;
      }

      $neighbors.attr( 'aria-selected', 'false' );
      $menuItem.attr( 'aria-selected', 'true' );
      $dropdownToggleLabel.text( newLabel );
      $dropdownToggle.attr( 'aria-activedescendant', id );

      // if ( href === '#' ) {
      //   event.preventDefault();
      // }
    })
    .hover(
      function onOptionHover( event ) {
        var $menuItem = $(this);
        var $parent = $menuItem.parent();
        var $neighbors = $parent.siblings().children('a:not([aria-disabled="true"])');

        $neighbors.css({
          "background-color": "inherit",
          "color": "inherit"
        });
      },
      function onOptionHoverOut( event ) {
        var $menuItem = $(this);
        var $parent = $menuItem.parent();
        var $neighbors = $parent.siblings().children('a');

        $neighbors.css({
          "background-color": "",
          "color": ""
        });
      }
    );

  $('#watchlist').on('click', function onWatchlistClick( event ) {
    var $button = $(this);
    var $icon = $button.children('.glyphicon:eq(0)');
    var episodeTitle = $('#episode-title').text();
    var $alert;
    
    if ( $icon.hasClass('glyphicon-pushpin') ) {
      $icon
        .removeClass('glyphicon-pushpin')
        .addClass('glyphicon-minus')
        .siblings('.icon-label').children('.sr-only:eq(0)').text('Remove from ');

      $alert = $(
        [
          '<div id="watchlist-remove" class="alert alert-success alert-dismissible breathe-deep" role="alert">',
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>',
            '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> <span class="icon-label">Added “' + episodeTitle + '” to Watchlist.</span>',
          '</div>'
        ].join('')
      );

      $alerts.append( $alert );

      setTimeout(function () {
        $alert.alert('close');
        //window.location.hash = '';
      }, 3750);
    } else if ( $icon.hasClass('glyphicon-minus') ) {
      $icon
        .removeClass('glyphicon-minus')
        .addClass('glyphicon-pushpin')
        .siblings('.icon-label').children('.sr-only:eq(0)').text('Add to ')
      ;

      $alert = $(
        [
          '<div id="watchlist-remove" class="alert alert-success alert-dismissible breathe-deep" role="alert">',
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>',
            '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Removed “' + episodeTitle + '” from Watchlist.',
          '</div>'
        ].join('')
      );

      $alerts.append( $alert );

      setTimeout(function () {
        $alert.alert('close');
        //window.location.hash = '';
      }, 3750);
    }
  });

  $('[role="checkbox"]').on('click', function onCheckboxClick( event ) {
    var $checkbox = $(this);
    var checked = ( $checkbox.attr('aria-checked') === 'true' );
    var newIconClass;
    var $icon = $checkbox.children('.glyphicon:eq(0)');

    if ( checked ) {
      newIconClass = 'glyphicon glyphicon-unchecked';
    } else {
      newIconClass = 'glyphicon glyphicon-check';
    }

    $icon.attr('class', newIconClass);
    $checkbox.attr('aria-checked', ( !checked ).toString() );

    event.preventDefault();
  }); // checkbox

  function initClock() {
    var $theTime = $("#the-time");

    $theTime.html( moment().format("h:mm A") );

    setInterval(function updateClock(){
      $theTime.html( moment().format("h:mm A") );
    }, 1000);
  } // initClock

  function getFilterKey( $el ) {
    var filterKey = '';
    var dataFilterKey = $el.attr('[data-filter-key]') || $el.closest('[data-filter-key]').attr('data-filter-key');
    var id;

    if ( dataFilterKey ) {
      filterKey = dataFilterKey;

      //console.log( 'dataFilterKey' );
    } else {
      id = $el.closest('.dropdown').attr('id');

      if ( id ) {
        filterKey = id;

        //console.log( 'id' );
      }

      //console.log( 'nothing' );
    }

    return filterKey;
  }

  function getFilterValue( $el, filterKey ) {
    // @todo: check if $el is jQuery object
    var filterVal = '';
    var dataFilterVal = $el.attr('data-filter-value') || $el.attr('aria-checked');
    var id = $el.attr('id');
    
    if ( dataFilterVal ) {
      filterVal = dataFilterVal;
      //console.log( 'dataFilterVal' );
    } else if ( id ) {
      var filterKeyIndex = id.indexOf( filterKey );

      //console.log( filterKeyIndex );

      filterVal =
        ( filterKey && filterKeyIndex !== -1 ) ?
        ( id.substr( filterKeyIndex + filterKey.length + '-'.length ) ) :
        id
      ;

      //console.log( 'id' );
    } else {
      filterVal = $el.text().toLowerCase();
      console.log( 'text' );
    }

    return filterVal;
  } // function

  function getFilterAsString( obj, mode ) {
    if ( mode === 'class' ) {
      return '.' + obj['key'] + '__' + obj['val'];
    }

    if ( obj['val'] === '' ) {
      return '';
    }

    return '[data-' + obj['key'] + '~="' + obj['val'] + '"]';
  }

  function getFilter( $el, mode ) {
    var filterKey = getFilterKey( $el );
    var filterVal = getFilterValue( $el, filterKey );
    var isCheckbox = $el.attr('role') === 'checkbox';

    console.log( isCheckbox );

    console.log( filterKey );
    console.log( filterVal );

    if ( filterVal === '*' || filterVal === 'any' || filterVal === 'default' || ( isCheckbox && filterVal === 'false' ) ) {
      filterVal = ''; //'[data-' + filterKey + ']';
    }

    return { "key": filterKey, "val": filterVal };
  }

  $filters.find('[role="option"], [role="checkbox"]').not('[aria-disabled="true"]')
    .off('click', displayProtipModal)
    .on('click', function onFilterClick( event )
  {
    var $link = $(this);
    var id = $link.attr('id');
    var $activeFilters = $filters.find('[role="option"][aria-selected="true"], [role="checkbox"][aria-checked="true"]').not( $link );
    var thisFilter = getFilter( $link );
    var thisFilterString = getFilterAsString( thisFilter );
    var isSortBy = id.match(/sort-by/) !== null;
    var combinedFilters = isSortBy ? '' : thisFilterString;
    var isotopeOptions = {};

    $noResultsMessage.hide();

    if ( $activeFilters.length ) {
      $activeFilters.each(function(index, el) {
        var $el = $(el);
        var filterKey = getFilterKey( $el );
        var filter = getFilterAsString( getFilter( $el ) );

        if ( filterKey !== 'sort-by' && filter ) {
          //combinedFilters += ', ' + filter;
          combinedFilters += filter;
        }
      });
    }

    isotopeOptions["filter"] = combinedFilters;

    if ( isSortBy ) {
      isotopeOptions["sortBy"] = thisFilter['val'];
      isotopeOptions["sortAscending"] = isotopeSortOrder["sortAscending"];
    }

    console.log( $activeFilters );
    console.log( combinedFilters );
    console.log( isotopeOptions );

    $allListings.isotope( isotopeOptions );

    if ( !$allListings.data('isotope').filteredItems.length ) {
      $noResultsMessage.show();
    }

    $allListings.isotope( 'on', 'layoutComplete',
      function( isoInstance, laidOutItems ) {
        console.log( isoInstance );

        if ( !$allListings.data('isotope').filteredItems.length ) {
          $noResultsMessage.show();
        }
      }
    );

    event.preventDefault();
  });

  initClock();
});