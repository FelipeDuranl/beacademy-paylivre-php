<select>
    <option selected> -- Selecione o dia -- </option>
    <?php

        $dia = 1;
        while($dia <= 31){
            echo "<option>{$dia}</option>";
            $dia++;
        }
    ?>

</select>

<select>
    <option selected> -- Selecione o mes -- </option>
    <?php

        $mes = 1;
        while($mes <= 12){
            echo "<option>{$mes}</option>";
            $mes++;
        }
    ?>

</select>

<select>
    <option selected> -- Selecione o ano -- </option>
    <?php
        $ano = 2022;
        $dia = 1;

        while($ano >= 1900){
            echo "<option>{$ano}</option>";
            $ano--;
        }
    ?>
</select>