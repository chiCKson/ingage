<?php
require('views/template/header.php');
?>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid bg-light py-3">
    <form id="contact-form" method="post" action="/add_event" role="form">
        <div class="messages"></div>
        <div class="controls">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_name">Event Name *</label>
                        <input name="event_name" type="text"  class="form-control" placeholder="Please enter event name *" required="required" data-error="name is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_email">Date *</label>
                        <input name="event_date" type="date"  class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_phone">Location</label>
                        <input name="location" type="tel"  class="form-control" placeholder="Please enter event location">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_name">Facebook </label>
                        <input name="facebook" type="text"  class="form-control" placeholder="Please enter facebook link ">
                        <div class="help-block with-errors"></div>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_name">Twitter </label>
                        <input name="twitter" type="text"  class="form-control" placeholder="Please enter twitter link ">
                        <div class="help-block with-errors"></div>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_name">Google + </label>
                        <input name="google-plus" type="text"  class="form-control" placeholder="Please enter google+ link ">
                        <div class="help-block with-errors"></div>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_name">Website </label>
                        <input name="website" type="text"  class="form-control" placeholder="Please enter website url ">
                        <div class="help-block with-errors"></div>
                    </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Description *</label>
                    <textarea name="description" name="message" class="form-control" placeholder="What is this event about*" rows="4" required="required" data-error="send a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-warning btn-send" value="Add Event">
                <a href="/home" class="btn btn-warning btn-send">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong>*</strong> These fields are required.</p>
            </div>
        </div>
    </form>
</div>
<?php
require('views/template/header.php');
?>