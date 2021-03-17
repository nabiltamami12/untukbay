@extends('layouts.app')
       @section('content')

<?php
$title = 'Kelola Akun Petugas';?>
 <title>
   <?php echo $title;?>
  </title>

       <br>
                   <input style="text-transform: uppercase;font-weight: 900;"  disabled  class="form-control " placeholder="<?php echo 'Sistem Informasi Perencanaan Pemadaman Listrik Daerah Banyuwangi Berbasis Web' ?>">
     
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title "><?php echo $title;?></h4>
                  <p class="card-category">  </p>
                </div>
                <div class="card-body" >
                  <div class="table-responsive">
                   <table class="table table-hover" >
                      <thead   class=" text-body">
                       <th style="font-weight: bold" >
                          NO
                        </th>
                           <th style="font-weight: bold">
                            tim
                                                    </th>
                           <th style="font-weight: bold">
                        username 
                        </th>
                           <th style="font-weight: bold">
                      password
                        </th>
                        <th style="font-weight: bold; text-align: center;" colspan="2" >
                          
                        </th>
                      </thead>
                      <tbody >

                         <tr>
                          <?php $number=1;?>

                          @foreach($pet as $mat)
                             @if($mat->role!='admin')
                          
                    <td>{{ $number }}</td>
                    <td>{{ $mat->username }}</td>
                    <td>{{ $mat->username }}</td>
                    <td>************</td>


       

                   <!--  <td class="project-actions text-center">

                    <a class="btn btn-info btn-sm pb1" href="{{url('/akun/edit', $mat->id )}}">
                        <i class="fa fa-pencil"></i>
                        edit
                    </a>
                  </td>
 -->
                  <td>
                    <form action="{{url('/akun', $mat->id )}}" method="get">
                    {{-- @csrf
                    @method('DELETE') --}}
                    {{ csrf_field() }}
                    {{  method_field('DELETE') }}
                    <center> <button style="color: red; padding: 0px;border: none; background: none" type="submit">
                      <span style="font-size: 20px" class="material-icons">
delete
</span>
                    </button> </center>
                    </form>
                  
                </td>

              
</tr>
              <?php $number++;?>     @else
                    @endif       @endforeach

           @if (session('alert'))
     <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ session('alert') }}</strong>
      </div>
@endif
   <a href="#" style="color: #183153;" data-toggle="modal" data-target="#exampleModal"><i  class="fa fa-plus  fa-lg "></i>
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
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Petugas</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
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
          
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
              <button type="submit" class="btn btn-success">save</button>
            </div>
        </form>
          </div>
        </div>
      </div>
      </div>
 

    
            @endsection