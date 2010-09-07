SF State Web Template Read Me

Use of this template constitutes an agreement to follow the SF State Web Template Guidelines at
http://www.sfsu.edu/template and to meet California Government Code 11135, implementing Section 508
legislation at http://www.sfsu.edu/~dprc/access/  before publishing pages to the Web.



1. Template overview: http://www.sfsu.edu/template/
2. Accessibility Review: http://www.sfsu.edu/access/webaccess/
3. Getting your own Local Google Site Search
4. Creating a Custom 404 page: http://www.sfsu.edu/training/htaccess.htm


Steps to Going Live with the SF State Web Template
Before you begin
Step 1: Download template files.
Step 2: Replace the imagebar images.
Step 3: Fill in placeholders and navigation.
Step 4: Build website. If creating a site using Dreamweaver, it is recommended to build your site using Dreamweaver templates.


#
Add Content

   1. Add text and images to your page as desired. HTML comments have been included in the code to indicate where you can safely add content.

#
Repeat Process

   1. Repeat the process of creating, customizing, and adding content to your pages until your entire website is built.

========================================================================================
Changing the image bar
========================================================================================

Create and save your image in the images directory and name it "imagebox.jpg"   This will override the current image. Also, remember to update the corresponding readernote in the html code if applicable.

----------------------------------------------------------------------------------------------------
Getting your own Local Google Site Search
----------------------------------------------------------------------------------------------------

DoIT offers a local google search box.  This search box would be limited to your web site only.  

To request a local google searchbox, email webteam@sfsu.edu the following:

1. Site name
2. Site URL


Please allow up to 5 business days for your request to be processed.

----------------------------------------------------------------------------------------------------
Creating a Custom 404 page
----------------------------------------------------------------------------------------------------

Sample .htaccess file
-----------------------------------------------

<Files *>
ErrorDocument 404 /~[account_name]/404.htm

</Files>


