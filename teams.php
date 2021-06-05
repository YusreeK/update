<html>
 <head>
 <meta charset="UTF-8">
  <title>Teams</title>

 </head>
 <body>

 <table border="1" width="50%">
        <tr>
            <th>Team</th>
            <th> Team email</th>
            <th>Action</th>

            <tbody>
            <tr>
                <td>Team A</td>
                <td>a@xyz.com</td>
                <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td>
            </tr>
            <tr>
                
                <td>Team B</td>
                <td>a@xyz.com</td>
                <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td> 
            </tr>
         
        </tbody>

        </tr>
    </table>

<p>
Add Team
</p>
<pre>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

Team:                <input type="text" name="Name"><br />
Email:               <input type="text" name="Email"><br />

<input type="submit" value="Submit">
</form>
</pre>

 </body>

  

  </html>  