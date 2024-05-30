# Job Portal Project

## Overview

The Job Portal Project is a web application built using Laravel, designed to connect job seekers with potential employers. The platform allows users to search and apply for jobs, while employers can post job listings and manage applications.

## Features

- **User Authentication**: Secure login and registration for both job seekers and employers.
- **Job Listings**: Employers can post job listings with details such as job title, description, requirements, and location.
- **Job Search**: Job seekers can search for jobs based on various criteria like keywords, location, and job type.
- **Application Management**: Job seekers can apply for jobs, and employers can manage applications through the dashboard.

## Image Previews

### Homepage
![Homepage](https://github.com/aminesmkhani/job-portal/blob/main/resources/images/1.png?raw=true)

### Job Listings
![Job Listings](https://github.com/aminesmkhani/job-portal/blob/main/resources/images/2.png?raw=true)

### Search
![Job Search](https://github.com/aminesmkhani/job-portal/blob/main/resources/images/search.png?raw=true)

### Register
![Register](https://github.com/aminesmkhani/job-portal/blob/main/resources/images/3.png?raw==true)

## Installation

To get started with the Job Portal Project, follow these steps:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/aminesmkhani/job-portal.git
    cd job-portal
    ```

2. **Install dependencies:**
    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Environment setup:**
    - Copy the `.env.example` file to `.env`:
        ```bash
        cp .env.example .env
        ```
    - Generate the application key:
        ```bash
        php artisan key:generate
        ```
    - Configure your `.env` file with the necessary database and mail server settings.

4. **Run migrations and seed the database:**
    ```bash
    php artisan migrate --seed
    ```

5. **Start the development server:**
    ```bash
    php artisan serve
    ```

## Usage

### Job Seeker

1. **Register and Login**: Register as a job seeker and log in to access the job listings.
2. **Search for Jobs**: Use the search functionality to find jobs that match your criteria.
3. **Apply for Jobs**: Apply for jobs by submitting your resume and other required information.

### Employer

1. **Register and Login**: Register as an employer and log in to post job listings.
2. **Post Job Listings**: Provide details about the job openings you want to advertise.
3. **Manage Applications**: View and manage applications submitted by job seekers.

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch:
    ```bash
    git checkout -b feature/your-feature-name
    ```
3. Make your changes.
4. Commit your changes:
    ```bash
    git commit -m 'Add some feature'
    ```
5. Push to the branch:
    ```bash
    git push origin feature/your-feature-name
    ```
6. Open a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](https://opensource.org/licenses/MIT) file for more details.

## Contact

If you have any questions or suggestions, feel free to issues.

---

Thank you for using the Job Portal Project
