<table border="2" width="500px" height="500px">

    <?php for ($i = 0; $i < 8; $i++) { ?>
        <tr>
            <?php for ($t = 0; $t < 8; $t++) { ?>
                <?php if (($t + $i) % 2 == 1) { ?>
                    <td style='background-color: black;'>
                    </td>
                <?php } else { ?>
                    <td>

                    </td>
                <?php } ?>
            <?php } ?>
        </tr>
    <?php } ?>

</table>

<br>
<hr>
<br>
<hr>
<br>

<table border="2" width="500px" height="500px">
    <?php
    for ($i = 0; $i < 8; $i++) {

        echo "<tr>";
        for ($x = 0; $x < 8; $x++) {
            $row = ($x + $i) % 2;
            if ($row == 0) {
                echo "<td style='background-color: black;'></td>";
            } else {

                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>