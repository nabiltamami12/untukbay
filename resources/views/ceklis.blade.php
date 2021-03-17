@extends('layouts.app')
       @section('content')
<div class="overlay">
<!-- <div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
        <div class="modal-dialog modal-notify modal-lg modal-right" role="document">
          <div class="modal-content">
            <div class="modal-header alert alert-warning">
              <h5 class="modal-title" id="exampleModalLabel">Cek  Kondisi Trafo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
  
              
              <div class="form-group">
                            <label>Tipe Trafo</label>
                            <select class="custom-select" style="
  font-size: 14px;
  line-height: 1.42857;
  color: #000;
  font-weight: 900;
  font-family:serif;
                            " name="form_select" onchange="showDiv(this)">
                               <option id="0" value="0" selected="selected">No</option>
                               @foreach($padam as $mat)
                              @if($mat->trafo_cek->seksen=='1' && $mat->id == $id_jadpet)
                               <option value="{{ $mat->trafo_cek->seksen }}">{{Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y')}} -- {{ $mat->trafo_cek->kode_trafo }} -- {{ $mat->trafo_cek->alamat }} -- {{ $mat->status }}</option> 
                              @elseif ($mat->trafo_cek->seksen=='2' && $mat->id == $id_jadpet)
                              <option value="2">{{Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y')}} -- {{ $mat->trafo_cek->kode_trafo }} -- {{ $mat->trafo_cek->alamat }} -- {{ $mat->status }}</option>
                              @elseif ($mat->trafo_cek->seksen=='2' && $mat->id == $id_jadpet)
                              <option value="2">{{Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y')}} -- {{ $mat->trafo_cek->kode_trafo }} -- {{ $mat->trafo_cek->alamat }} -- {{ $mat->status }}</option>
                              @elseif ($mat->trafo_cek->seksen=='2' && $mat->id == $id_jadpet)
                              <option value="2">{{Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y')}} -- {{ $mat->trafo_cek->kode_trafo }} -- {{ $mat->trafo_cek->alamat }} -- {{ $mat->status }}</option>
                              @elseif ($mat->trafo_cek->seksen=='2' && $mat->id == $id_jadpet)
                              <option value="2">{{Carbon\Carbon::parse($mat->jadwal_padam)->translatedFormat('l, d F Y')}} -- {{ $mat->trafo_cek->kode_trafo }} -- {{ $mat->trafo_cek->alamat }} -- {{ $mat->status }}</option>
                              @else
                               <!--  -->
                              @endif
                               @endforeach
                              <!--  <option value="2-4">KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)</option> 
                               <option value="2-1">KONTRUKSI TRAFO 2 PORTAL - PEMASARAN</option> -->

                            </select>    
                        </div>
                 
       
               <form action="{{url('/ceklis/store' )}}" method="POST">

                 @csrf

                 <?php $number=1;
                
                 ?>
                    
                         @foreach($kelompok_material as $mat)
               

               <?php  
                 $id_cekbox = '1-'.$number;
                
                
                 $material = 'material'.$number;

                 
                 ?>
                           <div class="form-check" id="{{$id_cekbox}}" style="display: none; text-transform: uppercase;font-weight: 900;font-family:serif;">
                      <label class="form-check-label" for="defaultCheck1">
                      <input  type="checkbox" id="{{$material}}" 
onchange="valueChanged()"  name="material[]"   >
                        {{ $mat->kelompok_material }}
                      </label>
                      </div>  
                <?php for ($i=10; $i <15 ; $i++) { 
                  $komponen = 'komponen'.$i;
               
                 $keterangan = 'keterangan'.$i;
                 $baik = 'baik'.$i;
                 $buruk = 'buruk'.$i;
                 $jumlah = 'jumlah'.$i;
                ?>

                       <div id="{{$komponen}}"  class="form-check" style="display:none;">
                            @foreach($nama_material as $mat)
                       <label class="form-check-label" for="defaultCheck1">
                       <?php
   $b=1;
                 $a = 'a'.$b;
                        ?>
                        {{ $mat->nama_material }}
                      
                        <input  type="radio" id="{{$baik}}"  value="baik" name="{{$a}}" checked="checked" 
onclick="document.getElementById('{{$jumlah}}').disabled = true;  document.getElementById('{{$keterangan}}').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="{{$buruk}}"  value="buruk" name="{{$a}}" 
onclick="document.getElementById('{{$jumlah}}').disabled = false; document.getElementById('{{$keterangan}}').disabled = false;"
                         >
                        buruk
                         <input  placeholder="jumlah" required type="number"  id="{{$jumlah}}" name="{{$jumlah}}" disabled="disabled" >
                         <textarea  type="text"  required  id="{{$keterangan}}" placeholder="keterangan"   name="{{$keterangan}}" disabled="disabled" ></textarea>   
                                 

                      </label>
                        @endforeach
                         <?php $b++;                          
                             ?>  
                    </div>
                         
                        <?php }?>   


                            <?php $number++;                          
                             ?>    
                            
                              @endforeach
 


                         @foreach($padam as $mat)
<input type="text" name="id_trafo" value="{{$mat->id_trafo}}" style="display: none">
<input type="text" name="id_padam" value="{{$mat->id}}" style="display: none">
@endforeach
                        
       
     
       
              <button type="submit" class="btn btn-success">save</button>

             </form>
     

  <!--  ---------------Show Checkbox--------------- -->
           <script>

function showDiv(select){
   if(select.value=='1'){
    document.getElementById('1-1').style.display = "block";
    document.getElementById('1-2').style.display = "block";
    document.getElementById('1-3').style.display = "block";
    document.getElementById('1-4').style.display = "block";
    document.getElementById('1-5').style.display = "block";
    document.getElementById('1-6').style.display = "block";
    document.getElementById('1-7').style.display = "block";
   } 
      else{
    document.getElementById('1-1').style.display = "none";
    document.getElementById('1-2').style.display = "none";
    document.getElementById('1-3').style.display = "none";
    document.getElementById('1-4').style.display = "none";
    document.getElementById('1-5').style.display = "none";
    document.getElementById('1-6').style.display = "none";
    document.getElementById('1-7').style.display = "none";
    
   }
   if(select.value=='2'){
    document.getElementById('1-8').style.display = "block";
    document.getElementById('1-9').style.display = "block";
    document.getElementById('1-10').style.display = "block";
    document.getElementById('1-11').style.display = "block";


   } 
      else{
    document.getElementById('1-8').style.display = "none";
    document.getElementById('1-9').style.display = "none";
    document.getElementById('1-10').style.display = "none";
    document.getElementById('1-11').style.display = "none";


   }
   

} 

           </script>   

           <script >

 
   function valueChanged() {
      if (document.getElementById('material1').checked) {
          document.getElementById("komponen10").style.display = 'block';
           document.getElementById("komponen11").style.display = 'block';
            document.getElementById("komponen12").style.display = 'block';
             document.getElementById("komponen13").style.display = 'block';
              document.getElementById("komponen14").style.display = 'block';

      } else {
        document.getElementById("komponen10").style.display = 'none';
           document.getElementById("komponen11").style.display = 'none';
           document.getElementById("komponen12").style.display = 'none';
            document.getElementById("komponen13").style.display = 'none';
             document.getElementById("komponen14").style.display = 'none';
      }

      if (document.getElementById('material2').checked) {
          document.getElementById("komponen20").style.display = 'block';
           document.getElementById("komponen21").style.display = 'block';
            document.getElementById("komponen22").style.display = 'block';
             document.getElementById("komponen23").style.display = 'block';
        
      } else {
        document.getElementById("komponen20").style.display = 'none';
           document.getElementById("komponen21").style.display = 'none';
            document.getElementById("komponen22").style.display = 'none';
             document.getElementById("komponen23").style.display = 'none';
    

      }
      if (document.getElementById('material3').checked) {
          document.getElementById("komponen30").style.display = 'block';
           document.getElementById("komponen31").style.display = 'block';
            document.getElementById("komponen32").style.display = 'block';
             document.getElementById("komponen33").style.display = 'block';
              document.getElementById("komponen34").style.display = 'block';
              document.getElementById("komponen35").style.display = 'block';
              document.getElementById("komponen36").style.display = 'block';
              document.getElementById("komponen37").style.display = 'block';
              document.getElementById("komponen38").style.display = 'block';
              document.getElementById("komponen39").style.display = 'block';
      } else {
        document.getElementById("komponen31").style.display = 'none';
           document.getElementById("komponen30").style.display = 'none';
           document.getElementById("komponen32").style.display = 'none';
            document.getElementById("komponen33").style.display = 'none';
             document.getElementById("komponen34").style.display = 'none';
              document.getElementById("komponen35").style.display = 'none';
               document.getElementById("komponen36").style.display = 'none';
              document.getElementById("komponen37").style.display = 'none';
              document.getElementById("komponen38").style.display = 'none';
              document.getElementById("komponen39").style.display = 'none';
      }
      if (document.getElementById('material4').checked) {
          document.getElementById("komponen40").style.display = 'block';
           document.getElementById("komponen41").style.display = 'block';
            document.getElementById("komponen42").style.display = 'block';
             document.getElementById("komponen43").style.display = 'block';
              document.getElementById("komponen44").style.display = 'block';
      } else {
        document.getElementById("komponen41").style.display = 'none';
           document.getElementById("komponen40").style.display = 'none';
           document.getElementById("komponen42").style.display = 'none';
            document.getElementById("komponen43").style.display = 'none';
             document.getElementById("komponen44").style.display = 'none';
      }
      if (document.getElementById('material5').checked) {
          document.getElementById("komponen50").style.display = 'block';
           document.getElementById("komponen51").style.display = 'block';
            document.getElementById("komponen52").style.display = 'block';
             
      } else {
        document.getElementById("komponen50").style.display = 'none';
           document.getElementById("komponen51").style.display = 'none';
           document.getElementById("komponen52").style.display = 'none';
           
      }
          if (document.getElementById('material6').checked) {
          document.getElementById("komponen60").style.display = 'block';
           document.getElementById("komponen61").style.display = 'block';
            document.getElementById("komponen62").style.display = 'block';
             
      } else {
        document.getElementById("komponen60").style.display = 'none';
           document.getElementById("komponen61").style.display = 'none';
           document.getElementById("komponen62").style.display = 'none';
           
      }
      if (document.getElementById('material7').checked) {
          document.getElementById("komponen70").style.display = 'block';
           document.getElementById("komponen71").style.display = 'block';
        
             
      } else {
        document.getElementById("komponen70").style.display = 'none';
           document.getElementById("komponen71").style.display = 'none';
           
      }
       if (document.getElementById('material8').checked) {
          document.getElementById("komponen80").style.display = 'block';
           document.getElementById("komponen81").style.display = 'block';
        
             
      } else {
        document.getElementById("komponen80").style.display = 'none';
           document.getElementById("komponen81").style.display = 'none';
     
           
      }
      if (document.getElementById('material9').checked) {
          document.getElementById("komponen90").style.display = 'block';
           document.getElementById("komponen91").style.display = 'block';
            document.getElementById("komponen92").style.display = 'block';
              document.getElementById("komponen93").style.display = 'block';
           document.getElementById("komponen94").style.display = 'block';
            document.getElementById("komponen95").style.display = 'block';
              document.getElementById("komponen96").style.display = 'block';
           document.getElementById("komponen97").style.display = 'block';
            document.getElementById("komponen98").style.display = 'block';
              document.getElementById("komponen99").style.display = 'block';
           document.getElementById("komponen100").style.display = 'block';
            document.getElementById("komponen101").style.display = 'block';
              document.getElementById("komponen102").style.display = 'block';
           document.getElementById("komponen103").style.display = 'block';
            document.getElementById("komponen104").style.display = 'block';
              document.getElementById("komponen105").style.display = 'block';
  document.getElementById("komponen106").style.display = 'block';
             
      } else {
            document.getElementById("komponen90").style.display = 'none';
           document.getElementById("komponen91").style.display = 'none';
            document.getElementById("komponen92").style.display = 'none';
              document.getElementById("komponen93").style.display = 'none';
           document.getElementById("komponen94").style.display = 'none';
            document.getElementById("komponen95").style.display = 'none';
              document.getElementById("komponen96").style.display = 'none';
           document.getElementById("komponen97").style.display = 'none';
            document.getElementById("komponen98").style.display = 'none';
              document.getElementById("komponen99").style.display = 'none';
           document.getElementById("komponen100").style.display = 'none';
            document.getElementById("komponen101").style.display = 'none';
              document.getElementById("komponen102").style.display = 'none';
           document.getElementById("komponen103").style.display = 'none';
            document.getElementById("komponen104").style.display = 'none';
              document.getElementById("komponen105").style.display = 'none';
  document.getElementById("komponen106").style.display = 'none'; 
      }
        if (document.getElementById('material10').checked) {
          document.getElementById("komponen110").style.display = 'block';
           document.getElementById("komponen111").style.display = 'block';

             
      } else {
        document.getElementById("komponen110").style.display = 'none';
           document.getElementById("komponen111").style.display = 'none';
           
      }
    }
     

</script>   
          @endsection