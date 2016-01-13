# mocstat
Remote mocp server pipes song output to a server then the local machine picks up the song name and places it on message bar.

* random.php - goes on server in the docroot. (needs to be randomly named really, so it's obscured)
* mocpush.sh - is ran on the mocp server - dumps crap on console, so not very nice (see below)
* i3bar.sh   - just a wget to retrieve the above data

I aliased mocpsuh.sh on the end of mocp
Best to run like:

    ./mocpush.sh >/dev/null 2>&1 & 


So mocp is playing on my RPi. the mocpush runs on the RPi. 

It dumps it on my server running random.php, over a wget, (yeah GET can push - who'da thunkit?)

i3bar.sh reads it off the secret url
