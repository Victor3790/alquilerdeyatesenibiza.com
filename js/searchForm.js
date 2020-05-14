jQuery(document).ready(function () {

  let loa   = "";
  let price = "";

  if( jQuery('html').attr('lang') === 'es-ES' ){
    loa   = '60&nbsp;mts o&nbsp;más';
    price = "500.000&nbsp;€ o&nbsp;más";
  }else if ( jQuery('html').attr('lang') === 'en-US' ) {
    loa   = '60&nbsp;mts or&nbsp;more';
    price = "500.000&nbsp;€ or&nbsp;more";
  }

  jQuery('.slider-eslora').jRange({
    from: 10,
    to: 60,
    step: 10,
    scale: ['10&nbsp;mts', loa],
    format: '%s mts',
    width: 287,
    showLabels: true,
    snap: true
  });

  jQuery('.slider-precio').jRange({
    from: 0,
    to: 500000,
    step: 100000,
    scale: ["0&nbsp;€", price],
    format: '%s €',
    width: 287,
    showLabels: true,
    snap: true
  });

  jQuery('.cbt-form__display').click(function() {
    let input = jQuery(this).parent();
    let list  = input.children('.cbt-form__options');
    let dispStatus = input.children('.cbt-form__options').css('display');
    if(dispStatus === 'none'){
      list.css('display','block');
    }else if (dispStatus === 'block') {
      list.css('display','none');
    }
  })

  jQuery('.cbt-form__option').click(function() {
    let list = jQuery(this).parent();
    let txtValue = jQuery(this).html();
    let value = jQuery(this).attr('id');
    let textInput = list.parent();
    let formInput = textInput.children('.cbt_form_hidden');
    textInput.children('.cbt-form__title-input').html(txtValue);
    formInput.attr('value', value);
    list.css('display','none');
  })
})
