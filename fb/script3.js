
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1759462614340133',
      xfbml      : true,
      version    : 'v2.6'
    });

function onLogin(response) {
  if (response.status == 'connected') {
    FB.api('/me?fields=name', function(data) {
      var welcomeBlock = document.getElementById('fb-welcome');
      welcomeBlock.innerHTML = 'Hallo ' + data.name + '!';
    });
  }
}
    FB.getLoginStatus(function(response) {
      // Check login status on load, and if the user is
      // already logged in, go directly to the welcome message.
      if (response.status == 'connected') {
        onLogin(response);
      } else {
        // Otherwise, show Login dialog first.
        FB.login(function(response) {
          onLogin(response);
        }, {scope: 'user_friends, email'});
      }
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

