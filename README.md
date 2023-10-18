# How to run this project

run all of the commands(encase it a box) in your **terminal in vscode**

## BE sure to run xampp(apache and sql before proceeding)

1. First clone this project, run the command(dont include the <> and dont forget to change the link):
```
git clone <ssh/https link>
```

2. Download composer from their official website. 
<a href="https://getcomposer.org/download/" target="_blank">Composer download page</a>

3. Download npm/node js from their official website. 
<a href="https://nodejs.org/en/download/current" target="_blank">Node download page</a>

### For getting dependencies, run everytime you switch branch

4. Then you need download the php project dependencies, run the command:
```
composer install
```

5. Then download the javascript dependencies
```
npm install
```


6. Then you need to set up your .env file
- first copy the provided env example by running this command
```
cp .env.example .env
```

- Now when you check the project again, you'll see a new file, name (.env)
- Modify the MAIL and database part(i commented the instruction there)
- to generate a password follow <a href="https://support.google.com/accounts/answer/185833?hl=en">link</a>

7. Run this command, this will generate the app_key needed for the .env file

```
php artisan key:generate
```

8. Then 

 