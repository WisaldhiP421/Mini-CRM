<button type="button" class="btn btn-primary btn-tambah m-2" data-toggle="modal" data-target="#modalTambah">
    Tambah Data
</button>
<table class="table table-light" id="empTable">
    <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Company Name</th>
          <th>Email</th>            
          <th>Phone</th>  
          <th>Gender</th>
          <th>Hobby</th>
          <th></th> 
        </tr>
    </thead>
    <tbody>
        @foreach ($pegawai as $item)
            <tr>
              <td>{{ $item->fname }}</td>
              <td>{{ $item->lname }}</td>
              <td>{{ $item->company->name }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->no_hp }}</td>
              <td>{{ $item->gender }}</td>
              <td>{{ $item->hobby }}</td>
              <td><button type="button" class="btn btn-warning btn-edit m-2"
                        data-url={{ route('pegawai.getPegawai', ['id' => $item->id]) }} data-toggle="modal"
                          data-target="#modalEdit">
                          <i class="bi bi-wrench"></i>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wrench" viewBox="0 0 16 16">
                            <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z"/>
                          </svg>
                    </button>
                    <a class="btn btn-danger btn-delete m-2"
                        href="{{ route('pegawai.delete', ['id' => $item->id]) }}"
                        onclick="return confirm('Apa kamu yakin?')">
                        <i class="bi bi-x-lg"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                      </a>
              </td>
            </tr>
        @endforeach

    </tbody>
</table>
</div>