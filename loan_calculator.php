<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <?php
    include("include/css.php");
    ?>
    <style>

        #loanCalc input{
            padding:10px;
            display:block;
        }

        .clearfix{
            clear:both!important;
        }

        .paymentCalc{
            background-color: #f7f7f7;
            border: 1px solid #d3d3d3;
            padding: 35px 35px;
            overflow: auto;
            align-items: center;
            justify-content: center;
        }

        .calcBtn{
            display:inline-block;
            background:#c62233;
            color:#fff;
            text-align:center;
            padding:10px 20px;
            border-radius: 3px;
        }

        #paymentResults{
            display: none;
            background:#fff;
            padding: 30px 60px 36px 60px;
            border:1px solid lightgrey;
            margin-top:88px;
        }

    </style>
</head>
<body>
<div class="wrapper ovh">
    <div class="preloader"></div>

    <!--top header section-->
    <?php
    include("include/header.php");
    ?>


    <!--menubar section-->
    <?php
    include("include/menubar.php");
    ?>


    <!--main body content starts here-->
<div class="row m-3"></div>
    <div class="container paymentCalc">

        <div class="row">
            <div class="col-md-6">

            <form id="loanCalc" action="" method="get">
                <div class="col-md-12">
                    <h2>Calculate Your Auto Loan Payment</h2>
                    <div class="form-group">
                        <label for="vehiclePrice">Vehicle Price</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="vehiclePrice" placeholder="Vehicle Price">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="downPayment">Down Payment</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="downPayment" placeholder="Down Payment" value="0">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="tradeValue">Trade In Value</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="tradeValue" placeholder="Trade In Value" value="0">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="intRate">Interest Rate</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="intRate" placeholder="Interest Rate" value="3.25">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="loanTerm">Loan Term</label>
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="loanTerm" placeholder="Loan Term (ex: 36 Months)">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <a href="#" class="calcBtn" onclick="calculatePayments()" id="calculate" value="Calulate">Calculate</a>
                </div>
            </form>
            </div>
            <div class="col-md-6">
                <div id="paymentResults">

                </div>
            </div>
        </div>

    </div>

    <div class="m-3"></div>
    <!--main body content ends here-->


    <!--newslatter section-->
    <?php
    include("include/newslatter.php");
    ?>


    <!--footer section and go to top button-->
    <?php
    include("include/footer.php");
    ?>


    <!-- Wrapper End -->


    <!--js files-->


    <script>
        function calculatePayments(){
            var vehiclePrice = document.getElementById('vehiclePrice').value,
                loanTerm = document.getElementById('loanTerm').value,
                intRate = document.getElementById('intRate').value,
                downPayment = document.getElementById('downPayment').value,
                tradeValue = document.getElementById('tradeValue').value,
                amount = parseInt(vehiclePrice),
                months = parseInt(loanTerm),
                down  = parseInt(downPayment),
                trade =  parseInt(tradeValue),
                totalDown  = down + trade
            annInterest = parseFloat(intRate),
                monInt = annInterest / 1200;

            if(!amount){
                alert('Please add a loan amount');
                return;
            }

            if(!months){
                months = 60;
                loanTerm = document.getElementById('loanTerm').value = '60';
            }

            if(!downPayment){
                down = 0;
                downPayment = document.getElementById('downPayment').value = '0';
            }

            if(!trade){
                trade = 0;
                tradeValue = document.getElementById('tradeValue').value = '0';
            }

            if(!annInterest){
                annInterest = 3.25;
                intRate = document.getElementById('intRate').value = '3.25';
            }


            var calc = ((monInt + (monInt / (Math.pow((1 + monInt), months) -1))) * (amount - (totalDown || 0))).toFixed(2);

            var paymentResults = document.getElementById('paymentResults');
            paymentResults.style.display = 'block';
            paymentResults.innerHTML = '';
            var results = document.createElement('div');
            results.innerHTML = '<h1 style="text-align:center">Estimated Monthly Payment is:<br/></h1>' + '<h3 style="text-align:center">$' + calc + '/Month</h3>';

            paymentResults.append(results);


        }
    </script>
    <?php
    include("include/js.php");
    ?>
</body>


</html>