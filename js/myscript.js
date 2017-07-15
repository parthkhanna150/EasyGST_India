    function getProducts() {
    //alert();
    var pid=document.getElementById('pid').value;
    var qty=document.getElementById('qty').value;
    alert(pid+'   '+qty);

    if(pid=="" && qty=="")
    {
        alert('Choose Product or Quantity');
    }
    else {
        alert('else');
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

            }
        };
        xhttp.open("GET", "getproducts.php?q=" + pid+"&qty="+qty, true);
        xhttp.send();
    }
}
