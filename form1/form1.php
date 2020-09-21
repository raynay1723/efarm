<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="#" method="POST">
    <table>
        <tr>
            <td>
            <LABEL>Firstname</LABEL>
        </td>
        <td>
            <input type="text" name="Firstname">
        </td>
        </tr>
        <tr>
            <td>
                <input type="Submit" value="Submit" name="">
        
            </td>
        </tr>
    </table>
    </form>
    <?php
    $name=$_POST['Firstname'];
    echo "Your name is :".$name; 
     ?>

</body>
</html>