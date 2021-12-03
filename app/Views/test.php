<!DOCTYPE html>
<html lang="en">


    <?php
        if($tabla) {
            foreach ($tabla as $mydata) {
                echo '
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="font-size: 50">'.$mydata['nombre'].'</div>
                    <div class="card-body">
                        <h5 class="card-title">'.$mydata['nombre'].'</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                    </div>
                </div>
            ';
            }
        }

    ?>

</html>




