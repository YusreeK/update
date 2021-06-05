<html>
 <head>
 <meta charset="UTF-8">
  <title>Fixtures</title>

 </head>
 <body>

 <table border="1" width="50%">
        <tr>
            <th>Player</th>
            <th> Team</th>
            <th> Shirt Number</th>
            <th> Position</th>
            <th>Action</th>

            <tbody>
            <tr>
                <td>A B</td>
                <td>X</td>
                <td>12</td>
                <td>GK</td>
                <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td>
            </tr>
            <tr>
                
                <td>B C</td>
                <td>Y</td>
                <td>13</td>
                <td>CB</td>
                <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td> 
            </tr>
         
        </tbody>

        </tr>
    </table>

<p>
Add player
</p>
<pre>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

Name Surname:   <input type="text" name="Name"><br />

<form action="/action_page.php">
<label for="team">Select team</label>
<select name="team" id="team">
<option value="team A">Team A</option>
<option value="team B">Team B</option>
<option value="team C">Team C</option>
<option value="team D">Team D</option>
</select>
</form>
Number:         <input type="text" name="Email"><br />

<p>Position</p>



<input type="submit" value="Submit">

</form>
</pre>

 </body>

  

  </html>  