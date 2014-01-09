
<!-- ==== LOGIN ====-->
<!-- Check if there is a user in the current session -->
<!-- If yes, username = this user, otherwise create a new session with Google API-->
<html>
<head>
	<title>Page Title</title>
</head>
<body>
<span id="signinButton">
  <span
    class="g-signin"
    data-callback="signinCallback"
    data-clientid="56998233293-4vfl3q8gs7q0k2t2fnvi3nq4r3t5uofb.apps.googleusercontent.com"
    data-cookiepolicy="single_host_origin"
    data-scope="https://www.googleapis.com/auth/plus.login">
  </span>
</span>

<!-- Place this asynchronous JavaScript just before your </body> tag -->
    <script type="text/javascript">
      (function() {
       var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
       po.src = 'https://apis.google.com/js/client:plusone.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
     })();
    </script>
</body>
</html>
