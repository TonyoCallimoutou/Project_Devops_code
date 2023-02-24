# Project Devops Code

I thank Subhashis Suara et Avinash Kumar Tiu, for their work on this anime video streaming website made with HTML, CSS, JavaScript, PHP, MySQL.
(https://github.com/subhashissuara/AnimeHeaven).

This project is here to illustrate the real project and deploy a website (this one) on a Virtual Machine.
You can check the repository here :
https://github.com/TonyoCallimoutou/Project_Devops

# How to Run 

You have two choices.

1. Vagrant and Ansible
   - You can check the README of the real project (https://github.com/TonyoCallimoutou/Project_Devops).

2. WAMP
   - Install WAMP server.
   - Create a virtual host for AnimeHeaven.
   - In taskbar icons,
      - Left click on WAMP server icon
      - Expand the PHP menu and select php.ini
      - Search for `post_max_size` and `upload_max_filesize` and change their values to the largest file's size in your database (`50M` in our case)
   - Place the media accordingly in the project or import it from `Admin` page in the website.
   - Import `animeheaven.sql` in phpMyAdmin.
   - Enjoy!


# Features

- Search keywords to fetch results from database based on movie name or movie genre.
- Registration & login page.
- Account page, to change account details.
- Admin page, to add videos to the database (hidden from normal user accounts).
- Homepage with carousel of upcoming movies, rows of movies based on genre (data is dynamically fetched and displayed from database).
- Session detection to avoid unauthorized access.
- Full page HTML5 video player that plays movies based on id given in url query.

# Screenshots

## Login Page

![Login Page](./media/screenshots/ah_login_ss.jpg)

## Registration Page

![Registration Page](./media/screenshots/ah_register_ss.jpg)

## Home Page

![Home Page 1](./media/screenshots/ah_homepage_ss_1.jpg)
![Home Page 2](./media/screenshots/ah_homepage_ss_2.jpg)
![Home Page 3](./media/screenshots/ah_homepage_ss_3.jpg)
![Home Page 4](./media/screenshots/ah_homepage_ss_4.jpg)

## Search Page (Name)

![Search Page (Name)](./media/screenshots/ah_search_name_ss.jpg)

## Search Page (Genre)

![Search Page (Genre)](./media/screenshots/ah_search_genre_ss.jpg)

## Admin Page

![Admin Page](./media/screenshots/ah_admin_ss.jpg)

## Account Page

![Account Page](./media/screenshots/ah_admin_account_ss.jpg)

## User Account

![User Account](./media/screenshots/ah_user_account_ss.jpg)

**Note:** The above screenshot is from a regular user account and there is no link or access to the admin page.
