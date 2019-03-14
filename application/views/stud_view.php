<?php ?>
<html>
<body>
<table>
    <tr>
        <td>
            id
        </td>
        <td>
            Name
        </td>
        <td>
            Address
        </td>
        <td>
            Mobile No.
        </td>
    </tr>
    <?php
    foreach ($records as $r){
        echo "<tr>";
        echo "<td>".$r->sid."</td>";
        echo "<td>".$r->snm."</td>";
        echo "<td>".$r->saddress."</td>";
        echo "<td>".$r->smob."</td>";
        echo "<td><a href='http://localhost:3000/CodeIgniterdemo/index.php/stud_controller/delete_stud/".$r->sid."'>Delete</a> </td>";
        echo "</tr>";
    }
    ?>
</table>
<a href="http://localhost:3000/CodeIgniterdemo/index.php/stud_controller/add_stud_view">Add</a>
</body>
</html>