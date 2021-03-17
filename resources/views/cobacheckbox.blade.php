<input type="checkbox" name="advancecheck" id="advancecheck" 
onchange="valueChanged()"/>cek<br>

<script type="text/javascript">

    function valueChanged() {
      if (document.getElementById('advancecheck').checked) {
          document.getElementById("subnetmaskdiv").style.display = 'block';
      } else {
        document.getElementById("subnetmaskdiv").style.display = 'none';
      }
    }

</script>



<form action="" method="post" name="subnet">
  <div id="subnetmaskdiv" style="display:none;">
    <label>Subnet Mask</label>
    <input type="checkbox" name="advancecheck" 
/>cek<br>
 <label>Subnet Mask</label>
    <input type="checkbox" name="advancecheck" 
/>cek<br>
 <label>Subnet Mask</label>
    <input type="checkbox" name="advancecheck" 
/>cek<br>
 <label>Subnet Mask</label>
    <input type="checkbox" name="advancecheck" 
/>cek<br>
  </div>
</form>