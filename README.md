# Byteverse_CyberAmateurs
"portal(1).php"   is the main file
video file link:  https://github.com/lipi150/Byteverse_CyberAmateurs/blob/main/VN20230416_193511.mp4

to view the files with extension php, one needs to download xampp software.


Steps to install XAMPP on Windows: 
 

    In the web browser, visit Apache Friends and download XAMPP installer. 
      During the installation process, select the required components like MySQL, FileZilla ftp server, PHP, phpMyAdmin or leave the default options and click the Next button. 
     

xampp-download-window-screen

    Uncheck the Learn more about bitnami option and click Next button.
    Choose the root directory path to set up the htdocs folder for our applications. For example ‘C:\xampp’.
    Click the Allow access button to allow the XAMPP modules from the Windows firewall.
    After the installation process, click the Finish button of the XAMPP Setup wizard.
    Now the XAMPP icon is clearly visible on the right side of start menu. Show or Hide can be set by using the control panel by clicking on the icon.
    To start Apache and MySql, just click on the Start button on the control panel. 
     
     Note: Suppose Apache is not starting, it means some other service is running at port 80. In this case, stop the other service temporarily and restart it.
Making server request: Open your web browser and check whether the XAMPP service has properly installed or not. Type in the URL: http://localhost. If you are able to see the default page for XAMPP, you have successfully installed your XAMPP Server.
To Check if PHP is Working: All the website related files are organized in a folder called htdocs and then run index.php file by using http://localhost/index.php or http://localhost.
Note: For every new website or application, its always better to create a different folder inside htdocs, to keep it organized and avoid confusion.
For example, if we create a folder geeksforgeeks and then create a file named as ‘helloWorld.php’. All the contents related to it are put inside the folder ‘geeksforgeeks’. So the root ‘URL’ of the website will be ‘http://localhost/geeksforgeeks/’. So any home page is accessed by typing the root URL in the browser. To see the output, just type ‘http://localhost/geeksforgeeks/helloWorld.php’.
Generally web servers look for index file (landing page) namely index.html or index.php in the root of the website folder. Go to /xampp/htdocs/ folder and create a file with .php extension (test.php) and type or copy the below code and save it.

Now open your browser and go to “http://localhost/test.php” if you see the 
page same as below then PHP has successfully installed. 
 

test-screen-phpinfo

Note: In XAMPP, the configuration files of Apache, MySQL, PHP are located in C:\Program Files\xampp. For any configuration file changes, you need to restart Apache and MySQL.
