# Concept

This website has been designed in 3 days for **François**, a student from my school as part of a **Secret Santa** (humoristic trend). Here, you can discover François (as Fransoé) through his marks. You can also create him and send him a message of love.

# Technologies

I used HTML, CSS, JavaScript Vanilla, and PHP with :

- **Bootstrap** : for navbar and form designs
- **PhpMailer** : to send mail to François
- **Tinymce** : to edit the text in the contact form

# How to use it

If you want to use some of these features you need to :

- install the zip file of [tinymce](https://www.tiny.cloud/get-tiny/) and click Get TinyMCE SDK now)
- run command `composer require phpmailer/phpmailer`
- create a file \_connect.php in the source folder and add

* `define('EMAIL', 'your@email.fr');`
* `define('PASSWORD', 'yourpassword');`
* `define('SERVER', 'yourserver');`
* `define('PORT', yourserverport);`
* `define('SENDTO', mailyouwanttosendit);`

# Enjoy !
