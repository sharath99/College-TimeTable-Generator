<?php
session_start();
?>
<html>
    <body>
        <form action="edit.php" method="POST">
        <center>
            <p>enter year,sem and section to proceed</p>
            <table border="0" cellspacing="15">
                
            <tr>
                <td>
                    year:
                </td>
                <td>
                    <select id="year" name="year" >
                            <option value="">select year</option>
                            <option value="1">year1</option>
                            <option value="2">year2</option>
                        </select>
                </td>
            </tr>
            <tr>
                <td>
                    sem:
                </td>
                <td>
                    <select id="sem" name="sem" >
                            <option value="">select sem</option>                     
                            <option value="1">sem1</option>
                            <option value="2">sem2</option>
                        </select>
                </td>
            </tr>
            <tr>
                <td>
                    section:
                </td>
                <td>
                    <select id="class" name="class">
                            <option value="">select class</option>                            
                            <option value="1">C1</option>
                            <option value="2">C2</option>
                        </select>
                </td>
            </tr>
            <tr >
                <td colspan="2" align="center">
                   <input type="submit" value="submit">
                   <a href='fillt1.php'><button type='button'>back</button></a>
                </td>
                </tr>
            </table>
                </center>
        </form>
    </body>
</html>