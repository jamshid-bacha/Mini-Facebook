# Project Overview #
PHP-JavaScript-MySQL User Messaging System

This repository is a web-based mini Facebook implemented in PHP, JavaScript, and MySQL as the database. The project provides essential features for user registration, login, and message handling, with client-side validation powered by JavaScript.


# Project Flow: #

**User Registration:**

Users must fill out all required fields during registration.

**Validation Features:**

JavaScript alerts if fields are empty, and focus shifts to the incomplete field.

Alerts for weak passwords (less than 8 characters) or mismatched passwords.

Real-time checks for duplicate PersonID or email.

Successful registration displays a message allowing the user to log in.


**User Login:**

Login requires matching email and password.

Incorrect credentials prompt an error message.

Successful login redirects the user to a Welcome Page.

**Message Handling-> User can:**

Send Messages: Write and send a message to another registered user.

View Inbox: Check received messages.

View Outbox: Check sent messages.

Logout: Securely exit the session.

**Database Management:**

Data (users and messages) is stored in a local MySQL database, managed via phpMyAdmin.




# Screenshots: #
**Login and Registration Page:**

Displays fields for registration and login with client-side validation for inputs.

![Login_Reg_Page](https://github.com/user-attachments/assets/618838d9-5ab3-4dac-b543-874c60131900)


**Welcome Page:**

Landing page after successful login, showing navigation options for message handling.

![Welcome_Page](https://github.com/user-attachments/assets/c306b326-bae0-462c-9e09-72f6266aa844)


**Send Message Page:**

Interface for composing and sending messages to other users.

![Send_Message_Page](https://github.com/user-attachments/assets/ad5e90cb-836d-464c-9b7a-fe0ed6a6c68e)


**Inbox Page:**

Lists all received messages with sender details.

<img width="1655" alt="Inbox_Page" src="https://github.com/user-attachments/assets/53c57789-33e6-43b1-b746-dc1f5b5f0c46" />


**MySQL Database View:**

Structure of the database tables for users and messages.

![phpMyAdmin_Page](https://github.com/user-attachments/assets/e0ac0f41-9109-4e63-b8ec-ec5e2ac5cdfc)






