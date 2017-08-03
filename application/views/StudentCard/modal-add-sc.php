<!--Modal Add Left Stuff-->
        <div class="modal" id="modal-add-sc">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">Add Left Stuff</h3>
              </div>
              <div class="modal-body">
                <form action="#" class="form-horizontal" id="form-add-sc" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">ID Student</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="id_student">
                      </div>
                    </div>
                      <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Foto</label>
                          <div class="col-sm-8">
                            <input type="file" class="form-control" name="foto">
                          </div>
                      </div>
                      <div id="gambar"></div>
                  </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="save()">SAVE</button>
              </div>
            </div>
          </div>
        </div>
        <!--  Add Modal Left Stuff -->
