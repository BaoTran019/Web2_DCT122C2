<?php
    echo('Hello from PHP<br/>');
?>
<select>
    <?php
        $s='';
        for($i=1950; $i<=2020; $i++){
            $s.='<option>'.$i.'</option>';
        }
        echo($s);
    ?>
</select>