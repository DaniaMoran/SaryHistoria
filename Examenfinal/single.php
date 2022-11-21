<?php

get_header();


?>
<main>

<div class="cabezera">
    <p class="lugar"> 
    </p>
    <h1 class="titulo1"><?php the_title()?>

    </h1>



</div>
<article>
    <p class="parrafodescripcion">
    <?php the_content()?>

  <p class="lugar"> 
    </p>

</main>

</div>


<?php
get_footer();

?>