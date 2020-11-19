<?php
    echo"home mentor";
?>
                   <p class="d-inline-block ml-1 text-light text-break">Xin chào, <span class="text-warning">
                    <?php
                        // $first_name = Session::get('first_name');
                        // if($first_name){
                        //     echo $first_name;
                        // }
                        $name = Session::get('name');
                        if($name){
                            echo $name;
                        }
                    ?>
