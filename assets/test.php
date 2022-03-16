
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Send Money</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <div>
     <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Mobile</span>
  <input type="text" class="form-control" id="user_mobile_no" placeholder="enter user mobile no..." aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Amount</span>
  <input type="text" class="form-control" id="amount" placeholder="enter amount to send.." aria-label="Username" aria-describedby="basic-addon1">
</div>
</div>
<div class="d-flex justify-content-center">
<div class="spinner-border" role="status"  id="loading" style="display:none">
  <span class="visually-hidden">Loading...</span>
</div>
</div>

<div class="alert alert-success" role="alert" id="s_msg" style="display:none">

</div>
<div class="alert alert-danger" role="alert" id="e_msg" style="display:none">

</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hide</button>
        <button type="button" id="send_money" class="btn btn-primary">Send Money</button>
      </div>
    </div>
  </div>
</div>