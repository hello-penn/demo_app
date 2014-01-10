
<!-- ==== LOGIN ====-->
<!-- Check if there is a user in the current session -->
<!-- If yes, username = this user, otherwise create a new session with Google API-->
<?php session_start(); ?>
<html>
<head>
  <title>Demo: Getting an email address using the Google+ Sign-in button</title>
  <style type="text/css">
  html, body { margin: 0; padding: 0; }
  .hide { display: none;}
  .show { display: block;}
  </style>
  <script type="text/javascript">
  /**
   * Global variables to hold the profile and email data.
   */
   var profile, email;

  /*
   * Triggered when the user accepts the sign in, cancels, or closes the
   * authorization dialog.
   */
  function loginFinishedCallback(authResult) {
    if (authResult) {
      if (authResult['error'] == undefined){
        toggleElement('signin-button'); // Hide the sign-in button after successfully signing in the user.
        gapi.client.load('plus','v1', loadProfile);  // Trigger request to get the email address.
      } else {
        console.log('An error occurred');
      }
    } else {
      console.log('Empty authResult');  // Something went wrong
    }
  }

  /**
   * Uses the JavaScript API to request the user's profile, which includes
   * their basic information. When the plus.profile.emails.read scope is
   * requested, the response will also include the user's primary email address
   * and any other email addresses that the user made public.
   */
  function loadProfile(){
    var request = gapi.client.plus.people.get( {'userId' : 'me'} );
    request.execute(loadProfileCallback);
  }

  /**
   * Callback for the asynchronous request to the people.get method. The profile
   * and email are set to global variables. Triggers the user's basic profile
   * to display when called.
   */
  function loadProfileCallback(obj) {
    profile = obj;

    // Filter the emails object to find the user's primary account, which might
    // not always be the first in the array. The filter() method supports IE9+.
    email = obj['emails'].filter(function(v) {
        return v.type === 'account'; // Filter out the primary email
    })[0].value; // get the email from the filtered results, should always be defined.
    displayProfile(profile);
  }

  /**
   * Display the user's basic profile information from the profile object.
   */
  function displayProfile(profile){
    document.getElementById('name').value = profile['displayName'];
    document.getElementById('pic').innerHTML = '<img src="' + profile['image']['url'] + '" />';
    document.getElementById('email').value = email;
    document.getElementById("form").submit();
  }
  /**
   * Utility function to show or hide elements by their IDs.
   */
  function toggleElement(id) {
    var el = document.getElementById(id);
    if (el.getAttribute('class') == 'hide') {
      el.setAttribute('class', 'show');
    } else {
      el.setAttribute('class', 'hide');
    }
  }
  </script>
  <script src="https://apis.google.com/js/client:plusone.js" type="text/javascript"></script>
</head>
<body>
  <div id="signin-button" class="show">
     <div class="g-signin"
      data-callback="loginFinishedCallback"
      data-approvalprompt="force"
      data-clientid="56998233293-4vfl3q8gs7q0k2t2fnvi3nq4r3t5uofb.apps.googleusercontent.com"
      data-scope="https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read"
      data-cookiepolicy="single_host_origin"
      >
    </div>
    <!-- In most cases, you don't want to use approvalprompt=force. Specified
    here to facilitate the demo.-->
  </div>
  <form id="form" method="post" action="user.php">
  <div id="profile" class="hide">
    <div>
      <span id="pic"></span>
      <input type="hidden" name="username" id="name" value >
    </div>

    <input type="hidden" name="email" id="email" value >
  </div>
  </form>
</body>
</html>
