# mocstat
Remote mocp server pipes song output to a server then the local machine picks up the song name and places it on message bar.

* random.php - goes on server in the docroot. (needs to be randomly named really, so it's obscured)
* mocpush.sh - is ran on the mocp server - dumps crap on console (/dev/null it see below)
* i3bar.sh   - just a wget to retrieve the above data

I aliased mocpush.sh on the end of mocp
looks like this:

    alias='~/./mocpush.sh &> /dev/null & mocp'


So mocp is playing on my RPi. the mocpush runs on the RPi. 

It dumps it on my server running random.php, over a wget, (yeah GET can push - who'da thunkit?)

i3bar.sh reads it off the secret url

<pre>
+-------------+      +--------------+      +------------+
|             |      |              |      |            |
| moc player  +----->+  web server  +----->+  Desktop   |
| (mocpush.sh)|      | (random.php) |      |  (i3bar)   |
+-------------+      +--------------+      +------------+
</pre>
