<?php
    $loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nis";
    echo "<p>".$loremIpsum."</p>";
    echo "Panjang karakter : ".strlen($loremIpsum) ."<br>";
    echo "Panjang kata : ". str_word_count($loremIpsum) ."<br>";
    echo "<p>".strtoupper($loremIpsum)."</p>";
    echo "<p>".strtolower($loremIpsum)."</p>";
?>