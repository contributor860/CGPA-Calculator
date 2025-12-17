=== CGPA Calculator ===
Contributors: internetresearcher
Tags: cgpa, calculator, education, students, sgpa
Requires at least: 5.0
Tested up to: 6.8
Stable tag: 1.0.0
Requires PHP: 7.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Simple, secure CGPA calculator for students to calculate academic performance instantly.

== Description ==

CGPA Calculator is a lightweight WordPress plugin that helps students calculate their Cumulative Grade Point Average (CGPA) instantly using AJAX, without page reloads. Simply enter the sum of your SGPA (Semester Grade Point Average) and the number of semesters, and get your CGPA securely and instantly.

= Features =

* Simple and intuitive interface
* AJAX-powered real-time calculation
* Secure calculation with WordPress nonce verification
* Input validation to prevent errors
* Clean and responsive design
* Easy-to-use shortcode `[cgpa_calculator]`
* No database queries – lightweight and fast
* Privacy-focused – no data is stored

= How It Works =

CGPA is calculated using the formula:

**CGPA = Sum of SGPA / Number of Semesters**

Example:
* SGPAs: 8.5, 8.0, 9.0, 8.5
* Sum of SGPA = 34.0
* Semesters = 4
* CGPA = 34.0 / 4 = 8.50

= Usage =

Simply add the shortcode `[cgpa_calculator]` to any page or post.

= Privacy =

No data is collected, stored, or transmitted. All calculations are real-time via AJAX.

== Installation ==

= Automatic Installation =
1. Log in to WordPress admin
2. Plugins > Add New
3. Search "CGPA Calculator"
4. Install & Activate

= Manual Installation =
1. Download plugin ZIP
2. Admin panel: Plugins > Add New > Upload Plugin
3. Select ZIP file, Install & Activate

== Frequently Asked Questions ==

= How do I use this plugin? =
Add `[cgpa_calculator]` shortcode to a page/post.

= What is CGPA? =
Cumulative Grade Point Average of all semesters.

= What is SGPA? =
Semester Grade Point Average for a single semester.

= Why is the semester limit 8? =
Most undergraduate programs have 8 semesters (4 years).

= Does it store my data? =
No. Calculations are live with AJAX; nothing is saved.

= Can I use this calculator multiple times? =
Yes. Each calculation is independent.

= Can I customize styling? =
Yes, edit `styles.css` to match your theme.

== Screenshots ==

1. CGPA Calculator form
2. Calculation result display

== Changelog ==

= 1.0.0 =
* Initial release with AJAX-powered CGPA calculation
* Simple and intuitive interface
* Secure calculation with nonce verification
* Input validation
* Responsive design

== Upgrade Notice ==

= 1.0.0 =
Initial release with AJAX-powered CGPA calculation.
