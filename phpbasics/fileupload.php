<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File Upload</title>
  </head>
  <body>
    <script type="text/javascript">
    $(function () {
      $(":file").change(function () {
          if (this.files && this.files[0]) {
              var reader = new FileReader();
              reader.onload = imageIsLoaded;
              reader.readAsDataURL(this.files[0]);
          }
      });
  });

  function imageIsLoaded(e) {
      $('#myImg').attr('src', e.target.result);
  };
    </script>
    <input type='file' />
  <img id="myImg" src="#" alt="your image" />
  </body>
</html>
