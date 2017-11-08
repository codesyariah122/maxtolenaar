  <div id="myInput" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Input Data Anda</h4>
        </div>
   <div class="modal-body">
<?require_once "setmodalform.php";?>
      <?$form->getform();?>
            <div class="form-group">
      <?$labelfullname->getlabel();?>
      <?$fullname->getinput();?>
            </div>
            <div class="form-group">
      <?$labelemail->getlabel();?>
      <?$inputemail->getinput();?>
            </div>
            <div class="form-group">
      <?$labelphone->getlabel();?>
      <?$inputphone->getinput();?>
            </div>
            <div class="form-group">
     <?$labeladdress->getlabel();?>
     <?$contactaddress->gettextarea();?>
            </div>
            <div class="form-group">
     <?$labelabout->getlabel();?>
     <?$contactabout->gettextarea();?>
            </div>
</div>
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-loading-text="Cancel diproses" data-dismiss="modal">Cancel</button>
      <?$submit->getbutton();?>
   <?$form->closeform();?>
        </div>
      </div>
    </div>
  </div>