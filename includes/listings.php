<?php $listingsDecoded = json_decode( $listings, true ); //var_dump($listings); ?>
<ul class="list-inline listings">
  <?php foreach ( $listingsDecoded as $listing => $attributes ): ?>
  <?php
    $type = ' data-type';
    $genre = ' data-genre';
    $price = ' data-price';
    $priceText = 'Free';
    $runtime = ' data-runtime';
    $runtimeVal = '30';
    $runtimeValFormatted = '';
    $exclusivity = ' data-exclusivity';
    $hd = ' data-hd';
    $popularity = ' data-popularity';

    if ( !isset( $attributes['href'] ) ) {
      $attributes['href'] = '#';
    }

    if ( !isset( $attributes['poster'] ) ) {
      //$attributes['poster'] = 'http://placehold.it/398x590&text=Image+Unavailable';
      $attributes['poster'] = 'http://dummyimage.com/398x590/ccc/202020.png&text=Photo+Unavailable';
    }

    if ( !isset( $attributes['title'] ) ) {
      $attributes['title'] = 'Generic Title';
    }

    if ( isset( $attributes['type'] ) ) {
      $type .= '="' . $attributes['type'] . '"';
    }

    if ( isset( $attributes['genre'] ) ) {
      $genre .= '="' . $attributes['genre'] . '"';
    }

    if ( isset( $attributes['price'] ) ) {
      $priceText = $attributes['price'];
      $priceVal = strtolower( $attributes['price'] );

      if ( $priceVal !== 'free' ) {
        $priceVal = floatval( ( str_replace( '$', '', $priceVal ) ) );
        
        if ( ( $priceVal > 0 ) && ( $priceVal < 5 ) ) {
          $priceVal = 'cheap';
        }
      }

      $price .= '="' . $priceVal . '"';
    } else {
      $price .= '="' . strtolower( $priceText ) . '"';
    }

    if ( isset( $attributes['runtime'] ) ) {
      $runtimeVal = (int) $attributes['runtime'];
      $runtimeValFormatted = $attributes['runtime'];

      if ( $runtimeVal <= 15 ) {
        $runtimeValFormatted = 'lte-15min';
      } elseif ( ( $runtimeVal > 15 ) && ( $runtimeVal <= 60 ) ) {
        $runtimeValFormatted = '1hr';
      } elseif ( ( $runtimeVal > 60 ) && ( $runtimeVal < 120 ) ) {
        $runtimeValFormatted = '1.5hr';
      } elseif ( $runtimeVal >= 120 ) {
        $runtimeValFormatted = 'gte-2hr';
      } else {
        $runtimeValFormatted .= 'min';
      }
    } else {
      $runtimeValFormatted .= $runtimeVal . 'min';
    }

    $runtime .= '="' . $runtimeValFormatted . '"';

    if ( isset( $attributes['exclusivity'] ) ) {
      $exclusivity .= '="' . $attributes['exclusivity'] . '"';
    }

    if ( isset( $attributes['hd'] ) ) {
      $hd .= '="' . $attributes['hd'] . '"';
    } else {
      $hd .= '="true"';
    }

    if ( isset( $attributes['popularity'] ) ) {
      $popularity .= '="' . $attributes['popularity'] . '"';
    }
  ?>
  <li class="listing breathe"<?php echo $type ?><?php echo $genre; ?><?php echo $exclusivity; ?><?php echo $hd; ?><?php echo $popularity; ?><?php echo $runtime; ?><?php echo $price; ?>>
    <a class="listing__link" href="<?php echo $attributes['href']; ?>">
      <img class="listing__poster" src="<?php echo $attributes['poster']; ?>" />
      <cite class="listing__title"><?php echo $attributes['title']; ?></cite>
      <dl class="attributes listing__attributes">
        <dt class="price sr-only">Price</dt>
        <dd><?php echo $priceText ?></dd>
        <dt class="runtime sr-only">Runtime</dt>
        <dd><?php echo $runtimeVal; ?> <abbr title="minutes">min</abbr></dd>
      </dl>
    </a>
  </li>
  <?php endforeach; ?>
</ul>