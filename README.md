# WpScopus - Automated Scientific Papers on Wordpress

Are you involved in science and proud of all the high class papers you and your colleagues have published? Do you want 
to show the whole community your work publicly? Then obviously having a personal website with all your precious 
publications would be awesome! But, well, obviously you dont have the time to make a new post, copy and paste all the 
contents, add tags, assign categories etc for *each and every* new publication. You dont have time for that, you 
have to do *actual research*.

If that all applies to you, than this project should be your choice. It will offer you the possibility to have a 
wordpress page with all your publications and it will *automatically get & post* new publications, once they are listed 
within the [scopus scientific database](https://www.elsevier.com/solutions/scopus). 
All you have to do is to create profiles for every author, whose publications 
you want to see on your site *once*. Then *3 clicks* on the admin dashboard is enough to set the update process going. 
The result will be fresh posts about all the new publications with category, title, authors & tags correctly assigned!

## Getting started

### Acquiring a scopus API key

Since this plugin just builds on top of the *amazing* scopus scientific database, you will need to acquire an *API key* 
to access this database. This API key will then be sent with every request made to the scopus DB to identify, that 
you are a registered member and thus allowed to access the data.

If you want to acquire an API key, go register a scopus account [here](https://www.scopus.com/home.uri)!

Once you received your own API key, make sure to keep it ready, as you will be required to use it later on while 
setting up the plugin.

### Setting up the plugin

To install it the most important prerequisite is to *already have a wordpress site up and running* obviously. Since 
this plugin is not *yet* part of the official wordpress repository, you will have to install it 
by manually placing the files into the correct folders. This means you will need to have 
*file system access* for your wordpress installation.

But dont fear an unnecessarily complicated setup process! This plugin can be installed by doing 
as little as *three manual steps*:

1) First download this repository and place it as a folder named "wscopus" inside the "plugins" folder of your wordpress 
installation (If you dont know about the plugins folder it is located in 
"your_wordpress_folder/wp-content/plugins"). You can do this in two ways:
    - Use Git. That is the easiest solution. So if you already have git installed just clone this repository 
    into your plugins folder like this (Obviously using the path to your specific wordpress installation):
        ```bash
        git clone https://github.com/the16thpythonist/wp-scopus-plugin {your wordpress path}/wp-content/plugins/wpscopus
        ```
    - Download this repository as a ZIP file. Move it to the plugins folder, extract it and rename the new resulting 
    folder to "wpscopus"
    
2) Now you only have to install the dependencies of the package correctly. Since you are already using wordpress I am 
going to assume, that you already have PHP installed on your system. To install just navigate into the newly created 
"wpscopus" folder and run the "install.php" script by running either of these commands:
    ```bash
    ./install.php
    ```
    ```bash
    php install.php
    ```
    
 3) Navigate to the "wpscopus.php" file inside the 'wpscopus' folder, that was just freshly created and open it 
 with your favorite file editor. In there you should directly see two curled brackets ("{}") that prompt you to replace 
 them with a scopus API key. So go ahead and replace them (and the content within the brackets of course) with your very 
 own API key.

**And that's it!** The plugin is now ready.
The only thing you have to do now is to *activate it* from within the admin area of your wordpress site, as you 
would with any other Plugin.


## CHANGELOG

### 0.0.0.1 - 04.01.2018

- initial version 