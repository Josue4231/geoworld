<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';

if (isset($_GET['country']) && !empty($_GET['country'])){
    $country = ($_GET['country']);
    $pays = getpayslangue($country); 
    //var_dump($pays);  
}
?>


<div class="container">
<?php
echo "<h1> Les Langues les plus parler en  " . $country . "</h1>";
echo "<h1> $pays->Country </h1>"; ?>
<div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>

<th>idCountry</th>
<th> Name</th> 
<th> Continent</th>
<th> Population </th>
<th> Region </th>
 

</tr>
</thead>
<tbody>
<?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
          foreach($pays as $pays) : 
          
          $wiki_url = "https://fr.wikipedia.org/wiki/" . urlencode($pays->Country); 
          $youtube ="https://www.youtube.com/results?search_query=". urlencode($pays->Continent); ?>
          <tr>
<td> <?php echo $pays->idCountry ?></td>
<td> <a href="<?php echo $wiki_url; ?>" target="_blank"> <?php echo $pays->Country ?></a></td>
<td> <a href="<?php echo $youtube; ?>" target="_blank"> <?php echo $pays->Continent ?></a></td>  
<td> <?php echo $pays->Population ?></td> 
<td> <?php echo $pays->Region ?></td> 



</tr>
<?php endforeach; ?>
</tbody>
</table>

<style>
  /* Style du tableau */
  table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  }

  thead {
    background-color: #4CAF50;
    color: white;
  }

  th, td {
    padding: 12px;
    text-align: center;
    border: 1px solid #ddd;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #ddd;
  }

  th {
    font-size: 1.1em;
    font-weight: bold;
  }

  td {
    font-size: 1em;
  }

  .container {
    margin-top: 20px;
    font-family: 'Arial', sans-serif;
  }

  h1 {
    text-align: center;
    color: #333;
    font-family: 'Arial', sans-serif;
  }

  .table {
    width: 100%;
    margin-top: 20px;
  }
</style>


    
    

