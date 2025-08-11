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

Step 1: Setup Your Environment

Step 2: Verify Theme Basics

Step 3: Create Homepage Template (front-page.php)

Step 4: Test Homepage Template
Refresh your site homepage (http://mysite.local/)

Step 5: Blog Page Template (Listing All Posts with Pagination)
5.1 Create a template file for Blog page: home.php

Step 6: Create the Single Post Template (single.php)
Now it’s time for the Portfolio Custom Post Type (CPT) — this lets you add and manage portfolio items separately from regular posts.

Step 7: Register the Portfolio Custom Post Type
7.1 Open your theme’s functions.php file in VSCode
7.2 Add this code at the end of functions.php to register the Portfolio CPT:
7.3 Save the file.
7.4 Go to your WordPress Admin dashboard → You should now see a new menu item called Portfolio in the sidebar.

Step 8: Create Portfolio Archive Template (archive-portfolio.php)

Step 9: Create Single Portfolio Template (single-portfolio.php)

Step 10: Test Portfolio CPT
Perfect! Now let’s create the Author, Category, Tag, and Date Archive Templates. These templates help WordPress display posts filtered by author, category, tag, or date.

Step 11: Create Archive Templates
11.1 Author Archive Template (author.php)
11.2 Category Archive Template (category.php)
11.3 Tag Archive Template (tag.php)
11.4 Date Archive Template (date.php)

Step 12: Test Archive Pages
Author archive: visit an author URL, e.g.,
http://yoursite.local/author/authorname/

Step 13: Register Navigation Menus & Add to Header
13.1 Register Menus in functions.php
```
function mytheme_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'mytheme' ),
            'footer'  => __( 'Footer Menu', 'mytheme' ),
        )
    );
}
add_action( 'after_setup_theme', 'mytheme_register_menus' );
```
13.2 Add Menu to header.php
Open header.php and add this inside the <header> tag or where you want the menu to appear:
```
<?php
wp_nav_menu( array(
    'theme_location' => 'primary',
    'menu_class'     => 'primary-menu',
    'container'      => 'nav',
    'container_class'=> 'primary-navigation',
) );
?>
```
Step 14: Register Widget Areas (Sidebars)
14.1 Register Sidebar in functions.php

Step 15: Add Featured Image Support & Display Thumbnails

Step 16: Styling Your Theme

For questions or feedback, feel free to open an issue or contact me via email.

---

**Happy Coding!**

