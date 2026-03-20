***Project Overview***
This Docker project deploys two Laravel applications sharing a single database to streamline the development environment. All containers are managed via the docker-compose.yml file.

**Services**
- PHP (Laravel): Built from the official PHP 8.1 image. Includes essential extensions and tools like libonig, Node.js, and curl to support Laravel's core features.

- MySQL: The primary relational database.

- Nginx: The default web server for handling requests.

- MinIO: Object storage service used to manage files and media, keeping the main database clean.

- Traefik: A reverse proxy used to simplify URLs and provide easy redirection for the team.

- Adminer: A lightweight web interface for database management.

**How to Run the Project**
- Create a new folder for your project.

- Clone the repository by running the following command in your terminal:
git clone https://github.com/LeoPlm/projet-final-docker.git

- Launch Docker Desktop.

- Build and start the containers in detached mode:
docker compose up --build -d.


Enjoy 😀🤗🙏.
