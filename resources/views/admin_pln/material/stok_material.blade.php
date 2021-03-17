    @extends('layouts.app')
    @section('content')

    <?php
    $title = ' Menu Material';?>
    <title>
     <?php echo $title;?>
    </title>

    <br>
    <input style="text-transform: uppercase;font-weight: 900;"  disabled  class="form-control " placeholder="<?php echo 'Sistem Informasi Perencanaan Pemadaman Listrik Daerah Banyuwangi Berbasis Web' ?>">

<div class="content">
    @if (session('alert'))
    <div class="alert" role="alert" id="myAlert">
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">SUCCESS</span> {{ session('alert') }}
                <button type="button" onclick="closeAlert()" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @endif
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
                    nama mateial
                  </th>
                  <th style="font-weight: bold">
                    kelompok mateial
                  </th>
                  <th style="font-weight: bold">
                    stok
                  </th>
                  <th style="font-weight: bold; text-align: center;" colspan="2" >

                  </th>
                </thead>
                <tbody >
                 <tr>
                  <?php $number=1;?>
                  @foreach($ori_mat as $mat)
                  <td>{{ $number}}</td>
                  <td>{{ $mat->nama_material }}</td>
                  <td>{{ $mat->kelompok_material }}</td>
                  <td>{{ $mat->stok }}</td>
                  <td class="project-actions text-center">

                    <a style="color: #00bcd4; padding: 0px; background: none"  href="{{url('/material/edit', $mat->id )}}">
                      <span style="font-size: 20px" class="material-icons">
                        create
                      </span>
                    </a>
                  </td>
                  <td>
                    <form action="{{url('/material', $mat->id )}}" method="get">
                      {{-- @csrf
                        @method('DELETE') --}}
                        {{ csrf_field() }}
                        {{  method_field('DELETE') }}
                        <center><button style="color: red; margin-top: 5px;padding: 0px;border: none; background: none"  type="submit">
                         <span style="font-size: 20px" class="material-icons">
                          delete
                        </span>

                      </button> </center>
                    </form>
                  </td>
                </tr>
                <?php $number++;?>  @endforeach

                <a href="#" style="color: #183153;" data-toggle="modal" data-target="#exampleModal"><i  class="fa fa-plus  fa-lg"></i>
                </a>
              </tbody>
              </table>
            </div>
          </div>
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
              <h5 class="modal-title" id="exampleModalLabel">Tambah Material</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{url('/material/store' )}}" method="POST">
               @csrf

               <div class="form-group">
                <label>nama material</label>
                <input type="text" class="form-control" name="nama_material" placeholder="">
              </div>
              <div class="form-group">
                <label>kelompok material</label>
                <input type="text" class="form-control" name="kelompok_material" placeholder="">
              </div>
              <div class="form-group">
                <label>seksen  
                </label>
                <br>
                (*PILIH 1 UNTUK KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA)
                <br> (*PILIH 2 UNTUK KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 2...)
                <br>
                <input type="number" min="1" max="2" class="form-control" name="seksen" placeholder="">
              </div>
              <div class="form-group">
                <label>stok</label>
                <input type="text" class="form-control" name="stok" placeholder="">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">tutup</button>
                <button type="submit" class="btn btn-success">simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
                    @endsection