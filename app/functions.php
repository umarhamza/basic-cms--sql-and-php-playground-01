<?php

function escapechar($text) {
  return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

?>
