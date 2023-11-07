<?php
        if(isset($mensaje)){
            echo '<div class="container p-5 my-5 border">';
            if($mensaje[0]=='e')
            echo '<h3 class="text-danger">'.$mensaje[1].'</h3>';
            else
            echo '<h3 class="text-access">'.$mensaje[1].'</h3>';
            echo '</div>';
        }
        ?>