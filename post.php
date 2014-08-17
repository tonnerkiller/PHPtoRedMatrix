<html>
  <head>
    <title>Post to RedMatrix</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  </head>

  <body>
    <?php
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $hub = $_POST['hub'];
      $content = $_POST['content'];
      $ctype = $_POST['ctype'];
      $title = $_POST['title'];
      $channel = $_POST['channel'];
      $category = $_POST['category'];

      $I = new HttpRequest($hub.'/api/statuses/update.xml',HttpRequest::METH_POST);
      $I->setOptions(array('httpauth' => $user.':'.$pass));
      $I->addPostFields(array(
                                $ctype => $content,
                                'title' => $title,
                                'channel' => $channel,
                                'category' => $category));

      try {
        echo $I->send()->getBody();
      }
      catch (HttpException $ex) {
        echo $ex;
      }
    ?>
    <br />
    <a href="form.php">Back to form</a>
  </body>
</html>
