<?php
function cbt_search_query( $query ){

  if( is_admin() || !$query->is_main_query() ){
    return;
  }

  if(!is_post_type_archive('yate')){
    return;
  }

  if( empty( get_query_var( 'busqueda' ) ) ){
    return;
  }

  $meta_query = array();
  $precio = get_query_var( 'precio' );

  if( !empty( get_query_var( 'tipo' ) ) ){
    $tipo             = get_query_var( 'tipo' );
    $meta_query[] = array( 'key'=>'tipo_data', 'value'=>$tipo, 'compare'=>'=', 'type'=>'CHAR'  );
  }


  /*if( !empty( get_query_var( 'camarotes' ) ) ){
    $camarotes_from   = get_query_var( 'camarotes' );
    $camarotes_to     = $camarotes_from + 10;
    if($camarotes_from == 6){
      $meta_query[] = array( 'key'=>'camarotes_data', 'value'=>$camarotes_from, 'compare'=>'>=', 'type'=>'NUMERIC'  );
    }else{
      $meta_query[] = array( 'key'=>'camarotes_data', 'value'=>array($camarotes_from, $camarotes_to), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'  );
    }
  }*/

  /*if( !empty( get_query_var( 'eslora' ) ) ){
    $eslora           = get_query_var( 'eslora' );
    $eslora_from      = $eslora - 40;
    $eslora_to        = $eslora + 40;
    if($eslora_from == 60){
      $meta_query[] = array( 'key'=>'eslora_data', 'value'=>$eslora_from, 'compare'=>'>=', 'type'=>'NUMERIC'  );
    }else{
      $meta_query[] = array( 'key'=>'eslora_data', 'value'=>array($eslora_from, $eslora_to), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'  );
    }
  }*/

  if( isset( $precio ) ){
    $precio_from      = get_query_var( 'precio' );
    $precio_to        = $precio_from + 100000;
    if($precio_from == 500000){
      $meta_query[] = array( 'key'=>'precio_data', 'value'=>$precio_from, 'compare'=>'>=', 'type'=>'NUMERIC'  );
    }else{
      $meta_query[] = array( 'key'=>'precio_data', 'value'=>array($precio_from, $precio_to), 'compare'=>'BETWEEN', 'type'=>'NUMERIC'  );
    }
  }

  if( count( $meta_query ) > 1 ){
    $meta_query['relation'] = 'AND';
    $meta_query['orderby']  = array('precio_data'=>'DESC');
  }

  if( count( $meta_query ) > 0 ){
    $query->set('meta_query', $meta_query);
  }
}
