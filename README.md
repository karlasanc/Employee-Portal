<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>

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
  <a href="#">
    <img src="https://user-images.githubusercontent.com/114943957/233761287-071e9e19-15ba-40a5-9195-feeca756c72d.jpeg" alt="Logo" width="80" height="80">
  </a>
  <h3 align="center">Employee Portal System</h3>
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

This project is an Employee Portal System built using a dynamic website. The employee portal system interface is built using Bootstrap, HTML, and CSS. 

![Employee Index Page Screen Shot][index-screenshot]

**Database API**
The Employee Portal System uses a database API (Application Programming Interface) in PHP to provide a secure and efficient way to interact with a MySql database. MySQL is an open-source, relational database management system written in C and C++. It will allows the system to execute SQL queries, handle database errors, and manage the database connection. 

To access the 'EmpPortal' MySql database, the Employee Portal System uses PDO, a database API available in PHP. The application connects to the MySql database, checks for a connection and handles any errors that may have occurred before executing any queries. If no errors are found, the API will execute SQL queries using the appropriate API functions and process the results. The API closes the database connection when finished. 

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

I utilize LAMP stack technologies to develop the Employee Portal System due to its open-source availability, maintainability, and community-wide support. The LAMP architecture consists of the following layers: 

* Linux Operating System
* Apache Web Server
* MySQL Relational Database Management System
* PHP scripting language

The LAMP stack technologies work with each other to load both dynamic and static files to the user interface. The Apache web server and MySQL database run on the linux operating system and communicate with each other using PHP. The Apache server will receive incoming requests from the user's browser to either load static or dynamic content. If the request is for a static file, the Apache server will respond directing with the appropriate content. If the browser request dynamic content, the Apache server will transfer the request to the PHP component. The PHP component processes the applicaiton functions needed to generate the dynamic content which may include communicating with the MySQL database to store or retrieve data. The PHP component transfers the results to the Apache web server. The Apache web server sends the dynamic content back to the user's browser. 

To get started, ensure you have the appropriate LAMP stack system configurations and database to begin utilizing the Employee Portal application.

### Prerequisites

The LAMP stack technologies can be installed from the Apache and Friends website. Create a new database that will be used to save and manage user input once the application is running. Download the Employee Portal project folder to your local root folder to access the application locally. 

### Installation

_To install the LAMP Stack architecture, navigating to https://www.apachefriends.org/index.html on your web browser and select your corresponding operating system. Install the XAMPP application based on your operating system requirements._ 
<br/><br/><img width="500" alt="Screenshot 2023-04-23 at 3 35 31 PM" src="https://user-images.githubusercontent.com/114943957/233861144-d654ab97-f3dc-40f4-893d-28d5ad983992.png">


_Configure the Apache Web Server and MySQL Database Server._
1. Open the XAMPP application and select **Manage Servers**. <br/><img width="450" alt="XAMPP1" src="https://user-images.githubusercontent.com/114943957/233858476-378ea4e3-4783-496d-8b27-d733043f05fb.png">
2. Select the **MySQL Database** and **Apache Web Server** from the list of servers on the left side and click on the **Start** button on the right side of the list. You may need to start each one individually, if so, ensure you start the Apache Web Server first.<br/><img width="450" alt="XAMPP2" src="https://user-images.githubusercontent.com/114943957/233858515-fe676750-71e7-45c3-9f47-8fb76f2f6d76.png">
3. Your Apache web server and MySQL database setup is complete.<br/><img width="450" alt="XAMPP3" src="https://user-images.githubusercontent.com/114943957/233858663-e60cfe53-198d-4978-9d3a-90e2d3947526.png">


_Configure your own MySql Database to correspond with the Employee Portal System using PHPMyAdmin._

1. Ensure your servers are up and running, then avigate to http://localhost/phpmyadmin/ and log in. First time users will use 'root' as the username and leave password field empty. You may configure your own username and password for better security upon signing in.
2. Create a new database schema. The one used for this system was named "EmployeePortal". <img width="878" alt="empdb_script" src="https://user-images.githubusercontent.com/114943957/233858236-223572cb-8bcf-4a34-b5cd-3a7675e0d696.png">
4. Create a table with the corresponding registration form fields. <img width="587" alt="empdb_script2" src="https://user-images.githubusercontent.com/114943957/233858245-4be791e4-77ca-4731-9d52-bba2ea7ea71f.png">
 


4. 
5. Clone the repo
   ```sh
   git clone https://github.com/your_username_/Project-Name.git
   ```
3. Install NPM packages
   ```sh
   npm install
   ```
4. Enter your API in `config.js`
   ```js
   const API_KEY = 'ENTER YOUR API';
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>







Additionally, you will also need to create a MySql database using PHPMyAdmin to save user input form the Employee Porta system. PHPMyAdmin is an open-source web-based administration tool for managing MySQL and MariaDB databases. It is an easy-to-use graphical interface used to performing various database administration tasks, such as creating, modifying, and deleting databases, tables, columns, and rows. Once your XAMPP application has been configured, complete the following steps:


2. First time users log in using 'root' as the username and leave password field empty. You may configure your own username and password for better security upon signing in.
3. Create a new database schema. The one used for this system was named "EmployeePortal". <img width="878" alt="empdb_script" src="https://user-images.githubusercontent.com/114943957/233858236-223572cb-8bcf-4a34-b5cd-3a7675e0d696.png">
4. Create a table with the corresponding registration form fields. <img width="587" alt="empdb_script2" src="https://user-images.githubusercontent.com/114943957/233858245-4be791e4-77ca-4731-9d52-bba2ea7ea71f.png">
 



Save the Employee Portal project folder in the "htdocs" folder of XAMPP. 

Start the XAMPP control panel and start the Apache and MySQL services. 
<img width="683" alt="Screenshot 2023-04-22 at 12 37 50 PM" src="https://user-images.githubusercontent.com/114943957/233796272-1b820443-ad8b-4c1c-9c1e-456ac3bc3897.png">

To run the application, type "http://localhost/index.php" in the address bar. This will execute the PHP code in the "index.php" file and display the interface on the web page. 

Download and install XAMPP from Apache Friends website and configure it to run Apache and MySQL. 

To use the Employee Portal System, run the PHP files in XAMPP: 
1. Install and configure XAMPP on your system





the PHP files


Before getting started, ensure you have the required MySQL software installed on your local machine to create a database to correspond to the Employee Portal System. 


System Requirements to ensure your computer will comply (has the required hard disk space, DRAM, OS, 

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.






, configure the Apache Web Server and MySQL database. and Apache save the Employee Portal project folder will all files to your XAMPP **htdocs** subdirectory folder. Follow the instrauctions my PHPMyDmin. You will need to install XAMPP from the Apache Friends website. Once the application has been installed, 


After starting the MySqL and Apache servers using the XAMPP application manager, the application can be accessed through your local browser by navigating to "http://localhost/EmployeePortal/index.php" if the project folder was saved in the "htdocs" root directory. 


<!-- USAGE EXAMPLES -->
## Usage

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








# Employee-Portal
The Employee Portal website was created using Visual Studio Code, Bootstrap framework, HTML/CSS, and PHP programming languages. It is a basic website application that can be used by an Employer to display and provide employee information to their employees. The Employee Portal website created can be configured and customize to a future potential user, however, there are certain configurations that must be completed first.

## Purpose
This project was meant to design and create a real-world web application that meets customers’ requirements and dynamically access a MySql database. The web application applies PHP sequential, selection, and repetition control structures. 

## Tools
- Programming Language: PHP, HTML5, CSS, Javascript
- IDE: Visual Studio Code
- Relational Database: MySql
- Frameworks: Bootstrap5

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

<!-- Include all other revelant website, or resources, used to research project details -->

