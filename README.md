Docker-compose that create an initial installation of moodle.

**Requirements**

Docker and docker-compose installed. You can use this script to install it:
https://gist.github.com/mfernam/1a4fc33d9bc39a01dc91d2e901896ab4


**Instructions:**
~~~~
$ docker-compose up -d --build
~~~~

When finish this command go to http://localhost and moodle is ready to install it.

If you have problem with permissions on /var/www/moodledata:

~~~~
$ docker exec moodle chown www-data:www-data /var/www/moodledata
~~~~
