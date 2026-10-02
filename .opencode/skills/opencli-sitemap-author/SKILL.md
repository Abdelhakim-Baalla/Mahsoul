---
name: opencli-sitemap-author
description: Create and manage sitemaps for Mahsoul and Framer templates
---

## Sitemap Authoring with OpenCLI

### Generate Mahsoul Sitemap
```bash
# Generate from routes
php artisan sitemap:generate

# Or via OpenCLI (if custom adapter)
opencli browser evaluate "
  // Generate sitemap from Laravel routes
  const routes = [
    { url: '/', changefreq: 'daily', priority: 1.0 },
    { url: '/products', changefreq: 'daily', priority: 0.9 },
    { url: '/formation', changefreq: 'weekly', priority: 0.8 },
    { url: '/experts', changefreq: 'weekly', priority: 0.8 },
    { url: '/ferme', changefreq: 'weekly', priority: 0.7 },
    { url: '/about', changefreq: 'monthly', priority: 0.6 },
    { url: '/contact', changefreq: 'monthly', priority: 0.6 },
    { url: '/faq', changefreq: 'monthly', priority: 0.5 },
    { url: '/cart', changefreq: 'daily', priority: 0.5 },
    { url: '/checkout', changefreq: 'daily', priority: 0.5 },
    // Dynamic routes from database
  ];
  console.log(routes.map(r => \`<url><loc>https://mahsoul.ma\${r.url}</loc><changefreq>\${r.changefreq}</changefreq><priority>\${r.priority}</priority></url>\`).join('\\n'));
"
```

### Framer Template Sitemap Authoring
```bash
# Extract Framer sitemap structure
opencli browser open https://mahsoul.framer.website/sitemap.xml
opencli browser extract "url" --all --format json > framer-sitemap.json

# Analyze structure
cat framer-sitemap.json | jq '.[] | .loc' | sort
```

### Generate Mahsoul Sitemap.xml
```bash
# Laravel artisan command
php artisan sitemap:generate --output=public/sitemap.xml

# Or custom
php artisan sitemap:generate \
  --include-products \
  --include-articles \
  --include-experts \
  --include-static-pages \
  --output=public/sitemap.xml
```

### Validate Sitemap
```bash
# Validate XML
xmllint --noout public/sitemap.xml

# Check URLs
opencli browser open https://mahsoul.ma/sitemap.xml
opencli browser extract "loc" --text | wc -l
```

### Framer Template Sitemap Mapping
```bash
# Map Framer template pages to Mahsoul routes
# Framer → Mahsoul mapping:
/                           → /
/about                      → /about
/contact                    → /contact
/faq                        → /faq
/shop                       → /products
/shop/*                     → /products/show?id=*
/service                    → /experts
/service/*                  → /experts/show?expert_id=*
/team                       → /experts (or /about#team)
/team/*                     → /experts/show?expert_id=*
/projects                   → /admin/projects
/projects/*                 → /admin/projects/*
/blog                       → /formation
/blog/*                     → /formation/show?id=*
/gallery                    → /gallery (if exists)
/testimonial                → /testimonials (if exists)
/contact                    → /contact
/faq                        → /faq
/about                      → /about
/terms-condition            → /terms
/privacy-policy             → /privacy
/404                        → /404
```

### Sitemap Validation
```bash
# Validate Mahsoul sitemap
opencli browser open https://mahsoul.ma/sitemap.xml
opencli browser extract "loc" --text | wc -l

# Validate Framer template sitemap
opencli browser open https://mahsoul.framer.website/sitemap.xml
opencli browser extract "loc" --text | wc -l

# Compare
diff <(opencli browser open https://mahsoul.ma/sitemap.xml && opencli browser extract "loc" --text | sort) \
     <(opencli browser open https://mahsoul.framer.website/sitemap.xml && opencli browser extract "loc" --text | sort)
```

### Robots.txt
```bash
# Generate robots.txt
cat > public/robots.txt << 'EOF'
User-agent: *
Allow: /

Sitemap: https://mahsoul.ma/sitemap.xml

Disallow: /admin/
Disallow: /ferme/
Disallow: /vet/
Disallow: /client/
Disallow: /checkout/
Disallow: /cart/
Disallow: /api/
EOF

# Verify
opencli browser open https://mahsoul.ma/robots.txt
```