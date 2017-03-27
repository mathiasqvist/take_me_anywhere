<?php 
	include 'includes/header.php';
    include 'includes/array.php';
?>
    <section id="worldmap"> <img src="images/worldmap.jpg">
        <div class="wrapper">
            <button type="button" onclick="playSound();" id="knap">{{ message }}</button>
        </div>
    </section>
    <script>
        var wrapper = new Vue({
            el: '.wrapper'
            , data: {
                message: 'Take Me Anywhere'
            }
        })
    </script>
    <article class="modal">
        <div id="resultdiv">
            <h1 id="result">You are going to <?php echo $a[$random_key]."!";?></h1>
            <p id="tekstboks">
                <?php include 'includes/info.php';?>
            </p>
        </div> <img id="resultimg" src="images/<?php $a = str_replace(' ', '_', $a); echo $a[$random_key]; ?>.jpg" alt="Pictures of destination" </img>
        <a href="index.php">
            <button type="button" id="knapto">Try again!</button>
        </a>
    </article>
    <?php 	
	include 'includes/footer.php';
?>