
<?php
    echo "<div class='bottombar'>";
    echo '<p>';
    echo '<a href="http://validator.w3.org/nu/?doc=http%3A%2F%2Fkrustywalrus.com%2F">';
    echo '<img style="border:0;width:88px;height:31px" src="https://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML!">';
    echo '</a>';
    echo '<a href="https://jigsaw.w3.org/css-validator/check/referer">';
    echo '<img style="border:0;width:88px;height:31px" src="https://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!">';
    echo '</a>';
    echo '</p>';
    echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
    echo '</div>';
?>

 <!--TODO: Add logout if in session>