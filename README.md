# Magento 2 Simbeez_AddressAutocomplete

## Overview
This Magento 2 extension enhances the checkout experience by providing address autocomplete functionality using the Google API. This streamlines the address entry process, reducing errors and improving conversion rates.

## Features
* **Google Places API Integration:** Leverages the power of Google's Places API for accurate and fast address suggestions.
* **Checkout Address Autocomplete:** Automatically suggests addresses as customers type, making checkout quicker and more convenient.
* **Backend Configuration:** Allows administrators to easily configure the Google Places API key directly within the Magento backend.
* **Address Field Mapping:** Provides options to map Google Places API results to Magento address fields.
* **Improved User Experience:** Reduces manual address entry, minimizing typos and frustration.
* **Enhanced Conversion Rates:** Streamlined checkout process leads to faster order completion and increased sales.

---

## Folder Structure in GitHub

Your GitHub repository should follow this structure:

```
Magento2-Simbeez-AddressAutocomplete/   <-- This is your GitHub repo
│── Simbeez/
│   ├── AddressAutocomplete/
│   │   ├── etc/
│   │   │   ├── module.xml
│   │   ├── Model/
│   │   ├── Controller/
│   │   ├── Helper/
│   │   ├── view/
│   │   ├── registration.php
│   │   ├── composer.json
│   │   ├── README.md
```

After cloning the repository, move the contents inside `app/code/` in your Magento 2 installation:

```bash
cd /path/to/magento2/app/code/
git clone https://github.com/rathodsunny005/Magento2-Simbeez-AddressAutocomplete.git Simbeez/AddressAutocomplete
```

This will result in the following Magento 2 directory structure:

```
app/
├── code/
│   ├── Simbeez/
│   │   ├── AddressAutocomplete/
│   │   │   ├── etc/
│   │   │   ├── Model/
│   │   │   ├── Controller/
│   │   │   ├── Helper/
│   │   │   ├── view/
│   │   │   ├── registration.php
│   │   │   ├── composer.json
│   │   │   ├── README.md
```

---

## Installation

### 1. Manual Installation (Recommended for Development)

1. Navigate to your Magento root directory:

   ```bash
   cd /path/to/magento2/
   ```

2. Copy the module files to `app/code/Simbeez/AddressAutocomplete/`.

3. Run the following Magento CLI commands:

   ```bash
   php bin/magento module:enable Simbeez_AddressAutocomplete
   php bin/magento setup:upgrade
   php bin/magento cache:flush
   php bin/magento setup:di:compile
   php bin/magento setup:static-content:deploy -f
   ```
---

## Configuration
After installation, configure the extension in Magento Admin:

1. Navigate to **Stores > Configuration > Simbeez > Address Autocomplete**.
2. Set the required options as per your needs.
3. Save the configuration and clear the cache:
   ```bash
   php bin/magento cache:flush
   ```

---

## Uninstallation

If you want to remove the module, run:

```bash
php bin/magento module:disable Simbeez_AddressAutocomplete
php bin/magento setup:upgrade
php bin/magento cache:flush
rm -rf app/code/Simbeez/AddressAutocomplete/
```

---

## Changelog
### Version 1.0.0
- Initial release

---

## Support
For any issues, please open a GitHub issue or contact [rathodsunny005@gmail.com].

---

## License
This module is licensed under [Public copyright].

