

<script type="text/javascript">

    $('.from-datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
    });
    $('.to-datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
    });

    $(document).ready(function () {
        calculate();
    });

    function calc() {

        var totalamount=((parseFloat($('#rate').val(), 10)*parseFloat($("#bandwidth").val(), 10)) /30 )* parseFloat($("#totalDays").val(), 10)
        $('.totalamount').val(totalamount);
        /*
        $('#amount').html(
            (parseFloat($('#rate').val(), 10) /30 )* parseFloat($("#totalDays").val(), 10)

        );
        */

    }
    $("#rate").keyup(calc);
    $("#bandwidth").keyup(calc);
    $("#bandwidth").change(calc);
    //$("#from").keyup(calc);
    $("#fromDurationDate").change(calc);
    $("#toDurationDate").change(calc);
    $("#totalDays").onload(calc);
    $("#totalDays").change(calc);

</script>

<script>
    $('.fromdate').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
    });
    $('.todate').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
    });

    $('.selectDate').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
    });


    $('.fromdate').datepicker().bind("change", function () {
        var minValue = $(this).val();
        minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
        $('.todate').datepicker("option", "minDate", minValue);
        calculate();
    });
    $('.todate').datepicker().bind("change", function () {
        var maxValue = $(this).val();
        maxValue = $.datepicker.parseDate("yy-mm-dd", maxValue);
        $('.fromdate').datepicker("option", "maxDate", maxValue);
        calculate();
    });

    function calculate() {
        var d1 = $('.fromdate').datepicker('getDate');
        var d2 = $('.todate').datepicker('getDate');
        var oneDay = 24*60*60*1000;
        var diff = 0;
        if (d1 && d2) {

            diff = Math.round(Math.abs((d2.getTime() - d1.getTime())/(oneDay)));
        }
        $('.calculated').val(diff+1);
        //$('.minim').val(d1)
    }

</script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script>
    window.jQuery || document.write('<script src="../resource/js/jquery.min.js"><\/script>')
</script>
<script src="../resource/bootstrap/js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../resource/js/ie10-viewport-bug-workaround.js"></script>
<!-- Bootstrap Dropdown Hover JS -->
<script src="../resource/bootstrap/js/jquery.js"> </script>
<!-- Placed at the end of the document so the pages load faster -->
<script src="../resource/js/jquery.min.js"></script>
<!--<script>window.jQuery || document.write('<script src="js/jquery.min.js"></script>')</script>-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- Bootstrap Dropdown Hover JS -->
<script src="../resource/js/bootstrap-dropdownhover.min.js"></script>


<script type="text/javascript">
    /* Set the width of the side navigation to 250px */
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>



<script>
    jQuery(function($) {
        $('#message').fadeIn(500);
        $('#message').fadeOut (500);
        $('#message').fadeIn (500);
        $('#message').delay (2500);
        $('#message').fadeOut (2000);
    })

    $('#delete').on('click',function(){
        document.forms[1].action="trashmultiple.php";
        $('#multiple').submit();
    });

    //select all checkboxes
    $("#select_all").change(function(){  //"select all" change
        var status = this.checked; // "select all" checked status
        $('.checkbox').each(function(){ //iterate all listed checkbox items
            this.checked = status; //change ".checkbox" checked status
        });
    });

    $('.checkbox').change(function(){ //".checkbox" change
//uncheck "select all", if one of the listed checkbox item is unchecked
        if(this.checked == false){ //if this item is unchecked
            $("#select_all")[0].checked = false; //change "select all" checked status to false
        }

//check "select all" if all checkbox items are checked
        if ($('.checkbox:checked').length == $('.checkbox').length ){
            $("#select_all")[0].checked = true; //change "select all" checked status to true
        }
    });


</script>



<!-- required for search, block 5 of 5 start -->
<script>

    $(function() {
        var availableTags = [

            <?php
            echo $comma_separated_keywords;
            ?>
        ];
        // Filter function to search only from the beginning of the string
        $( "#searchID" ).autocomplete({
            source: function(request, response) {

                var results = $.ui.autocomplete.filter(availableTags, request.term);

                results = $.map(availableTags, function (tag) {
                    if (tag.toUpperCase().indexOf(request.term.toUpperCase()) === 0) {
                        return tag;
                    }
                });

                response(results.slice(0, 15));

            }
        });


        $( "#searchID" ).autocomplete({
            select: function(event, ui) {
                $("#searchID").val(ui.item.label);
                $("#searchForm").submit();
            }
        });


    });

</script>
<!-- required for search, block5 of 5 end -->
</body>
</html>

