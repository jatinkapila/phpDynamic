<ul>
  <?php

    foreach ($navItems as $item) {

      # code...
    echo  "<li><a href=\"$item[slug]\">$item[title]</a></li>";
    }

  ?>
</ul>
