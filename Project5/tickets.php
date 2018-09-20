<!--external header file-->
<?php include 'view/header.php'; ?>

<!--css and javascript specifically for this page-->
<link href="css/tickets.css" rel="stylesheet">
<script src="js/tickets.js"></script>

<main>
    <!-- main prices -->
    <div class="container prices well">
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Attendants</h3>
                    <div class="container">
                        <div class="form-group">
                            <label for="numberOfAdults">Adults: <span id="numOfAError"></span></label>
                            <input type="text" class="form-control" id="numberOfAdults" placeholder="2">
                        </div>
                        <div class="form-group">
                            <label for="numberOfChildren">Children: <span id="numOfBError"></span></label>
                            <input type="text" class="form-control" id="numberOfChildren" placeholder="2">
                        </div>
						<div class="form-group">
                            <label for="numberOfSeniors">Seniors: <span id="numOfCError"></span></label>
                            <input type="text" class="form-control" id="numberOfSeniors" placeholder="2">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3>Extras</h3>
                    <div class="form-group extras">
                        <div class="container">
                            <button type="button" class="btn btn-primary" id="sonyToggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                                Sony 4K
                            </button>
                        </div>
                        <div class="container">
                            <button type="button" class="btn btn-primary" id="atmosToggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                                Dolby Atmos
                            </button>
                        </div>
                        <div class="container">
                            <button type="button" class="btn btn-primary" id="dinnerToggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                                Dinner
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <button type="button" id="calculatePriceButton" class="btn btn-default">Get Price</button>
                </div>
                <div class="col-sm-10">
                    <span id="price"></span>
                </div>

            </div>
        </div>
    </div>
</main>
</body>
</html>