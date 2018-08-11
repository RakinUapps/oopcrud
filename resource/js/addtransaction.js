/* Voucher selection on Sale*/
$(document).ready(function(){
    $("#transactionType").change(function() {
        var transactionType = $("#transactionType").val();
        if (transactionType == "MREC") {
            $("#voucherNo").html('<div class="col-sm-4 text-right form-group"><label for="crVoucherNo"> Voucher No (CR) :</label></div><div class="col-sm-2 text-left"><input value="0" class="form-control " name="crVoucherNo" type="text" ></div><div class="col-sm-6"></div>');
            $("#paidTo").html('<div class="col-sm-4 text-right form-group"><label for="receivedFrom">Received From :</label></div><div class="col-sm-3 text-left"><input class="form-control" name="receivedFrom"  type="text" ></div><div class="col-sm-5"></div>');
        }else {
            $("#voucherNo").html('<div class="col-sm-4 text-right form-group"><label for="voucherNo"> Voucher No (DR) :</label></div><div class="col-sm-2 text-left"><input value="0" class="form-control " name="voucherNo" type="text" ></div><div class="col-sm-6"></div>');
            $("#paidTo").html('<div class="col-sm-4 text-right form-group"><label for="receivedTo">Paid To :</label></div><div class="col-sm-3 text-left"><input value="0" class="form-control" name="receivedTo" type="text" ></div><div class="col-sm-5"></div>');
        }
    });

    /*##############################*/
    $("#accheadId").change(function(){
        var accounthead=$("#accheadId").val();
        var tranType = $("#transactionType").val();
        if(tranType == "MREC" && accounthead==24){
            var postData=accounthead;
            $("#productId").html('<select id=\'shipid\'  name=\'shipid\'  class=\'form-control text-uppercase\'></select>');
            $.getJSON("list-data.php",{data:postData}, function(return_data){

                $.each(return_data.data, function(key,value){
                    $("#shipid").append(
                        "<option value=" + value.id +">"+value.vesselname+"</option>"
                    );
                });

            });

            $("#voucherNo").html('<div class="col-sm-4 text-right form-group"><label for="challanNo"> Challan No :</label></div><div class="col-sm-2 text-left"><input value="0" class="form-control" name="challanNo" type="text" ></div><div class="col-sm-6"></div>\n');
        }
        else if(tranType == "MPAY" && accounthead==61){
            var postData=accounthead;
            $("#productId").html('<select id=\'shipid\'  name=\'shipid\'  class=\'form-control text-uppercase\'></select>');
            $.getJSON("list-data.php",{data:postData}, function(return_data){

                $.each(return_data.data, function(key,value){
                    $("#shipid").append(
                        "<option value=" + value.id +">"+value.vesselname+"</option>"
                    );
                });

            });
        }
        else if(accounthead==0){
            var postData=accounthead;
            $("#productId").html('<select id=\'customerId\'  name=\'customerId\'  class=\'form-control text-uppercase\'></select>');
            $.getJSON("list-data.php",{data:postData}, function(return_data){

                $.each(return_data.data, function(key,value){
                    $("#customerId").append(
                        "<option value=" + value.id +">"+value.partyname+"</option>"
                    );
                });

            });
        }
        else{
            $("#productId").html('');
        }

    });
    /*##############################*/
    $("#productId").change(function(){
        var shipid=$("#shipid").val();
        var accounthead=$("#accheadId").val();
        if(accounthead==24){
            $("#weight").html('<div class="row" ><div class="col-sm-4 text-right form-group"><label for="weight">Weight :</label></div><div class="col-sm-2 text-left"><input class="form-control"  name="tonWeight"  type="text" > TON</div><div class="col-sm-1"><input class="form-control"  name="kgWeight"  type="text" > KG</div> <div class="col-sm-5"></div></div>');
        }
        else if(accounthead==61){
            var postData='shipexpense';
            //var postData=61;
            $("#weight").html('<div class="row" ><div class="col-sm-4 text-right form-group"><label for="weight">Ship Expense Head :</label></div> <div class="col-sm-5"><select class="form-control text-uppercase"  name="shipexheadid" id="shipexheadid"> </select><div class="col-sm-2 text-left">  </div>  </div></div>');
            //////////////////////
            $.getJSON("list-data.php",{data:postData}, function(return_data){
                $.each(return_data.data, function(key,value){
                    $("#shipexheadid").append(
                        "<option value=" + value.id +">"+value.name+"</option>"
                    );
                });
            });
            //////////////////////
        }
        else{$("#weight").html('');}
    });
    /*#############################*/
    $("#transactionMode").change(function() {
        var transactionMode=$("#transactionMode").val();
        if(transactionMode == "CASH CHEQUE"){
            $("#activeChequeField").html(' <div class="row" ><div class="col-sm-4 text-right form-group"><label for="chequeNo">Cheque No :</label></div><div class="col-sm-3 text-left"><input class="form-control"  name="chequeNo"  type="text" ></div><div class="col-sm-5"></div></div><div class="row"><div class="col-sm-4 text-right form-group"><label for="chequeDate"> Cheque Date :</label></div><div class="col-sm-3 text-left"><input class="form-control selectDate"  name="chequeDate" id="chequeDate" placeholder="yyyy-mm-dd"  type="text" ></div><div class="col-sm-5"></div></div>')
        }else {
            $("#activeChequeField").html('');
        }
    });

});

/* Bank selection on Bank Deposit*/

function CheckAccountHeadField(val) {
    var crvoucher=document.getElementById('crVoucherNo');
    var bank = document.getElementById('activeBankField');
    var voucher = document.getElementById('voucherNo');
    var challan = document.getElementById('challanNo');

    if (val==59) {
        bank.style.display = 'block';
        challan.style.display = 'none';
        voucher.style.display = 'none';
        crvoucher.style.display = 'none';
    }
    else if (val == 24) {
        challan.style.display = 'block';
        voucher.style.display = 'none';
        crvoucher.style.display = 'none';
    }

    else {
        bank.style.display = 'none';
        challan.style.display = 'none';
        voucher.style.display = 'block';
        crvoucher.style.display = 'none';
    }
}

/* checque*/