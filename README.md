<p align="center">
<img width="200" src="assets/api_m.svg" alt="API Monitor logo"></p>
<h3 align="center">API Monitor</h3>
<p align="center">A CLI program that help you check your endpoints by requesting the given servers and send a report message in any supported channel ( Telegram )</p>
<br>
<hr>


#### <center>This is a CLI project that build with <a href="https://laravel-zero.com">Laravel Zero</a></center>

### Features

* Check API endpoints status.
* Save the endpoints in sqlite database.
* Provide a bin command so you can execute via terminal or schedule the execution in crontab. 
* Send a report message to the supported channels ( Telegram ).

### Usage

* Clone this repo:

```bash
git clone https://github.com/husseinferas/api-monitor && cd  api-monitor
```

* Install the dependencies:
```bash
composer install
```

* Setup env and databases:
```bash
cp .env.example .env
```
edit `.env` file:
```dotenv
CONSUMER_KEY=[your-app-key]
DB_DATABASE=[your-sqlite-database-file-path]
DATA_SEED=[your-data-seed-file]

TELEGRAM_TOKEN=[your-telegram-token]
TELEGRAM_CHAT=[your-chat-id-which-chat-you-want-to-send]
```

### License

API Monitor is an open-source software licensed under the [MIT license](https://github.com/husseinferas/api-monitor/blob/master/LICENSE).
