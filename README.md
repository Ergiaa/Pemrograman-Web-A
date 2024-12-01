# Pemrograman Web Laravel
## Prerequisites

Before you start, ensure you have the following installed on your system:

*   Docker
    
*   Node.js (version 16 or higher recommended)
    
*   [Git](https://git-scm.com/)
    
*   A code editor like [Visual Studio Code](https://code.visualstudio.com/)
    

Installation Instructions
-------------------------

### 1\. Clone the Repository

```git
git clone https://github.com/Ergiaa/Pemrograman-Web-A.git
```

### 2\. Navigate to the Project Directory

```bash
cd Pemrograman-Web-A
```

### 3\. Start Docker and Compose Services

Start the Docker services for the project:
```docker
docker-compose up -d
```

Wait for the containers to be up and running.

### 4\. Enter the Application Directory

Navigate to the application directory:

```bash
cd ./app/5026221096
```

### 5\. Install Dependencies

Install the necessary dependencies using npm:

```bash
npm install
```

### 6\. Set Up the Laravel Environment
```bash
cp .env.example .env
php artisan key:generate
```
*   Update the .env file with your database credentials if necessary (depending on your Docker configuration).
    

### 7\. Run the Development Server

Run the Laravel development server using:

```bash
npm run dev:php
```

### 8\. Access the Application

The application should now be accessible at http://localhost:8000.

Additional Commands
-------------------

### Stopping the Docker Services

To stop the running Docker containers, use:

```bash
docker-compose down
```

### Clearing Cache and Config

If you face any issues, try clearing the cache and config:

```bash
php artisan cache:clear  php artisan config:clear  php artisan route:clear  php artisan view:clear
```

### Migrating and Seeding the Database

Run migrations and seeders to set up the database:

```bash
php artisan migrate --seed
```

Troubleshooting
---------------

If you encounter issues:

1.  Ensure Docker is running correctly.
    
2.  Verify your .env configuration.
    
3.  bashCopy codedocker logs
    

Feel free to create an issue on the repository if problems persist.
