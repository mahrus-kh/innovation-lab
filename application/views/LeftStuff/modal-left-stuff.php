<!--Modal Add Left Stuff-->
        <div class="modal" id="modal-left-stuff">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">Add Left Stuff</h3>
              </div>
              <div class="modal-body">
                <form action="#" class="form-horizontal" id="form-left-stuff" enctype="multipart/form-data">
                  <div id="id_update"></div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Stuff Name</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="stuff_name">
                      </div>
                    </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Location</label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name="location">
                          </div>
                      </div>
                      <div id="posted_at"></div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Who Posted</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name="who_posted">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Etc</label>
                          <div class="col-sm-8">
                            <textarea class="form-control" rows="2" name="etc"></textarea>
                          </div>
                      </div>
                      <div id="status"></div>
                      <div id="taken_at"></div>
                      <div id="who_taken"></div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="act" onclick="save()">SAVE</button>
              </div>
            </div>
          </div>
        </div>
        <!--  Add Modal Left Stuff -->
