<!--external header file-->
<?php include 'view/header.php'; ?>

<!-- images carousel -->
<div class="container banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="imgs/theater1.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="imgs/theater2.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="imgs/theater3.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- main page content -->
<main>
    <div class="container">
        <h1>Welcome to Moonlight Cinema! </h1>
        <p>Welcome to the world's best cinema theater.</p>

    </div>

    <div class="container well">
        <div class="row">
            <div class="col-sm-6">
                <h3>Hours</h3>
                <p>Tue - Sunday: 10am - 10pm</p>
                <p>Mondays: Closed</p>
            </div>
            <div class="col-sm-6">
                <h3>Date: <span id="date">DATE</span></h3>
                <h3>Status: <span id="status">STATUS</span></h3>
            </div>
        </div>
    </div>
</main>
</body>
</html>