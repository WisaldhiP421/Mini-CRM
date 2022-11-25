   <!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
   <div class="modal-content">
       <form method="post" action="{{ route('pegawai.create') }}">
           @csrf
           <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
               <div class="form-group row">
                   <label for="fname" class="col-sm-3 col-form-label">First Name</label>
                   <div class="col-sm-9">
                       <input type="text" class="form-control" name="fname" id="fname" placeholder="" value="">
                   </div>
               </div>
               <div class="form-group row">
                 <label for="lname" class="col-sm-3 col-form-label">Last Name</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" name="lname" id="lname" placeholder="" value="">
                 </div>
             </div>
             <div class="form-group row">
               <label for="email" class="col-sm-3 col-form-label">Email</label>
               <div class="col-sm-9">
                 <input type="email" class="form-control" name="email" id="email" placeholder="" value="">
               </div>
             </div>
             <div class="form-group row">
               <label for="no_hp" class="col-sm-3 col-form-label">No Hp</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="" value="">
               </div>
             </div>


             <div class="form-group row">
               <label for="gender" class="col-sm-3 form-label">Gender</label>
               <div class="col-sm-9">
                 <div class="form-check form-check-inline mr-3">
                   <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                   <label for="male" class="form-check-label">Male</label>
                 </div>
                 <div class="form-check form-check-inline mx-3">
                   <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                   <label for="female" class="form-check-label">Female</label>
                 </div>
               </div>
             </div>


             <div class="form-group row">
               <label for="hobby" class="col-sm-3 form-label">Hobby</label>
               <div class="col-sm-9">
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Travelling">
                   <label for="hobby" class="form-check-label">Travelling</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Swimming">
                   <label for="hobby" class="form-check-label">Swimming</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Reading">
                   <label for="hobby" class="form-check-label">Reading</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Cooking">
                   <label for="hobby" class="form-check-label">Cooking</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Photography">
                   <label for="hobby" class="form-check-label">Photography</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Singing">
                   <label for="hobby" class="form-check-label">Singing</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Dancing">
                   <label for="hobby" class="form-check-label">Dancing</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Gardening">
                   <label for="hobby" class="form-check-label">Gardening</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Watching">
                   <label for="hobby" class="form-check-label">Watching</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Painting">
                   <label for="hobby" class="form-check-label">Painting</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Cycling">
                   <label for="hobby" class="form-check-label">Cycling</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Self Defense">
                   <label for="hobby" class="form-check-label">Self Defense</label>
                 </div>
                 </div>
               </div>

               <div class="form-group row">
                 <div class="col-sm-3">
                   <label>Company</label>
                 </div>
                 <div class="col-sm-9">
                   <select class="custom-select" name="user_id">
                     <option selected>Open this select menu</option>
                     @foreach ($company as $item)
                         <option value="{{ $item->id }}">{{ $item->name }}</option>
                     @endforeach
                   </select>

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
       <form method="post" action="{{ route('pegawai.update') }}">
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
                   <label for="fname" class="col-sm-3 col-form-label">First Name</label>
                   <div class="col-sm-9">
                       <input type="text" class="form-control" name="fname" id="fname" placeholder="" value="">
                   </div>
               </div>
               <div class="form-group row">
                 <label for="lname" class="col-sm-3 col-form-label">Last Name</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" name="lname" id="lname" placeholder="" value="">
                 </div>
             </div>
             <div class="form-group row">
               <label for="email" class="col-sm-3 col-form-label">Email</label>
               <div class="col-sm-9">
                 <input type="email" class="form-control" name="email" id="email" placeholder="" value="">
               </div>
             </div>
             <div class="form-group row">
                 <label for="no_hp" class="col-sm-3 col-form-label">No Hp</label>
                 <div class="col-sm-9">
                     <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="" value="">
                 </div>
             </div>
             <div class="form-group row">
               <label for="gender" class="col-sm-4 form-label">Gender</label>
               <div class="col-sm-8">
                 <div class="form-check form-check-inline">
                   <input type="radio" class="form-check-input gender" name="gender" id="male" value="male">
                   <label for="male" class="form-check-label">Male</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="radio" class="form-check-input gender" name="gender" id="female" value="female">
                   <label for="female" class="form-check-label">Female</label>
                 </div>

               </div>
             </div>
             <div class="form-group row">
               <label for="hobby" class="col-sm-4 form-label">Hobby</label>
               <div class="col-sm-8">
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Travelling">
                   <label for="hobby" class="form-check-label">Travelling</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Swimming">
                   <label for="hobby" class="form-check-label">Swimming</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Reading">
                   <label for="hobby" class="form-check-label">Reading</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Cooking">
                   <label for="hobby" class="form-check-label">Cooking</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Photography">
                   <label for="hobby" class="form-check-label">Photography</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Singing">
                   <label for="hobby" class="form-check-label">Singing</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Dancing">
                   <label for="hobby" class="form-check-label">Dancing</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Gardening">
                   <label for="hobby" class="form-check-label">Gardening</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Watching">
                   <label for="hobby" class="form-check-label">Watching</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Painting">
                   <label for="hobby" class="form-check-label">Painting</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Cycling">
                   <label for="hobby" class="form-check-label">Cycling</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input type="checkbox" class="form-check-input" name="hobby[]" id="hobby" value="Self Defense">
                   <label for="hobby" class="form-check-label">Self Defense</label>
                 </div>
               </div>
             </div>
               <div class="form-group row">
                 <label>Company</label>
                   <select class="form-control" name="user_id">
                     @foreach ($company as $item)
                         <option value="{{ $item->id }}">{{ $item->name }}</option>
                     @endforeach
                   </select>
             </div>  
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
               <button type="submit" class="btn btn-primary">Simpan</button>
           </div>
           
       </form>
   </div>
</div>