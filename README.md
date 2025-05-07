# Bluegrass Frontend Assessment – Sivuyile Parkies

---

### Time Spent

Approximately 14 hours in total.

---

### What’s Included

- A fully functional WordPress backup via **All-in-One WP Migration**.
- Custom theme with:
  - SCSS structure
  - BEM naming convention
  - ACF fields
  - Responsive design.
- Included plugin: `all-in-one-wp-migration-gdrive-extension` to support imports over 512MB if needed.

---

### Incomplete Sections / Known Issues

- **Hero Slider**: The structure is present, but the CSS `clip-path` styling challenged me, especially making it responsive. I was unable to complete this part within the time limit.
- All other sections are styled, responsive, and functional.

---

### Most Challenging Parts

- The **CSS `clip-path`** for the Hero Slider proved complex, especially adapting it across breakpoints while preserving shape and responsiveness.
- Displaying the tablet- and mobile-only footer section while hiding it on desktop was also tricky.

---

### Highlights

- Fully mobile- and tablet-responsive layout.
- Clean **BEM class naming** and organized SCSS.
- All ACF fields are functional and editable via WP admin.

---

### SCSS Setup

To compile and watch SCSS:

1. Install dependencies:  
   ```bash
   npm install
   ```

2. Compile SCSS once:  
   ```bash
   npm run build-css
   ```

3. Watch SCSS for changes:  
   ```bash
   npm run watch-css
   ```

---

### WordPress Login Details
If you'd like to log into the restored site:

Username: Bluegrass

Password: uFi(haS919D4a&&(qL6Gao!l

Email: mark@bluegrassdigital.com

### How to Import the Site

1. Install the **All-in-One WP Migration** plugin on your WordPress instance.
2. Go to **All-in-One WP Migration > Import**.
3. Import the provided `.wpress` backup file.
4. If the file is larger than 512MB, activate the included `all-in-one-wp-migration-gdrive-extension` plugin to bypass the free version’s limit.

Note: Please check for updates to the All-in-One WP Migration Google Drive Extension plugin before using it, and update it if needed to ensure full functionality.

---

Thanks for reviewing my submission!