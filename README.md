This is a copy of most of the source code behind http://theindependent.ca/

The current purpose of this repo is to allow people who will be helping with the developlment of theindependent.ca get familiar with the code base.

## Running locally

There are two way to run the project locally: with docker or with MAMP/WAMP/LAMP. Using docker is highly recommended for anyone who is new to running wordpress with MAMP/WAMP/LAMP.

## Running Locally with Docker

1. Install Docker Compose: https://docs.docker.com/compose/install/ Mac and Windows users are done after step one at that link
2. Get the mock database sql file. We have a group account on dropbox where the mock database is stored. Contact @danjm to be added and get access to the sql file.
3. Create a folder in the project's root directory called `database`. Add the mock database sql file to that folder.
4. Navigate to the project's root directory on the command line. Run `docker-compose up`
5. theindependent.ca should now be served at localhost:8888

## Running Locally with *AMP

1. Get the mock database. We have a group account on dropbox where the mock database is stored. Contact @danjm to be added and get access to the sql file.
2. `git clone https://github.com/theindependent/theindependent.ca-dev/`
3. Set up MAMP, WAMP or LAMP locally: http://www.wpexplorer.com/locally-installing-wordpress-mac/
4. Set the root of your *AMP server to the theindependent.ca-dev/ folder
5. Set the "Apache Port" in your *AMP settings to 8888
6. Create a new MySQL database and import the mock database. If you are using WAMP or MAMP, you can access phpMyAdmin, select "New" in the left side bar, use the "Create" option to create a new database, and then click the "Import" tab to import the SQL file.
7. Change the `DB_HOST` value in `/wp-config.php` to `localhost`.
8. Now, if go to localhost at the port at where your *AMP is serving, you should see theindependent.ca

Eventually, the local environment will be run from docker.

In the future, we will not include plug-ins in the repo.

## Developing

To play with the code and improve the site, there are two sets of files you should work with. The core of the site is in the `/Users/danmiller/wordpress/wp-content/themes/indytwentyfourteen/` folder. Pages - notably "News", "Opinion", "Letters", and other pages access through the tabs across the top of the site - must be accessed via the admin interface.

"user88934" (password: "password123) is an admin. Log in at `localhost:[port#]/admin` and then access and edit "Pages" through the left side bar.

## Contributing

Currently accepting PRs focused on:
(A) Making the local set up easier
(B) Making this development version of the site more accurately mimic the production version

## Contact

Join us here: https://indy-dev.slack.com/


