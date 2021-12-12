
<?php
    
    include_once 'includes/db.php';
    include_once 'includes/head.php';
    include_once 'includes/header.php';

?>




<main>
<section id="text"><h1>Introdução</h1></div></section>


<?php

$sql = "SELECT * FROM categorias";
$resultado = mysqli_query($conn, $sql);



if($resultado){
    ?>
     <section id="homeCategorias">
     <section id="texto"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled it to make a type specimen book.
 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
 and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
 <ul> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </ul>
</div></section>




        
        <ul>
   

        
        
        <?php



       
        $tabCategoria = 1;
		while($row = mysqli_fetch_array($resultado)){
			


         
            echo '<li>';
            echo '<a href="oque.php?cat=".img src="imagens/categorias/oque.png.   alt="'.$row['CategoriaID'].'"  title="o que" tabindex="'.$tabCategoria.'">';
            
            echo '<img src="imagens/categorias/'.$row['Imagem'].'" alt="'.$row['Descricao'].'" title="'.$row['Descricao'].'" />';
            echo '</a></li>';

            $tabCategoria++;

		}


        ?>
        </ul>
    </section>

        
    <?php
	}
?>






</main>



<?php      
    include_once 'includes/footer.php';
?>


          