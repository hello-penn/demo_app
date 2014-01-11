
<!-- ==== LOGIN ====-->
<!-- Check if there is a user in the current session -->
<!-- If yes, username = this user, otherwise create a new session with Google API-->
<div data-role="page" id="home">
<div aria-level="1" data-role="header" class="ui-title"><h1>MindStorm</h1>    
    <div role="navigation" class="ui-navbar ui-mini" data-role="navbar">
      <ul class="ui-grid-a">
        <li class="ui-block-a"><a class="ui-btn ui-btn-up-a ui-btn-inline" data-inline="true" data-theme="a" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" href="#idea_list"><span class="ui-btn-inner"><span class="ui-btn-text">Idea List</span></span></a></li>
        <li class="ui-block-b"><a class="ui-btn ui-btn-inline ui-btn-up-a" data-inline="true" data-theme="a" data-wrapperels="span" data-iconshadow="true" data-shadow="false" data-corners="false" href="#new"><span class="ui-btn-inner"><span class="ui-btn-text">New Idea</span></span></a></li>
      </ul>
    </div>
    </div>
    <div data-role="content">
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
  <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div id="profile" class="hide">
    <div>
      <span id="pic"></span>
      <input type="hidden" name="username" id="name" value >
    </div>

    <input type="hidden" name="email" id="email" value >
  </div>
  </form>
    <?php include 'user.php';?>
  </div>
  </div>
