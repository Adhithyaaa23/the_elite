
# 🍲 The Elite 2026: Food Redistribution Platform

**Bridging the gap between surplus food and those in need.**

## 📌 Project Overview

**The Elite** is a web-based platform designed to minimize food waste by connecting hotels and restaurants (Donors) with local NGOs. The platform streamlines the collection process through real-time location tracking and an efficient data management system.

## ✨ Key Features

* **Donor Portal (Hotels):** Easy-to-use form for hotels to list surplus food, specifying quantity, food type, and expiry duration.
* **NGO Dashboard:** A centralized feed for NGOs to view available food donations in their area.
* **Geolocation Integration:** Uses JavaScript to capture donor locations, ensuring NGOs can find the most efficient route for pickup.
* **Automated Matching:** Bridges the data from the PHP/MySQL backend to provide real-time updates on food availability.

## 🛠️ Tech Stack

* **Frontend:** HTML5, CSS3, JavaScript (ES6+)
* **Backend:** PHP (Server-side logic & API handling)
* **Database:** MySQL (Relational data storage)
* **Version Control:** Git & GitHub

---

## 🏗️ System Workflow

The platform operates on a three-tier architecture to ensure data integrity and speed:

1. **Donation:** Hotel logs in and submits a "Donation Request" with their current coordinates.
2. **Storage:** PHP processes the request and stores it in the MySQL database.
3. **Redistribution:** The JS-powered interface filters these requests for NGOs based on proximity.

---

## 🚀 Installation & Setup

To run this project locally:

1. **Clone the repository:**
```bash
git clone https://github.com/Adhithyaaa23/the_elite.git

```


2. **Setup the Database:**
* Open PHPMyAdmin (or your preferred SQL client).
* Create a database named `the_elite`.
* Import the provided `.sql` file (found in the root or database folder).


3. **Configure Connection:**
* Edit the connection string in your PHP config file (e.g., `db_connect.php`) with your local credentials.


4. **Run:**
* Place the folder in your local server directory (`htdocs` for XAMPP).
* Navigate to `localhost/the_elite` in your browser.



---

## 🤝 Contributing

This was developed as part of a Hackathon. If you'd like to improve the location algorithm or UI, feel free to fork the repo and submit a pull request!

---

**Developed with ❤️ by the Adhithyaaa23 Team.**

Would you like me to help you write a specific **`database.sql`** structure to include in your repo so others can actually run your code?
