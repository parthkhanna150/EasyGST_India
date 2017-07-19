    function getProducts() {
    //alert();
    var pid=document.getElementById('pid').value;
    var qty=document.getElementById('qty').value;

    if(pid=="" && qty=="")
    {
        alert('Choose Product or Quantity');
    }
    else {
        window.location.href="getproducts.php?q=" + pid+"&qty="+qty;
    }
}
    $(document).ready(function () {
        $('input[name="retail"]').click(function () {
            var invoice_type = $('input[name="retail"]:checked').val();
            if (invoice_type == 'retailInvoice') {
                document.getElementById('retail_invoice').style.display = 'block';
                document.getElementById('gst_invoice').style.display = 'none';
            }
            else {
                document.getElementById('retail_invoice').style.display = 'none';
                document.getElementById('gst_invoice').style.display = 'block';
            }
        });
    });

    function show_customers(str) {
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var output = this.responseText;
                document.getElementById('get_cust').innerHTML=output;
            }
        };
        xhttp.open("GET", "getcustomer.php?q=" + str, true);
        xhttp.send();
    }

    function show_bill() {
        alert();
        var from=document.getElementById('from').value;
        var to=document.getElementById('to').value;
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var output = this.responseText;
                document.getElementById('bill_detail').innerHTML=output;
            }
        };
        xhttp.open("GET", "getbill.php?q=" + from+"&to="+to, true);
        xhttp.send();
    }

    function delete_bill(){
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var output = this.responseText;
                document.getElementById('i').innerHTML="";
            }
        };
        xhttp.open("GET", "view_bill.php", true);
        xhttp.send();
    }