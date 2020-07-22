<!DOCTYPE html>
<html>
<body>
<p >Your Name is:<span id="outputName"></span></p>
<input type="text"id="data">
<input type="submit" value="submit"onclick="readString()">

<script>
    function readString() {
        var txt_val;
        txt_val = document.getElementById("data").value;
       // alert(txt_val);
        document.getElementById("outputName").innerText = txt_val;
        console.log(txt_val);
    }
</script>
</body>
</html>