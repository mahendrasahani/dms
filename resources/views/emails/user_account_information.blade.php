<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
    </style>
</head>
<body style="font-family: sans-serif;">

    <section>
        <div class="main" style="width: 100%;">
            <div class="email-box">
                <div class="email_template" style="width: 100%; max-width: 800px; margin: 0 auto; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; position: relative;">
                        <div class="top-email-header w-100" style="height: 100%; max-height: 250px; background-color:#253a76; position: relative;">
                                <div class="email-icon"
                                         style="height: 100%; width: 100%;">
                                        <span class="" style="text-align: center;">
                                            <img src="https://dms.toponsearch.in/public/assets/backend/assets/images/logos.png" style="width: 20%; margin-left: 40%;">
                                            <!-- <h5 style="font-size: 1.4rem; color: #fff; padding-top: .7rem; padding-bottom: 1rem;">Welcome to cygnett </h5> -->
                                        </span>
                                </div>     
                        </div>
                        <div style=" border: 1px solid #253a76;">
                            <div>
                                <center>
                                    <p class="" style="padding: 20px;">Welcome To Cygnett</p>
                                </center>
                            </div>
                            <div>
                                <hr style="max-width: 85%; margin: 0 auto; background-color:#253a76; height: 2.2px;">
                            </div>
                            <div class="user_details" style="padding: 20px;">
                                <div class="userdetail" style="max-width: 400px; margin: 0 auto;"> 
                                    <div> 
                                        <div style=" margin-bottom: 1.2rem;">
                                            <div style="display: inline-block; width: 50%; color: #253a76; font-weight: bold;">Full Name</div>
                                            <div style="display: inline-block; float: right; width:50%;">{{$user_detail_mail_data['first_name'] .' '. $user_detail_mail_data['last_name']}}</div>
                                        </div>

                                        <div style="margin-bottom: 1.2rem;">
                                            <div style="display: inline-block; width: 50%; color: #253a76; font-weight: bold;">Email</div>
                                            <div style="display: inline-block; float: right; width:50%;">{{$user_detail_mail_data['email']}}</div>
                                        </div>

                                        <div style="margin-bottom: 1.2rem;">
                                            <div style="display: inline-block; width: 50%; color: #253a76; font-weight: bold;">Mobile Number</div>
                                            <div style="display: inline-block; float: right; width:50%;">{{$user_detail_mail_data['phone']}}</div>
                                        </div>
 

                                        <div style=" margin-bottom: 1.2rem;">
                                            <div style="display: inline-block; width: 50%; color: #253a76; font-weight: bold;">Your Password</div>
                                            <div style="display: inline-block; float: right; width:50%;">{{$user_detail_mail_data['password']}}</div>
                                        </div>
                                        <div style=" margin-bottom: 1.2rem;">
                                            <div style="display: inline-block; width: 50%; color: #253a76; font-weight: bold;">Role</div>
                                            <div style="display: inline-block; float: right; width:50%;">{{$user_detail_mail_data['role']}}</div>
                                        </div>

                                          
                                        <div class="forgetpass" style="margin: .2rem 0 1rem 0;">
                                            <hr>
                                                <div style="padding: 10px 0;">
                                                     <p style="text-align: center; font-size: 16px;"><a href="{{$user_detail_mail_data['login_url']}}" style="text-decoration: none; color: #2196f3">Login</a></p>
                                                </div>
                                            <hr>
                                        </div>
                                    </div>  
                                </div> 
                                <div> 
                                </div>
                                <!-- <hr style="max-width: 85%; margin: 1rem auto; background-color:#253a76; "> -->
                            </div>
                        </div>
                        <section>
                            <div style="width: 100%;  background-color:#253a76;">
                                <center><p style="color:white; padding:15px;">606, 6th Floor, Tower-D, Unitech Cyber Park, Sector 39, Gurgaon 122003, Haryana, India</p></center>
                                <!-- <img src="img/logos2.png"  width="100" alt="" style="margin-left: 45%; padding: 2rem 0;"> -->
                            </div>
                        </section>
                    
                </div>
            </div>
        </div>
    </section>

 
</body>
</html>