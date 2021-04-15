<?php
    $titulo = 'Administrar Ciente';
    require_once 'php/cabecera.php'; 
    require_once 'php/menu-admin.php';
?>
    <h2 class="text-center">Cliente</h2>

    <div> 
        <h5 class="ml-4">Buscar por Nombre</h5>
        <ion-icon class="ml-2" name="search-outline" width=""></ion-icon>
        <input type="text" id="bus" value=" " placeholder="buscar cliente" class="align-items-right m-1" name="bus" onkeyup="loadXMLDoc()" required />
        <div id="myDiv"></div>
        <!-- //<script type="text/javascript" src="<?php print constant('URL'); ?>js/ajax.js"></script> -->
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-success m-4"><a class="badge badge-success" href="<?php print constant('URL'); ?>admin/cliente_create">Agregar</a></button>
    </div>

<?php
    require_once 'html/body-final.html';
?>

<script>
function loadXMLDoc()
{
var xmlhttp;

var n=document.getElementById('bus').value;

if(n==''){
document.getElementById("myDiv").innerHTML="";
return;
}

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","<?php print(constant('URL')); ?>admin/cliente_buscar",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("q="+n);
}
loadXMLDoc();
</script>
