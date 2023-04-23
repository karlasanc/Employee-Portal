<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>

# The Employee Portal System

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]


<!-- PROJECT LOGO -->
<br />
<div align="center">
  <span>
    <img src="https://user-images.githubusercontent.com/114943957/233761875-849dacac-558d-46e9-967a-0175e1e73386.png" alt="Logo" width="300">
  </span>
  <h2 align="center">Employee Portal System</h2>
  <p align="center">
    <a href="https://github.com/othneildrew/Best-README-Template">View Demo</a>
    ·
    <a href="https://github.com/othneildrew/Best-README-Template/issues">Report Bug</a>
    ·
    <a href="https://github.com/othneildrew/Best-README-Template/issues">Request Feature</a>
  </p>
</div>


<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>


## About The Project

The Employee Portal website was created primarily with Visual Studio Code editor, Apache and MySQl servers, Linux and MacOS operating systems, Bootstrap, SQL, HTML, CSS, and PHP programming languages. The web application is a shell website that can be configured to the individual needs of an employer to display and provide information to their employees. The application is also setup to be scalable as the needs of the employer grow.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

Programming Languages: 
* PHP
* SQL
* Bootstrap
* HTML
* CSS

Programming Tools: 
* Linux
* MacOS
* Apache
* MySQL/MariaDB
* phpMyAdmin
* Visual Studio Code IDE

Browser Compatibility: 
* Chrome
* Safari
* FireFox

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Getting Started

### Prerequisites

The Employee Portal architecture consists of the following layers: 
* Linux Operating System
* Apache Web Server
* MySQL Relational Database Management System
* PHP

To get started, XAMPP, an open-source LAMP stack server package that contains Apache, MySQL, and PHP will need to be installed from the Apache and Friends website. A new database will need to be created to store and manage user input once the application is running. Once the system has been configured and the servers are up and running, the Employee Portal project will need to be downloaded and stored in your local server folder under the "htdocs" folder inside the XAMPP directory.

### LAMP/XAMPP Installation

1. Navigating to https://www.apachefriends.org/index.html on your web browser. 
2. Select your corresponding operating system and install the XAMPP application based on your operating system requirements. 
<br/><img width="400" alt="Apache&Friends" src="https://user-images.githubusercontent.com/114943957/233861144-d654ab97-f3dc-40f4-893d-28d5ad983992.png">
3. Save the Employee Portal project folder in your XAMPP htdocs folder. This will serve as the root folder to your application locally. 

### Web & Database Server Installation

_Configure the Apache and MySQL Database Servers._
1. Open the XAMPP application and select **Manage Servers**.<br/><img width="400" alt="XAMPP1" src="https://user-images.githubusercontent.com/114943957/233858476-378ea4e3-4783-496d-8b27-d733043f05fb.png">
2. Select the **MySQL Database** and **Apache Web Server** from the list of servers on the left side and click on the **Start** button on the right side of the list. You may need to start each one individually, if so, ensure you start the Apache Web Server first.<br/><img width="400" alt="XAMPP2" src="https://user-images.githubusercontent.com/114943957/233858515-fe676750-71e7-45c3-9f47-8fb76f2f6d76.png">
3. Your Apache web server and MySQL database setup is complete.<br/><img width="400" alt="XAMPP3" src="https://user-images.githubusercontent.com/114943957/233858663-e60cfe53-198d-4978-9d3a-90e2d3947526.png">

### Employee Portal Database Setup

_Configure the appropriate MySql Database using PHPMyAdmin._
1. Ensure your servers are up and running, then avigate to http://localhost/phpmyadmin/ and log in. First time users will use 'root' as the username and leave password field empty. You may configure your own username and password for better security upon signing in.
2. Select SQL from the main page navigation menu to begin create your database. <br><img width="400" alt="empdb_script1" src="https://user-images.githubusercontent.com/114943957/233861651-e5d2a748-a7ae-460f-a5b3-639ced7a7aa5.png">
3. Create a new database schema, the one used for this application is called "EmployeePortal". <br/><img width="450" alt="empdb_script2" src="https://user-images.githubusercontent.com/114943957/233858236-223572cb-8bcf-4a34-b5cd-3a7675e0d696.png">
4. Create a new table that corresponds with each field in the registration form. <br/><img width="350" alt="empdb_script3" src="https://user-images.githubusercontent.com/114943957/233858245-4be791e4-77ca-4731-9d52-bba2ea7ea71f.png">
5. Your database schema and table can be accessed on the left panel. <br/><img width="200" alt="empdb_script4" src="https://user-images.githubusercontent.com/114943957/233862043-ce88953a-8086-41ba-b071-e04b8a1b4123.png">

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- USAGE EXAMPLES -->
## Usage

The Employee Portal web application is created using the MVC model to handle a wide range of user interactions and data processing tasks to display dynamic and static content to its users. 

The model layer typically responsible for handling 

The root folder contains all  all the system applications, including the index, header, and footer files. The includes folder holds the PHP scripts that handle the data processing tasks for each applicaiton. The classes file holds all user data The index file is the system's landing page that starts up the application and contains the main navigation. The user can register or login to the site by using the main navigational buttons. 


The website index file home page  includes the navigation menu, the website footer, and in the center is the page content, see Figure 1 and Figure 2. As the user clicks through the /Home, /Login, /Registration, and /Contact Us links, the website navigation bar and footer will remain the same, the main content for the individual pages will change. The navigation bar is collapsible and will respond to the device the user is navigating the website through. A user can access the registration, login, and profile page through the website navigation menu located at the top of all website pages.![image](https://user-images.githubusercontent.com/114943957/233872457-a3b56e0d-4706-4bc9-9b21-4ebb0054af25.png)





The Linux operating system runs on the server and provides a stable and secure environment for hosting the website.

The Apache web server software listens for incoming requests from clients and serves up web pages in response. Apache can handle multiple requests simultaneously and supports a wide range of file formats, including HTML, CSS, JavaScript, and PHP.

MySQL is used as the database management system to store and organize the website's dynamic content. MySQL can handle complex data structures and queries, making it an ideal choice for websites that require frequent database interactions.

PHP is the scripting language used to generate dynamic content on the website. PHP scripts can interact with MySQL to retrieve and manipulate data, and can generate HTML and other web content on-the-fly based on user input or other factors.



Once the Employee Portal website is up and running, the user lands on the home page of the application which includes the website navigation bar at the top, the website footer at the bottom, and in the center is the page content, see Figure 1 and Figure 2. As the user clicks through the /Home, /Login, /Registration, and /Contact Us links, the website navigation bar and footer will remain the same, the main content for the individual pages will change. 

The navigation bar is collapsible and will respond to the device the user is navigating the website through. 

A user can access the registration, login, and profile page through the website navigation menu located at the top of all website pages.

The technologies work with each other to load both dynamic and static files to the user interface. The Apache web server and MySQL database server run on the linux operating system and communicate with each other using the PHP programming language. The Apache server receives incoming requests from the user's browser to load static or dynamic content. If the request is for a static file, the Apache server will respond directing to the browser with the appropriate content. If the browser request dynamic content, the Apache server will transfer the request to the PHP compiler. The PHP compiler processes the requests by completing the PHP script for the specific applicaiton which may include communicating with the MySQL database server to store or retrieve data within a database. The PHP compiler transfers the results to the Apache web server. The Apache web server sends the dynamic content back to the user's browser. 





The Employee Portal System uses a database API (Application Programming Interface) to provide a secure and efficient way to interact with a MySql database. MySQL comm to execute SQL queries, handle database errors, and manage the database connection. 

To access the 'EmpPortal' MySql database, the Employee Portal System uses PDO, a database API available in PHP. The application connects to the MySql database, checks for a connection and handles any errors that may have occurred before executing any queries. If no errors are found, the API will execute SQL queries using the appropriate API functions and process the results. The API closes the database connection when finished. 



## Purpose
This project was meant to design and create a real-world web application that meets customers’ requirements and dynamically access a MySql database. The web application applies PHP sequential, selection, and repetition control structures. 




## Features 
### User Features
**Recipient**
- receive newsletter via email every morning
- random inspirational quote
- weather forecast
- twitter trends
- random fact
**Admin**
- add/removes new employees to the website
- view employee information
## Functional Requirements
### Application
- generate a random insipirational quote
- retrieve current weather forecast for specified location
- retrieve current twitter trends
- retreive a random Wikipedia article
- format content into an email
- send email to specified recipient
### Admin
- configure which content to include in email
- add recipients
- remove recipients
- schedule reoccuring daily time to send email
- configure sender credentials
## Non-Functional Requirements
- configure using admin GUI
- extensible to add more content types
- resilient to content errors
# Acknowledgements
- source 1
- source 2
- source 3









Use this space to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. You may also link to more resources.

_For more examples, please refer to the [Documentation](https://example.com)_

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- ROADMAP -->
## Roadmap

- [x] Add Changelog
- [x] Add back to top links
- [ ] Add Additional Templates w/ Examples
- [ ] Add "components" document to easily copy & paste sections of the readme
- [ ] Multi-language Support
    - [ ] Chinese
    - [ ] Spanish

See the [open issues](https://github.com/othneildrew/Best-README-Template/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Your Name - [@your_twitter](https://twitter.com/your_username) - email@example.com

Project Link: [https://github.com/your_username/repo_name](https://github.com/your_username/repo_name)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

Use this space to list resources you find helpful and would like to give credit to. I've included a few of my favorites to kick things off!

* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Malven's Flexbox Cheatsheet](https://flexbox.malven.co/)
* [Malven's Grid Cheatsheet](https://grid.malven.co/)
* [Img Shields](https://shields.io)
* [GitHub Pages](https://pages.github.com)
* [Font Awesome](https://fontawesome.com)
* [React Icons](https://react-icons.github.io/react-icons/search)


Learn more about LAMP STACK functionalities here: https://aws.amazon.com/what-is/lamp-stack/#:~:text=A%20LAMP%20stack%20is%20a,and%20the%20programming%20language%2C%20PHP.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge

[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members

[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers

[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues

[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt

[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew

[index-screenshot]: https://user-images.githubusercontent.com/114943957/233761875-849dacac-558d-46e9-967a-0175e1e73386.png

[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[VSCode.com]: https://img.shields.io/badge/VisualStudioCode-IDE-blue
?logo=data:image/png;base64,…
[VSCode-url]: https://code.visualstudio.com/

