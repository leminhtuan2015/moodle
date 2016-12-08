### Moodle site - basic structure
### Setup send register email.
### Email-based self-registration
### Course Enrolment methods 

---------------------------------------------------------------------------------
### Moodle site - basic structure
#### How does Moodle work?
  - The Front page: 
    - The Front page (Home page) of a Moodle site - the page you reach from your browser - usually includes information about the establishment itself and can be highly customised.
    - **[Site Administration > Site Administration > Front page > Front page settings]**
    
  - Inside Moodle:
    - Moodle's basic structure is organised around **courses**. => The heart of Moodle is **course**
    - **Course:** where teachers can present their learning **resources** and **activities** to students
      - **Courses** are organised into categories. Physics and Biology courses might come under the Science category for instance.
      - **resources**: File, Folder, Pdf, Slide, Video...
      - **activities**: Chat, Forums, Report...
      
    - **Blocks:** Teacher can offering extra features or information by adding **blocks**
      - **Blocks**: are items which may be added to the left or right or centre column of any page in Moodle
      - https://docs.moodle.org/32/en/Blocks
      - **What are Moodle Blocks?**: https://www.youtube.com/watch?v=UKdXnRf8iH8&feature=youtu.be
      
    - **Enrol**: enrol on courses
      - https://docs.moodle.org/32/en/Enrolments
      - Enrolment, or 'enrollment', is the process of marking users as participants in the course
      - How students enrol on courses depends on the establishment:
        - they can self-enrol
        - be enrolled manually by their teacher
        - automatically by the admin
        
  - Teachers, students and other Moodle users
    - You don't enter Moodle with the "teacher" or "student" role.
    - Everyone who logs into Moodle has no special privileges until they are allocated roles by the administrator according to their needs in individual courses or contexts.


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
    
### Course Enrolment methods
  - Methods: 
      - Self enrolment = Free course 
      - Enrolment key = access course with key
      - Paypal enrolment
  - Course settings
    - **[In a course]** > **[Setting > Course administration > Users > Enrolment methods]**
    - Click on the **eye** enrolments to open the **eye** icon
