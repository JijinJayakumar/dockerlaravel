# docker-laravel

### Prerequisites
* [Docker](#docker)
* [Docker-Compose](#dcoker-compose)
* [Yarn](#yarn)
* [Setting up Env](#Environment_Setup)
* [Adding New Artisan Commands](#Artisan_Commands)

### Docker
Docker is a tool designed to make it easier to create, deploy, and run applications by using containers. Containers allow a developer to package up an application with all of the parts it needs, such as libraries and other dependencies, and ship it all out as one package. By doing so, thanks to the container, the developer can rest assured that the application will run on any other Linux machine regardless of any customized settings that machine might have that could differ from the machine used for writing and testing the code.
- **Installing Docker**
```shell
$ curl -fsSL https://get.docker.com -o get-docker.sh
$ sudo sh get-docker.sh
```
- **Adding User to docker group**
```shell
 $ sudo usermod -aG docker ${USER}
```

### Docker-Compose
Compose is a tool for defining and running multi-container Docker applications. With Compose, you use a YAML file to configure your application’s services. Then,with a single command, you create and start all the services from your configuration.
- **Installing Docker-Compose**
```shell
$ sudo curl -L "https://github.com/docker/compose/releases/download/1.25.5/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
```
> To install a different version of Compose, substitute `1.25.5` with the version of Compose you want to use.
```shell
$ sudo chmod +x /usr/local/bin/docker-compose
```
> create a symbolic link to `/usr/bin` or any other directory in your path.
```shell
$ sudo ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose
```

### Yarn
Yarn is a package manager for your code. It allows you to use and share (e.g. JavaScript) code with other developers from around the world. Yarn does this quickly, securely, and reliably so you don’t ever have to worry.

Yarn allows you to use other developers’ solutions to different problems, making it easier for you to develop your software. If you have problems, you can report issues or contribute back, and when the problem is fixed, you can use Yarn to keep it all up to date.
- **Installing yarn**
> On Debian or Ubuntu Linux, you can install Yarn via our Debian package repository. You will first need to configure the repository
```shell
$ curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | sudo apt-key add -
$ echo "deb https://dl.yarnpkg.com/debian/ stable main" | sudo tee /etc/apt/sources.list.d/yarn.list
$ sudo apt update && sudo apt install yarn
```

### `Environment_Setup`
- **clone the repo using your SSH url**
```shell
$ git clone https://git.riosis.com/akhilph/docker-laravel.git
```
> now change directory to `docker-laravel/`
- **Setting up docker containers**
```shell
$ yarn up
```
> This command will create docker image and run the containers.
- **Removing containers**
```shell
$ yarn down
```
> This command will remove created containers and networks.
- **Checking Status of Containers**
```shell
$ yarn status
```
- **Generating app key**
```shell
$ yarn key
```
### `Artisan_Commands`
You can add new Artisan commands in package.json file which can be used inside **App** container. Example :
```json
"scripts": {
    "key": "docker-compose exec app php artisan key:generate"
  },
```
In the above give example, note that the intended artisan command is specified only after `docker-compose exec app`



