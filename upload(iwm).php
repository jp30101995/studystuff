<!DOCTYPE html>
<html>
<body>
<img src="wp-content/uploads/2013/06/bground.jpg" height="700" width="1400">
<div style="position: absolute; z-index: 1; top:50px; left:50px">
<p style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:18px">Please select a file to update here.It is recommanded to write your name in Name field so that we can put your name on our website.</p>
<p style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:18px">Only <span style="color:#039"> pdf </span>file can be uploaded here and maximum size for upload is<span style="color:#039"> 70mb </span>exceed that file will not be uploaded.If you want to still upload that file then please email us on studystuff email ID.</p>

<form action="varify(iwm).php" method="post" enctype="multipart/form-data">
	Name: <input type="text" name="name" value="Enter Name">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload PDF" name="submit">
</form>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64936900-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>