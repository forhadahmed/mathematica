Web application interface for Mathematica
=========================================

A simple clean **web interface** for a local install of the **Mathematica** kernel.
This is *not* meant as a replacement for Mathematica's rich Notebook interface but 
rather, a simple interface for that *quick computation* that is required when you
(or your colleagues) are offsite and all you have is a browser.

###### Pre-requisites:

* **Mathematica** installed on a networked machine
* Web-server (Apache, nginx, etc.) running PHP

###### Installation:

1. Copy out the files here into a directory inside your DocumentRoot (e.g. `C:/www/mathematica/`)
2. Change the appropriate variables in `mathematica.php`


###### Screenshot:

![alt text](https://raw.github.com/forhadahmed/mathematica/master/mathematica.png "Mathematica Web Screenshot")


###### Notes:

* Tested with Apache/PHP on Windows. No major issues. Linux has some issues with graphics but mostly works.
* **Expression evaluated are independent** - you cannot use a value assigned in a previous expression


