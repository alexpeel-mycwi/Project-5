var $ = function (selector) {
    switch (selector.charAt(0)) {
        case '.':
            return document.getElementsByClassName(selector.substring(1));
        case '#':
            return document.getElementById(selector.substring(1));
        default:
            return document.getElementsByTagName(selector);
    }
};

var submitForm = function () {
    var firstName = $('#firstName').value;
    var lastName = $('#lastName').value;
    var email = $('#inputEmail').value;
	var comments = $('#commentsArea').value;
    var emailAt = false;
    var emailDot = false;
    var valid = true;

    //Form Validation
    if (firstName == '') {
        $('#firstError').textContent = 'Please provide a first name.';
        valid = false;
    } else $('#firstError').textContent = '';
    if (lastName == '') {
        $('#lastError').textContent = 'Please provide a last name.';
        valid = false;
    } else $('#lastError').textContent = '';
    for (var i = 0; i < email.length; ++i) {
        if(email.charAt(i) === '@') emailAt = true;
        if(email.charAt(i) === '.') emailDot = true;
    }
    if (!emailAt || !emailDot) {
        $('#emailError').textContent = 'Please provide a valid email address.';
        valid = false;
    } else $('#emailError').textContent = '';
	if (comments === '') {
        $('#commentsError').textContent = 'Comments cannot be blank.';
        valid = false;
    } else $('#commentsError').textContent = '';
	
   //Submit form if valid
    if (valid) {

        $('#contact').submit();
        //window.location.href = "contact-success.php";
    }
};