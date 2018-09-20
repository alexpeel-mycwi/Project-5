<!--external header file-->
<?php include 'view/header.php'; ?>

<!--css and javascript specifically for this page-->
<link href="css/contact.css" rel="stylesheet">
<!-- <script src="js/contact.js"></script> -->

<main>
	<div class="container well">
        <h1>Have an question? Want to book a private viewing? Have some feedback?</h1>
        <h2>Let us know!</h2>
        <!-- Contact Form-->
         <div class="form container">
                <form class="form-horizontal" id="contact" method="post" action="contact-success.php" >
                    <div class="form-group">
                        <label for="firstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="firstName" placeholder="First Name" name="first_name" ><span class='errorText' id="firstError"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="last_name"><span class='errorText' id="lastError"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" ><span class='errorText' id="emailError"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="commentsArea" class="col-sm-2 control-label">Comments</label>
                        <div class="col-sm-10">
						
                            <textarea type="comments" class="form-control" id="commentsArea" rows="5" name="comments" ></textarea>
							
							<span class='errorText' id="commentsError"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-5 col-sm-10">
                            <button type="submit" class="btn btn-default" id="submitButton" onclick="submitForm()">Submit</button>
							<!--<button type="submit" class="btn btn-default" id="submitButton">Submit</button>-->
                        </div>
                    </div>
                </form>
        </div>
	</div>
</main>
</body>
</html>