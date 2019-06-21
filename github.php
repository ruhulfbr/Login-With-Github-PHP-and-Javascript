<html>
  <header>
   <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.rawgit.com/oauth-io/oauth-js/c5af4519/dist/oauth.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.12.0/bootstrap-social.min.css"> -->
  </header>

  <body>
    <a id="github-button" class="btn btn-block btn-social btn-github">
      <button><i class="fa fa-github"></i> Sign in with Github</button>
    </a>

    <script>
      $('#github-button').on('click', function() {
        // Initialize with your OAuth.io app public key
        OAuth.initialize('KvqvQSyVdjVVqkbHtKa90Y2N-6I');
        // Use popup for oauth
        // Alternative is redirect
        OAuth.popup('github').then(github => {
          console.log('github:', github);
          // Retrieves user data from oauth provider
          // Prompts 'welcome' message with User's email on successful login
          // #me() is a convenient method to retrieve user data without requiring you
          // to know which OAuth provider url to call
          github.me().then(data => {
            console.log('me data:', data);
            alert('GitHub says your email is:' + data.email + ".\nView browser 'Console Log' for more details");
      });
          // Retrieves user data from OAuth provider by using #get() and
          // OAuth provider url
          github.get('/user').then(data => {
            console.log('self data:', data);
          })
        });
      })
    </script>
  </body>
</html>