<?php

$nome = 'cam" /> <script>alert("Teste");</script>';

?>

<!--  Tranformar tudo que pode ser um HTMl válido, para os códigos de HTML. Ex: &lt; -->
<input type="text" name="<?php echo htmlentities($nome); ?>"/>