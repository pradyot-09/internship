function sModal(title,error)
{
alert("asdjasd");	
var modalVar='<div class="modal animated bounce text-left" id="bounce" tabindex="-1" role="dialog" aria-labelledby="myModalLabel36" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h4 class="modal-title" id="myModalLabel36">'+title+'</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">'+error+'</div><div class="modal-footer"><button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">close</button></div></div></div></div></div></div>';      
modalVar.modal('show'); 
}

