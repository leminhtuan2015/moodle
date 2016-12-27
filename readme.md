### Moodle site - basic structure
### Moodle Courses
### Moodle Activities, Blocks
### Moodle Users
### Setup Mail server for sending register email
### Email-based self-registration
### Course Enrolment methods
### Create a new theme.

### DATABASES
### Course -> Section -> Module (Resources + Activities of Course)



---------------------------------------------------------------------------------
### Moodle site - basic structure
##### How does Moodle work?
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
        - they can self-enrol (Free course)
        - be enrolled manually by their teacher
        - automatically by the admin
        
  - Teachers, students and other Moodle users
    - You don't enter Moodle with the "teacher" or "student" role.
    - Everyone who logs into Moodle has no special privileges until they are allocated roles by the administrator according to their needs in individual courses or contexts.

### Moodle Courses
  - Courses are the spaces on Moodle where teachers add learning materials and activities for their students
  - Courses may be created by **admins**, **course creators** or **managers**.
  - Teachers can then add the content and re-organise them according to their own needs.
  - Adding a new course: **[Administration>Site Administration>Courses>Manage courses and categories]**
 
##### Add/Remove students to a course (`Enrolment`)
  - The process of adding students to courses is called **Enrolment**
  - The process of adding students to courses is called **Unenrolment**
  
##### Course Enrolment methods
  - Methods: 
      - Self enrolment = Free course 
      - Enrolment key = access course with key
      - Paypal enrolment
      - Allowing guests into a course = Free
      - Adding students in bulk
##### Course enrollment settings
    - TABLE: 
        - **ks_enrol**
        - **ks_user_enrolments**
        
    - HOW ENROL WORK:
      - When you create a new course, Moodle will create 3 **Enrol Instance** (Enrol instance is the one record in the ks_enrol table)
        in the ks_enrol table
      - When an User **Join** into a course, Moodle will create a record in **ks_user_enrolments** to mark the enrolment of an user.
    
    -  Method 1:
      - **[In a course]** > **[Setting > Course administration > Users > Enrolment methods]**
      - Click on the **eye** enrolments to open the **eye** icon
    
    - Method 2:
      - [In A course] -> [Select more setting] -> [click on tab Users] -> [click on Enrolment methods] -> in this page we can make [Self Enrollment Or add user to a course manual]
      - EX: http://localhost/moodle/enrol/instances.php?id=55
     
##### Manual enrol multiple users
  - [Site admin] -> [click on tab Courses] -> [Manage courses and categories] -> [click on any course] -> [click Enrolled users]
    
##### Enrol several students at once
  - https://docs.moodle.org/32/en/Bulk_enrolments
  - Bulk enrolments: Bulk enrolments allows you to enrol students and add them to groups in a Moodle course using an excel file containing the students' email address or userid

##### Unenrolment
  - Remove a User out og the course.
  - https://docs.moodle.org/32/en/Unenrolment

### Moodle Activities, Resources, Blocks

##### Activities
  - An activity is a general name for a group of features in a Moodle course
  - Usually an activity is something that a student will do that interacts with other students and or the teacher
  - There are 14 different types of activities in the standard Moodle
    - Assignments
    - Chat
    - Choice
    - Forum
    - Lesson
    - ............
  
##### Resources
  - A resource is an item that a teacher can use to support learning, such as a file or link
  - Teacher can add types of resource  to their courses.
  - Resources type:
    - Book - Multi-page resources with a book-like format. Teachers can export their Books as IMS CP (admin must allow teacher role to export IMS)
    - File - A picture, a pdf document, a spreadsheet, a sound file, a video file
    - Folder - For helping organize files and one folder may contain other folders
    - IMS content package - Add static material from other sources in the standard IMS content package format
    - Label - Can be a few displayed words or an image used to separate resources and activities in a topic section, or can be a lengthy description or instructions
    - Page - The student sees a single, scrollable screen that a teacher creates with the robust HTML editor
    - URL - You can send the student to any place they can reach on their web browser, for example Wikipedia

##### Blocks
  - https://docs.moodle.org/32/en/Blocks
  - Blocks are items which may be added to the left or right or centre column of any page in Moodle

### Moodle Users
##### Creating a group of users
  - **[Administration > Course administration > Users > Groups]** 

### Setup Mail server for sending register email
- DashboardSite -> administration -> Server -> Email -> Outgoing mail configuration
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
    
    
### DATABASES
  - ks_course_categories
  - ks_course_sections
  - ks_course_modules
  - ks_modules
    
### Course -> Section -> Module (Resources + Activities of Course)
- **Modules** in Moodle is the type of resource such as **Mp4, File, Book, Lable, Page, Forum, Lesson...22**
- **Module** = Resource + Activity
- Moodle have all 22 type of modules. (lay in table **ks_modules**)

- One **Course** can be have many **Section** => Course relate with Section by **ks_course_modules** table
- One **Section** can be have many **Resources/Activities (Modules)** => Course relate Section relate Modules by **ks_course_modules** table

- DATABASE:
  - **ks_course_sections** : Each **Section** in a **Course** is stored in this table, the id of **ks_course_sections** is the id of **Section**
  
  - **ks_course_modules** : course->section->module
  
- Get all infomation of a course (section, modules of each section)

```php
        $params = array('id' => $courseId);
        $course = $DB->get_record('course', $params, '*', MUST_EXIST);

        $modinfo = get_fast_modinfo($course);
        $modnames = get_module_types_names();
        $modnamesplural = get_module_types_names(true);
        $modnamesused = $modinfo->get_used_module_names();
        $mods = $modinfo->get_cms();
        $sections = $modinfo->get_section_info_all();

        Logger::log($sections);

//      sections[i] -> [section_info(id, name, section)] -> modinfo -> (course, userid, sections[], cms[cm_info], instances[forum, lable[cm_info]])

//      NOTICE: cms[cm_info], array cms[] contain list of cm_info, cm_info contain all infomation about Section + Module of this section

//      cm_info->id = the id of this module
//      cm_info->section = the id of section
//      cm_info->modname = name of module in this section
//      cm_info->content  = the content of module (content of lable)

```

