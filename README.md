# Hospital-Database-Project
![154779830-5a4ff101-903c-4f47-b043-e31bb1167382](https://user-images.githubusercontent.com/100084562/154999092-d557e1c9-c9ef-483b-90ec-fd9a61af369e.gif)

This is a group project by myself and [Assoumaaa](https://github.com/assoumaaa)

# Hospital Management System (HMS)
A comprehensive web-based system for managing hospital operations, patient records, and billing.

## Features
- 👥 Patient Management
- 👨‍⚕️ Doctor Management
- 🏥 Room Management
- 💰 Billing System
- 🔍 Search Functionality

## Getting Started

### Prerequisites
- PHP 5.6.40
- MySQL/MariaDB 10.1.38
- Web server (Apache recommended)
- Web browser

### Installation
1. Clone the repository to your web server directory
2. Import `hmsproject.sql` into your MySQL database
3. Configure database connection in `config.php`:
   ```php
   $db = mysqli_connect('localhost','root','','HMSproject');
   ```
4. Access the system through your web browser: `http://localhost/hms/`

## User Guide

### 1. Adding New Patients
1. Click "Patients" on the main page
2. Fill in patient details:
   - Full Name
   - Age
   - Weight
   - Height
   - Gender
   - Blood Group
   - Genotype
3. Submit to register the patient

### 2. Managing Doctors
1. Access Admin Panel
2. Click "Doctor" to add new doctors
3. Provide:
   - Doctor's Full Name
   - Specialization
4. View all doctors in the table below the form

### 3. Room Management
1. Click "Rooms" on the main page
2. Add new rooms with:
   - Room Type
   - Status (Empty/Occupied)
3. Set room costs through the room type management

### 4. Consultation Process
1. Select specialization
2. Choose preferred doctor
3. Enter patient ID
4. Set consultation date
5. System automatically generates billing

### 5. Billing and Payment
1. Access billing through patient ID
2. View all unpaid bills
3. Process payments
4. Check payment history

### 6. Search Functions
- Find patient's room
- Search doctors by specialization
- Look up patient records
- Check room availability

## Implementation Overview

### Architecture
- **Frontend**: HTML, PHP
- **Backend**: PHP
- **Database**: MySQL
- **Session Management**: PHP Sessions

### Key Components
1. **Database Tables**
   - Patients
   - Doctors
   - Rooms
   - Payments
   - Consultations

2. **Core Modules**
   - Patient Registration
   - Doctor Management
   - Room Assignment
   - Billing System
   - Search Functions

### Security Features
- Input validation
- Session management
- Database constraints
- Error handling


## Contributing
To contribute to this project:
1. Fork the repository
2. Create a feature branch
3. Commit your changes
4. Push to the branch
5. Create a Pull Request

## License
This project is licensed under standard terms for hospital management systems. Please review the license file for detailed information.
