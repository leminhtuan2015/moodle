til


### Setup send register email.
### Email-based self-registration



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
  
  
### Email-based self-registration
  - https://docs.moodle.org/32/en/Email-based_self-registration
  - The email-based self-registration authentication method enables users to create their own accounts via the 'Create new account' button on the login page. They then receive an email at the address they specified in their account profile to confirm their account.
  
  - Enabling email-based self-registration
    - Step1:  Go to **[Administration > Site administration > Plugins > Authentication > Manage authentication]**
      - and click the crossed-out-eye icon opposite email-based self-registration
    - Step2: Scroll down to Common settings box
      - Select email-based self-registration from the self registration drop-down menu
    - Step3: Click the 'Save changes' button
