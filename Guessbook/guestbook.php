<!doctype html>
<html lang="en">
<?php
include ('includes/head.html');
require('includes/php_setup.php');
?>
<body onload="hideTextbox()">
<div class="container main_container">

    <!-- Jumbotron Header -->
    <div class="jumbotron">
        <h1 class="display-4">GuestBook</h1>
        <p class="lead">
            Sign my GuestBook!
        </p>

    </div>

    <!-- GuestBook contact form -->
    <form action="thank_you.php" method="post" id="guestform">
        <!-- Contact info -->
        <fieldset class="form-group">
            <legend>Contact Info</legend>
            <hr class="solid">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="form-check-label" for="fname">First name:</label>
                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="first_name">
                    <span class="error_msg" id="error_fname">
                        Please enter a first name
                    </span>
                </div>
                <div class="form-group col-md-6">
                    <label class="form-check-label" for="lname">Last name:</label>
                    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="last_name">
                    <span class="error_msg" id="error_lname">
                        Please enter a last name
                    </span>
                </div>
                <div class="form-group col-md-6">
                    <label class="form-check-label" for="jtitle">Job Title:</label>
                    <input type="text" class="form-control" id="jtitle" placeholder="Enter Job Title" name="job_title">
                    <span class="error_msg" id="error_jtitle">
                        Please enter a job title
                    </span>
                </div>
                <div class="form-group col-md-6">
                    <label class="form-check-label" for="company">Company:</label>
                    <input type="text" class="form-control" id="company" placeholder="Enter Company" name="company">
                    <span class="error_msg" id="error_company">
                        Please enter a company
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="form-check-label" for="email">Email:</label>
                <span class="error_msg" id="check_email">
                    Required
                </span>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                <span class="error_msg" id="input_email">
                        Must contain an "@" symbol and/or "dot (.)"
                </span>
            </div>
            <div class="form-group">
                <label class="form-check-label" for="url">LinkedIn URL:</label>
                <input type="url" class="form-control" id="url" placeholder="Enter URL" name="linkedin">
                <span class="error_msg" id="input_url">
                        Must contain an http and/or .com
                </span>
            </div>
        </fieldset>

        <!-- How we met -->
        <fieldset class="form-group">
            <legend>How we met</legend>
            <hr class="solid">
            <div class="form-row">
                <div class="form-group">
                    <label class="form-check-label" for="gather">How did we meet?</label>
                    <select class="form-control" id="gather" name="met"
                            onchange="showTextbox(this.options[this.selectedIndex].value)">
                        <option selected="selected" value="Choose">Choose</option>
                        <option value="meetup">Meetup</option>
                        <option value="jobfair">Job fair</option>
                        <option value="notmet">We haven't met yet</option>
                        <option value="Other">Other</option>
                    </select>
                    <div id="other_input">Other (please specify): <label class="form-check-label" for="other">
                        <input type="text" name="other" id="other">
                    </label></div>
                    <span class="error_msg" id="input_meet">
                        Please select or input a valid selection
                    </span>
                </div>
            </div>
            <div class="form-group">
                <label class="form-check-label" for="msg">Message:</label>
                <textarea class="form-control" id="msg" rows="5" name="msg" placeholder="Add a message"></textarea>
            </div>
        </fieldset>

        <!-- Mailing list -->
        <fieldset class="form-group">
            <legend>Mailing list</legend>
            <hr class="solid">
            <div class="form-group">
                <label class="d-block font-weight-bold">Do you want to participate in my mailing list?</label>
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" id="add_mailling">
                    <label class="custom-control-label" for="add_mailling">Please add me to your mailing list!</label>
                </div>
                <br>

                <label class="d-block">Please choose an email format:</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="htmlformat" name="format" value="HTML"
                           checked>
                    <label class="custom-control-label" for="htmlformat">HTML</label>
                </div>

                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" id="textformat" name="format" value="Text"
                           checked>
                    <label class="custom-control-label" for="textformat">Text</label>
                </div>
            </div>
        </fieldset>

        <div class="card-footer">
            <button class="btn btn-primary btn-default float-right" type="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>