# 🛠️ Developer Support Ticketing System

A lightweight **Developer Support Ticketing System** that allows users to create, view, update, and delete support tickets through REST-style API endpoints. This project demonstrates backend development, database handling, API testing, and cloud deployment using modern best practices.

---

## 🚀 Project Overview

The Developer Support Ticketing System is designed to manage support requests efficiently. Users can raise tickets with a title, description, and status, retrieve all tickets, update ticket statuses, and delete tickets when resolved. The backend is built with PHP and uses SQLite for fast, file-based database storage, making the system simple, portable, and reliable.

---

## 🧩 Features

- Create new support tickets
- Fetch all tickets in descending order of creation
- Update ticket status
- Delete tickets
- Secure database operations using prepared statements
- REST-style API endpoints
- Cloud deployment with Docker

---

## 🛠️ Tech Stack

- **Backend:** PHP  
- **Database:** SQLite  
- **API Testing:** Postman  
- **Containerization:** Docker  
- **Deployment:** Render  
- **Version Control:** Git & GitHub  

---

## 📂 Project Structure

developer-support-ticketing-system/
│
├── backend/
│ ├── create_ticket.php
│ ├── get_tickets.php
│ ├── update_ticket.php
│ ├── delete_ticket.php
│ └── db.php
│
├── frontend/
│ ├── dashboard.html
│ ├── index.html
│ └── style.css
│
├── Dockerfile
├── .gitignore
└── README.md


---

## 🔌 API Endpoints

| Method | Endpoint | Description |
|------|---------|-------------|
| POST | `/create_ticket.php` | Create a new support ticket |
| GET | `/get_tickets.php` | Retrieve all tickets |
| POST | `/update_ticket.php` | Update ticket status |
| GET | `/delete_ticket.php?id={id}` | Delete a ticket |

---

## 🧪 API Testing

All endpoints were tested using **Postman** to validate:
- Request payloads
- Response formats
- Error handling
- Status codes

---

## ☁️ Deployment

The application is containerized using **Docker** and deployed on **Render**, ensuring:
- Consistent runtime environment
- Easy scalability
- Reliable cloud access

---

## 🎯 Learning Outcomes

- Hands-on experience with PHP backend development
- REST API design and testing
- SQLite database integration
- Docker-based deployment
- Real-world debugging and production readiness

---

## 👨‍💻 Author

**Venugopal Ganji**  
Full-Stack / Backend Developer  

---

## 📜 License

This project is open-source and available for learning and educational purposes.
