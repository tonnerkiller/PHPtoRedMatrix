<html>
  <head>
          <title>Post to the RedMatrix</title>
          <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
  </head>
  <body>

    <form name="inputform" action="post.php" method="post">
      <table>
        <tr>
          <th>Hub address without trailing slash:</th>
          <th><input type="text" name="hub"/></th>
        </tr>
        <tr>
          <th>Channel name:</th>
          <th><input type="text" name="channel"/></th>
        </tr>
        <tr>
          <th>User Name:</th>
          <th><input type="text" name="user"/></th>
        </tr>
        <tr>
          <th>Password:</th>
          <th><input type="password" name="pass"/></th>
        </tr>
        <tr>
          <th>Title of Posting:</th>
          <th><input type="text" name="title"/></th>
        </tr>
        <tr>
          <th>Comma-seperated list of categories:</th>
          <th><input type="text" name="category"/></th>
        </tr>
        <tr>
          <th>Content of posting in either HTML or BBCode:</th>
          <th>
            <textarea cols="40" rows="10" name="content"></textarea>
            <br />
            <input type="radio" name="ctype" value="htmlstatus"/>Content is HTML
            <input type="radio" name="ctype" value="status" checked="checked"/>Content is BBCode
          </th>
        </tr>
      </table>
      <br />
      <input type="submit" value="SUBMIT" />
    </form>
  </body>
</html>
