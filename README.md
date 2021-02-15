## 4056 CEM CW1

### Login Page

![](https://github.com/St00gan/4056CEMWebsite/blob/main/pictures/LoginPage.png)

The theme can be switched and set as a cookie with some simple javascript:

![](https://github.com/St00gan/4056CEMWebsite/blob/main/pictures/ThemeSwitchJS.png)

The Login is done with PHP and the password is hashed with sha256 and the user session is defined by their username and stored with a cookie:

![](https://github.com/St00gan/4056CEMWebsite/blob/main/pictures/LoginPHP.png)

###  Registration Page

![](https://github.com/St00gan/4056CEMWebsite/blob/main/pictures/RegisterPage.png)

The Registration page is a modified version of the login page and works on similar PHP:

![](https://github.com/St00gan/4056CEMWebsite/blob/main/pictures/RegisterPHP.png)

### Home Page

The Home page contains an image and some external links and a button to access the settings:

![](https://github.com/St00gan/4056CEMWebsite/blob/main/pictures/HomePage.png)

The PHP for this page just makes sure the user is logged in for access to this page:

![](https://github.com/St00gan/4056CEMWebsite/blob/main/pictures/HomePHP.png)

### Settings

The settings window is in an iframe and contains a font slider and a toggle to enable/disable inverting images:

![](https://github.com/St00gan/4056CEMWebsite/blob/main/pictures/SettingsWindow.png)

The iframe is created and destroyed through some JS and so are the settings:

![](https://github.com/St00gan/4056CEMWebsite/blob/main/pictures/SettingsFrame.png)

![](https://github.com/St00gan/4056CEMWebsite/blob/main/pictures/SettingsJS.png)

### Themes

The switchable themes for this website are based on the light and dark gruvbox themes with a Noto Sans font and are defined within the CSS:

![](https://github.com/St00gan/4056CEMWebsite/blob/main/pictures/CSS.png)

### Github Link: 

https://github.com/st00gan/4056CEMWebsite/

