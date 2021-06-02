<?php
if(!empty($_POST['Number1'])){
    $Num1=$_POST['Number1'];
}
if(isset($_POST['table'])){
for($i=1;$i<=10;$i++){
    $ans[$i-1]=$Num1*$i;
}
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tables</title>
    </head>
    <body>
        <form method="post" attribute="post" action="TableOpt.php">
        <table border="2">
            <tr><td>Enter Number 1 </td>
                <td><input type=text name="Number1" id="Number1" required=""></td></tr>
            <tr><td><input type="submit" name="table" value="Table"></td></tr>
            <?php if(isset($_POST['table'])){
            for($i=0;$i<count($ans);$i++){
                        echo '<tr><td>'.$Num1.' * '.($i+1).' = '.$ans[$i].'</td></tr>';
            }}?>
        </table>
        </form>
    </body>
</html>