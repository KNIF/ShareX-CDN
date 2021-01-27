# ![](https://i.imgur.com/JyhRykm.png)

Basic image, text & file uploader CDN for [ShareX](https://getsharex.com) which allows you to upload your screenshots, text documents and any other files to your website and have a random link generated. Because of the length these links are very hard to bruteforce.

## Requirements

- [ShareX](https://getsharex.com) installed
- A website or webserver (needs to accept PHP and file uploads via POST requests)
- A domain or subdomain

## Setup

### Upload Script

1. Clone the code from GitHub.
2. Go in the `Upload` folder.
3. Open `upload.php` with Notepad++.
4. Edit line 7, 8 and 9 to change your password and link (read the comments next to them).
   - Password: this only lets users with the password upload files to your server
   - Domain URL: set this to your domain (or subdomain) and don't forget the `/` at the end of the line
   - Length: this specifies the length of the randomly generated folder- & filenames (e.g. https://cdn.knif.dev/img/3lfUh/S1E7M.png has a length of 5 (the URL starts with the domain, then `/img/`, a random folder name with the length you specified (in this case `5`), a random file name with the specified length (in this case `5`) and the extension (in this case `.png`)))
5. Upload the content of the `Upload` folder to the root directory of your website (I prefer to make a subdomain called "cdn" and put the folder to its directory).
6. Make sure that sub-folders have permissions set to 755 (and Group ID set to 33 if applicable), with the upload.php script having permissions of 777.

### ShareX

1. Open all three `.sxcu` files from the `ShareX-Config` folder with a Notepad++ and change the `RequestURL` and `password` to your own.
2. Open ShareX, click on `Destinations` and `Custom uploader settings`.
3. Click on `Import` and select the first `.sxcu` file, repeat this for the others aswell.
4. In the bottom left select the corresponding uploader (`Image`, `Text` and `File`).
5. Click on `Test` to check if everything is working correctly.

Done! That's it. If something doesn't quite work out for you just contact me on Discord and I'll try my best to help you.

## Issue

If you get an upload failed error "request entity too large" then your server doesn't accept large files via PHP upload. Here is the fix: [Increase PHP upload limit](https://mediatemple.net/community/products/dv/204404784/how-do-i-increase-the-php-upload-limits). If you can't increase it yourself you have to contact your hosting provider.

## Contact

- Discord: `Maurice#5247`
- Email: `admin@knif.dev`

Please only contact for this specific fork, for the original fork, contact [KNIF](https://github.com/KNIF/ShareX-CDN)

- Discord: `Fabio A.#0001`
- Email: `me@fabioalmeida.dev`

## Credits

- [Statuspage](https://better-error-pages.statuspage.io) for their amazing error 404 & 403 templates
- [Pengu](https://youtu.be/9jcof4MACM0) for his initial ShareX uploader script I used as a base
- [ShareX](https://getsharex.com) for their awesome program that enables us to upload our screenshots
- [GenericNerd](https://github.com/GenericNerd) for his fork, which fixed some issues with my script
