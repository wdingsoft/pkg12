<?php

require_once("../../../../../uti/DbStats.php");

$dbs = new DbStats();
//$dbs->get_layer4_symbolic("0");



?>



<style>
div{
float:left;
}
img{
width: 60px;

</style>

<table border="1">
<tr><td>No.</td>
<td>category</td>
<td>words</td>
<td>Modern Symbol</td>
</tr>

<tr><td>1</td>
<td>symbolic</td>
<td><?php $dbs->get_layer4_symbolic("0");?></td>
<td><img src="src/usa_redcross.bmp"/><img src="src/christianity-cross.jpg"/></td>
</tr>

<tr><td>2</td>
<td>crusification</td>
<td><?php $dbs->get_layer4_symbolic("1");?></td>
<td><img src="src/immissa02.jpg"/>
<img src="src/methodist-united03.png"/>
<img src="src/methodist-united04.png"/>
<img src="src/simplex02.jpg"/>
<img src="src/chi-rho02.png"/>
</td>
</tr>

<tr><td>3</td>
<td>christ</td>
<td><?php $dbs->get_layer4_symbolic("2");?></td>
<td>
<img src="src/200px-ArrowCross_or Cross Barbysvg.png"/>
<img src="src/jerusalemcross2.jpg"/>
<img src="src/pommee.png"/>
<img src="src/chad.png"/>
<img src="src/maltese-alt8.png"/>
</td>
</tr>




<tr><td>4</td>
<td>3</td>
<td><?php $dbs->get_layer4_symbolic("3");?></td>
<td><img src="Koch/Koch-114 From a Romanesque Bell.gif"/>
<img src="src/andrew.png"/>
<img src="src/lutheran-mis.png"/>
</td>
</tr>



<tr><td>5</td>
<td>4</td>
<td><?php $dbs->get_layer4_symbolic("4");?></td>
<td><img src="src/baptism1.gif"/>
<img src="src/iota-chi.png"/></td>
</tr>


<tr><td>6</td>
<td>5</td>
<td><?php $dbs->get_layer4_symbolic("5");?></td>
<td><img src="Koch/Koch-121 Processional Cross.gif"/><img src="src/usa_redcross.bmp"/></td>
</tr>


<tr><td>7</td>
<td>6</td>
<td><?php $dbs->get_layer4_symbolic("6");?></td>
<td><img src="src/lauburu.png"/><img src="src/nkontim.png"/></td>
</tr>


<tr>
<td>8</td><td>Three Crosses on Golgotha</td>
<td><?php $dbs->get_layer4_symbolic("7");?></td>
<td>
<img src="src/shepherd.png"/>
<img src="Koch/Koch-131 Three Crosses on Golgotha.gif"/>
<img src="Koch/Koch-130 The Cross on Golgotha.gif"/>
</td>
</tr>


<tr>
<td>8</td><td>8</td>
<td><?php $dbs->get_layer4_symbolic("8");?></td>
<td>
<img src="src/shepherd.png"/>
</td>
</tr>

<tr>
<td>8</td><td>Three Crosses on Golgotha</td>
<td><?php $dbs->get_layer4_symbolic("9");?></td>
<td>
<img src="src/shepherd.png"/>
</td>
</tr>




<tr>
<td>a</td><td>b</td>
<td><?php $dbs->get_layer4_symbolic("a");?></td>
<td><img src="src/equipollee01.png"/><img src="src/usa_redcross.bmp"/></td>
</tr>


<tr>
<td>b</td><td>Wisconsin Evangelical Lutheran Synod
</td>
<td><?php $dbs->get_layer4_symbolic("b");?></td>
<td><img src="src/equipollee01.png"/><img src=""/></td>
</tr>


<tr>
<td>c</td><td>b</td>
<td><?php $dbs->get_layer4_symbolic("c");?></td>
<td><img src="src/lutheran-wis.png"/><img src="src/src/usa_redcross.bmp"/></td>
</tr>


<tr>
<td>d</td><td>b</td>
<td><?php $dbs->get_layer4_symbolic("d");?></td>
<td><img src="src/usa_redcross.bmp"/><img src="src/usa_redcross.bmp"/></td>
</tr>


</table>