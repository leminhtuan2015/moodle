til


### Setup send register email. 



---------------------------------------------------------------------------------

### Setup send register email. 
  - https://docs.moodle.org/32/en/Email_setup_gmail
  
  - GMail SMTP with Moodle
  - Location: **[Settings > Site administration > Plugins > Message outputs > Email]**
  
  - SMTP hosts: smtp.gmail.com:465 NOTE: Leave out the port (:465) in 1.9.2 or lower
  - SMTP security: SSL
  - SMTP username: Your email address @gmail.com or your own domain if using Google Apps
  - SMTP password: password for the above email account

  - You may get an email from Gmail saying that an external application is trying to access your account and Google will actually prevent this login process from succeeding.
  - To prevent this from happening, log into your gmail.com account and then visit: https://accounts.google.com/DisplayUnlockCaptcha
