{{--------------------------------------
  #Envelopment variables ".env"
  => Scripts
---------------------------------------}}

@if (env('APP_ENV') === 'local')
  <script src="http://localhost:8090/app.js"></script>
@else
  <script type=text/javascript src=/static/js/app.d694b5296180eacc5b3f.js></script>
  <script type=text/javascript src=/static/js/manifest.7bbe6899f631b5c34059.js></script>
  <script type=text/javascript src=/static/js/vendor.90744b4ea90dd0cf92ee.js></script>
@endif
