# Show-Hostname-Extension
Stratus Portal Extension that places hostname in the footer.

Show hostname.php generates javascript that is dynamically loaded in like this:

jQuery.cachedScript = function( url, options ) {
 
  // Allow user to set any option except for dataType, cache, and url
  options = $.extend( options || {}, {
    dataType: "script",
    cache: true,
    url: url
  });
 
  // Use $.ajax() since it is more flexible than $.getScript
  // Return the jqXHR object so we can chain callbacks
  return jQuery.ajax( options );
};

/* Show Hostname */
$.cachedScript( "/path/to/showhostname.php" ).done(function( script, textStatus ) {
  console.log("loaded showhostname extension");
});
