<html>
 <head>
 <meta charset="UTF-8">
  <title>Competitions</title>


 </head>
 <table border="1" width="50%">
        <tr>
            <th>Competition</th>
            <th>Action</th>

            <tbody>
            <tr>
                <td>Team A</td>
                <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td>
            </tr>
            <tr>
                
                <td>Team B</td>
                <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td> 
            </tr>
         
        </tbody>

        </tr>
    </table>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
Add competition <input type="text" name="name">
  <br><br>
<input type="submit" name="submit" value="Submit"> 
</form>

 </body>

  

  </html>  