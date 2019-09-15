# ShareX-CDN
 Basic image, text & file uploader CDN for [ShareX](https://getsharex.com)

## Requirements
- [ShareX](https://getsharex.com) installed
- A website or webserver (needs to accept PHP and file uploads via POST requests)
- A domain or subdomain

## Setup
1. Clone the code from GitHub
2. Open `upload.php` with any text editor (Notepad++ preferred)
3. Edit line 5-7 to add your domain and password
4. Upload the content of the `CDN` folder to the root directory of your website (I prefer to make a subdomain called "cdn" and put the folder to its directory)
5. Open the 3 `.sxcu` files and fill in the `RequestURL` and `password`.
6. Open ShareX, click on `Destinations` and `Custom uploader settings`.
7. Click on `Import` and select the first `.sxcu` file, repeat this for the others aswell.
8. In the bottom left select the corresponding uploader (`Image`, `Text` and `File`).
9. Click on `Test` to check if everything is working correctly.
10. Done! That's it. If something doesn't quite work out for you just contact me on Discord and I'll try my best to help you.

## Issues
- If you get an upload failed error "request entity too large" then your server doesn't accept large files via PHP upload. Here is the fix: [Increase PHP upload limit](https://mediatemple.net/community/products/dv/204404784/how-do-i-increase-the-php-upload-limits). If you can't increase it yourself you have to contact your hosting provider.

## Contact
- Discord: `KNIF#0001`
- Email: `admin@knif.dev`

## Credits
- [Statuspage](https://better-error-pages.statuspage.io) for their amazing error 404 & 403 templates
- [Pengu](https://youtu.be/9jcof4MACM0) for his initial ShareX uploader script I used as a base
