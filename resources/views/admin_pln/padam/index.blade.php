      @extends('layouts.app')
      @section('content')

      <?php
      $title = 'Kelola Jadwal Pemadaman';?>
      <title>
       <?php echo $title;?>
      </title>

      <!-- <style>
        input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
          /* display: none; <- Crashes Chrome on hover */
          -webkit-appearance: none;
          margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
      }

      input[type=time] {
          -moz-appearance:textfield; 
      }
      </style> -->

      <style>
        .search-box {
          position: absolute;
          top: -14px;
          left: 10em;
          transform: translate(0%, 50%);
          background: #ffff00;
          height: 48px;
          border-radius: 48px;

        }

        .search-box:hover > .inp-search {
          width: 200px;
          padding: 0 8px;

        }

        .search-box:hover > .btn-search {
          background: none;

        }

        .inp-search {
          border: #FFFF00;
          background: none;
          outline: #0000ff;
          float: right;
          padding: 0;
          color: darkblue;
          font-weight: 900;
          font-size: 16px;
          transition: 1s;
          line-height: 48px;
          width: 0;
        }

        .btn-search {
          color: #0000fe;
          float: left;
          width: 48px;
          height: 48px;
          border-radius: 50%;
          border-color: #0000ff;
          background: none;
          display: flex;
          justify-content: center;
          align-items: center;
          text-decoration: none;
        }
      </style>
      <br>
      <input style="text-transform: uppercase;font-weight: 900;"  disabled  class="form-control " placeholder="<?php echo 'Sistem Informasi Perencanaan Pemadaman Listrik Daerah Banyuwangi Berbasis Web' ?>">

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title "><?php echo $title;?></h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body" >
                  <div class="table-responsive">
                   <table class="table table-hover" >
                    <thead   class=" text-body">
                     <th style="font-weight: bold" >
                      NO
                    </th>
                    <th style="font-weight: bold">
                      Tanggal
                    </th>
                    <th></th>
                    <th style="font-weight: bold">
                      Waktu
                    </th>
                    <th style="font-weight: bold">
                     penyulang
                   </th>
                   <th style="font-weight: bold">
                    Wilayah Padam
                  </th>
                  <th style="font-weight: bold">
                    Tim
                  </th>
                  <th style="font-weight: bold" colspan="2">
                    Pekerjaan
                  </th>
                  <th style="font-weight: bold">

                  </th>
                  <th style="font-weight: bold">
                    Status
                  </th>
                  <th style="font-weight: bold; color: black ;text-align: center;" colspan="2" >

                  </th>
                </thead>
                <tbody >
                 <tr>

                  <?php $number=1;?>
                  @if(Auth::user()->role=='admin')
                  @foreach($pemadaman_admin as $mat)
                  <td>{{ $number }}</td>
                  <td colspan="2">{{Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y')}}</td>
                  <td>{{ $mat->awal_padam }} - {{ $mat->akhir_padam }}</td>
                  <td>{{ $mat->penyulang }}</td>
                  <td>{{ $mat->trafo_cek->kode_trafo }} - {{ $mat->trafo_cek->alamat }}</td>
                  <td>{{ $mat->tim }}</td>
                  <td colspan="2">{{ $mat->deskripsi_pekerjaan }}</td>
                  <td></td>
                  @if($mat->status != 'Sedang Dikerjakan')
                  <td >{{ $mat->status }}</td>
                  @else
                  <td ><a href="  {{ url('padam/status', $mat->id) }}">{{ $mat->status }}</a></td>
                  @endif




                  <td class="project-actions text-center">

                    <a style=" color: #00bcd4; padding: 0px; background: none;"   href="{{url('/padam/edit', $mat->id )}}">
                      <span style="font-size: 20px" class="material-icons">
                        create
                      </span>

                    </a>
                  </td>
                  <td>
                    <form action="{{url('/padam', $mat->id )}}" method="get">
                      {{-- @csrf
                        @method('DELETE') --}}
                        {{ csrf_field() }}
                        {{  method_field('DELETE') }}
                        <center> <button style="color: red; margin-top: 5px;padding: 0px;border: none; background: none"  type="submit">
                         <span style="font-size: 20px" class="material-icons">
                          delete
                        </span>
                      </button> </center>
                    </form>
                  </td>

                </tr>    

                <?php $number++;?>@endforeach

      <!-- <form action="{{ url()->current() }}">
          <div class="col-md-11">
              <input type="text" name="keyword"  placeholder="Search users...">
          </div>
          <div class="col-md-1">
              <button type="submit" class="btn btn-primary">
                  Search
              </button>
          </div>
        </form> -->

      <!-- <div class="search-box">
        <form action="{{ url()->current() }}">
            <input class="inp-search" type="text" name="keyword" />
            <button class="btn-search" >
              <i class="fa fa-search" type="submit"></i>
            </button>
            </form>

          </div>
        -->

        @if (session('alert'))
        <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ session('alert') }}</strong>
        </div>
        @endif

        <a href="#" style="color: #183153;" data-toggle="modal" data-target="#exampleModal"><i  class="fa fa-plus  fa-lg "></i>
        </a></t>

        @else

        @foreach($pemadaman_petugas as $mat)
        <td>{{ $number }}</td>
        <td colspan="2">{{Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y')}}</td>
        <td>{{ $mat->awal_padam }} - {{ $mat->akhir_padam }}</td>
        <td>{{ $mat->penyulang }}</td>
        <td>{{ $mat->trafo_cek->kode_trafo }} - {{ $mat->trafo_cek->alamat }}</td>
        <td>{{ $mat->tim }}</td>
        <td colspan="2">{{ $mat->deskripsi_pekerjaan }}</td>
        <td></td>
        <td> {{$mat->status}} </td>
        <td class="project-actions text-center">

          <a class="btn btn-info btn-sm pb1" href="{{ url('/kondisi_material') }}">

            Cek
          </a>
        </td>
        <td>
        </td>
      </tr>    

      <?php $number++;?>@endforeach

      </div>  
      @if (session('alert'))

        <br>
        <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ session('alert') }}</strong>
        </div>

        @else

          @endif          
          @endif
        </tbody>
      </table>
            </div>
          </div>
        @if(Auth::user()->role=='admin')
        <?php echo $pemadaman_admin->render(); ?>
        @else
        <?php echo $pemadaman_petugas->render(); ?>
        @endif
        </div>
      </div>
    </div>
  </div>
</div>

      <!-- add -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-lg modal-right" role="document">
          <div class="modal-content">
            <div class="modal-header alert alert-warning">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Pemadaman</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{url('/padam/store' )}}" method="POST">
               @csrf

               <div style="padding-left:  8rem" class="form-group">




                <label for="shootdate">Tanggal:</label>
                <input required   type="date" name="jadwal_padam" id="shootdate" title="Tanggal" min="<?php echo date('Y-m-d'); ?>" />
                <label style="padding-left:  30px" for="shootdate">Mulai Padam:</label>
                <input required name="awal_padam" type="time"  >
                <label style="padding-left:  30px" for="shootdate">Selesai Padam:</label>
                <input required name="akhir_padam"  type="time">
              </div>


              <div class="form-group">
                <label class="form-check-label">Penyulang</label>
                <select class="custom-select" required  name="penyulang">

                  <option value="kesilir">kesilir </option>
                  <option value="dasri"> dasri</option>
                  <option value="purwoharjo"> purwoharjo</option>
                  <option value="jajag">jajag </option>
                  <option value="bsi1">bsi 1 </option>
                  <option value="bsi2">bsi 2 </option>
                  <option value="blokagung"> blokagung</option>

                </select>    
              </div>
              <div class="form-group">
                <label class="form-check-label">Wilayah Padam</label>
                <select class="custom-select" required name="id_trafo">
                  @foreach($data_trafo as $mat)
                  <option value="{{$mat->id}}">{{ $mat->kode_trafo }} - {{ $mat->alamat }} </option>
                  @endforeach
                </select>  
              </div>
              <div class="form-group">
                <label>Tim</label>
                <select class="custom-select" required name="tim">

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
                <label  class="form-check-label">Pekerjaan</label>
                <input type="text" class="form-control" required name="deskripsi_pekerjaan" placeholder="">
              </div>
      <!--                           <div class="form-group">
                                  <label>Unit Kerja</label>
                                  <input type="text" class="form-control" disabled="true" name="unit_kerja" placeholder="pln ulp jajag">
                                </div> -->
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                                  <button type="submit" class="btn btn-success">save</button>
                                </div>


                                @foreach($pemadaman_petugas as $mat)
                                <input type="text" name="id_trafo" value="{{$mat->id_trafo}}" style="display: none">
                                @endforeach
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      @endsection