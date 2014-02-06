    <script>
      $(function(){
        
        $(".elgg-input-location").geocomplete()               
      });
    </script>
<?php
//load the JS
elgg_load_js('geocomplete');
elgg_load_js('google_places');
