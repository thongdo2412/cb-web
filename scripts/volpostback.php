<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Test 3</title>
  <meta charset="utf-8">
  </head>
  <body>

    <p id="urlPlace"></p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>

      function getPageNameInURL() {
        let path = window.location.pathname;
        let pagename = path.split("/").pop();
        return pagename.split(".html")[0];
      }
      $("#urlPlace").html(getPageNameInURL());

    </script>
  </body>
</html>
