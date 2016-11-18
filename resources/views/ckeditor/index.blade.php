<!DOCTYPE html>
<html>
<head>
	<title>CKEditor With KCFinder</title>
	<script src="{{asset('ckeditor/ckeditor.js')}}"></script> 
</head>
<body>
	<center>
		<div style="width:600px;">
			<h3>Membuat Editor dengan CKEditor di Laravel 5.2</h3>
			<textarea id="ckeditor"  class="ckeditor"></textarea>
		</div>
	</center> 
	<script type="text/javascript">  
		CKEDITOR.replace( 'ckeditor' );  
	</script>
</body>
</html>