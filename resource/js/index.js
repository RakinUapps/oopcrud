$(document).ready(function(){
    /* ########################################*/
    $("#branchid").change(function() {
        var branch = $("#branchid").val();
        if (branch !== 'SELECT' ) {
            $("#book").html('<td>Book</td><td>:</td><td><select  name="bookname" id="bookname" class="form-control" required><option value=\'SELECT\'>Select Book</option><option value=\'CASH\'>Cash Book</option><option value=\'LEDGER\'>General Leadger Book</option><option value=\'PARTY\'>Party Leadger Book</option><option value=\'SALE\'>Sales Leadger Book</option><option value=\'BANK\'>Bank Book</option><option value=\'TBALANCE\'>Trial Balance</option><option value=\'TACCOUNT\'>Trading Account</option><option value=\'PLACCOUNT\'>P/L Account</option><option value=\'BALANCESHEET\'>Statement of Affairs</option> </select></td>');
            $("#bookname").change(function(){
                var book=$("#bookname").val();
                postData=book;
                switch (book) {
                    case "CASH":
                        $("#searchform").attr('action', 'statement.php');
                        //alert("Form Action is Changed to 'mysql.html'\n Press Submit to Confirm");
                        break;
                    case "LEDGER":
                        $("#searchform").attr('action', 'ledger.php');
                        //alert("Form Action is Changed to 'mysql.html'\n Press Submit to Confirm");
                        break;
                    case "SALE":
                        $("#searchform").attr('action', 'allsalesledger.php');
                        //alert("Form Action is Changed to 'mysql.html'\n Press Submit to Confirm");
                        break;
                    case "BANK":
                        $("#searchform").attr('action', 'bankledger.php');
                        //alert("Form Action is Changed to 'mysql.html'\n Press Submit to Confirm");
                        break;
                    case "PARTY":
                        $("#searchform").attr('action', 'partyledger.php');
                        //alert("Form Action is Changed to 'mysql.html'\n Press Submit to Confirm");
                        break;
                    case "TBALANCE":
                        $("#searchform").attr('action', 'trialBalance.php');
                        //alert("Form Action is Changed to 'mysql.html'\n Press Submit to Confirm");
                        break;
                    default:
                        $("#searchform").attr('action', '#');
                }

                if(book=='LEDGER'){
                    $("#head").html('<td>Head Name</td><td>:</td><td><select id="accheadId" name="accheadId" class="form-control text-uppercase "></select></td>');
                    $.getJSON("list-data.php",{data:postData}, function(return_data){
                        $.each(return_data.data, function(key,value){
                            $("#accheadId").append(
                                "<option value=" + value.id +">"+value.headnameenglish+"</option>"
                            );
                        });
                    });

                }
                else if(book=='SALE' ){$("#head").html('<td>Head Name</td><td>:</td><td><select id="accheadId" name="accheadId"     class="form-control text-uppercase "><option class=\'\' value=\'\'></option>SELECT ONE<option class=\'\' value=\'24\'>SALE  (24)</option></select></td>');}
                else if(book=='BANK' ){
                    $("#head").html('<td>Bank</td><td>:</td><td><select id="bankid" name="bankid"     class="form-control text-uppercase "></select></td>');
                    $.getJSON("list-data.php",{data:postData}, function(return_data){

                        $.each(return_data.data, function(key,value){
                            $("#bankid").append(
                                "<option value=" + value.id +">"+value.accountname+"</option>"
                            );
                        });
                    });

                }

                else if(book=='PARTY' ){$("#head").html('<td>Party</td><td>:</td><td><select id="partyid" name="partyid"  class="form-control text-uppercase "></select></td>');
                    $.getJSON("list-data.php",{data:postData}, function(return_data){

                        $.each(return_data.data, function(key,value){
                            $("#partyid").append(
                                "<option value=" + value.id +">"+value.partyname+"</option>"
                            );
                        });
                    });

                }
                else{ $("#head").html(''); }
            });
        }else {$("#book").html(''); }
    });
    /*########################*/
    $("#head").change(function(){
        var headid=$("#accheadId").val();

        if(headid==24){
            var postData=headid;
            $("#sale").html('<td>Product</td><td>:</td><td><select id=\'salename\'  name=\'salename\'  class=\'form-control text-uppercase\'></select></td>');
            $.getJSON("list-data.php",{data:postData}, function(return_data){

                $.each(return_data.data, function(key,value){
                    $("#salename").append(
                        "<option value=" + value.id +">"+value.vesselname+"</option>"
                    );
                });
            });

        }

        else{  $("#sale").html('');   }
    });

});