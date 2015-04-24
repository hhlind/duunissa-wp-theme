jQuery(function() {
  jQuery('.nav-button').click(function() {
    jQuery('.nav-panel, .site-content, .site-footer').toggleClass('hidden');
  });
})