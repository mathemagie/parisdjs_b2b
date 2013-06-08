/*$('#wall').isotope({
  // options
  itemSelector : '.item',
  layoutMode : 'fitRows'
});
*/
// cache container
var $wall = $('#wall');
// initialize isotope
$wall.isotope({
  // options...
  itemSelector : '.item',
  layoutMode : 'fitRows'

});

// filter items when filter link is clicked
$('#filters a').click(function(){
  var selector = $(this).attr('data-filter');
  $wall.isotope({ filter: selector });
  return false;
});



// filter items when filter link is clicked
$(function(){
var $optionSets = $('#options .option-set'),
$optionLinks = $optionSets.find('a');
$optionLinks.click(function(){
var $this = $(this);
// don't proceed if already selected
if ( $this.hasClass('selected') ) {
return false;
}
var $optionSet = $this.parents('.option-set');
$optionSet.find('.selected').removeClass('selected');
$this.addClass('selected');


// make option object dynamically, i.e. { filter: '.my-filter-class' }
var options = {},
key = $optionSet.attr('data-option-key'),
value = $this.attr('data-option-value');
// parse 'false' as false boolean
value = value === 'false' ? false : value;
options[ key ] = value;
if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
// changes in layout modes need extra logic
changeLayoutMode( $this, options )
} else {
// otherwise, apply new options
$wall.isotope( options );
}

return false; 
});
});
