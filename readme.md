**RegiaPN PHP Server**

Built with Laravel framework and Chandra Admin Theme 3.0 .
Requires : 
- a license of Chandra Admin Theme 3.0
- some test music (i bought it from https://www.mp3va2.com)
- a Raspberry PI (i tested the application on a P1 2011.12)

This application
is basically a playlist manager that enables to handle custom playlist for
each customer. The playlist are played on a Raspberry PI Java client.
This web application provides the user interface to customize the playlists, 
to upload new music albums to the server and handles the communication 
with the Java RegiaPN Client. The music tracks are encrypted in order to prevent
illegal music usage from the customers. The encryption of the tracks is done with
a custom Java command line tool called from the PHP script. The
music is downloaded with an encrypted custom file format ('.sca0' with means 
'simple cryptographic algorithm version 0). The music is then decrypted on
the java client and played on it following the downloaded playlist order.
 The Java client downloads the music using some
custom API from the web server in an rsync like behaviour. 
The Java client even updates its own
software from the server. It uses some custom bash script and an application
loader to handle the download of the application updates.
