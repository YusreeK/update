<html>
 <head>
 <meta charset="UTF-8">
  <title>Fixtures</title>

 </head>
 <body>

 <table border="1" width="50%">
        <tr>
            <th>Fixture</th>
            <th> Date</th>
            <th> Time</th>
            <th> Home Team</th>
            <th> Away Team</th>
            <th> Comp </th>
            <th>Action</th>

            <tbody>
            <tr>
                <td>A</td>
                <td>12/12/2021</td>
                <td>12h00</td>
                <td>W</td>
                <td>Y</td>
                <td>C</td>
                <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td>
            </tr>
            <tr>
                
                <td>B</td>
                <td>12/12/2021</td>
                <td>13h00</td>
                <td>X</td>
                <td>Z</td>
                <td>D</td>
                <td><a href="href.php?method=edit&id={theID}">Edit</a>  <a href="href.php?method=edit&id={theID}">Delete</a></td> 
            </tr>
         
        </tbody>

        </tr>
    </table>

<p>
Add Fixture
</p>
<pre>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

Date:   <input type="text" name="Name"><br />
Time:   <input type="text" name="Email"><br />


<form action="/action_page.php">
<label for="team">Select home team</label>
<select name="team" id="team">
<option value="team A">Team A</option>
<option value="team B">Team B</option>
<option value="team C">Team C</option>
<option value="team D">Team D</option>
</select>
</form>
<br><br>
<form action="/action_page.php">
<label for="team">Select away team</label>
<select name="team" id="team">
<option value="team A">Team A</option>
<option value="team B">Team B</option>
<option value="team C">Team C</option>
<option value="team D">Team D</option>
</select>
</form>
<br><br>
<form action="/action_page.php">
<label for="team">Select competition</label>
<select name="comp" id="comp">
<option value="comp A">Comp A</option>
<option value="comp B">Comp B</option>
<option value="comp C">Comp C</option>
<option value="comp D">Comp D</option>
</select>
</form>
<br><br>

<input type="submit" value="Submit">

</form>
</pre>

 </body>

  

  </html>  