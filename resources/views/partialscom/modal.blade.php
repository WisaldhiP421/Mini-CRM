<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="post" action="{{ route('company.create') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value="">
                    </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" id="email" placeholder="" value="">
                  </div>
              </div>
              <div class="form-group row">
                <label for="logo" class="col-sm-3 col-form-label">Company Logo</label>
                <div class="col-sm-9">
                  <input class="form-control" type="file" id="logo" name="logo">
                </div>
              </div>

                <div class="form-group row">
                    <label for="website" class="col-sm-3 col-form-label">Website</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="website" id="website" placeholder="" value="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="false">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="post" action="{{ route('company.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="form-control" name="id" id="id" value="">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="" value="">
                    </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                      <input type="email" class="form-control" name="email" id="email" placeholder="" value="">
                  </div>
              </div>
              <div class="mb-3">
                <label for="logo" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="logo" name="logo">
              </div>
                <div class="form-group row">
                    <label for="website" class="col-sm-3 col-form-label">Website</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="website" id="website" placeholder="" value="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>