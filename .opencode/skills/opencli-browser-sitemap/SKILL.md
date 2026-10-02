---
name: opencli-browser-sitemap
description: Sitemap extraction and analysis via OpenCLI browser
---

## Sitemap Extraction via OpenCLI Browser

### Sitemap XML Extraction
```bash
# Open sitemap directly
opencli browser open https://mahsoul.framer.website/sitemap.xml

# Extract all URLs
opencli browser extract "loc" --text

# Extract with metadata
opencli browser extract "url" --all --format json
```

### HTML Sitemap Extraction
```bash
# For HTML sitemaps
opencli browser open https://mahsoul.framer.website/sitemap
opencli browser extract "a[href]" --attribute href --all
```

### Framer Template Sitemap (52 URLs)
```bash
opencli browser open https://mahsoul.framer.website/sitemap.xml
opencli browser extract "url > loc" --text | sort -u
```

### Expected URLs from Framer Template
```
https://easier-aim-585530.framer.app/
https://easier-aim-585530.framer.app/about
https://easier-aim-585530.framer.app/contact
https://easier-aim-585530.framer.app/faq
https://easier-aim-585530.framer.app/shop
https://easier-aim-585530.framer.app/shop/*
https://easier-aim-585530.framer.app/service
https://easier-aim-585530.framer.app/service/*
https://easier-aim-585530.framer.app/team
https://easier-aim-585530.framer.app/team/*
https://easier-aim-585530.framer.app/projects
https://easier-aim-585530.framer.app/projects/*
https://easier-aim-585530.framer.app/blog
https://easier-aim-585530.framer.app/blog/*
https://easier-aim-585530.framer.app/gallery
https://easier-aim-585530.framer.app/testimonial
https://easier-aim-585530.framer.app/404
https://easier-aim-585530.framer.app/terms-condition
https://easier-aim-585530.framer.app/privacy-policy
```

### Framer Template Page Types
| Type | Count | Example URLs |
|------|-------|--------------|
| Home | 2 | `/`, `/home-2` |
| Shop Listing | 1 | `/shop` |
| Product Detail | 10 | `/shop/fresh-red-tomato`, etc. |
| Services | 1 | `/service` |
| Service Detail | 6 | `/service/agricultural-consulting`, etc. |
| Team | 1 | `/team` |
| Team Member | 8 | `/team/james-albert`, etc. |
| Projects | 1 | `/projects` |
| Project Detail | 8 | `/projects/agriculture-farming`, etc. |
| Blog | 1 | `/blog` |
| Blog Post | 6 | `/blog/the-benefits-of-eating-local...` |
| Gallery | 1 | `/gallery` |
| Testimonial | 1 | `/testimonial` |
| Contact | 1 | `/contact` |
| FAQ | 1 | `/faq` |
| About | 1 | `/about` |
| Terms | 1 | `/terms-condition` |
| Privacy | 1 | `/privacy-policy` |
| 404 | 1 | `/404` |

### Automated Extraction Script
```bash
#!/bin/bash
# extract-framer-sitemap.sh

opencli browser open https://mahsoul.framer.website/sitemap.xml
sleep 2
opencli browser extract "loc" --text > framer-urls.txt

# Count URLs
wc -l framer-urls.txt

# Categorize
grep "/shop/" framer-urls.txt > shop-urls.txt
grep "/service/" framer-urls.txt > service-urls.txt
grep "/blog/" framer-urls.txt > blog-urls.txt
grep "/team/" framer-urls.txt > team-urls.txt
grep "/projects/" framer-urls.txt > project-urls.txt
```