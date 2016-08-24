This is a copy of most of the source code behind http://theindependent.ca/

The current purpose of this repo is to allow people who will be helping with the developlment of theindependent.ca get familiar with the code base.

## Running Locally

1. Get the mock database. We have a group account on dropbox where the mock database is stored. Contact @danjm to be added and get access to the sql file.
2. `git clone https://github.com/theindependent/theindependent.ca-dev/`
3. Set up MAMP, WAMP or LAMP locally: http://www.wpexplorer.com/locally-installing-wordpress-mac/
4. Set the root of your *AMP server to the theindependent.ca-dev/ folder
5. Create a new MySQL database and import the mock database. If you are using WAMP or MAMP, you can access phpMyAdmin, select "New" in the left side bar, use the "Create" option to create a new database, and then click the "Import" tab to import the SQL file.
6. Copy the `/wp-config.example.php` file to `/wp-config.php`. Edit the DB_NAME, DB_USER and DB_PASSWORD variables to reflect the value you just created.
7. Now, if go to localhost at the port at where your *AMP is serving, you should see theindependent.ca

## Developing

To play with the code and improve the site, there are two sets of files you should work with. The core of the site is in the `/Users/danmiller/wordpress/wp-content/themes/indytwentyfourteen/` folder. Pages - notably "News", "Opinion", "Letters", and other pages access through the tabs across the top of the site - must be accessed via the admin interface.

"user88934" (password: "password123) is an admin. Log in at `localhost:[port#]/admin` and then access and edit "Pages" through the left side bar.

## Contributing

Currently accepting PRs focused on:
(A) Making the local set up easier
(B) Making this development version of the site more accurately mimic the production version

Eventually, the local environment will be run from docker.

In the future, we will not include plug-ins in the repo.
