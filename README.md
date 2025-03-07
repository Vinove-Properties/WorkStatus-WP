## Overview
This project is a WordPress-based website that includes lead forms for capturing user inquiries and integrates with Zoho CRM to manage and automate lead processing.

## Github Repo
https://github.com/Vinove-Properties/WorkStatus-WP

## Features
- **Lead Forms**: Custom-built Signup form for user creation in ws app.
- **Zoho CRM Integration**: Automatic lead submission to Zoho CRM for efficient management.
- **Calendly Integration**: Added webhook for calendly leads into ZOHO CRM
- **ACF Bases Wordpress Theme**: Sections & fields managed with the help of Advanced Custom Field Plugin

## Technology Stack
- **CMS**: WordPress
- **Lead Forms**: Calendly forms for leads capturing.
- **Signup Forms**: Custom Signup form for the user registration through - Marketing website / blog
- **Zoho CRM Integration**: Zoho API / Zoho CRM VESRION 2.0

## Installation & Setup
1. **Install WordPress**:
   - Download and install WordPress from [WordPress.org](https://wordpress.org/).
   - Set up your database and configure `wp-config.php`.

2. Required Plugins   
   ✅ Advanced Custom Fields PRO – Custom fields for managing theme content.
   ✅ Better Search Replace – Database updates and search-replace operations.
   ✅ Classic Editor – Restores classic WordPress editor.
   ✅ Custom Permalinks – Customizes permalink structures.
   ✅ Disable XML-RPC – Blocks XML-RPC attacks.
   ✅ Duplicate Page – Enables easy duplication of pages/posts.
   ✅ Easy Table of Contents - Adds a user friendly and fully automatic way to create and display a table of contents generated from the page content.
   ✅ Limit Login Attempts Reloaded – Prevents brute-force login attacks.
   ✅ Lock User Account – Enhances security by locking inactive accounts.
   ✅ Redirection – Manages URL redirects.
   ✅ SVG Support - Upload SVG files to the Media Library and render SVG files inline for direct styling/animation of an SVG's internal elements using CSS/JS.
   ✅ WPS Hide Login – Custom login URL for security.
   ✅ Wordfence Security – Firewall & malware protection.
   ✅ WP Rocket – Performance optimization & caching.
   ✅ Yoast SEO – On-page SEO optimization.

3. **Zoho CRM Integration**:
   Integration & API details are documented in the internal Google Sheet. Ensure you follow these steps for CRM setup:
   - Generate Zoho CRM API credentials.
   - Configure authentication tokens in the integration files.
   - Map lead form fields to Zoho CRM lead fields.
   - Test API requests using Postman before deploying.
   https://docs.google.com/spreadsheets/d/1PcExtjjd9MiDgM8m8eyRpix8eIx-mHOQUQPRJgnWe-c/edit?gid=1985896880#gid=1985896880


4. **Lead Forms Setup**:
   For Leads Capturing we are using calenldy, All the leads stored in CRM.
   

5. **Calendly CRM Integration**
   Email notifications for Calendly leads are handled directly by Calendly.
   CRM integration is managed via a separate webhook:
   Webhook URL: https://www.workstatus.io/calendly-webhook-v2.php
   Script File: calendly-webhook-v2.php (Located in the root directory)

6. **Lead Storage on WS ADMIN Application**
    API for Adding Lead entry in Admin Application     
    https://sa.workstatus.io/api/v1/getDemoRequest
    POST API PARAMS
    $apiRequest = array(
        "first_name"    => NAME,
        "email"         => EMAIL,
        "contact_no"    => PHONE NUMBER,
        "company_name"  => COMPANY NAME,
        "team_size"     => TIME_SIZE,
        "demo_date"     => DEMO DATE,
        "demo_time"     => DEMO TIME,
        "time_zone"     => TIME ZONE,
        "ip_address"    => IP_ADDRESS,
        "source"        => LEAD SOURCE URL,
        "utm_campaign"  => utm_campaign,
        "utm_medium"    => utm_medium
    );

    API for Adding Lead entry in Admin Application     
    https://sa.workstatus.io/api/v1/updatedemorequest

    POST PARMS PARMS WIll BE same as above.

### Database Schema for Lead Storage
   The system maintains separate tables for legitimate leads, spam leads, and blocked emails.

   Table : calendly_events store all the calendly event id for preventing the lead duplicacy
   ```sql
   -- Contact form submissions
    CREATE TABLE `calendly_events` (
    `event_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
    `processed_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

   Table : ws_survey_data store all the Survey data
   ```sql
   -- ws_survey_data storage of Survey - data 
    CREATE TABLE `ws_survey_data` (
    `ID` bigint NOT NULL AUTO_INCREMENT,
    `survey_id` bigint NOT NULL,
    `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
    `data` longtext COLLATE utf8mb4_general_ci NOT NULL,
    `created_at` datetime NOT NULL,
    PRIMARY KEY (`ID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

   ***Visitor Tracking (ipinfo_logs)***
   Tracks visitor IP addresses and geolocation data using the IPINFO API.
   ```sql
    CREATE TABLE `ipinfo_logs` (
    `id` bigint NOT NULL AUTO_INCREMENT,
    `ip` varchar(200) NOT NULL,
    `data` longtext NOT NULL,
    `created_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

### Wordpress theme updates

Wordpress Theme Directory /staging/wp-content/themes/workstatus/
├── version-2.0         # Contains - all the theme assets
│   ├── css/
│   ├── fonts/
│   ├── footer-images/
│   ├── header-images/
│   ├── images/
│   ├── js/
│   ├── menu-images/
├── common              # Stored all the include all the common section file
├── dev-images          # All the images, which we store for the development process
├── inc                 # Include all the helper functions
├── js                  # Development related scripts, like pricing Or calculators
├── template-parts      # Default wordrpess content related files
├── page-templates      # All the custom templates

*** Updated Font Faces (CSS v2.0) ***
LexendDeca-Regular
LexendDeca-Medium
LexendDeca-Bold

Performance Optimization:
- Minify CSS/JS using WP Rocket.
- Use Lazy Loading for images & videos.
- Optimize database using WP-Optimize.