<html>
 <head>
 <meta charset="UTF-8">
  <title>Fixtures</title>

 </head>
 <body>

 <table border="1" width="50%">
        <tr>
            <th>Player position</th>

            <th>Action</th>

            <tbody>
            <tr>
                <td> </td>
                <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td>

 
            </tr>

         
        </tbody>

        </tr>
    </table>


<pre>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

Add player position   <input type="text" name="Name"><br />

<input type="submit" value="Submit">

</form>
</pre>

 </body>

  

  </html>  