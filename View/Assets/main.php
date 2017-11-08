<div class="container">
  <div class="bs-example">
    <div class="panel-group" id="accordion">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h4 class="panel-title">
               <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
<?
if(isset($_REQUEST['device'])){
$device=$_REQUEST['device'];
echo $device;
}else{
?>
Device Information
<?}?>
</a>
</p>
      </div>

  <div id="collapseOne" class="panel-collapse collapse in">
<%if(!isset($_REQUEST['device'])){%>
<div class="panel-body">
<h4 class='text-danger'><%=ConstModel::LOGOS;%></h4>
<%=ConstModel::NoteDefDevice;%>
</div>
<%}else{%>
<div class="panel-body">
<%include_once('UserInfoAssets.php');%>
          </div><%}%>
        </div>
      </div>

 <div class="panel panel-success">
        <div class="panel-heading">
          <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Input Data</a>
                </p>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
            <p>untuk Input data silahkan klik tombol di bawah ini, isi form input dengan benar dan sesuai.</p>

<button type="button" class="btn btn-warning" data-loading-text="Form Disiapkan..." data-toggle="modal" data-target="#myInput" data-title="Inputdata">Input Data</button>
  <!-- Modal HTML -->
<%include_once 'View/Form/modal.php';%>
<%include_once 'View/Method/proses.php';%>
          </div>
        </div>
      </div>

<div class="panel panel-danger">
        <div class="panel-heading">
          <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Data Table</a>
                </p>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
          <div class="panel-body">
<%
$ambil=new selectData();
$ambil->selectData();
//include 'tab.php';
%>
          </div>
        </div>
      </div>
    </div>
<div class="container">
 <%=ConstModel::NotePanel;%>
<%if(isset($_GET['id'])){%>
<%if($_GET['id']=='data/sukses/'){%>
 <%=ConstModel::NoteSuccess;%>
<%}%>
<%if($_GET['id']=='data/kosong/'){%>
<%=ConstModel::NoteDanger;%>
<%}%>
<%if($_GET['id']=='alamat/salah/'){%>
<%=ConstModel::NoteFalseAlamat;%>
<%}%> 
<%if($_GET['id']=='karakter/kurang/'){%>
<%=ConstModel::NoteCharacterFalse;%>
<%}}%>

</div>
  </div>
</div>