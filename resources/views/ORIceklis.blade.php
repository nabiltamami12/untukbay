@extends('layouts.app')
       @section('content')
 <!--       <a href="#"  class="btn btn-warning material-icons" data-toggle="modal" data-target="#exampleModaledit">add
            </a> -->

<?php
$title = 'Cek Kondisi Trafo';?>
 <title>
   <?php echo $title;?>
  </title>

       <br>
             <input style="text-transform: uppercase;font-weight: 900;font-family:serif;" type="text" value="" disabled readonly="true" class="form-control " placeholder="<?php echo $title; ?>
          ">
           <!--  ---------------Popup Modal--------------- -->
     <script type="text/javascript">
         function showOverlay() {
  $('.overlay').show()
}
setTimeout(showOverlay, 2000)
     </script>      

           <!--  ---------------Popup Modal--------------- -->
   


<script type="text/javascript">
   function DisableChanged() {
    if (document.getElementById('baik1').checked) { 
      document.getElementById('jumlah1').disabled = true;
  else
  {
    document.getElementById('jumlah1').disabled = false;
  }
</script>




    


           <!--  ---------------Show Checkbox--------------- -->
<script >

 
   function valueChanged() {
      if (document.getElementById('cekmaterial1').checked) {
          document.getElementById("cekkomponen10").style.display = 'block';
           document.getElementById("cekkomponen11").style.display = 'block';
            document.getElementById("cekkomponen12").style.display = 'block';
             document.getElementById("cekkomponen13").style.display = 'block';
              document.getElementById("cekkomponen14").style.display = 'block';

      } else {
        document.getElementById("cekkomponen10").style.display = 'none';
           document.getElementById("cekkomponen11").style.display = 'none';
           document.getElementById("cekkomponen12").style.display = 'none';
            document.getElementById("cekkomponen13").style.display = 'none';
             document.getElementById("cekkomponen14").style.display = 'none';
      }

      if (document.getElementById('cekmaterial2').checked) {
          document.getElementById("cekkomponen20").style.display = 'block';
           document.getElementById("cekkomponen21").style.display = 'block';
            document.getElementById("cekkomponen22").style.display = 'block';
             document.getElementById("cekkomponen23").style.display = 'block';
        
      } else {
        document.getElementById("cekkomponen20").style.display = 'none';
           document.getElementById("cekkomponen21").style.display = 'none';
            document.getElementById("cekkomponen22").style.display = 'none';
             document.getElementById("cekkomponen23").style.display = 'none';
    

      }
      if (document.getElementById('cekmaterial3').checked) {
          document.getElementById("cekkomponen30").style.display = 'block';
           document.getElementById("cekkomponen31").style.display = 'block';
            document.getElementById("cekkomponen32").style.display = 'block';
             document.getElementById("cekkomponen33").style.display = 'block';
              document.getElementById("cekkomponen34").style.display = 'block';
              document.getElementById("cekkomponen35").style.display = 'block';
              document.getElementById("cekkomponen36").style.display = 'block';
              document.getElementById("cekkomponen37").style.display = 'block';
              document.getElementById("cekkomponen38").style.display = 'block';
              document.getElementById("cekkomponen39").style.display = 'block';
      } else {
        document.getElementById("cekkomponen31").style.display = 'none';
           document.getElementById("cekkomponen30").style.display = 'none';
           document.getElementById("cekkomponen32").style.display = 'none';
            document.getElementById("cekkomponen33").style.display = 'none';
             document.getElementById("cekkomponen34").style.display = 'none';
              document.getElementById("cekkomponen35").style.display = 'none';
               document.getElementById("cekkomponen36").style.display = 'none';
              document.getElementById("cekkomponen37").style.display = 'none';
              document.getElementById("cekkomponen38").style.display = 'none';
              document.getElementById("cekkomponen39").style.display = 'none';
      }
      if (document.getElementById('cekmaterial4').checked) {
          document.getElementById("cekkomponen40").style.display = 'block';
           document.getElementById("cekkomponen41").style.display = 'block';
            document.getElementById("cekkomponen42").style.display = 'block';
             document.getElementById("cekkomponen43").style.display = 'block';
              document.getElementById("cekkomponen44").style.display = 'block';
      } else {
        document.getElementById("cekkomponen41").style.display = 'none';
           document.getElementById("cekkomponen40").style.display = 'none';
           document.getElementById("cekkomponen42").style.display = 'none';
            document.getElementById("cekkomponen43").style.display = 'none';
             document.getElementById("cekkomponen44").style.display = 'none';
      }
      if (document.getElementById('cekmaterial5').checked) {
          document.getElementById("cekkomponen50").style.display = 'block';
           document.getElementById("cekkomponen51").style.display = 'block';
            document.getElementById("cekkomponen52").style.display = 'block';
             
      } else {
        document.getElementById("cekkomponen50").style.display = 'none';
           document.getElementById("cekkomponen51").style.display = 'none';
           document.getElementById("cekkomponen52").style.display = 'none';
           
      }
          if (document.getElementById('cekmaterial6').checked) {
          document.getElementById("cekkomponen60").style.display = 'block';
           document.getElementById("cekkomponen61").style.display = 'block';
            document.getElementById("cekkomponen62").style.display = 'block';
             
      } else {
        document.getElementById("cekkomponen60").style.display = 'none';
           document.getElementById("cekkomponen61").style.display = 'none';
           document.getElementById("cekkomponen62").style.display = 'none';
           
      }
      if (document.getElementById('cekmaterial7').checked) {
          document.getElementById("cekkomponen70").style.display = 'block';
           document.getElementById("cekkomponen71").style.display = 'block';
        
             
      } else {
        document.getElementById("cekkomponen70").style.display = 'none';
           document.getElementById("cekkomponen71").style.display = 'none';
           
      }
       if (document.getElementById('cekmaterial8').checked) {
          document.getElementById("cekkomponen80").style.display = 'block';
           document.getElementById("cekkomponen81").style.display = 'block';
        
             
      } else {
        document.getElementById("cekkomponen80").style.display = 'none';
           document.getElementById("cekkomponen81").style.display = 'none';
     
           
      }
      if (document.getElementById('cekmaterial9').checked) {
          document.getElementById("cekkomponen90").style.display = 'block';
           document.getElementById("cekkomponen91").style.display = 'block';
            document.getElementById("cekkomponen92").style.display = 'block';
              document.getElementById("cekkomponen93").style.display = 'block';
           document.getElementById("cekkomponen94").style.display = 'block';
            document.getElementById("cekkomponen95").style.display = 'block';
              document.getElementById("cekkomponen96").style.display = 'block';
           document.getElementById("cekkomponen97").style.display = 'block';
            document.getElementById("cekkomponen98").style.display = 'block';
              document.getElementById("cekkomponen99").style.display = 'block';
           document.getElementById("cekkomponen100").style.display = 'block';
            document.getElementById("cekkomponen101").style.display = 'block';
              document.getElementById("cekkomponen102").style.display = 'block';
           document.getElementById("cekkomponen103").style.display = 'block';
            document.getElementById("cekkomponen104").style.display = 'block';
              document.getElementById("cekkomponen105").style.display = 'block';
  document.getElementById("cekkomponen106").style.display = 'block';
             
      } else {
            document.getElementById("cekkomponen90").style.display = 'none';
           document.getElementById("cekkomponen91").style.display = 'none';
            document.getElementById("cekkomponen92").style.display = 'none';
              document.getElementById("cekkomponen93").style.display = 'none';
           document.getElementById("cekkomponen94").style.display = 'none';
            document.getElementById("cekkomponen95").style.display = 'none';
              document.getElementById("cekkomponen96").style.display = 'none';
           document.getElementById("cekkomponen97").style.display = 'none';
            document.getElementById("cekkomponen98").style.display = 'none';
              document.getElementById("cekkomponen99").style.display = 'none';
           document.getElementById("cekkomponen100").style.display = 'none';
            document.getElementById("cekkomponen101").style.display = 'none';
              document.getElementById("cekkomponen102").style.display = 'none';
           document.getElementById("cekkomponen103").style.display = 'none';
            document.getElementById("cekkomponen104").style.display = 'none';
              document.getElementById("cekkomponen105").style.display = 'none';
  document.getElementById("cekkomponen106").style.display = 'none'; 
      }
        if (document.getElementById('cekmaterial10').checked) {
          document.getElementById("cekkomponen110").style.display = 'block';
           document.getElementById("cekkomponen111").style.display = 'block';

             
      } else {
        document.getElementById("cekkomponen110").style.display = 'none';
           document.getElementById("cekkomponen111").style.display = 'none';
           
      }
    }
     

</script>

         <!--  ---------------Show Checkbox--------------- -->
           <script>

function showDiv(select){
   if(select.value=='1-2'){
    document.getElementById('1-2').style.display = "block";
    document.getElementById('1-3').style.display = "block";
    document.getElementById('1-4').style.display = "block";
    document.getElementById('1-5').style.display = "block";
    document.getElementById('1-6').style.display = "block";
    document.getElementById('1-7').style.display = "block";
   } 
      else{
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
   @if (session('alert'))
     <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ session('alert') }}</strong>
      </div>
@endif
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
                              @if($mat->trafo_cek->seksen=='1-2')
                               <option value="{{ $mat->trafo_cek->seksen }}">{{ $mat->trafo_cek->kode_trafo }} -- {{ $mat->trafo_cek->alamat }} -- {{ $mat->status }}</option> 
                              @else
                              <option value="2">{{ $mat->trafo_cek->kode_trafo }} -- {{ $mat->trafo_cek->alamat }} -- {{ $mat->status }}</option> 
                              @endif
                               @endforeach
                              <!--  <option value="2-4">KONTRUKSI TRAFO 2 TIANG 4 JURUSAN (Daya 160  s/d 250kVA)</option> 
                               <option value="2-1">KONTRUKSI TRAFO 2 PORTAL - PEMASARAN</option> -->

                            </select>    
                        </div>
                

                <!-- KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA) -->

                <form action="{{url('/ceklis/store' )}}" method="POST">
                 @csrf
                     <div class="form-check" id="1-2" style="display: none; text-transform: uppercase;font-weight: 900;font-family:serif;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial1" 
onchange="valueChanged()"  name="material[]" value="1"  >
                        DUDUKAN CUT OUT SWITCH
                      </label>
                    </div>
                    <div id="cekkomponen10"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        CROSS ARM TYPE 2.000 U-NP 10 T = 5MM
                        <input  type="radio" id="baik1"  value="baik" name="a1" checked="checked" 
onclick="document.getElementById('jumlah1').disabled = true;  document.getElementById('keterangan1').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk1"  value="buruk" name="a1" 
onclick="document.getElementById('jumlah1').disabled = false; document.getElementById('keterangan1').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah1" name="jumlah1" disabled="disabled" >
                         <input  type="text" value="" id="keterangan1" name="keterangan1" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen11"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Double Arm Band "8 + 2 baut
                        <input  type="radio" id="baik2"  value="baik" name="a2" checked="checked" 
onclick="document.getElementById('jumlah2').disabled = true;document.getElementById('keterangan2').disabled = true;" 
                         >
                        baik
                        <input  type="radio"id="buruk2"  value="buruk" name="a2" 
onclick="document.getElementById('jumlah2').disabled = false;document.getElementById('keterangan2').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah2" name="jumlah2" disabled="disabled" >
                         <input  type="text" value="" id="keterangan2" name="keterangan2" disabled="disabled" >

                      </label>
                    </div>
                       <div id="cekkomponen12"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Double Arm Bolt & Nut M. 16 x 400
                        <input  type="radio" id="baik3"  value="baik" name="a3" checked="checked" 
onclick="document.getElementById('jumlah3').disabled = true; document.getElementById('keterangan3').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk3"  value="buruk" name="a3" 
onclick="document.getElementById('jumlah3').disabled = false;document.getElementById('keterangan3').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah3" name="jumlah3" disabled="disabled" >
                         <input  type="text" value="" id="keterangan3" name="keterangan3" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen13"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Arm Tie type 750 - pipe 3/4"
                       <input  type="radio" id="baik4"  value="baik" name="a4" checked="checked" 
onclick="document.getElementById('jumlah4').disabled = true;document.getElementById('keterangan4').disabled = true;" 
                         >
                        baik
                        <input  type="radio"id="buruk4"  value="buruk" name="a4" 
onclick="document.getElementById('jumlah4').disabled = false;document.getElementById('keterangan4').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah4" name="jumlah4" disabled="disabled">
                         <input  type="text" value="" id="keterangan4" name="keterangan4" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen14"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Arm Tie Band
                       <input  type="radio" id="baik5"  value="baik" name="a5" checked="checked" 
onclick="document.getElementById('jumlah5').disabled = true;document.getElementById('keterangan5').disabled = true;" 
                         >
                        baik
                        <input  type="radio"id="buruk5"  value="buruk" name="a5" 
onclick="document.getElementById('jumlah5').disabled = false;document.getElementById('keterangan5').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah5" name="jumlah5"disabled="disabled" >
                         <input  type="text" value="" id="keterangan5" name="keterangan5" disabled="disabled" >
                        
                      </label>
                    </div>
                  <!--     <div id="cekkomponen15"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        CROSS ARM TYPE 2.000 U-NP 10 T = 5MM
                        <input  type="radio" value="baik" name="b6" >
                        baik
                        <input  type="radio" value="buruk" name="b6" >
                        buruk
                      </label>
                    </div> -->
                    <br>
                     <div class="form-check" id="1-3" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial2" 
onchange="valueChanged()"  name="material[]" value="2">
                        Dudukan Lightning Arrester
                      </label>
                    </div>
                    <div id="cekkomponen20"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Single Arm Band "6 + baut
                        <input  type="radio" id="baik6"  value="baik" name="a6" checked="checked" 
onclick="document.getElementById('jumlah6').disabled = true; document.getElementById('keterangan6').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk6"  value="buruk" name="a6" 
onclick="document.getElementById('jumlah6').disabled = false;document.getElementById('keterangan6').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah6" name="jumlah6" disabled="disabled">
                         <input  type="text" value="" id="keterangan6" name="keterangan6" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen21"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 2.000 U-NP 8 t = 3,2 mm
                       <input  type="radio" id="baik7"  value="baik" name="a7" checked="checked" 
onclick="document.getElementById('jumlah7').disabled = true;document.getElementById('keterangan7').disabled = true;" 
                         >
                        baik
                        <input  type="radio"id="buruk7"  value="buruk" name="a7" 
onclick="document.getElementById('jumlah7').disabled = false;document.getElementById('keterangan7').disabled = false;"
                         >
                        buruk
                           <input  type="text" value=""id="jumlah7"  name="jumlah7" disabled="disabled">
                         <input  type="text" value="" id="keterangan7" name="keterangan7" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen22"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 50
                        <input  type="radio" id="baik8"  value="baik" name="a8" checked="checked" 
onclick="document.getElementById('jumlah8').disabled = true;document.getElementById('keterangan8').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk8"  value="buruk" name="a8" 
onclick="document.getElementById('jumlah8').disabled = false;document.getElementById('keterangan8').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah8" name="jumlah8"disabled="disabled" >
                         <input  type="text" value="" id="keterangan8" name="keterangan8" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen23"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Arm Tie type 750 - pipe 3/4"
                        <input  type="radio" id="baik9"  value="baik" name="a9" checked="checked" 
onclick="document.getElementById('jumlah9').disabled = true;document.getElementById('keterangan9').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk9"  value="buruk" name="a9" 
onclick="document.getElementById('jumlah9').disabled = false;document.getElementById('keterangan9').disabled = false"                         >
                        buruk
                           <input  type="text" value=""id="jumlah9"  name="jumlah9" disabled="disabled">
                         <input  type="text" value="" id="keterangan9" name="keterangan9" disabled="disabled" >
                        
                      </label>
                    </div>

                    <br>
                     <div class="form-check" id="1-4" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial3" 
onchange="valueChanged()"  name="material[]" value="3">
                        Dudukan Transformator
                      </label>
                    </div>
                    <div id="cekkomponen30"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 1.500 U-NP 10 t = 5 mm
                        <input  type="radio" id="baik10"  value="baik" name="a10" checked="checked" 
onclick="document.getElementById('jumlah10').disabled = true;document.getElementById('keterangan10').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk10"  value="buruk" name="a10" 
onclick="document.getElementById('jumlah10').disabled = false;document.getElementById('keterangan10').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah10" name="jumlah10"disabled="disabled" >
                         <input  type="text" value="" id="keterangan10" name="keterangan10" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen31"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 750 NP  8 t = 3,2 mm
                       <input  type="radio" id="baik11"  value="baik" name="a11" checked="checked" 
onclick="document.getElementById('jumlah11').disabled = true; document.getElementById('keterangan11').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk11"  value="buruk" name="a11" 
onclick="document.getElementById('jumlah11').disabled = false;document.getElementById('keterangan11').disabled = false;"
                         >
                        buruk
                           <input  type="text" value=""id="jumlah11"  name="jumlah11" disabled="disabled">
                         <input  type="text" value="" id="keterangan11" name="keterangan11" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen32"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Double Arm Band "9 + baut
                        <input  type="radio" id="baik12"  value="baik" name="a12" checked="checked" 
onclick="document.getElementById('jumlah12').disabled = true;document.getElementById('keterangan12').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk12"  value="buruk" name="a12" 
onclick="document.getElementById('jumlah12').disabled = false;document.getElementById('keterangan12').disabled = false;"
                         >
                        buruk
                           <input  type="text" value=""id="jumlah12"  name="jumlah12" disabled="disabled">
                         <input  type="text" value="" id="keterangan12" name="keterangan12" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen33"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Double Arm Bolt & Nut M. 16 x 400
                       <input  type="radio" id="baik13"  value="baik" name="a13" checked="checked" 
onclick="document.getElementById('jumlah13').disabled = true;document.getElementById('keterangan13').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk13"  value="buruk" name="a13" 
onclick="document.getElementById('jumlah13').disabled = false;document.getElementById('keterangan13').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah13" name="jumlah13" disabled="disabled">
                         <input  type="text" value="" id="keterangan13" name="keterangan13" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen34" class="form-check"  style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 50
                       <input  type="radio" id="baik14"  value="baik" name="a14" checked="checked" 
onclick="document.getElementById('jumlah14').disabled = true; document.getElementById('keterangan14').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk14"  value="buruk" name="a14" 
onclick="document.getElementById('jumlah14').disabled = false;document.getElementById('keterangan14').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah14" name="jumlah14" disabled="disabled">
                         <input  type="text" value="" id="keterangan14" name="keterangan14" disabled="disabled" >
                        
                      </label>
                    </div>
                      <div id="cekkomponen35"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 1.200 U-NP 6,5 t = 2,5 mm
                      <input  type="radio" id="baik15"  value="baik" name="a15" checked="checked" 
onclick="document.getElementById('jumlah15').disabled = true;document.getElementById('keterangan15').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk15"  value="buruk" name="a15" 
onclick="document.getElementById('jumlah15').disabled = false;document.getElementById('keterangan15').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah15" name="jumlah15" disabled="disabled">
                         <input  type="text" value="" id="keterangan15" name="keterangan15" disabled="disabled" >
                        
                      </label>
                    </div>
<div id="cekkomponen36"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 1.000 U-NP 6,5 t = 2,5 mm
                       <input  type="radio" id="baik16"  value="baik" name="a16" checked="checked" 
onclick="document.getElementById('jumlah16').disabled = true;document.getElementById('keterangan16').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk16"  value="buruk" name="a16" 
onclick="document.getElementById('jumlah16').disabled = false;document.getElementById('keterangan16').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah16" name="jumlah16" disabled="disabled">
                         <input  type="text" value="" id="keterangan16" name="keterangan16" disabled="disabled" >
                        
                      </label>
                    </div>
                    <div id="cekkomponen37"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 900 U-NP 8 t = 3,2 mm
                       <input  type="radio" id="baik17"  value="baik" name="a17" checked="checked" 
onclick="document.getElementById('jumlah17').disabled = true;document.getElementById('keterangan17').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk17"  value="buruk" name="a17" 
onclick="document.getElementById('jumlah17').disabled = false;document.getElementById('keterangan17').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah17" name="jumlah17" disabled="disabled">
                         <input  type="text" value="" id="keterangan17" name="keterangan17" disabled="disabled" >
                        
                      </label>
                    </div>
                    <div id="cekkomponen38"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Arm Tie Band
                       <input  type="radio" id="baik18"  value="baik" name="a18" checked="checked" 
onclick="document.getElementById('jumlah18').disabled = true; document.getElementById('keterangan18').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk18"  value="buruk" name="a18" 
onclick="document.getElementById('jumlah18').disabled = false;document.getElementById('keterangan18').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah18" name="jumlah18" disabled="disabled">
                         <input  type="text" value="" id="keterangan18" name="keterangan18" disabled="disabled" >
                        
                      </label>
                    </div>
                    <div id="cekkomponen39"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 75
                       <input  type="radio" id="baik19"  value="baik" name="a19" checked="checked" 
onclick="document.getElementById('jumlah19').disabled = true; document.getElementById('keterangan19').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk19"  value="buruk" name="a19" 
onclick="document.getElementById('jumlah19').disabled = false;document.getElementById('keterangan19').disabled = false;"
                         >
                        buruk
                        <input  type="text" value="" id="jumlah19" name="jumlah19" disabled="disabled">
                         <input  type="text" value="" id="keterangan19" name="keterangan19" disabled="disabled" >
                        
                      </label>
                    </div>
                    <br>

                     <div class="form-check" id="1-5" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial4" 
onchange="valueChanged()"  name="material[]" value="4" >
                        Dudukan Pipa
                      </label>
                    </div>
                    <div id="cekkomponen40"  class="form-check" style="display:none;">
<!--                        <label class="form-check-label" for="defaultCheck1">
                         
                       </label> -->
                    <br>
                       <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 500 U-NP 8 t = 3,2 mm
                      <input  type="radio" id="baik20"  value="baik" name="a20" checked="checked" 
onclick="document.getElementById('jumlah20').disabled = true;document.getElementById('keterangan20').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk20"  value="buruk" name="a20" 
onclick="document.getElementById('jumlah20').disabled = false;document.getElementById('keterangan20').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah20" name="jumlah20" disabled="disabled">
                         <input  type="text" value="" id="keterangan20" name="keterangan20" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen41"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Klem Begel U 10" ( 6 x 38 ) t = 4,5 mm
                     <input  type="radio" id="baik21"  value="baik" name="a21" checked="checked" 
onclick="document.getElementById('jumlah21').disabled = true;document.getElementById('keterangan21').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk21"  value="buruk" name="a21" 
onclick="document.getElementById('jumlah21').disabled = false;document.getElementById('keterangan21').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah21" name="jumlah21"disabled="disabled" >
                         <input  type="text" value="" id="keterangan21" name="keterangan21" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen42" class="form-check"  style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Klem Begel U 3" ( 6 x 38 ) t = 3 mm
                       <input  type="radio" id="baik22"  value="baik" name="a22" checked="checked" 
onclick="document.getElementById('jumlah22').disabled = true; document.getElementById('keterangan22').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk22"  value="buruk" name="a22" 
onclick="document.getElementById('jumlah22').disabled = false;document.getElementById('keterangan22').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah22" name="jumlah22" disabled="disabled">
                         <input  type="text" value="" id="keterangan22" name="keterangan22" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen43"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Klem Begel U 2" ( 6 x 38 ) t = 3 mm
                       <input  type="radio" id="baik23"  value="baik" name="a23" checked="checked" 
onclick="document.getElementById('jumlah23').disabled = true;document.getElementById('keterangan23').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk23"  value="buruk" name="a23" 
onclick="document.getElementById('jumlah23').disabled = false;document.getElementById('keterangan23').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah23" name="jumlah23" disabled="disabled">
                         <input  type="text" value="" id="keterangan23" name="keterangan23" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen44"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 50
                     <input  type="radio" id="baik24"  value="baik" name="a24" checked="checked" 
onclick="document.getElementById('jumlah24').disabled = true;document.getElementById('keterangan24').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk24"  value="buruk" name="a24" 
onclick="document.getElementById('jumlah24').disabled = false;document.getElementById('keterangan24').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah24" name="jumlah24"disabled="disabled" >
                         <input  type="text" value="" id="keterangan24" name="keterangan24" disabled="disabled" >
                        
                      </label>
                    </div>
                  
                    <br>
                     <div class="form-check" id="1-6" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial5" 
onchange="valueChanged()"  name="material[]" value="5" >
                        Dudukan LV Panel
                      </label>
                    </div>
                    <div id="cekkomponen50"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Cross Arm type 900 U-NP 8 t = 3,2 mm
                       <input  type="radio" id="baik25"  value="baik" name="a25" checked="checked" 
onclick="document.getElementById('jumlah25').disabled = true ;document.getElementById('keterangan25').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk25"  value="buruk" name="a25" 
onclick="document.getElementById('jumlah25').disabled = false;document.getElementById('keterangan25').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah25" name="jumlah25" disabled="disabled">
                         <input  type="text" value="" id="keterangan25" name="keterangan25" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen51"  class="form-check" style="display:none;">
                     <label class="form-check-label" for="defaultCheck1">
                        Klem Begel U 11" ( 6 x 38 ) t = 4,5 mm
                    <input  type="radio" id="baik26"  value="baik" name="a26" checked="checked" 
onclick="document.getElementById('jumlah26').disabled = true;document.getElementById('keterangan26').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk26"  value="buruk" name="a26" 
onclick="document.getElementById('jumlah26').disabled = false;document.getElementById('keterangan26').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah26" name="jumlah26" disabled="disabled">
                         <input  type="text" value="" id="keterangan26" name="keterangan26" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen52"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 50
                       <input  type="radio" id="baik27"  value="baik" name="a27" checked="checked" 
onclick="document.getElementById('jumlah27').disabled = true;document.getElementById('keterangan27').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk27"  value="buruk" name="a27" 
onclick="document.getElementById('jumlah27').disabled = false;document.getElementById('keterangan27').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah27" name="jumlah27" disabled="disabled">
                         <input  type="text" value="" id="keterangan27" name="keterangan27" disabled="disabled" >
                        
                      </label>
                    </div>

                     <!--   <div id="cekkomponen53"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        CROSS ARM TYPE 2.000 U-NP 10 T = 5MM
                        <input  type="radio" value="baik" name="f4[]" >
                        baik
                        <input  type="radio" value="buruk" name="f4[]" >
                        buruk
                      </label>
                    </div>
                       <div id="cekkomponen54"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        CROSS ARM TYPE 2.000 U-NP 10 T = 5MM
                        <input  type="radio" value="baik" name="f5[]" >
                        baik
                        <input  type="radio" value="buruk" name="f5[]" >
                        buruk
                      </label>
                    </div>
                      <div id="cekkomponen55"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        CROSS ARM TYPE 2.000 U-NP 10 T = 5MM
                        <input  type="radio" value="baik" name="f6[]" >
                        baik
                        <input  type="radio" value="buruk" name="f6[]" >
                        buruk
                      </label>
                    </div> -->
          
    <br>
                     <div class="form-check" id="1-7" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial6" 
onchange="valueChanged()"  name="material[]" value="6">
                        Tanda Bahaya
                      </label>
                    </div>
                    <div id="cekkomponen60"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Stainless Steel Strip
                      <input  type="radio" id="baik28"  value="baik" name="a28" checked="checked" 
onclick="document.getElementById('jumlah28').disabled = true;document.getElementById('keterangan28').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk28"  value="buruk" name="a28" 
onclick="document.getElementById('jumlah28').disabled = false;document.getElementById('keterangan28').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah28" name="jumlah28" disabled="disabled">
                         <input  type="text" value="" id="keterangan28" name="keterangan28" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen61"  class="form-check" style="display:none;">
                     <label class="form-check-label" for="defaultCheck1">
                        Klem Begel U 11" ( 6 x 38 ) t = 4,5 mm
                       <input  type="radio" id="baik29"  value="baik" name="a29" checked="checked" 
onclick="document.getElementById('jumlah29').disabled = true; document.getElementById('keterangan29').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk29"  value="buruk" name="a29" 
onclick="document.getElementById('jumlah29').disabled = false;document.getElementById('keterangan29').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah29" name="jumlah29" disabled="disabled">
                         <input  type="text" value="" id="keterangan29" name="keterangan29" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen62"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 50
                       <input  type="radio" id="baik30"  value="baik" name="a30" checked="checked" 
onclick="document.getElementById('jumlah30').disabled = true; document.getElementById('keterangan30').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk30"  value="buruk" name="a30" 
onclick="document.getElementById('jumlah30').disabled = false;document.getElementById('keterangan30').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah30" name="jumlah30" disabled="disabled">
                         <input  type="text" value="" id="keterangan30" name="keterangan30" disabled="disabled" >
                        
                      </label>
               
                    </div>
<!-- ============================================= Seksen 1-2 ============================================== -->

 <div class="form-check" id="1-8" style="display: none">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial7" 
onchange="valueChanged()"  name="material[]" value="1"  >
                        DUDUKAN CUT OUT SWITCH
                      </label>
                    </div>
                    <div id="cekkomponen70"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        U NP-10 100 x 50 x 5 x 2500
                        <input  type="radio" id="baik31"  value="baik" name="a31" checked="checked" 
onclick="document.getElementById('jumlah31').disabled = true;  document.getElementById('keterangan31').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk31"  value="buruk" name="a31" 
onclick="document.getElementById('jumlah31').disabled = false; document.getElementById('keterangan31').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah31" name="jumlah31" disabled="disabled" >
                         <input  type="text" value="" id="keterangan31" name="keterangan31" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen71"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Double Arm Band "6
                        <input  type="radio" id="baik32"  value="baik" name="a32" checked="checked" 
onclick="document.getElementById('jumlah32').disabled = true;document.getElementById('keterangan32').disabled = true;" 
                         >
                        baik
                        <input  type="radio"id="buruk32"  value="buruk" name="a32" 
onclick="document.getElementById('jumlah32').disabled = false;document.getElementById('keterangan32').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah32" name="jumlah32" disabled="disabled" >
                         <input  type="text" value="" id="keterangan32" name="keterangan32" disabled="disabled" >

                      </label>
                    </div>

                    <br>


                     <div class="form-check" id="1-9" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial8" 
onchange="valueChanged()"  name="material[]" value="2">
                        Dudukan Lightning Arrester
                      </label>
                    </div>
                    <div id="cekkomponen80"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        U NP-8 80 x 40 x 3,2 x 2500
                        <input  type="radio" id="baik33"  value="baik" name="a33" checked="checked" 
onclick="document.getElementById('jumlah33').disabled = true; document.getElementById('keterangan33').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk33"  value="buruk" name="a33" 
onclick="document.getElementById('jumlah33').disabled = false;document.getElementById('keterangan33').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah33" name="jumlah33" disabled="disabled">
                         <input  type="text" value="" id="keterangan33" name="keterangan33" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen81"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Single  Arm Band "6
                       <input  type="radio" id="baik34"  value="baik" name="a34" checked="checked" 
onclick="document.getElementById('jumlah34').disabled = true;document.getElementById('keterangan34').disabled = true;" 
                         >
                        baik
                        <input  type="radio"id="buruk34"  value="buruk" name="a34" 
onclick="document.getElementById('jumlah34').disabled = false;document.getElementById('keterangan34').disabled = false;"
                         >
                        buruk
                           <input  type="text" value=""id="jumlah34"  name="jumlah34" disabled="disabled">
                         <input  type="text" value="" id="keterangan34" name="keterangan34" disabled="disabled" >
                        
                      </label>
                    </div>



                    <br>


                     <div class="form-check" id="1-10" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial9" 
onchange="valueChanged()"  name="material[]" value="3">
                        Dudukan Transformator
                      </label>
                    </div>

                     <div id="cekkomponen106"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Dudukan NP-10 Trafo U NP-10 100 x 50 x 5 x 2500
                        <input  type="radio" id="baik53"  value="baik" name="a53" checked="checked" 
onclick="document.getElementById('jumlah53').disabled = true;document.getElementById('keterangan53').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk53"  value="buruk" name="a53" 
onclick="document.getElementById('jumlah53').disabled = false;document.getElementById('keterangan53').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah53" name="jumlah53"disabled="disabled" >
                         <input  type="text" value="" id="keterangan53" name="keterangan53" disabled="disabled" >
                        
                      </label>
                    </div>
                   
                    <div id="cekkomponen90"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Dasar penyangga dudukan NP-8, 80 x 3,2 x 2000
                        <input  type="radio" id="baik35"  value="baik" name="a35" checked="checked" 
onclick="document.getElementById('jumlah35').disabled = true;document.getElementById('keterangan35').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk35"  value="buruk" name="a35" 
onclick="document.getElementById('jumlah35').disabled = false;document.getElementById('keterangan35').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah35" name="jumlah35"disabled="disabled" >
                         <input  type="text" value="" id="keterangan35" name="keterangan35" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen91"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Dudukan Trafo NP-8 -750
                       <input  type="radio" id="baik36"  value="baik" name="a36" checked="checked" 
onclick="document.getElementById('jumlah36').disabled = true; document.getElementById('keterangan36').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk36"  value="buruk" name="a36" 
onclick="document.getElementById('jumlah36').disabled = false;document.getElementById('keterangan36').disabled = false;"
                         >
                        buruk
                           <input  type="text" value=""id="jumlah36"  name="jumlah36" disabled="disabled">
                         <input  type="text" value="" id="keterangan36" name="keterangan36" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen92"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Bolt & Nut M 16 x 50
                        <input  type="radio" id="baik37"  value="baik" name="a37" checked="checked" 
onclick="document.getElementById('jumlah37').disabled = true;document.getElementById('keterangan37').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk37"  value="buruk" name="a37" 
onclick="document.getElementById('jumlah37').disabled = false;document.getElementById('keterangan37').disabled = false;"
                         >
                        buruk
                           <input  type="text" value=""id="jumlah37"  name="jumlah37" disabled="disabled">
                         <input  type="text" value="" id="keterangan37" name="keterangan37" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen93"  class="form-check" style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                        Tempat berdiri pelat bordes ( 200 x 2000 x 2,5)
                       <input  type="radio" id="baik38"  value="baik" name="a38" checked="checked" 
onclick="document.getElementById('jumlah38').disabled = true;document.getElementById('keterangan38').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk38"  value="buruk" name="a38" 
onclick="document.getElementById('jumlah38').disabled = false;document.getElementById('keterangan38').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah38" name="jumlah38" disabled="disabled">
                         <input  type="text" value="" id="keterangan38" name="keterangan38" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen94" class="form-check"  style="display:none;">
                       <label class="form-check-label" for="defaultCheck1">
                      Siku penghalang belakang -L 50 x50 x 35 x 1750
                       <input  type="radio" id="baik39"  value="baik" name="a39" checked="checked" 
onclick="document.getElementById('jumlah39').disabled = true; document.getElementById('keterangan39').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk39"  value="buruk" name="a39" 
onclick="document.getElementById('jumlah39').disabled = false;document.getElementById('keterangan39').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah39" name="jumlah39" disabled="disabled">
                         <input  type="text" value="" id="keterangan39" name="keterangan39" disabled="disabled" >
                        
                      </label>
                    </div>
                      <div id="cekkomponen95"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                       Siku penghalang pagar samping  -L 50 x50 x 35 x 465
                      <input  type="radio" id="baik40"  value="baik" name="a40" checked="checked" 
onclick="document.getElementById('jumlah40').disabled = true;document.getElementById('keterangan40').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk40"  value="buruk" name="a40" 
onclick="document.getElementById('jumlah40').disabled = false;document.getElementById('keterangan40').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah40" name="jumlah40" disabled="disabled">
                         <input  type="text" value="" id="keterangan40" name="keterangan40" disabled="disabled" >
                        
                      </label>
                    </div>
<div id="cekkomponen96"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Arm Tie Band 8"
                       <input  type="radio" id="baik41"  value="baik" name="a41" checked="checked" 
onclick="document.getElementById('jumlah41').disabled = true;document.getElementById('keterangan41').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk41"  value="buruk" name="a41" 
onclick="document.getElementById('jumlah41').disabled = false;document.getElementById('keterangan41').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah41" name="jumlah41" disabled="disabled">
                         <input  type="text" value="" id="keterangan41" name="keterangan41" disabled="disabled" >
                        
                      </label>
                    </div>
                    <div id="cekkomponen97"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Alas bordes besi siku L 50 x 50 x 35 x 2000
                       <input  type="radio" id="baik42"  value="baik" name="a42" checked="checked" 
onclick="document.getElementById('jumlah42').disabled = true;document.getElementById('keterangan42').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk42"  value="buruk" name="a42" 
onclick="document.getElementById('jumlah42').disabled = false;document.getElementById('keterangan42').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah42" name="jumlah42" disabled="disabled">
                         <input  type="text" value="" id="keterangan42" name="keterangan42" disabled="disabled" >
                        
                      </label>
                    </div>
                    <div id="cekkomponen98"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Double Arm Band  2 Nut 2pcs
                       <input  type="radio" id="baik43"  value="baik" name="a43" checked="checked" 
onclick="document.getElementById('jumlah43').disabled = true; document.getElementById('keterangan43').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk43"  value="buruk" name="a43" 
onclick="document.getElementById('jumlah43').disabled = false;document.getElementById('keterangan43').disabled = false;"
                         >
                        buruk
                           <input  type="text" value="" id="jumlah43" name="jumlah43" disabled="disabled">
                         <input  type="text" value="" id="keterangan43" name="keterangan43" disabled="disabled" >
                        
                      </label>
                    </div>
                    <div id="cekkomponen99"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        Tiang penghalang belakang -L 50 x 50 x 35 x 900
                       <input  type="radio" id="baik44"  value="baik" name="a44" checked="checked" 
onclick="document.getElementById('jumlah44').disabled = true; document.getElementById('keterangan44').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk44"  value="buruk" name="a44" 
onclick="document.getElementById('jumlah44').disabled = false;document.getElementById('keterangan44').disabled = false;"
                         >
                        buruk
                        <input  type="text" value="" id="jumlah44" name="jumlah44" disabled="disabled">
                         <input  type="text" value="" id="keterangan44" name="keterangan44" disabled="disabled" >    
                      </label>
                    </div>





                      <div id="cekkomponen100"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                Tiang pagar luar kiri dan kanan L 50 x 50 x 35 x 1800
                       <input  type="radio" id="baik45"  value="baik" name="a45" checked="checked" 
onclick="document.getElementById('jumlah45').disabled = true; document.getElementById('keterangan45').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk45"  value="buruk" name="a45" 
onclick="document.getElementById('jumlah45').disabled = false;document.getElementById('keterangan45').disabled = false;"
                         >
                        buruk
                        <input  type="text" value="" id="jumlah45" name="jumlah45" disabled="disabled">
                         <input  type="text" value="" id="keterangan45" name="keterangan45" disabled="disabled" >    
                      </label>
                    </div>
                         <div id="cekkomponen101"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                Dudukan penghalang kayu jati  -L 50 x 50 x 35 x 260

                       <input  type="radio" id="baik46"  value="baik" name="a46" checked="checked" 
onclick="document.getElementById('jumlah46').disabled = true; document.getElementById('keterangan46').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk46"  value="buruk" name="a46" 
onclick="document.getElementById('jumlah46').disabled = false;document.getElementById('keterangan46').disabled = false;"
                         >
                        buruk
                        <input  type="text" value="" id="jumlah46" name="jumlah46" disabled="disabled">
                         <input  type="text" value="" id="keterangan46" name="keterangan46" disabled="disabled" >    
                      </label>
                    </div>
                         <div id="cekkomponen102"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                Penghalang kayu jati  / L 50 x 50 x 35 x 2000

                       <input  type="radio" id="baik47"  value="baik" name="a47" checked="checked" 
onclick="document.getElementById('jumlah47').disabled = true; document.getElementById('keterangan47').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk47"  value="buruk" name="a47" 
onclick="document.getElementById('jumlah47').disabled = false;document.getElementById('keterangan47').disabled = false;"
                         >
                        buruk
                        <input  type="text" value="" id="jumlah47" name="jumlah47" disabled="disabled">
                         <input  type="text" value="" id="keterangan47" name="keterangan47" disabled="disabled" >    
                      </label>
                    </div>
                         <div id="cekkomponen103"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                U-NP 65  x 3 x 750 u/ tempat Pipa 2" + 3"

                       <input  type="radio" id="baik48"  value="baik" name="a48" checked="checked" 
onclick="document.getElementById('jumlah48').disabled = true; document.getElementById('keterangan48').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk48"  value="buruk" name="a48" 
onclick="document.getElementById('jumlah48').disabled = false;document.getElementById('keterangan48').disabled = false;"
                         >
                        buruk
                        <input  type="text" value="" id="jumlah48" name="jumlah48" disabled="disabled">
                         <input  type="text" value="" id="keterangan48" name="keterangan48" disabled="disabled" >    
                      </label>
                    </div>
                         <div id="cekkomponen104"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
               klem begel 35 x 3 x 2" u/ pipa 2"
                       <input  type="radio" id="baik49"  value="baik" name="a49" checked="checked" 
onclick="document.getElementById('jumlah49').disabled = true; document.getElementById('keterangan49').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk49"  value="buruk" name="a49" 
onclick="document.getElementById('jumlah49').disabled = false;document.getElementById('keterangan49').disabled = false;"
                         >
                        buruk
                        <input  type="text" value="" id="jumlah49" name="jumlah49" disabled="disabled">
                         <input  type="text" value="" id="keterangan49" name="keterangan49" disabled="disabled" >    
                      </label>
                    </div>
                         <div id="cekkomponen105"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
            klem begel 35 x 3 x 3" u/ pipa 3"
                       <input  type="radio" id="baik50"  value="baik" name="a50" checked="checked" 
onclick="document.getElementById('jumlah50').disabled = true; document.getElementById('keterangan50').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk50"  value="buruk" name="a50" 
onclick="document.getElementById('jumlah50').disabled = false;document.getElementById('keterangan50').disabled = false;"
                         >
                        buruk
                        <input  type="text" value="" id="jumlah50" name="jumlah50" disabled="disabled">
                         <input  type="text" value="" id="keterangan50" name="keterangan50" disabled="disabled" >    
                      </label>
                    </div>
                    
















                    <br>
                     <div class="form-check" id="1-11" style="display: none;">
                      <label class="form-check-label" for="defaultCheck1">
                        <input  type="checkbox" value="10" id="cekmaterial10" 
onchange="valueChanged()"  name="material[]" value="5" >
                        Dudukan LV Panel
                      </label>
                    </div>
                    <div id="cekkomponen110"  class="form-check" style="display:none;">
                      <label class="form-check-label" for="defaultCheck1">
                        U NP-8 80 x 40 x 3,2 x 2500
                       <input  type="radio" id="baik51"  value="baik" name="a51" checked="checked" 
onclick="document.getElementById('jumlah51').disabled = true ;document.getElementById('keterangan51').disabled = true;"
                         >
                        baik
                        <input  type="radio"id="buruk51"  value="buruk" name="a51" 
onclick="document.getElementById('jumlah51').disabled = false;document.getElementById('keterangan51').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah51" name="jumlah51" disabled="disabled">
                         <input  type="text" value="" id="keterangan51" name="keterangan51" disabled="disabled" >
                        
                      </label>
                    </div>
                       <div id="cekkomponen111"  class="form-check" style="display:none;">
                     <label class="form-check-label" for="defaultCheck1">
                        Klem Begel 35 x 5 x 10"
                    <input  type="radio" id="baik52"  value="baik" name="a52" checked="checked" 
onclick="document.getElementById('jumlah52').disabled = true;document.getElementById('keterangan52').disabled = true; "
                         >
                        baik
                        <input  type="radio"id="buruk52"  value="buruk" name="a52" 
onclick="document.getElementById('jumlah52').disabled = false;document.getElementById('keterangan52').disabled = false;"
                         >
                        buruk
                         <input  type="text" value="" id="jumlah52" name="jumlah52" disabled="disabled">
                         <input  type="text" value="" id="keterangan52" name="keterangan52" disabled="disabled" >
                        
                      </label>
                    </div>
                               @foreach($padam as $mat)
<input type="text" name="id_trafo" value="{{$mat->id_trafo}}" style="display: none">
<input type="text" name="id_padam" value="{{$mat->id}}" style="display: none">
@endforeach
            <div class="modal-footer">
          <!--   <a href="{{ url('padam') }}">  <button   type="button" class="btn btn-danger" data-dismiss="modal">Close</button></a> -->
              <button type="submit" class="btn btn-success">Save changes</button>
            </div>
        </form>
           <!-- KONTRUKSI TRAFO 1 TIANG 2 JURUSAN (<160 kVA) -->
          </div>
        </div>
      </div>
      </div>
    <!-- </div> -->

            @endsection