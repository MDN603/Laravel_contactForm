<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<section class="section gray-bg" id="contactus">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Get In Touch</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
        <div class="row flex-row-reverse">
            <div class="col-md-7 col-lg-8 m-15px-tb">
                <div class="contact-form">
                     <form method="post" action="{{route('contact.submit')}}" enctype="multipart/form-data">
                        @csrf
                     <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="name" type="text" placeholder="Full Name" class="form-control" name="name"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="email" type="text" placeholder="Email Address" class="form-control" name="emai">  
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input id="subject" type="text" placeholder="Subject" class="form-control" name="subject"> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="message" placeholder="Message" class="form-control" rows="3" name="msg"></textarea> 
                                </div>
                            </div>
                            @if(Session::has('Mail_sent'))
                            <div class="alert alert-success" role="alert">{{Session::get('Mail_sent')}}</div>
                            @endif
                            <div class="col-md-12">
                                <div class="send">
                                    <button type="submit" class="btn btn-outline">Contact Us</button> 
                                    <!-- <i class="arrow"></i> -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 m-15px-tb">
                <div class="contact-name">
                    <h5>Mail</h5>
                    <p>info@xyz.com</p>
                </div>
                <div class="contact-name">
                    <h5>Visit My Office</h5>
                    <p>Mirpur-1 <br>Dhaka,Bangladesh</p>
                </div>
                <div class="contact-name">
                    <h5>Phone</h5>
                    <p>+01 123 654 8096</p>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<style>
    body{
    color: #6F8BA4;
    margin-top:20px;}
.section {
    padding: 100px 0;
    position: relative;
}

.gray-bg {
    background-color: #f5f5f5;
}
/* Contact Us
---------------------*/
.contact-name {
  margin-bottom: 30px;
}
.contact-name h5 {
  font-size: 22px;
  color: #20247b;
  margin-bottom: 5px;
  font-weight: 600;
}
.contact-name p {
  font-size: 18px;
  margin: 0;
}

.social-share a {
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  text-align: center;
  margin-right: 10px;
}
.social-share .dribbble {
  box-shadow: 0 8px 30px -4px rgba(234, 76, 137, 0.5);
  background-color: #ea4c89;
}
.social-share .behance {
  box-shadow: 0 8px 30px -4px rgba(0, 103, 255, 0.5);
  background-color: #0067ff;
}
.social-share .linkedin {
  box-shadow: 0 8px 30px -4px rgba(1, 119, 172, 0.5);
  background-color: #0177ac;
}

.contact-form .form-control {
  border: none;
  border-bottom: 1px solid #20247b;
  background: transparent;
  border-radius: 0;
  padding-left: 0;
  box-shadow: none !important;
}
.contact-form .form-control:focus {
  border-bottom: 1px solid #fc5356;
}
.contact-form .form-control.invalid {
  border-bottom: 1px solid #ff0000;
}
.contact-form .send {
  margin-top: 20px;
}
@media (max-width: 767px) {
  .contact-form .send {
    margin-bottom: 20px;
  }
}

.section-title h2 {
    font-weight: 700;
    color: #20247b;
    font-size: 45px;
    margin: 0 0 15px;
    border-left: 5px solid #fc5356;
    padding-left: 15px;
}
.section-title {
    padding-bottom: 45px;
}
.contact-form .send {
    margin-top: 20px;
}
.px-btn {
    padding: 0 50px 0 20px;
    line-height: 60px;
    position: relative;
    display: inline-block;
    color: #20247b;
    background: none;
    border: none;
}
.px-btn:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    border-radius: 30px;
    background: transparent;
    border: 1px solid rgba(252, 83, 86, 0.6);
    border-right: 1px solid transparent;
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    width: 60px;
    height: 60px;
}
.px-btn .arrow {
    width: 13px;
    height: 2px;
    background: currentColor;
    display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    right: 25px;
}
.px-btn .arrow:after {
    width: 8px;
    height: 8px;
    border-right: 2px solid currentColor;
    border-top: 2px solid currentColor;
    content: "";
    position: absolute;
    top: -3px;
    right: 0;
    display: inline-block;
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
</body>
