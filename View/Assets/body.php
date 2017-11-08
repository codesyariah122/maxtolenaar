<body> 
<div class ="container-fluid">
<%
$form=new Form();
//$form->setform($_SERVER['PHP_SELF'],"post","role");
$form->setform("","post","role");
$form->getform();
%>
<div class="table-responsive">
<table class="table table-hover" cellpadding="15" border="0">
<?include 'btn.php';?>
</table>
</div>
</form>
<%=$form->closeform();%>
</div>