
$(document).ready(function(){

    /* ########################################*/
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

            $("#productId").html('<select id=\'shipid\'  name=\'shipid\'  class=\'form-control text-uppercase\'><option class=\'\' value=\'0\'>SELECT ONE</option><option class=\'\' value=\'1\'>MV POSIDON (1)</option><option class=\'\' value=\'2\'>MV RITALINK (2)</option><option class=\'\' value=\'3\'>MV SANTA ELENA (3)</option><option class=\'\' value=\'4\'>MV KONA (4)</option><option class=\'\' value=\'5\'>MV TOLEDO (5)</option><option class=\'\' value=\'6\'>MV SYDPOLINE (6)</option><option class=\'\' value=\'7\'>MV HERETTE (7)</option><option class=\'\' value=\'8\'>MV DOLPHINA (8)</option><option class=\'\' value=\'9\'>MV SALIMA-S (9)</option><option class=\'\' value=\'10\'>MV ELENA-B (10)</option><option class=\'\' value=\'11\'>MV MERINA BAY (11)</option><option class=\'\' value=\'12\'>MV CS CRISTINE (12)</option><option class=\'\' value=\'13\'>MV OCEN ALFA (13)</option><option class=\'\' value=\'14\'>MV HOUMA BELEE (14)</option><option class=\'\' value=\'15\'>MV FRANCISCO (15)</option><option class=\'\' value=\'16\'>MV ICE (16)</option><option class=\'\' value=\'17\'>MV KAI (17)</option><option class=\'\' value=\'18\'>MV CASTILLO (18)</option><option class=\'\' value=\'19\'>MV ARON (19)</option><option class=\'\' value=\'20\'>MV POLASKA (20)</option><option class=\'\' value=\'21\'>MV CARAKA (21)</option><option class=\'\' value=\'22\'>MV ORIENTAL (22)</option><option class=\'\' value=\'23\'>MV RESOLVE (23)</option><option class=\'\' value=\'24\'>MV ACER (24)</option><option class=\'\' value=\'25\'>MV KOREA GAS (25)</option><option class=\'\' value=\'26\'>MV HUITAI (26)</option><option class=\'\' value=\'27\'>MT GAS MASTER (27)</option><option class=\'\' value=\'28\'>MV HAMMONIA (28)</option><option class=\'\' value=\'29\'>MV STAR MONISHA (29)</option><option class=\'\' value=\'30\'>MV LONG FU STAR (30)</option><option class=\'\' value=\'31\'>MV POS CHALLENGER (31)</option><option class=\'\' value=\'32\'>MV LAKE HILL 7 (32)</option><option class=\'\' value=\'33\'>MV MANDRAKI (33)</option><option class=\'\' value=\'34\'>BSBL & VAS (34)</option></select>');

            $("#voucherNo").html('<div class="col-sm-4 text-right form-group"><label for="challanNo"> Challan No :</label></div><div class="col-sm-2 text-left"><input value="0" class="form-control" name="challanNo" type="text" ></div><div class="col-sm-6"></div>\n');

        }else{
            $("#productId").html('');
        }
        if(tranType == "MPAY" && accounthead==61){

            $("#productId").html('<select id=\'shipid\'  name=\'shipid\'  class=\'form-control text-uppercase\'><option class=\'\' value=\'0\'>SELECT ONE</option><option class=\'\' value=\'1\'>MV POSIDON (1)</option><option class=\'\' value=\'2\'>MV RITALINK (2)</option><option class=\'\' value=\'3\'>MV SANTA ELENA (3)</option><option class=\'\' value=\'4\'>MV KONA (4)</option><option class=\'\' value=\'5\'>MV TOLEDO (5)</option><option class=\'\' value=\'6\'>MV SYDPOLINE (6)</option><option class=\'\' value=\'7\'>MV HERETTE (7)</option><option class=\'\' value=\'8\'>MV DOLPHINA (8)</option><option class=\'\' value=\'9\'>MV SALIMA-S (9)</option><option class=\'\' value=\'10\'>MV ELENA-B (10)</option><option class=\'\' value=\'11\'>MV MERINA BAY (11)</option><option class=\'\' value=\'12\'>MV CS CRISTINE (12)</option><option class=\'\' value=\'13\'>MV OCEN ALFA (13)</option><option class=\'\' value=\'14\'>MV HOUMA BELEE (14)</option><option class=\'\' value=\'15\'>MV FRANCISCO (15)</option><option class=\'\' value=\'16\'>MV ICE (16)</option><option class=\'\' value=\'17\'>MV KAI (17)</option><option class=\'\' value=\'18\'>MV CASTILLO (18)</option><option class=\'\' value=\'19\'>MV ARON (19)</option><option class=\'\' value=\'20\'>MV POLASKA (20)</option><option class=\'\' value=\'21\'>MV CARAKA (21)</option><option class=\'\' value=\'22\'>MV ORIENTAL (22)</option><option class=\'\' value=\'23\'>MV RESOLVE (23)</option><option class=\'\' value=\'24\'>MV ACER (24)</option><option class=\'\' value=\'25\'>MV KOREA GAS (25)</option><option class=\'\' value=\'26\'>MV HUITAI (26)</option><option class=\'\' value=\'27\'>MT GAS MASTER (27)</option><option class=\'\' value=\'28\'>MV HAMMONIA (28)</option><option class=\'\' value=\'29\'>MV STAR MONISHA (29)</option><option class=\'\' value=\'30\'>MV LONG FU STAR (30)</option><option class=\'\' value=\'31\'>MV POS CHALLENGER (31)</option><option class=\'\' value=\'32\'>MV LAKE HILL 7 (32)</option><option class=\'\' value=\'33\'>MV MANDRAKI (33)</option><option class=\'\' value=\'34\'>BSBL & VAS (34)</option></select>');

        }else{
            $("#productId").html('');
        }

    });
    /*##############################*/
    $("#productId").change(function(){
        var shipid=$("#shipid").val();
        var accounthead=$("#accheadId").val();
        if(shipid!=0 && accounthead==24){
            $("#weight").html('<div class="row" ><div class="col-sm-4 text-right form-group"><label for="weight">Weight :</label></div><div class="col-sm-2 text-left"><input class="form-control"  name="tonWeight"  type="text" > TON</div><div class="col-sm-1"><input class="form-control"  name="kgWeight"  type="text" > KG</div> <div class="col-sm-5"></div></div>');
        }else{$("#weight").html('');}

        if(shipid!=0 && accounthead==61){
            $("#weight").html('<div class="row" ><div class="col-sm-4 text-right form-group"><label for="weight">Ship Expense Head :</label></div> <div class="col-sm-5"><select class="form-control text-uppercase"  name="shipexheadid" id="shipexheadid"> </select><div class="col-sm-2 text-left">  </div>  </div></div>');
            //////////////////////
            $.getJSON("list-data.php", function(return_data){
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