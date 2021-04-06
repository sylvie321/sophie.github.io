<?php



?>
<hr>
<div class="panel panel-primary">
    <div class="panel-heading">Fiche de frais du mois 
        <?php echo $nom . '-' . $mois ?> : </div>
    
</div>
<div class="panel panel-info">
    <div class="panel-heading">Eléments forfaitisés</div>
    <table class="table table-bordered table-responsive">
        <tr>
            <td>Nom</td><td>mois</td><td>idfraisforfait</td><td>quantite</td>
        </tr>
         <?php
            foreach( $fichesFrais as $unFrais){
        $nomChoisi= $unFrais['nom'];
        $moisChoisi=$unFrais['mois'];
        $idFrais=$unFrais['idfraisforfait'];
        $quantite=$unFrais['quantite'];?>
        <tr>
           
            <td><?php
            echo $nomChoisi; ?>
            
            </td>
           
            <td><?php
            echo $moisChoisi;?>
            
            </td>
            <td><?php
            echo $idFrais;?>
            
            </td>
            <td><?php
            echo $quantite;?>
            
            </td>
            
        </tr>
        <?php
            }?>
        
    </table>


