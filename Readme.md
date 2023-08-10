# Conference Call
A conference call implementation using WebRTC, [Ratchet Web Socket](https://github.com/ratchetphp/Ratchet).

## Installation


This is [xampp](https://www.apachefriends.org/download.html)

This is a [composer](https://getcomposer.org/download/)

This Library is required [ratchet](http://socketo.me/docs/install)

```
$ composer require cboden/ratchet
```

If this is a brand new project, make sure to create a `composer.json` first with
the [`composer init` command](https://getcomposer.org/doc/00-intro.md).




# Getting Started
- Run `composer install` to install the dependencies.
- Set your web socket domain name and port in `ws/bin/server.php`
- Update your websocket URL (`wsUrl`) in `assets/js/chat.js`

```console
$ composer install
```


# Features
- Multi-participants
- Toggling of video stream
- Toggling of audio stream (mute & unmute)
- Screen sharing
- Text chat
- Mute individual participant
- Expand participants' stream
- Screen Recording
- Video Recording


# Note
The app uses xirsys free ice servers which you can get by creating a free xirsys account. If you opt for that, ensure you rename the `example.getIceServers.php` in the root directory to `getIceServers.php` and replace the dummy credentials there with yours.

