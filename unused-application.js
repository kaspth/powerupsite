// used with
// <section id="powerups" data-source-embed data-root="http://mod7af1489.keaweb.dk/goodvertizingpowerup/" data-path="recent_powerups.php">
//  <?php # embedded via ujs ?>
// </section>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<script>
  $(document).ready(function() {
    $('[data-source-embed]').each(function() {
      var source = $(this);

      $.get(source.data('root') + source.data('path'), function(data) {
        var sanitized = $(data);
        sanitized.find('script').remove();

        var images = sanitized.find('img');
        images.attr('src', source.data('root') + images.attr('src'));

        source.html(sanitized);
      });
    });
  });
</script>
