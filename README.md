# Department Feedback System

This is a comprehensive **Department Feedback System** designed to gather and store feedback from students on various aspects of the department and college infrastructure. The system includes various types of feedback forms, validations, image sliders for enhanced UI, and a proper styling framework. Feedback data is stored in a **XAMPP database** for future analysis and report generation.

## Features

- **Multiple Feedback Forms**: Designed to cover different queries, such as infrastructure, teaching quality, and student experience.
- **Form Validation**: Each form includes various input validations to ensure the correct data format and completeness before submission.
- **Image Slider**: An image carousel slider enhances the UI by showcasing different aspects of the department.
- **Styling**: The system features a modern and consistent design using external CSS and Bootstrap.
- **Database Integration**: Feedback is stored in a **MySQL** database (via **XAMPP**) for future reporting and analytics.
- **Future Scope**: The feedback data will be used for generating reports and conducting analysis to improve the department's performance.

## Technologies Used

- **Frontend**: HTML5, CSS3, Bootstrap, JavaScript
- **Backend**: PHP
- **Database**: MySQL (via XAMPP)
- **Version Control**: Git
- **Deployment**: XAMPP local server


## Demo


https://github.com/user-attachments/assets/b00f3681-e617-4916-8291-bb607e2b0c2f






## Installation and Setup

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Siddiqui145/Feedback_System.git
   ```

2. **Set up XAMPP**:
   - Download and install [XAMPP](https://www.apachefriends.org/index.html).
   - Start Apache and MySQL services from the XAMPP Control Panel.

3. **Import the database**:
   - Open **phpMyAdmin** and create a new database.
   - Import the SQL file provided in the `database` folder of the project.

4. **Configure the database connection**:
   - Open the `db_connection.php` file.
   - Update the database credentials (e.g., host, username, password) according to your XAMPP setup.

5. **Run the application**:
   - Move the project folder to the `htdocs` directory inside the XAMPP installation.
   - Open your web browser and navigate to `http://localhost/Feedback_System`.

## Features in Detail

### 1. **Form Validations**
   - Client-side and server-side validations ensure that users enter correct information, such as mandatory fields, email formats, and numerical constraints.
   - The forms cover:
     - General feedback
     - Faculty feedback
     - Infrastructure feedback
     - Course feedback
     - Facilities feedback

### 2. **Image Slider**
   - The homepage features a dynamic image slider showcasing department highlights, helping users visually engage with the system.

### 3. **Styling**
   - The project uses **Bootstrap** for responsive design, ensuring the system is accessible on various devices.
   - **External CSS** is used to maintain a consistent design and apply custom styles.

### 4. **Database Storage**
   - Feedback data is securely stored in a MySQL database.
   - The system is designed for future scalability, allowing data analysis and report generation for institutional improvements.

## Future Enhancements

- **Data Analytics**: Implement analytics to generate insights from student feedback.
- **Reporting**: Add functionality for generating reports (PDF, Excel) for review by department heads and administration.
- **User Authentication**: Enhance security by adding role-based authentication for administrators and students.
- **Dashboard**: Develop an admin dashboard to visualize feedback data in real-time.

## Screenshots

![Screenshot 2023-10-27 143630](https://github.com/user-attachments/assets/b9fef626-19e3-4d9a-b859-b504b6ed1e72)
![Screenshot 2023-11-21 191620](https://github.com/user-attachments/assets/3a75096c-707c-46e0-86d9-16ac927c87f0)
![Screenshot 2023-11-21 191608](https://github.com/user-attachments/assets/ee93d022-ff63-4ed5-9580-1a587db32323)
![Screenshot 2024-10-10 235157](https://github.com/user-attachments/assets/86bdf3ec-5b7d-4475-aba4-5d6233665dc3)
![Screenshot 2023-11-21 191547](https://github.com/user-attachments/assets/e5ad1ea3-96ee-4896-abfa-40113a6ae7b2)
![Screenshot 2024-10-10 235147](https://github.com/user-attachments/assets/b25d9aa9-4833-45d0-a666-42e3477bcd8e)
![Screenshot 2023-11-21 191528](https://github.com/user-attachments/assets/ef06dd07-315f-46b4-a690-a61b49c7b787)
![Screenshot 2023-11-21 191504](https://github.com/user-attachments/assets/9b74b341-c8c1-4ea1-bc23-9ada86b79e00)



## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a feature branch (`git checkout -b feature-name`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-name`).
5. Open a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
