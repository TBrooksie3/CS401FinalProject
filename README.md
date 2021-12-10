# Final website for CS401

Name: Taylor Brooks
email: taylorbrooks402@u.boisestate.edu

## How to run this website

Before running ensure PHP is installed on your respective device. A script is given that can be run on most machines. Run the command:

$ ./setup.sh

If on a Mac ensure that homebrew is installed and then PHP with the following commands:

$ /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
$ brew install php

To run this site locally you must download all of the files and from the main directory of the files run the command:

$ php -S localhost:3000

Then navigate to localhost:3000 in a web browser to see the site. 

## Bugs

The only known bugs are that you have to click a radio button before clicking Delete Blog or Modify Blog. This will cause the php to fail because nothing was selected. Everything else seems to be working as expected. 

## Features

The features of this app include a Home page that displays all current blogs, a modify page that allows for the modification of the blogs, a delete page that allows for deletion of the blogs, and an add page that allows for the addition of new blogs. All blogs are stored as local files. The site has a consistent color pallete as well as consistent menus and style.

## Sources
    The following sources were referenced for fixing issues and getting the image.
        PHP reading and writing files: https://learn.zybooks.com/zybook/BOISESTATECS401PanterFall2021 

        Getting directory counts: https://stackoverflow.com/questions/18593668/how-to-count-number-of-files-in-folder-in-php

        Fixing POST returning last value from HTML form everytime: https://stackoverflow.com/questions/24368869/php-post-always-returns-the-last-value

        Getting substring: https://stackoverflow.com/questions/14891743/extract-a-substring-between-two-characters-in-a-string-php

        Image: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.chess.com%2Farticle%2Fview%2Fworld-chess-championship-2021&psig=AOvVaw2jVzXUQgRWd2YeUGQUN_D1&ust=1639180061968000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIiJwY_01_QCFQAAAAAdAAAAABAD