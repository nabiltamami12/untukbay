      @extends('layouts.app')
      @section('content')
       <!--       <a href="#"  class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModaledit">add
       </a> -->

       <?php
       $title = 'Kelola Jadwal Pemadaman';?>
       <title>
         <?php echo $title;?>
       </title>

       <script type="text/javascript">


         function showOverlay() {
          $('.overlay').show()
        }
        setTimeout(showOverlay, 2000)
      </script>      

      <div class="overlay">
        <strong class="card-title">Buat jadwal pemadaman</strong>
        <div class="content mt-3">
          <div class="animated fadeIn">
            <div class="card shadow mb-4">

              <div class="modal-body">

               <form action="{{url('/akun/store' )}}" method="POST">
                 @csrf

                 <div class="form-group">
                  <label>Tim</label>
                  <select class="custom-select"  name="tim">

                    <option value="prefentif11">prefentif 11 </option>
                    <option value="prefentif12"> prefentif 12</option>
                    <option value="jajag6"> jajag 6</option>
                    <option value="jajag7">jajag 7 </option>
                    <option value="inspeksi1">inspeksi 1 </option>
                    <option value="inspeksi2">inspeksi 2 </option>
                    <option value="kesilir6"> kesilir 6</option>
                    
                  </select>    
                </div>
                <div class="form-group">
                  <label>username</label>
                  <input type="text" class="form-control" required name="username" value="">
                </div>
                <div class="form-group">
                  <label>password</label>
                  <input type="text" class="form-control" required name="password" value="">
                </div>
                <button type="submit" class="btn btn-primary btn-sm mt-3 rounded">save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- </div> -->

  @endsection