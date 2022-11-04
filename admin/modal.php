<!-- CREATE NEW ANNOUNCEMENT MODAL -->

<div class="modal fade" id="createToda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Announcement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title of Event" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Date</label>
              <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" required>
            </div>
            <div class="form-group mt-2">
              <label for="exampleInputPassword1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modal-btn-baptismal">Create Now</button>
        </form>
      </div>
    </div>
  </div>
</div>