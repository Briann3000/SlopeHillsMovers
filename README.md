# Slope Hill Movers Limited (Website)

Official corporate website for **Slope Hills Movers Limited** — specializing in heavy earthmoving equipment, lifting machinery for construction, transport support services, and specialized machinery rentals across Kenya.


---

## 📌 Overview

The **Slope Hill Movers** website serves as the digital front and client inquiry portal for heavy machinery logistics and construction equipment operations. It provides clear visibility into fleet inventory, equipment specifications, company certifications, and direct booking/quotation inquiry channels.

### Key Capabilities & Services Highlighted
- **Heavy Lifting & Rigging:** Mobile cranes, Hiab trucks, and telehandlers.
- **Earth Moving & Excavation:** Excavators, bulldozers, motor graders, rollers, and wheel loaders.
- **Equipment Rental & Logistics:** Low-loaders, cargo trailers, and transport support.
- **Consultancy & In-Field Operations:** Technical planning and site logistics support.

---

## 🚀 Features

- **Modern Responsive Design:** Mobile-first layout optimized across mobile, tablet, and desktop viewports.
- **Interactive Fleet & Work Gallery:** Interactive slideshow/carousel (`myscripts.js`) showcasing in-field operations and machine types.
- **Online Inquiry System:** Interactive contact/quote request form handling customer requirements with input sanitization and email notifications.
- **SEO & Social Optimization:** Pre-configured OpenGraph metadata, descriptive tags, and canonical URLs.
- **Fast & Lightweight:** Pure HTML/CSS/Vanilla JavaScript with minimal external overhead.

---

## 🛠️ Tech Stack

- **Frontend:**
  - Semantic HTML5
  - CSS3 (Custom styles + CodeStitch responsive components)
  - JavaScript (Vanilla JS for carousels and interactive DOM manipulation)
- **Backend / Form Processing:**
  - PHP (PDO MySQL integration, server-side validation, transactional email via `mail()`)
- **Database:**
  - MySQL (`contact_form` schema storing customer requests)

---

## 📂 Project Structure

```text
SlopeHillMovers/
├── img/                       # Fleet photos, machinery assets, logos, and icons
├── about.html                 # Company background, vision, and core values
├── about.css                  # Specific styling for About page
├── contact.html               # Contact information and interactive inquiry form
├── gallery.html               # Visual showcase of fleet and active projects
├── index.html                 # Landing page with hero banner, service overview & CTA
├── services.html              # Detailed breakdown of equipment and services
├── services.css               # Services section layouts
├── style.css                  # Global styles, layout, and component theming
├── myscripts.js               # Slideshow/gallery interactions
├── form.php                   # Contact form backend (sanitization, DB storage, email notification)
├── thank_you.html             # Post-form submission confirmation page
└── README.md                  # Project documentation
```

---

## ⚙️ Getting Started

### Prerequisites

To test or develop locally:
- A local web server with PHP and MySQL support (e.g., [XAMPP](https://www.apachefriends.org/), [WampServer](https://www.wampserver.com/), or [Laragon](https://laragon.org/)).
- Or PHP CLI installed locally:
  ```bash
  php -v
  ```

### Local Setup

1. **Clone or Download the Repository:**
   ```bash
   git clone https://github.com/your-username/SlopeHillMovers.git
   cd SlopeHillMovers
   ```

2. **Configure Database (Optional, for contact form testing):**
   - Create a MySQL database (e.g., `slopehil_contactform`).
   - Create the inquiry table:
     ```sql
     CREATE TABLE contact_form (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL,
         email VARCHAR(255) NOT NULL,
         phone VARCHAR(50),
         find_us VARCHAR(255),
         message TEXT,
         submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```
   - Update database credentials in `form.php` or move them to an environment configuration file.

3. **Run via PHP Built-in Server:**
   ```bash
   php -S localhost:8000
   ```
   Open your browser and navigate to `http://localhost:8000`.

---

## 🔒 Security Best Practices for Production

> [!WARNING]
> Ensure all sensitive production database credentials and SMTP details are stored outside public web directories (using environment variables or an untracked config file) rather than hardcoded in public repository commits.

Recommended `.gitignore` items:
```gitignore
# Configuration and secrets
wp-config.php
config.php
.env

# Temporary and office lock files
~$*
*.tmp

# Server quota and cache
.ftpquota
.vscode/
```

---

## 📄 License

&copy; Slope Hills Movers Limited. All rights reserved. Content, branding, and machinery imagery are proprietary to Slope Hills Movers Limited.
# SlopeHillsMovers
