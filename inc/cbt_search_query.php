<?php
function cbt_search_query( $query ){

  if( is_admin() || !$query->is_main_query() ){
    return;
  }

  if(!is_post_type_archive('yate')){
    return;
  }

  $meta_query = array();

  if( !empty( get_query_var( 'eslora' ) ) ){
    $meta_query[] = array( 'key'=>'eslora_data', 'value'=>get_query_var( 'eslora' ), 'compare'=>'=', 'type'=>'NUMERIC'  );
  }

  if( !empty( get_query_var( 'manga' ) ) ){
    $meta_query[] = array( 'key'=>'manga_data', 'value'=>get_query_var( 'manga' ), 'compare'=>'=', 'type'=>'NUMERIC'  );
  }

  if( !empty( get_query_var( 'invitados' ) ) ){
    $meta_query[] = array( 'key'=>'invitados_data', 'value'=>get_query_var( 'invitados' ), 'compare'=>'=', 'type'=>'NUMERIC'  );
  }

  if( !empty( get_query_var( 'anio' ) ) ){
    $meta_query[] = array( 'key'=>'anio_data', 'value'=>get_query_var( 'anio' ), 'compare'=>'=', 'type'=>'NUMERIC'  );
  }

  if( count( $meta_query ) > 1 ){
    $meta_query['relation'] = 'AND';
  }

  if( count( $meta_query ) > 0 ){
    $query->set('meta_query', $meta_query);
  }
}
