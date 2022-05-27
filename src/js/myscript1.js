<script>
function myFunction() {
  var txt;
  if (confirm("Press a button!")) {
    txt = "We will reply you soon";
  } else {
    txt = "Thank You!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
