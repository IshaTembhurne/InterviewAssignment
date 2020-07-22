<!DOCTYPE html>
<html>
<body>

<input type="text"id="data">

<input type="submit" value="submit"onclick="reverseString()">
<p >String Reverse:<span id="outputStringName"></span></p>
<script>
    function reverseString() {
        var txt_val;
        txt_val = document.getElementById("data").value;
        var newstring = '';

		for(let i = 0; i < txt_val.length; i++){
		    newstring = txt_val[i] += newstring;
		}
	    document.getElementById("outputStringName").innerText = " " +newstring;
		console.log(newstring);
	}
</script>
</body>
</html>

