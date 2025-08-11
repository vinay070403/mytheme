# MyTheme - WordPress Basic Theme Development Assignment

[![License: GPL v2](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html)

---

## Overview

**MyTheme** is a custom WordPress theme developed from scratch as part of a **Basic Theme Development Assignment**. This project tests foundational skills in WordPress theme development, including template creation, custom post types, and theme features.

The theme is based on the popular starter theme [_Underscores_](https://underscores.me/) and tailored to meet specific assignment requirements.

---

## Assignment Requirements

You are required to develop a WordPress theme with the following pages and templates:

### Pages:
- **Homepage** — Custom homepage layout
- **Blog Page** — List of all blog posts with pagination
- **Single Post Page** — Display single blog posts
- **Portfolio Page** — Displays portfolio custom post type entries

### Templates:
- Homepage (`home.php`)
- Blog listing (`archive.php` or `home.php`)
- Single post (`single.php`)
- Portfolio custom post type archive (`archive-portfolio.php`)
- Author archive (`author.php`)
- Category archive (`category.php`)
- Tag archive (`tag.php`)
- Date/Month/Year archive (`date.php` or archive templates)

---

## Features Implemented

- Fully responsive and clean design
- Custom post type **Portfolio** registered and integrated
- WordPress Loop and pagination on blog pages
- Featured image support for posts and portfolio items
- Navigation menus registered and displayed
- Sidebar widget area implemented
- Author, category, tag, and date archive templates
- Proper enqueuing of styles and scripts following WordPress best practices
- Translation-ready text domain setup

---

## Getting Started

### Prerequisites

- Local WordPress environment (e.g., [LocalWP](https://localwp.com/))
- PHP 7.0 or higher
- WordPress 5.4 or higher

### Installation

1. Clone or download this repository.
2. Copy the `mytheme` folder to your WordPress installation's `wp-content/themes/` directory.
3. Activate the theme from **Appearance > Themes** in your WordPress dashboard.
4. Import or create posts and portfolio items.
5. Assign menus under **Appearance > Menus**.
6. Customize widgets under **Appearance > Widgets** if desired.

---

## Folder Structure
```
mytheme/
├── assets/ # Images, fonts, CSS/JS assets
├── inc/ # PHP includes and functions
├── template-parts/ # Template partials (header, footer, sidebar)
├── archive-portfolio.php
├── archive.php
├── author.php
├── category.php
├── footer.php
├── functions.php
├── header.php
├── home.php
├── index.php
├── page.php
├── README.md
├── screenshot.png
├── single.php
├── style.css
├── tag.php
└── date.php
```

---

## Custom Post Types

- **Portfolio**: Custom post type registered to showcase portfolio items.
- Supports featured images and custom templates.

---

## Screenshots

![Homepage](screenshots/homepage.png)
![Blog Page](screenshots/blog-page.png)
![Single Post](screenshots/single-post.png)
![Portfolio](screenshots/portfolio.png)

---

## License

This project is licensed under the **GNU General Public License v2 or later (GPL v2+)**. See the [LICENSE](LICENSE) file for details.

---

## Author

Vinay Chavada  
Website: [https://vinaychavada.com](https://vinaychavada.com)  
Email: vinay@example.com

---

## Acknowledgments

- [_Underscores Starter Theme_](https://underscores.me/) for the great foundation  
- WordPress Codex and Developer Handbook for documentation  
- Normalize.css by Nicolas Gallagher and Jonathan Neal

---

## Contact

For questions or feedback, feel free to open an issue or contact me via email.

---

**Happy Coding!**

