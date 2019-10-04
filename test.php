
<?php
echo addcslashes('foo[ ]', 'A..z');
// Affiche :  \f\o\o\[ \]
// Toutes les majuscules et minuscules seront échappées
// ... mais aussi les caractères [\]^_`
?>
