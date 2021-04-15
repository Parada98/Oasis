<?php
    $titulo = 'Administrar Usuario';
    require_once 'php/cabecera.php'; 
    require_once 'php/menu-admin.php';
    session_start();
?>
 <style>
#my_fotografia{
 width: 320px;
 height: 240px;
 border: 1px solid black;
}
</style>
<center>
<div id="my_fotografia"></div>
<br />
<input type=button value="Take Snapshot" onClick="take_snapshot()">
<div id="results" ></div>
 </center>
<script type="text/javascript" src="<?php print constant('URL'); ?>js/foto.js"></script>
<script language="JavaScript">

 Webcam.set({
  width: 320,
  height: 240,
  image_format: 'jpeg',
  jpeg_quality: 90
 });
 Webcam.attach( '#my_fotografia' );
function take_snapshot() {

    // take snapshot and get image data
    Webcam.snap( function(data_uri) {
        Webcam.upload( data_uri, '<?php print constant('URL'); ?>php/guardar_foto.php', function(code, text,Name) {
            document.getElementById('results').innerHTML = 
            '' + 
			'<img src="' + data_uri + '"style=" width: 300px;">';
    } );
  
  
 } );
}

</script>

<?php
    require_once 'html/body-final.html';
?>