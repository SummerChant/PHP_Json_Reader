
<section>
    <?php
    $jsondata = file_get_contents("movies.json");
    $json = json_decode($jsondata,true);
    ?>

    <div id = "container">
        <h1>My Favourite Movies</h1>
        <u1>
            <?php
            foreach($json['movies'] as $key => $value){
                echo "<h4>".$value['title']."</h4>";
                echo '<li>Year: '.$value['year'].'</li>';
                echo '<li>Genre: '.$value['genre'].'</li>';
                echo '<li>Director: '.$value['director'].'</li>';
            }

            ?>
        </u1>
    </div>
</section>
