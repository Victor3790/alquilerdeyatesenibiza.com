<?php
function cbt_query_vars( $vars ){
  $vars[] = 'tipo';
  $vars[] = 'camarotes';
  $vars[] = 'eslora';
  $vars[] = 'precio';
  $vars[] = 'busqueda';

  return $vars;
}
